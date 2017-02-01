@extends('_global.innerpage')

@section('content')
    <div class="row">

        <div class="col-md-9">
            <article class="blog-item-sec">
                {!! $content !!}
            </article>
        </div>

        <div class="col-md-3">
            <div class="sidebar-box">
                <h4>方案類別</h4>
                <ul class="list-unstyled cat-list">
                    <li class="{{ $helper->page->isActive($path, 'plans.a.blade') }}"><a href="{{ $uri['base'] }}plans/a.html">A 微型企業啟動方案</a></li>
                    <li class="{{ $helper->page->isActive($path, 'plans.b.blade') }}"><a href="{{ $uri['base'] }}plans/b.html">B 中小企業形象方案</a></li>
                    <li class="{{ $helper->page->isActive($path, 'plans.c.blade') }}"><a href="{{ $uri['base'] }}plans/c.html">C 多功能國際化方案</a></li>
                    <li class="{{ $helper->page->isActive($path, 'plans.d.blade') }}"><a href="{{ $uri['base'] }}plans/d.html">D 旗艦級客製化方案</a></li>
                    <li class="{{ $helper->page->isActive($path, 'plans.all.blade') }}"><a href="{{ $uri['base'] }}plans/all.html">方案比較與附加功能</a></li>
                </ul>
            </div>
        </div>

    </div>
@stop
