<?php
/**
 * Part of allstars project.
 *
 * @copyright  Copyright (C) 2017 ${ORGANIZATION}.
 * @license    Please see LICENSE file.
 */

namespace Vaseman\Plugin;

use Windwalker\Data\DataSet;
use Windwalker\Event\Event;
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

		if ($event['data']->path[0] === 'index.blade.php')
		{
			$event['data']->works = (new Structure)->loadFile(__DIR__ . '/works.yml', 'yaml')->toArray();
			$event['data']->works = new DataSet($event['data']->works);
		}
	}
}
