<!--our work section start here-->
<section id="work" class="padding-80">

    <div class="work-section-1">
        <div class="container">
            <div class="section-heading text-center">
                <h4 class="small section-title"><span>Latest portfolio</span></h4>
                <h2 class="large section-title">成功案例</h2>
            </div><!--section heading-->
        </div>
        <div class="container">
            <ul class="filter list-inline">
                <li><a class="active" href="#" data-filter="*">Show All</a></li>
                {{--<li><a href="#" data-filter=".photography">Photography</a></li>--}}
                {{--<li><a href="#" data-filter=".illustration">illustration</a></li>--}}
                {{--<li><a href="#" data-filter=".branding">branding</a></li>--}}
                <li><a href="#" data-filter=".web-design">網頁設計</a></li>
                <li><a href="#" data-filter=".development">系統開發</a></li>
                <li><a href="#" data-filter=".app">App</a></li>
            </ul>
            <div class="row">
                <div class="portfolio-box iso-call work-col-3">
                    @foreach ($works as $work)
                        <div class="project-post {{ $work->tags }}">
                            <a href="{{ $work->link }}">
                                <div class="image-wrapper">
                                    <img src="{{ $work->img }}" class="img-responsive" alt="{{ $work->title }}">
                                    <div class="image-overlay">
                                        <p>
                                            View Detail
                                        </p>
                                    </div><!--.image-overlay-->
                                </div><!--.image-wrapper-->
                            </a>
                            <div class="work-sesc">
                                <p>
                                    {{ $work->title }}
                                </p>
                            </div><!--.work-desc-->
                        </div><!--project post-->
                    @endforeach

                    {{--<div class="project-post web-design">--}}
                        {{--<a href="http://demo.the-allstars.com/activity/">--}}
                            {{--<div class="image-wrapper">--}}
                                {{--<img src="http://i.imgur.com/yMbSt3S.jpg" class="img-responsive" alt="work-1">--}}
                                {{--<div class="image-overlay">--}}
                                    {{--<p>--}}
                                        {{--View Detail--}}
                                    {{--</p>--}}
                                {{--</div><!--.image-overlay-->--}}
                            {{--</div><!--.image-wrapper-->--}}
                        {{--</a>--}}
                        {{--<div class="work-sesc">--}}
                            {{--<p>--}}
                                {{--喵X旺旺大集合 - 寵物展--}}
                            {{--</p>--}}
                        {{--</div><!--.work-desc-->--}}
                    {{--</div><!--project post-->--}}
                    {{--<div class="project-post web-design">--}}
                        {{--<a href="http://demo.the-allstars.com/school/">--}}
                            {{--<div class="image-wrapper">--}}
                                {{--<img src="http://i.imgur.com/Adb1UF1.jpg" class="img-responsive" alt="work-1">--}}
                                {{--<div class="image-overlay">--}}
                                    {{--<p>--}}
                                        {{--View Detail--}}
                                    {{--</p>--}}
                                {{--</div><!--.image-overlay-->--}}
                            {{--</div><!--.image-wrapper-->--}}
                        {{--</a>--}}
                        {{--<div class="work-sesc">--}}
                            {{--<p>--}}
                                {{--星辰大學總務處--}}
                            {{--</p>--}}
                        {{--</div><!--.work-desc-->--}}
                    {{--</div><!--project post-->--}}

                    {{--<div class="project-post web-design development">--}}
                        {{--<a href="javascript:void(0);">--}}
                            {{--<div class="image-wrapper">--}}
                                {{--<img src="http://i.imgur.com/BApK84w.jpg" class="img-responsive" alt="work-1">--}}
                                {{--<div class="image-overlay">--}}
                                    {{--<p>--}}
                                        {{--View Detail--}}
                                    {{--</p>--}}
                                {{--</div><!--.image-overlay-->--}}
                            {{--</div><!--.image-wrapper-->--}}
                        {{--</a>--}}
                        {{--<div class="work-sesc">--}}
                            {{--<p>--}}
                                {{--教育管理平台開發--}}
                            {{--</p>--}}
                        {{--</div><!--.work-desc-->--}}
                    {{--</div><!--project post-->--}}
                    {{--<div class="project-post app development">--}}
                        {{--<a href="javascript:void(0);">--}}
                            {{--<div class="image-wrapper">--}}
                                {{--<img src="http://i.imgur.com/KSBemAJ.jpg" class="img-responsive" alt="work-1">--}}
                                {{--<div class="image-overlay">--}}
                                    {{--<p>--}}
                                        {{--View Detail--}}
                                    {{--</p>--}}
                                {{--</div><!--.image-overlay-->--}}
                            {{--</div><!--.image-wrapper-->--}}
                        {{--</a>--}}
                        {{--<div class="work-sesc">--}}
                            {{--<p>--}}
                                {{--教育 App 設計開發--}}
                            {{--</p>--}}
                        {{--</div><!--.work-desc-->--}}
                    {{--</div><!--project post-->--}}

                    {{--<div class="project-post web-design">--}}
                        {{--<a href="http://winsoundstudio.com/">--}}
                            {{--<div class="image-wrapper">--}}
                                {{--<img src="http://i.imgur.com/lxbZUJp.jpg" class="img-responsive" alt="work-1">--}}
                                {{--<div class="image-overlay">--}}
                                    {{--<p>--}}
                                        {{--View Detail--}}
                                    {{--</p>--}}
                                {{--</div><!--.image-overlay-->--}}
                            {{--</div><!--.image-wrapper-->--}}
                        {{--</a>--}}
                        {{--<div class="work-sesc">--}}
                            {{--<p>--}}
                                {{--WinsoundStudio--}}
                            {{--</p>--}}
                        {{--</div><!--.work-desc-->--}}
                    {{--</div><!--project post-->--}}


                    {{--<div class="project-post   web-design">--}}
                        {{--<a href="javascript:void(0);">--}}
                            {{--<div class="image-wrapper">--}}
                                {{--<img src="http://i.imgur.com/jxdPOCs.jpg" class="img-responsive" alt="work-1">--}}
                                {{--<div class="image-overlay">--}}
                                    {{--<p>--}}
                                        {{--View Detail--}}
                                    {{--</p>--}}
                                {{--</div><!--.image-overlay-->--}}
                            {{--</div><!--.image-wrapper-->--}}
                        {{--</a>--}}
                        {{--<div class="work-sesc">--}}
                            {{--<p>--}}
                                {{--師大數位影音學程--}}
                            {{--</p>--}}
                        {{--</div><!--.work-desc-->--}}
                    {{--</div><!--project post-->--}}

                    {{--<div class="project-post branding">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<div class="image-wrapper">--}}
                                {{--<img src="http://i.imgur.com/0VkrwSz.jpg" class="img-responsive" alt="work-1">--}}
                                {{--<div class="image-overlay">--}}
                                    {{--<p>--}}
                                        {{--View Detail--}}
                                    {{--</p>--}}
                                {{--</div><!--.image-overlay-->--}}
                            {{--</div><!--.image-wrapper-->--}}
                        {{--</a>--}}
                        {{--<div class="work-sesc">--}}
                            {{--<p>--}}
                                {{--樂活動物協會--}}
                            {{--</p>--}}
                        {{--</div><!--.work-desc-->--}}
                    {{--</div><!--project post-->--}}
                </div>
            </div>
        </div><!--container-->


    </div><!--work section 1-->
    {{--<!--testimonials-->--}}
    {{--<div class="testi parallax " data-stellar-background-ratio="0.5">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-8 col-md-offset-2 text-center">--}}
                    {{--<div id="testi-carousel" class="owl-carousel">--}}
                        {{--<div>--}}
                            {{--<img src="img/t-1.jpg" alt="">--}}
                            {{--<h4>--}}
                                {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia.--}}
                            {{--</h4>--}}
                            {{--<p>Kris watson</p>--}}
                        {{--</div><!--testimonials item like paragraph-->--}}
                        {{--<div>--}}
                            {{--<img src="img/t-2.jpg" alt="">--}}
                            {{--<h4>--}}
                                {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia.--}}
                            {{--</h4>--}}
                            {{--<p>Daniel faulkner</p>--}}
                        {{--</div><!--testimonials item like paragraph-->--}}
                        {{--<div>--}}
                            {{--<img src="img/t-3.jpg" alt="">--}}
                            {{--<h4>--}}
                                {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia.--}}
                            {{--</h4>--}}
                            {{--<p> Steve Smith</p>--}}
                        {{--</div><!--testimonials item like paragraph-->--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!--testimonials-->


    {{--<div class="work-section-2">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-sm-12 text-center margin-btm-40">--}}
                    {{--<div class="section-heading text-center">--}}
                        {{--<h4 class="small section-title"><span>Super creative heroes</span></h4>--}}
                        {{--<h2 class="large section-title">Our team</h2>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div><!--.row-->--}}
            {{--<div class="row">--}}
                {{--<div class="col-sm-4">--}}
                    {{--<div class="person">--}}
                        {{--<img src="img/team-1.jpg" class="img-responsive" alt="">--}}
                        {{--<div class="person-desc">--}}
                            {{--<h4>Daniel Smith</h4>--}}
                            {{--<em>Creative Designer</em>--}}
                            {{--<p>--}}
                                {{--Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div><!--team-col-->--}}
                {{--<div class="col-sm-4">--}}
                    {{--<div class="person">--}}
                        {{--<img src="img/team-2.jpg" class="img-responsive" alt="">--}}
                        {{--<div class="person-desc">--}}
                            {{--<h4>maria Smith</h4>--}}
                            {{--<em>Team manager</em>--}}
                            {{--<p>--}}
                                {{--Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div><!--team-col-->--}}
                {{--<div class="col-sm-4">--}}
                    {{--<div class="person">--}}
                        {{--<img src="img/team-3.jpg" class="img-responsive" alt="">--}}
                        {{--<div class="person-desc">--}}
                            {{--<h4>Daniel Smith</h4>--}}
                            {{--<em>Creative Designer</em>--}}
                            {{--<p>--}}
                                {{--Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div><!--team-col-->--}}
            {{--</div>--}}
        {{--</div><!--.container-->--}}
    {{--</div><!--team section end-->--}}


    <!--fun facts-->
    {{--<div class=" fun-facts parallax" id="numbers" data-stellar-background-ratio="0.5">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-3 margin-btm-20">--}}
                    {{--<div class="fact-inner">--}}
                        {{--<h2 class="counter">34565</h2>--}}
                        {{--<h4>Projects Complete</h4>--}}
                    {{--</div>--}}
                {{--</div><!--fun col-->--}}
                {{--<div class="col-md-3 margin-btm-20">--}}
                    {{--<div class="fact-inner">--}}
                        {{--<h2 class="counter">1599</h2>--}}
                        {{--<h4>Happy Customers</h4>--}}
                    {{--</div>--}}
                {{--</div><!--fun col-->--}}
                {{--<div class="col-md-3 margin-btm-20">--}}
                    {{--<div class="fact-inner">--}}
                        {{--<h2 class="counter">99999</h2>--}}
                        {{--<h4>Songs Listen</h4>--}}
                    {{--</div>--}}
                {{--</div><!--fun col-->--}}
                {{--<div class="col-md-3 margin-btm-20">--}}
                    {{--<div class="fact-inner">--}}
                        {{--<h2 class="counter">1255</h2>--}}
                        {{--<h4>Cups of coffee</h4>--}}
                    {{--</div>--}}
                {{--</div><!--fun col-->--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!--fun facts-->
</section><!--#work-section-->
<!--our work section end-->
