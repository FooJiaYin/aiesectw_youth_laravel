@extends('auth.master')
@section('title', '控制台｜Youth Speak 後台管理系統')
@section('header')
    <!--Morris Chart CSS -->
    <link href="/auth/plugins/morris/morris.css" rel="stylesheet">
    <link href="/auth/plugins/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">
    <link href="/auth/plugins/switchery/switchery.min.css" rel="stylesheet" />
    <link href="/auth/plugins/jquery-circliful/css/jquery.circliful.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
        <!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <ol class="breadcrumb pull-right">
                            <li><a href="{{ url('/admin') }}">{{ trans('menu.youth-speak') }}</a></li>
                            <li class="active">{{ trans('menu.dashboard') }}</li>
                        </ol>
                        <h4 class="page-title">{{ trans('dashboard.welcome').Auth::user()->name }} ！</h4>
                    </div>
                </div>
            </div>


            <div class="row">

                <div class="col-sm-6 col-lg-3">
                    <div class="widget-simple-chart text-right card-box">
                        <div class="circliful-chart" data-dimension="90" data-text="{{ $pageViewsPercentage }}%" data-width="5" data-fontsize="14" data-percent="{{ $pageViewsPercentage }}" data-fgcolor="#00b19d" data-bgcolor="#ebeff2"></div>
                        <h3><span class="text-success counter">{{ $thisWeekPageViews }}</span><small class="text-muted"> ( <b class="{{ $thisWeekPageViews >= $lastWeekPageViews ? 'text-success' : 'text-danger'}}">{{ $lastWeekPageViews }}</b> )</small></h3>
                        <p class="text-muted text-nowrap">{{ trans('dashboard.this_week_page_view') }}({{ trans('dashboard.last_week') }})</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="widget-simple-chart text-right card-box">
                        <div class="circliful-chart" data-dimension="90" data-text="{{ $visitorsPercentage }}%" data-width="5" data-fontsize="14" data-percent="{{ $visitorsPercentage }}" data-fgcolor="#f9cd48" data-bgcolor="#ebeff2"></div>
                        <h3><span class="text-primary counter">{{ $thisWeekVisitors }}</span><small class="text-muted"> ( <b class="{{ $thisWeekVisitors >= $lastWeekVisitors ? 'text-primary' : 'text-danger'}}">{{ $lastWeekVisitors }}</b> )</small></h3>
                        <p class="text-muted text-nowrap">{{ trans('dashboard.this_week_visitor') }}({{ trans('dashboard.last_week') }})</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="widget-simple text-center card-box">
                        <h3 id="real-time" class="text-pink">0</h3>
                        <p class="text-muted">{{ trans('dashboard.real_time_visitor') }}</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="widget-simple text-center card-box">
                        <h3 id="real-time" class="text-inverse">{{ $soldClickEvent }}</h3>
                        <p class="text-muted">{{ trans('dashboard.sold_click_number') }}</p>
                    </div>
                </div>
            </div>
            <!-- end row -->




            <div class="row">
                <div class="col-lg-4">
                    <div class="card-box">
                        <h4 class="text-dark  header-title m-t-0 m-b-30">{{ trans('dashboard.weekly_page_view') }}</h4>

                        <div class="widget-chart text-center">
                            <div class="text-center">
                                <ul class="list-inline chart-detail-list">
                                    <li>
                                        <h5><i class="fa fa-circle m-r-5" style="color: #f9cd48;"></i>{{ trans('dashboard.last_week') }}</h5>
                                    </li>
                                    <li>
                                        <h5><i class="fa fa-circle m-r-5" style="color: #64b5f6;"></i>{{ trans('dashboard.this_week') }}</h5>
                                    </li>
                                </ul>
                            </div>
                            <div id="morris-weekly-page-view" data-chart="{{ $weeklyPageViewsString }}" style="height: 165px;"></div>
                            <ul class="list-inline m-t-15">
                                <li>
                                    <h5 class="text-muted m-t-20">{{ trans('dashboard.last_week_page_view_max') }}</h5>
                                    <h4 class="m-b-0">{{ $lastWeekPageViewsMax }}</h4>
                                </li>
                                <li>
                                    <h5 class="text-muted m-t-20">{{ trans('dashboard.this_week_page_view_max') }}</h5>
                                    <h4 class="m-b-0">{{ $thisWeekPageViewsMax }}</h4>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="card-box">
                        <h4 class="text-dark  header-title m-t-0 m-b-30">{{ trans('dashboard.weekly_visitors') }}</h4>
                        <div class="widget-chart text-center">
                            <div class="text-center">
                                <ul class="list-inline chart-detail-list">
                                    <li>
                                        <h5><i class="fa fa-circle m-r-5" style="color: #f9cd48;"></i>{{ trans('dashboard.last_week') }}</h5>
                                    </li>
                                    <li>
                                        <h5><i class="fa fa-circle m-r-5" style="color: #64b5f6;"></i>{{ trans('dashboard.this_week') }}</h5>
                                    </li>
                                </ul>
                            </div>
                            <div id="morris-weekly-visitors" data-chart="{{ $weeklyVisitorsString }}" style="height: 165px;"></div>
                            <ul class="list-inline m-t-15">
                                <li>
                                    <h5 class="text-muted m-t-20">{{ trans('dashboard.last_week_visitor_max') }}</h5>
                                    <h4 class="m-b-0">{{ $lastWeekVisitorsMax }}</h4>
                                </li>
                                <li>
                                    <h5 class="text-muted m-t-20">{{ trans('dashboard.this_week_visitor_max') }}</h5>
                                    <h4 class="m-b-0">{{ $thisWeekVisitorsMax }}</h4>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="card-box">
                        <h4 class="text-dark header-title m-t-0 m-b-30">{{ trans('dashboard.monthly_device_type') }}</h4>

                        <div class="widget-chart text-center">
                            <div id="morris-monthly-devices" data-chart="{{ $monthlyDeviceTypeString }}" style="height: 226px;"></div>
                            <ul class="list-inline m-t-15">
                                @foreach($monthlyDeviceTypeSessions as $value)
                                <li>
                                    <h5 class="text-muted m-t-20">{{ $value['label'] }}</h5>
                                    <h4 class="m-b-0">{{ round($value['value']/($monthlyDeviceTypeSessions->sum('value'))*100) .'%' }}</h4>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">
                        <h4 class="text-dark header-title m-t-0 m-b-30">{{ trans('dashboard.hourly_action') }}</h4>
                        <div class="widget-chart text-center">
                            <div id="morris-hourly-actions" data-chart="{{ $hourlyActionString }}" style="height: 211px;"></div>
                            <div class="text-center">
                                <ul class="list-inline chart-detail-list">
                                    <li>
                                        <h5><i class="fa fa-circle m-r-5" style="color: #f9cd48;"></i>{{ trans('dashboard.yesterday') }}</h5>
                                    </li>
                                    <li>
                                        <h5><i class="fa fa-circle m-r-5" style="color: #64b5f6;"></i>{{ trans('dashboard.today') }}</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!--end row/ hourly -->




        </div>
        <!-- end container -->
    </div>
    <!-- end content -->

    @include('auth.layouts.footer')

