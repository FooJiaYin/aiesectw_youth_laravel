<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Youth Speak 後台管理系統">
    <meta name="author" content="Abel">

    <link rel="shortcut icon" href="assets/images/favicon_1.ico">

    <title>@yield('title')</title>

    @yield('header')

    <link href="/auth/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/auth/css/core.css" rel="stylesheet" type="text/css">
    <link href="/auth/css/icons.css" rel="stylesheet" type="text/css">
    <link href="/auth/css/components.css" rel="stylesheet" type="text/css">
    <link href="/auth/css/pages.css" rel="stylesheet" type="text/css">
    <link href="/auth/css/menu.css" rel="stylesheet" type="text/css">
    <link href="/auth/css/responsive.css" rel="stylesheet" type="text/css">

    <script src="/auth/js/modernizr.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->


</head>
<body>

    @if (!Auth::guest())   {{-- 登入才可看到 Start --}}
        <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            @include('auth.layouts.topBar')

            @include('auth.layouts.leftSideBar')

            @endif                  {{-- 登入才可看到 End --}}

            @yield('content')

            @if (!Auth::guest())    {{-- 登入才可看到 Start --}}

            @include('auth.layouts.rightSideBar')

        </div>
         <!-- END wrapper -->
    @endif  {{-- 登入才可看到 End --}}


<script>
    var resizefunc = [];
</script>

<!-- Main  -->
{{--<script src="/auth/js/jquery.min.js"></script>--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="/auth/js/bootstrap.min.js"></script>
<script src="/auth/js/detect.js"></script>
<script src="/auth/js/fastclick.js"></script>
<script src="/auth/js/jquery.slimscroll.js"></script>
<script src="/auth/js/jquery.blockUI.js"></script>
<script src="/auth/js/waves.js"></script>
<script src="/auth/js/wow.min.js"></script>
<script src="/auth/js/jquery.nicescroll.js"></script>
<script src="/auth/js/jquery.scrollTo.min.js"></script>
<script src="/auth/plugins/switchery/switchery.min.js"></script>
<script src="/auth/plugins/notifyjs/dist/notify.min.js"></script>
<script src="/auth/plugins/notifications/notify-metro.js"></script>
<script src="/auth/js/jquery.core.js"></script>

@yield('footerjs')
    <script>
        $(function(){
            {{--{{ dd(Session::get('message'), Session::has('message'),Session::has('message-type')) }}--}}
            @if(Session::has('message') && Session::has('message-type'))
            $.Notification.notify('{{ Session::get('message-type') }}','bottom right', '{{ trans('exception.'.Session::get('message-type')) }}', '{{ Session::get('message') }}');
            @endif
        })
    </script>

</body>
</html>