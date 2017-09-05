<?php
/**
 * Part of allstars project.
 *
 * @copyright  Copyright (C) 2017 ${ORGANIZATION}.
 * @license    Please see LICENSE file.
 */

namespace Vaseman\Plugin;

use Asika\Sitemap\ChangeFreq;
use Asika\Sitemap\Sitemap;
use Windwalker\Data\DataSet;
use Windwalker\Event\Event;
use Windwalker\Filesystem\File;
use Windwalker\Filesystem\Folder;
use Windwalker\Ioc;
use Windwalker\Structure\Structure;

/**
 * The ConfigPlugin class.
 *
 * @since  __DEPLOY_VERSION__
 */
class ConfigPlugin extends AbstractPlugin implements DataProviderInterface
{
	/**
	 * onContentPrepareData
	 *
	 * @param   Event $event
	 *
	 * @return  void
	 */
	public function loadProvider(Event $event)
	{
		$event['data']->config = new Structure($event['data']->config);

		if ($event['data']->path[0] === 'index.blade.php' || $event['data']->path[0] === 'cart.blade.php')
		{
			$event['data']->works = (new Structure)->loadFile(__DIR__ . '/works.yml', 'yaml')->toArray();
			$event['data']->works = new DataSet($event['data']->works);
		}
	}

	/**
	 * onAfterWriteFiles
	 *
	 * @return  void
	 */
	public function onAfterWriteFiles()
	{
		include __DIR__ . '/../../vendor/autoload.php';

		$base = realpath(__DIR__ . '/../../..');

		$items = Folder::files($base, true);

		$sitemap = new Sitemap;

		$root = Ioc::getConfig()->get('site.root');

		$sitemap->addItem($root, 1.0);

		foreach ($items as $item)
		{
			if (File::getExtension($item) !== 'html')
			{
				continue;
			}

			$loc = str_replace('\\', '/', substr($item, strlen($base) + 1));

			if (strpos($loc, '.') === 0)
			{
				continue;
			}

			$sitemap->addItem($root . '/' . $loc, 0.8, ChangeFreq::WEEKLY, new \DateTime);
		}

		$xml = $sitemap->toString();

		file_put_contents($base . '/sitemap.xml', $xml);
	}
}
