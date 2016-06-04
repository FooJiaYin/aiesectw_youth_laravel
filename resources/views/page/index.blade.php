@extends('master')

@section('content')
    <!-- Intro Section -->
    <section class="hero">
        <!-- Intro Scroll Down -->
        <div class="intro-scroll-down">
            <a class="scroll-down" href="#about">
                        <span class="mouse">
                            <span class="mouse-dot"></span>
                        </span>
            </a>
        </div>
        <!-- End Intro Scroll Down -->

        <!-- Hero Slider Section -->
        <div class="flexslider fullscreen-carousel hero-slider-1 parallax parallax-section1">
            <ul class="slides">
                <li>
                    <img src="/img/DSC_1800.jpg" alt="portfolio" />
                    <div class="overlay-hero overlay-dark">
                        <div class="container caption-hero light-color">
                            <div class="inner-caption">

                                <h2 class="h2">Welcome to Mazel</h2>
                                <p class="lead">We carry a passion for performance marketing</p>

                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="/img/DSC_1245.jpg" alt="Agency" draggable="false" />
                    <div class="overlay-hero overlay-dark">
                        <div class="container caption-hero light-color">
                            <div class="inner-caption">
                                <h2 class="h2">Flexible & Customizable</h2>
                                <p class="lead">We carry a passion for performance marketing</p>
                                <br />
                                <div><a class="btn btn-md btn-white-line xs-hidden">Read More</a><span class="btn-space-10 xs-hidden"></span><a class="btn btn-md btn-white">Learn More</a></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="/img/DSC_1467.jpg" alt="Photography" draggable="false" />

                    <div class="overlay-hero overlay-dark">
                        <div class="container caption-hero light-color">
                            <div class="inner-caption">
                                <h2 class="h2">One & Mutlipage Theme</h2>
                                <p class="lead">We carry a passion for performance marketing</p>
                                <br />
                                <div><a class="btn btn-md btn-black-line">Read More</a><span class="btn-space-10 xs-hidden"></span><a class="btn btn-md btn-black xs-hidden">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <img src="/img/DSC_1876.jpg" alt="Photography" draggable="false" />
                    <div class="overlay-hero overlay-dark">
                        <div class="container caption-hero light-color">
                            <div class="inner-caption">
                                <h2 class="h2">Fully Responsive</h2>
                                <p class="lead">We carry a passion for performance marketing</p>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
        <!-- End Hero Slider Section -->
    </section>
    <div class="clearfix"></div>
    <!-- End Intro Section -->

    <!--About Section-->
    <section id="about" class="wow fadeInLeft ptb ptb-sm-80">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <div class="page-icon-top">
                        <i class="fa fa-bullhorn animate-horn"></i>
                    </div>
                    <h3 class="h4">青年影響力計畫</h3>
                    <div class="spacer-15"></div>
                    <p class="lead">你，創造影響力的第一步！<br/>四大步驟，你我都可以讓世界更好</p>
                </div>
            </div>
            <div class="row mt-60">
                <div class="col-md-3 col-sm-6 col-xs-12 mb-45">
                    <img class="padding-30" src="/img/YS-Survey-Logo.png">
                    <h3 class="text-center">青年影響力大調查</h3>
                    <p>透過問卷，了解青年對於世界議題想法。</p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 mb-45">
                    <img class="padding-30" src="/img/YS-Insights-Logo.png">
                    <h3 class="text-center">青年影響力報告</h3>
                    <p>分析問卷節果，讓我們知道如何更有力推動青年議題。</p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 mb-45">
                    <img class="padding-30" src="/img/YS-Forum-Logo.png">
                    <h3 class="text-center">青年影響力系列論壇</h3>
                    <p>從影響力報告延伸，論壇將成為交流與激盪的平台，青年、業界專家齊聚一堂，給予全新思維，並互相思考。</p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 mb-45">
                    <img class="padding-30" src="/img/YS-Projects-Logo.png">
                    <h3 class="text-center">青年影響力行動</h3>
                    <p>從論壇議題延伸，青年影響力行動計畫，將幫助青年實踐對社會有正面幫助的專案。</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section-->
    <hr />
    <!-- Service Section -->
    <section id="service" class="wow fadeInLeft ptb ptb-sm-80">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <div class="page-icon-top">
                        <i class="ion ion-ios-paper"></i>
                    </div>
                    <h3 class="h4">影響力大調查X報告</h3>
                    <div class="spacer-15"></div>
                </div>
            </div>
            <div class="row mt-80">
                <!-- Welcome Content -->
                <div class="col-md-7 mb-30">
                    <div class="spacer-15"></div>
                    <h3>2016年的青年影響力大調查已經結束！<span class="xs-hidden"><br/></span>花60秒關心你我都重視的事情！</h3>
                    <p><b>氣候變遷</b>、<b>世界和平</b>、<b>教育品質</b><span class="xs-hidden"><br/></span>位居青年最關注的聯合國永續議題前三名</p>
                </div>
                <!-- End Welcome Content -->

                <!-- Skills -->
                <div class="col-md-5">
                    <div class="skillbar" data-percent="80%">
                        <div class="skillbar-title">青年認為最有效學習方式是實戰經驗</div>
                        <div class="skill-bar-percent">80%</div>
                        <div class="skillbar-bar"></div>
                    </div>
                    <div class="skillbar" data-percent="17%">
                        <div class="skillbar-title">僅17%青年認為最有效學習方式是是讀教科書</div>
                        <div class="skill-bar-percent">17%</div>
                        <div class="skillbar-bar"></div>
                    </div>
                    <div class="skillbar" data-percent="37%">
                        <div class="skillbar-title">青年認為2030年的世界會比現在更糟</div>
                        <div class="skill-bar-percent">37%</div>
                        <div class="skillbar-bar"></div>
                    </div>
                </div>
                <!-- End Skills -->
            </div>
        </div>
    </section>
    <!-- End Service Section -->

    <!-- Counter Section -->
    <section id="counter" class="light-color ptb-80 overlay-dark80" style="background-image: url('/img/DSC_1467.jpg'); background-size: cover;" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 col-md-offset-4">
                    <div class="page-icon-top">
                        <i class="ion ion-chatbubbles light-color"></i>
                    </div>
                    <h3 class="h4">青年影響力系列論壇</h3>
                    <p>專家觀點 X 青年思維 X 想法激盪</p>
                </div>
            </div>
            <div class="row mt-25">
                <div class="wow col-md-6 fadeInLeft">
                    <h3>青年影響力論壇｜<span class="h5">共同想像你我未來</span></h3>
                    <p>世界瞬息萬變，氣候危機、工業4.0浪潮<br />
                        一波波劇變讓你我未來充滿不確定<br />
                        本屆論壇將帶你從未來角度出發<br />
                        除了思考問題解方，更帶你認識什麼產業將是未來主流，你最值得投入！</p>
                    <button class="btn btn-md btn-color-line mt-15"><i class="ion ion-android-cart"></i>前往購票</button>
                </div>
                <div class="wow col-md-6 fadeInRight">
                    <h3>青年未來大講堂｜<span class="h5">東協無限</span></h3>
                    <p>世界版圖翻轉中！你知道東協將成為全球未來經濟新重心嗎！<br />
                        未來大講堂將以業界實務觀點，為你深度剖析東協的潛力，<br />
                        一起帶你認識你所不知道的東協，告訴你這片充滿未來性的新區塊！</p>
                    <button class="btn btn-md btn-color-line mt-15"><i class="ion ion-android-cart"></i>前往購票</button>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counter Section -->

    <hr />

    <!-- Blog Section -->
    <section id="blog" class="wow fadeIn ptb ptb-sm-80">
        <div class="container">
            <h3 class="float-left float-none-xs">新聞中心</h3>
            <a class="btn-link-a float-right float-none-xs h5">看更多消息</a>
            <div class="clearfix"></div>
            <div class="spacer-60"></div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 mb-sm-30">
                    <div class="blog-post">
                        <div class="post-media">
                            <img class="item-container" src="img/full/20.jpg" alt="" />
                        </div>
                        <div class="post-meta"><span>by <a>John Doe</a>,</span> <span>Mar 16, 2015</span></div>
                        <div class="post-header">
                            <h5><a href="">Maecenas nec odio ante varcy</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-sm-30">
                    <div class="blog-post">
                        <div class="post-media">
                            <div class="owl-carousel item1-carousel nf-carousel-theme">
                                <div class="item">
                                    <img src="img/full/26.jpg" alt="" />
                                </div>
                                <div class="item">
                                    <img src="img/full/04.jpg" alt="" />
                                </div>
                                <div class="item">
                                    <img src="img/full/27.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="post-meta"><span>by <a>John Doe</a>,</span> <span>Feb 24, 2015</span></div>
                        <div class="post-header">
                            <h5><a href="">onec pede justo, fringilla vel</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-sm-30">
                    <div class="blog-post">
                        <div class="post-media">
                            <img class="item-container" src="img/full/20.jpg" alt="" />
                        </div>
                        <div class="post-meta"><span>by <a>John Doe</a>,</span> <span>Jan 29, 2015</span></div>
                        <div class="post-header">
                            <h5><a href="">Augue velit cursus nunc</a></h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Blog Section -->

    <!-- Statement Section -->
    <section id="statement" class="overlay-dark80 dark-bg ptb ptb-sm-80" style="background-image: url('/img/DSC_1876.jpg'); background-size: cover;">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <a class="cbox-iframe" href="http://www.youtube.com/embed/7h43WCAVXdY?rel=0&amp;wmode=transparent">
                        <div class="page-icon-top"><i class="ion ion-ios-film-outline"></i></div>
                    </a>
                    <h4>LET YOUR VOICE BE HEARD!</h4>
                    <div class="spacer-15"></div>
                    <a class="cbox-iframe btn btn-md btn-white" href="http://www.youtube.com/embed/7h43WCAVXdY?rel=0&amp;wmode=transparent">Watch Video</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Statement Section -->

    <!-- Client Logos Section -->
    <section id="client-logos" class="wow fadeIn ptb ptb-sm-80">
        <div class="container">
            <div class="owl-carousel client-carousel nf-carousel-theme ">
                <div class="item">
                    <div class="client-logo">
                        <img src="/img/logos/01.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="client-logo">
                        <img src="/img/logos/02.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="client-logo">
                        <img src="/img/logos/03.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="client-logo">
                        <img src="/img/logos/04.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="client-logo">
                        <img src="/img/logos/05.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="client-logo">
                        <img src="/img/logos/06.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="client-logo">
                        <img src="/img/logos/08.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="client-logo">
                        <img src="/img/logos/01.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="client-logo">
                        <img src="/img/logos/02.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="client-logo">
                        <img src="/img/logos/03.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Client Logos Section -->
@endsection
