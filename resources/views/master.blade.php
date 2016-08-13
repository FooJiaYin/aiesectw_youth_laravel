<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Youth Speak 青年影響力</title>
    <meta name="description" content="AIESEC 青年影響力論壇，屬於青年人的論壇，由青年發起，青年籌辦，青年參與，青年帶領影響力的發生。歡迎您的共同響應，使青年力量更為凝聚！" />
    <meta name="keywords" content="Youth Speak,AIESEC" />
    <meta name="author" content="Abel_Lee">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/favicon.png">
    <!-- CSS -->
    <!-- build:css -->
    <link href="/stylesheets/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="/stylesheets/style.css" rel="stylesheet" type="text/css" />
    <link href="/stylesheets/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="/stylesheets/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/stylesheets/ionicons.css" rel="stylesheet" type="text/css" />
    <link href="/stylesheets/jPushMenu.css" rel="stylesheet" type="text/css" />
    <link href="/stylesheets/animate.css" rel="stylesheet" type="text/css" />
    <!-- endbuild -->
    @yield('header')

</head>

<body class="full-intro">

<!-- Preloader -->
<section id="preloader">
    <div class="loader" id="loader">
        <i class="ion fa-spin ion-load-c dark-color large"></i>
    </div>
</section>
<!-- End Preloader -->

<!-- Search menu Top -->
<section class=" top-search-bar cbp-spmenu cbp-spmenu-horizontal cbp-spmenu-top">
    <div class="container">
        <div class="search-wraper">
            <input type="text" class="input-sm form-full" placeholder="Search..." name="search" />
            <a class="search-bar-icon"><i class="fa fa-search"></i></a>
            <a class="bar-close toggle-menu menu-top push-body"><i class="ion ion-android-close"></i></a>
        </div>
    </div>
</section>
<!--End Search menu Top -->

<!-- Site Wraper -->
<div class="wrapper">

    <!-- HEADER -->
    <header class="header">
        <div class="container">

            <!-- logo -->
            <div class="logo">
                <a href="/">
                    <img class="l-black" src="/img/youthspeak_black.png" />
                    <img class="l-white" src="/img/youthspeak_white.png" />
                    <img class="l-color" src="/img/youthspeak_orange.png" />
                </a>
            </div>
            <!-- Navigation Menu -->
            <nav class='navigation'>
                <ul>
                    <li><a href="/">首頁</a></li>
                    <li><a class="tipped" data-title="尚未開放" data-tipper-options='{"direction":"bottom"}'>關於計畫</a></li>
                    <li><a href="/press" class="tipped" data-title="尚未開放" data-tipper-options='{"direction":"bottom"}'>新聞中心</a></li>
                    <li><a class="tipped" data-title="尚未開放" data-tipper-options='{"direction":"bottom"}'>大調查與報告</a></li>
                    <li><a href="/forum">青年影響力論壇</a></li>
                    <li><a href="/next-talk">青年未來大講堂</a></li>
                    <li><a class="tipped" data-title="尚未開放" data-tipper-options='{"direction":"bottom"}'>影響力行動</a></li>
                </ul>
            </nav>
            <!--End Navigation Menu -->

        </div>
    </header>
    <!-- END HEADER -->

    @yield('content')

    <!-- FOOTER -->
    <footer class="footer pt-80">
        <div class="container">
            <div class="row mb-60">
                <!-- Logo -->
                <div class="col-md-3 col-sm-3 col-xs-12 mb-xs-30">
                    <a class="footer-logo" href="/">
                        <img class="l-color" src="/img/youthspeak_orange.png" /></a>
                </div>
                <!-- Logo -->



                <!-- Social -->
                <div class="col-md-3 col-md-offset-6 col-sm-4 col-xs-12">
                    <ul class="social">
                        <li><a target="_blank" href="https://www.facebook.com/AIESECYSF/"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/AIESEC"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="https://www.youtube.com/user/AIESECTWMC"><i class="fa fa-youtube"></i></a></li>
                        <li><a target="_blank" href="https://www.linkedin.com/company/aiesec"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <!-- End Social -->
            </div>
            <!--Footer Info -->
            <div class="row footer-info mb-60">
                <div class="col-md-3 col-sm-12 col-xs-12 mb-sm-30">
                    <p class="mb-xs-0">AIESEC is a non-governmental not-for-profit organisation in consultative status with the United Nations Economic
                        and Social Council (ECOSOC)...</p>
                    <a class="btn-link-a">Read More</a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 mb-sm-30 mb-xs-0">
                    <ul class="link">
                        <li><a href="/">首頁</a></li>
                        <li><a>關於計畫</a></li>
                        <li><a>新聞中心</a></li>
                        <li><a>大調查與報告</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 mb-sm-30">
                    <ul class="link">
                        <li><a href="/forum">青年影響力論壇</a></li>
                        <li><a href="/next-talk">青年未來大講堂</a></li>
                        <li><a>影響力行動</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <p>羅斯福路四段68號8樓<br />
                        臺北市中正區</p>
                    <ul class="link-small">
                        <li><a><i class="fa fa-phone left"></i>(02) 2367-5893</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Footer Info -->
        </div>

        <hr />

        <!-- Copyright Bar -->
        <section class="copyright ptb-60">
            <div class="container">
                <p class="">
                    © 2016 <a><b>AIESEC</b></a>. All Rights Reserved.
                    <br />
                    Designed  by <a target="_blank" href="https://www.facebook.com/chiling.lee.75"><b>Abel Lee</b></a>
                </p>
            </div>
        </section>
        <!-- End Copyright Bar -->

    </footer>
    <!-- END FOOTER -->

    <!-- Scroll Top -->
    <a class="scroll-top">
        <i class="fa fa-angle-double-up"></i>
    </a>
    <!-- End Scroll Top -->

