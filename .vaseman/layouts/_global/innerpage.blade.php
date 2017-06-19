@extends('_global.html')

@section('body')
    <section id="page-head-bg" style="background-image: url(https://i.imgur.com/9SZuw0c.jpg); background-position: 50% -110px;">
        <div class="container">
            <h1>{{ $config['title'] }}</h1>
        </div>
    </section><!--page-head bg end-->

    <div class="container xs-mt-75">

        <section id="main-body">

            @section('content')
                {!! $content !!}
            @show

        </section>
    </div>
@stop
