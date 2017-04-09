<section id="contact" class="padding-80">

    <div class="contact-sec-1">
        <div class="container">
            <div class="section-heading text-center">
                <h4 class="small section-title"><span>we Love to here from you  </span></h4>
                <h2 class="large section-title">聯絡我們</h2>
            </div><!--section heading-->
        </div><!--.container-->
        <form name="sentMessage" action="https://api.formbucket.com/f/buk_XRtx81YfYAsUrZXZjd9FFOop" id="contactForm" method="post" novalidate>
            <div class="container">
                <div class="row xs-mb-50">
                    <div class="col-md-8">
                        <h4>Get in touch</h4>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>名稱<span>*</span></label>
                                            <input type="text" class="form-control" placeholder="Name" name="name" id="name" required data-validation-required-message="Please enter your name.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>Email<span>*</span></label>
                                            <input type="email" class="form-control" placeholder="Email Address" name="email" id="email" required data-validation-required-message="Please enter your email address.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>公司或網站名稱</label>
                                            <input type="text" class="form-control" placeholder="Company" name="company" id="company">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>電話</label>
                                            <input type="text" class="form-control" placeholder="Phone" name="phone" id="phone">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 controls">
                                        <label>考慮方案<span>*</span></label>
                                        <select class="form-control" name="plan" id="plan">
                                            <option value="A 微型企業啟動方案">A 微型企業啟動方案 - $29,000</option>
                                            <option value="B 中小企業形象方案">B 中小企業形象方案 - $49,000</option>
                                            <option value="C 多功能國際化方案">C 多功能國際化方案 - $69,000</option>
                                            <option value="D 旗艦級客製化方案">D 旗艦級客製化方案 - $100,000 起</option>
                                            <option value="合作洽詢">合作洽詢</option>
                                        </select>
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 controls">
                                    <label>訊息<span>*</span></label>
                                    <textarea rows="5" class="form-control" placeholder="Message" name="message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                        <!--contact form-->
                    </div>
                    <div class="col-md-4">
                        <h4>附加功能</h4>
                        <div class="contact-info wow animated fadeInRight" data-wow-delay=".6s">

                            <?php
                            $components = [
                            	[
									'最新消息/部落格',
									'留言版',
									'友好連結/合作廠商',
									'相簿藝廊',
                                    '人才招募',
                                    '員工介紹',
                                    '檔案下載',
                                    '線上影音',
									'多人共筆部落格',
									'Q&A問題集系統',
									'線上行事曆',
									'報名系統',
								],
                                [
									'商品型錄',
									'多功能聯絡表單',
									'分店資訊',
									'社群登入',
									'多國語言',
									'Google 即時翻譯',
									'購物車商城系統',
									'金流獨立開發',
									'超商取貨模組',
									'優或與折扣規則',
									'會員訂單匯出',
									'Google Suite 企業信箱'
								]
                            ];
                            ?>

                            <div class="row">
                                @foreach ($components as $subClass)
                                    <div class="col-md-6">
                                        @foreach ($subClass as $component)
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <label style="color: #666;">
                                                        <input name="components[]" class="components-checkbox" value="{{ $component }}" type="checkbox"> {{ $component }}
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>


                            {{--<p><i class="fa fa-home"></i> 124,Munna wali Dhani Jaipur, India</p>--}}
                            {{--<p><i class="fa fa-home"></i> +91 141-1234567890</p>--}}
                            {{--<p><b>Fax:</b> +91 1234567890</p>--}}
                            {{--<p><i class="fa fa-envelope"></i> <a href="#">mail@domain.com</a></p>--}}
                            {{--<p><i class="fa fa-clock-o"></i> Monday-Friday 9:30-5:30pm</p>--}}
                            {{--<hr>--}}
                            {{--<h4>Elsewhere</h4>--}}
                            {{--<ul class="list-inline social-colored">--}}
                                {{--<li><a href="#"><i class="fa fa-facebook icon-fb" data-toggle="tooltip" title="" data-original-title="Facebook" data-placement="top"></i></a></li>--}}
                                {{--<li><a href="#"><i class="fa fa-twitter icon-twit" data-toggle="tooltip" title="" data-original-title="Twitter" data-placement="top"></i></a></li>--}}
                                {{--<li><a href="#"><i class="fa fa-google-plus icon-plus" data-toggle="tooltip" title="" data-original-title="Google pluse" data-placement="top"></i></a></li>--}}
                                {{--<li><a href="#"><i class="fa fa-linkedin icon-in" data-toggle="tooltip" title="" data-original-title="Linkedin" data-placement="top"></i></a></li>--}}

                            {{--</ul> <!--colored social-->--}}
                        </div>
                    </div>
                </div>

                <div id="success"></div>
                <div class="row text-center">
                    <div class="form-group col-xs-12">
                        <button type="submit" class="btn btn-theme-color btn-hero">送出訊息</button>
                    </div>
                </div>
            </div>
        </form>
    </div><!--Contact-sec-1 end-->

</section><!--contact section end-->