</div>
<!-- Site Wraper End -->


<!-- JS -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js" type="text/javascript"></script>

<script src="/js/plugin/jquery.easing.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/js/plugin/jquery.flexslider.js" type="text/javascript"></script>
<script src="/js/plugin/background-check.min.js" type="text/javascript"></script>
<script src="/js/plugin/jquery.fitvids.js" type="text/javascript"></script>
<script src="/js/plugin/jquery.viewportchecker.js" type="text/javascript"></script>
<script src="/js/plugin/jquery.stellar.min.js" type="text/javascript"></script>
<script src="/js/plugin/wow.min.js" type="text/javascript"></script>
<script src="/js/plugin/jquery.colorbox-min.js" type="text/javascript"></script>
<script src="/js/plugin/owl.carousel.min.js" type="text/javascript"></script>
<script src="/js/plugin/isotope.pkgd.min.js" type="text/javascript"></script>
<script src="/js/plugin/masonry.pkgd.min.js" type="text/javascript"></script>
<script src="/js/plugin/imagesloaded.pkgd.min.js" type="text/javascript"></script>
<script src="/js/plugin/jPushMenu.js" type="text/javascript"></script>
<script src="/js/plugin/jquery.fs.tipper.min.js" type="text/javascript"></script>
<script src="/js/plugin/mediaelement-and-player.min.js"></script>
<script src="/js/theme.js" type="text/javascript"></script>
<script src="/js/navigation.js" type="text/javascript"></script>

@yield('footer')
<!-- ga code -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-78061291-1', 'auto');
    ga('send', 'pageview');

</script>
<!-- ga code -->
{{--<!-- Google Tag Manager -->--}}
{{--<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MLB6V9"--}}
                  {{--height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>--}}
{{--<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':--}}
            {{--new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],--}}
            {{--j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=--}}
            {{--'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);--}}
    {{--})(window,document,'script','dataLayer','GTM-MLB6V9');</script>--}}
{{--<!-- End Google Tag Manager -->--}}
<!-- clicky code -->
{{--<a title="Real Time Web Analytics" href="http://clicky.com/100967232"><img alt="Real Time Web Analytics" src="//static.getclicky.com/media/links/badge.gif" border="0" /></a>--}}
<script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try{ clicky.init(100967232); }catch(e){}</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100967232ns.gif" /></p></noscript>
<!-- clicky code -->

</body>
</html>