</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


@endsection

@section('footerjs')
<!-- Moment  -->
<script src="/auth/plugins/moment/moment.js"></script>

<!-- Counter Up  -->
<script src="/auth/plugins/waypoints/lib/jquery.waypoints.js"></script>
<script src="/auth/plugins/counterup/jquery.counterup.min.js"></script>

<!-- Sweet Alert  -->
<script src="/auth/plugins/sweetalert/dist/sweetalert.min.js"></script>

<!-- flot Chart -->
<script src="/auth/plugins/flot-chart/jquery.flot.js"></script>
<script src="/auth/plugins/flot-chart/jquery.flot.time.js"></script>
<script src="/auth/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="/auth/plugins/flot-chart/jquery.flot.resize.js"></script>
<script src="/auth/plugins/flot-chart/jquery.flot.pie.js"></script>
<script src="/auth/plugins/flot-chart/jquery.flot.selection.js"></script>
<script src="/auth/plugins/flot-chart/jquery.flot.stack.js"></script>
<script src="/auth/plugins/flot-chart/jquery.flot.crosshair.js"></script>

<!-- circliful Chart -->
<script src="/auth/plugins/jquery-circliful/js/jquery.circliful.min.js"></script>
<!--Morris Chart-->
<script src="/auth/plugins/morris/morris.min.js"></script>
<script src="/auth/plugins/raphael/raphael-min.js"></script>
<script src="/auth/pages/morris.init.js"></script>

<!-- skycons -->
<script src="/auth/plugins/skyicons/skycons.min.js" type="text/javascript"></script>

<!-- Todos app  -->
<script src="/auth/pages/jquery.todo.js"></script>

<!-- Chat App  -->
<script src="/auth/pages/jquery.chat.js"></script>

<!-- Page js  -->
{{--<script src="/auth/pages/jquery.dashboard.js"></script>--}}




<script type="text/javascript">
    $(function($) {
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });
        $('.circliful-chart').circliful();
        intervalFunction();
    });
    var realTimeInterval;
    function intervalFunction(){
        realTimeInterval = setInterval( callRealTime, 5000);
    }
    function callRealTime(){
        $.ajax({
            url: 'https://api.clicky.com/api/stats/4',
            data: {
                site_id: 100967232,
                sitekey: '1da9862848de607c',
                type: 'visitors-online',
                output: 'json',
                json_callback: 'set_real_time'
            },
            dataType: 'jsonp'
        });
    }
    function set_real_time(data){
        var $realTime = $('#real-time'),
            realTimeNumber = data[0].dates[0].items[0].value;
        if($realTime.text() != realTimeNumber){
            $realTime.html(realTimeNumber);
            $realTime.counterUp({
                delay: 100,
                time: 1000
            });
        }
    }

    /* BEGIN SVG WEATHER ICON */
    if (typeof Skycons !== 'undefined'){
        var icons = new Skycons(
                {"color": "#f9cd48"},
                {"resizeClear": true}
                ),
                list  = [
                    "clear-day", "clear-night", "partly-cloudy-day",
                    "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                    "fog"
                ],
                i;

        for(i = list.length; i--; )
            icons.set(list[i], list[i]);
        icons.play();
    };

</script>
@endsection