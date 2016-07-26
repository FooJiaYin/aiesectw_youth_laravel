@extends('master')

@section('header')
    <link rel="canonical" href="{{ action('PressController@show', ['id' => $press->id]) }}" />
@endsection

@section('content')

    <!-- CONTENT --------------------------------------------------------------------------------->

    <!-- Intro Section -->
    <section class="inner-intro bg-img21 overlay-dark light-color parallax parallax-background2">
        <div class="container">
            <div class="row title">
                <h2 class="h2">Blog</h2>
                <div class="page-breadcrumb">
                    <a>Home</a>/<a>Blog</a>/<span>Image Post</span>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- End Intro Section -->

    <!-- Blog Post Section -->
    <section class="ptb ptb-sm-80">
        <div class="container">
            <div class="row">
                <!-- Post Bar -->
                <div class="col-lg-9 col-md-9 blog-post-hr">
                    <div class="blog-post mb-30">
                        <div class="post-meta"><span>{{ $press->publish_time->format('Y/m/d') }}</span></div>

                        <div class="post-header">
                            <h2>{{ $press->title }}</h2>
                        </div>

                        <div class="post-media">
                            <img alt="" src="{{ $press->photo->path or '' }}">
                        </div>

                        <div class="post-entry">
                            {!! $press->content !!}
                        </div>
                        {{--<div class="post-tag pull-left"><span><a>Branding</a>,</span><span><a>Design</a></span></div>--}}
                    </div>

                    <hr />

                    <div class="clearfix"></div>

                    <div id="disqus_thread" data-identifier="{{ $press->id }}" data-url="{{ action('PressController@show', ['id' => $press->id]) }}"></div>


                </div>
                <!-- End Post Bar -->

                <!-- Sidebar -->
                <div class="col-lg-3 col-md-3 mt-sm-30">

                    <div class="sidebar-widget">
                        <h5>Search</h5>
                        <div class="widget-search">
                            <input class="form-full input-lg" type="text" value="" placeholder="Search Here" name="search" id="wid-search">
                            <input type="submit" value="" name="email" id="wid-s-sub">
                        </div>
                    </div>

                    <div class="sidebar-widget">
                        <h5>Categories</h5>
                        <hr>
                        <ul>
                            <li><a>Photography</a></li>
                            <li><a>Web Design</a></li>
                            <li><a>Lifestyle</a></li>
                            <li><a>Responsive</a></li>
                            <li><a>MultiPurpose Theme</a></li>
                            <li><a>Agency</a></li>
                            <li><a>Portfolio</a></li>
                        </ul>
                    </div>

                    <div class="sidebar-widget">
                        <h5>Recent Post</h5>
                        <hr>
                        <ul class="widget-post">
                            <li>
                                <a class="widget-post-media">
                                    <img src="img/portfolio/21.jpg">
                                </a>
                                <div class="widget-post-info">
                                    <h6><a>veritatis et quasi</a></h6>
                                    <div class="post-meta"><span>March 16, 2015</span></div>
                                </div>
                            </li>
                            <li>
                                <a class="widget-post-media">
                                    <img src="img/portfolio/32.jpg">
                                </a>
                                <div class="widget-post-info">
                                    <h6><a>Sed fringilla mauris</a></h6>
                                    <div class="post-meta"><span>March 09, 2015</span></div>
                                </div>
                            </li>
                            <li>
                                <a class="widget-post-media">
                                    <img src="img/portfolio/31.jpg">
                                </a>
                                <div class="widget-post-info">
                                    <h6><a>harum quidem rerum</a></h6>
                                    <div class="post-meta"><span>March 04, 2015</span></div>
                                </div>
                            </li>

                        </ul>
                    </div>

                    <div class="sidebar-widget">
                        <h5>popular Tags</h5>
                        <hr>
                        <ul class="widget-tag">
                            <li><a>Art</a></li>
                            <li><a>Business</a></li>
                            <li><a>Design</a></li>
                            <li><a>Graphic</a></li>
                            <li><a>fashion</a></li>
                            <li><a>Model</a></li>
                            <li><a>Photography</a></li>
                        </ul>
                    </div>

                </div>
                <!-- End Sidebar -->
            </div>
        </div>
    </section>
    <!-- End Blog Post Section -->

    <!-- Post Next Prev Bar -->
    {{--<section class="mb-60">--}}
        {{--<div class="container">--}}
            {{--<div class="item-nav">--}}
                {{--<a href="" class="item-prev">--}}
                    {{--<div class="prev-btn"><i class="fa fa-angle-left"></i></div>--}}
                    {{--<div class="item-prev-text xs-hidden">--}}
                        {{--<h6>Prev Post</h6>--}}
                    {{--</div>--}}
                {{--</a>--}}

                {{--<a class="item-all-view">--}}
                    {{--<h6>Blog Page</h6>--}}
                {{--</a>--}}

                {{--<a href="" class="item-next">--}}
                    {{--<div class="next-btn"><i class="fa fa-angle-right"></i></div>--}}
                    {{--<div class="item-next-text xs-hidden">--}}
                        {{--<h6>Next Post</h6>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!-- End Post Next Prev Bar -->

    <!-- End CONTENT ------------------------------------------------------------------------------>

@endsection

@section('footer')
    <script>
        var disqus_url = '',
            disqus_identifier = '';

        (function() {  // DON'T EDIT BELOW THIS LINE
            var $disqus = $('#disqus_thread');
            disqus_url = $disqus.data('url');
            disqus_identifier = $disqus.data('identifier');

            var d = document, s = d.createElement('script');
            s.src = '//youthspeaktw.disqus.com/embed.js';
            s.setAttribute('data-timestamp', + new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

@endsection