<!--section services start here-->
<section id="services" class="padding-80">

    <div class="services-section-1">
        <div class="container">
            <div class="section-heading text-center">
                <h4 class="small section-title"><span>What we do?</span></h4>
                <h2 class="large section-title">網站功能特性</h2>
            </div><!--section heading-->

        </div><!--container-->
        <div class="container">
            <div class="row xs-mb-50">
                <div class="col-md-2 wow animated fadeInTop text-center col-md-offset-1">
                    <div class="feature-icon">
                        <i class="fa fa-list"></i>
                    </div>
                    <h5>規格明確</h5>
                </div>

                <div class="col-md-2 wow animated fadeInTop text-center">
                    <div class="feature-icon">
                        <i class="fa fa-bolt"></i>
                    </div>
                    <h5>快速交件</h5>
                </div>

                <div class="col-md-2 wow animated fadeInTop text-center">
                    <div class="feature-icon">
                        <i class="fa fa-search"></i>
                    </div>
                    <h5>SEO 網站優化</h5>
                </div>

                <div class="col-md-2 wow animated fadeInTop text-center">
                    <div class="feature-icon">
                        <i class="fa fa-server"></i>
                    </div>
                    <h5>贈送一年主機空間</h5>
                </div>

                <div class="col-md-2 wow animated fadeInTop text-center">
                    <div class="feature-icon">
                        <i class="fa fa-money"></i>
                    </div>
                    <h5>透明化價格</h5>
                </div>
            </div>

            <div class="row xs-mb-50">
                <div class="col-md-2 wow animated fadeInTop text-center col-md-offset-1">
                    <div class="feature-icon">
                        <i class="fa fa-gear"></i>
                    </div>
                    <h5>後台管理功能</h5>
                </div>

                <div class="col-md-2 wow animated fadeInTop text-center">
                    <div class="feature-icon">
                        <i class="fa fa-facebook"></i>
                    </div>
                    <h5>Facebook 整合</h5>
                </div>

                <div class="col-md-2 wow animated fadeInTop text-center">
                    <div class="feature-icon">
                        <i class="fa fa-mobile"></i>
                    </div>
                    <h5>RWD 手機適應網站</h5>
                </div>

                <div class="col-md-2 wow animated fadeInTop text-center">
                    <div class="feature-icon">
                        <i class="fa fa-line-chart"></i>
                    </div>
                    <h5>GA 流量分析</h5>
                </div>

                <div class="col-md-2 wow animated fadeInTop text-center">
                    <div class="feature-icon">
                        <i class="fa fa-th"></i>
                    </div>
                    <h5>多種功能任君挑選</h5>
                </div>
            </div>

        </div>
    </div><!--services section 1 end-->

    <!--testimonials-->
    <div class="testi parallax bg-cover" data-stellar-background-ratio="0.5" style="background-image: url(https://i.imgur.com/906qDVP.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div id="testi-carousel" class="owl-carousel">
                        <div>
                            <img width="150" height="150" src="https://i.imgur.com/n68EG7M.png" alt="">
                            <p class="xs-mt-15">
                                服務親切，效率佳！
                            </p>
                            <p>{!! str_repeat('<span class="fa fa-star"></span>', 5) !!}</p>
                            <h4>科技部/清大 AI創新專案計畫推動辦公室</h4>
                        </div><!--testimonials item like paragraph-->
                        <div>
                            <img width="150" height="150" src="https://i.imgur.com/18rpnaJ.jpg" alt="">
                            <p class="xs-mt-15">
                                服務很棒、很貼心、很待客戶著想，能給客戶清楚、能幫助的建議~
                            </p>
                            <p>{!! str_repeat('<span class="fa fa-star"></span>', 5) !!}</p>
                            <h4>福智佛教基金會</h4>
                        </div><!--testimonials item like paragraph-->
                        <div>
                            <img width="150" height="150" src="{{ $uri['media'] }}img/client/client-3.png" alt="">
                            <p class="xs-mt-15">
                                網頁很有設計感，簡潔、大方，售後服務效率很好。
                            </p>
                            <p>{!! str_repeat('<span class="fa fa-star"></span>', 5) !!}</p>
                            <h4>唐先生</h4>
                        </div><!--testimonials item like paragraph-->
                        <div>
                            <img width="150" height="150" src="{{ $uri['media'] }}img/client/client-2.png" alt="">
                            <p class="xs-mt-15">
                                公司非常具有設計感，是一家年輕有創意的網頁公司!!
                            </p>
                            <p>{!! str_repeat('<span class="fa fa-star"></span>', 5) !!}</p>
                            <h4>許先生</h4>
                        </div><!--testimonials item like paragraph-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--testimonials-->

    {{--<div class="services-section-2 parallax" data-stellar-background-ratio="0.5">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12 text-center">--}}
                    {{--<h1>Subscribe to Newsletter</h1>--}}
                    {{--<form class="newsletter-form">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-sm-4 col-sm-offset-4">--}}
                                {{--<div class="input-group">--}}
                                    {{--<label class="sr-only" for="subscribe-email">Email address</label>--}}
                                    {{--<input type="email" class="form-control" id="subscribe-email" placeholder="Enter your email">--}}
                                    {{--<span class="input-group-btn">--}}
                                                {{--<button type="submit" class="btn btn-theme-color btn-lg">OK</button>--}}
                                            {{--</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div><!--services section 1 end-->--}}
</section>
<!--section services end here-->
