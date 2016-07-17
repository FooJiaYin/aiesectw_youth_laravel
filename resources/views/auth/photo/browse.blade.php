<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Youth Speak 後台管理系統">
    <meta name="author" content="Abel">
    <meta name="_token" content="{!! csrf_token() !!}"/>

    <link rel="shortcut icon" href="assets/images/favicon_1.ico">

    <title></title>

    <link href="/auth/plugins/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css">
    <link href="/auth/plugins/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">
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
    <div class="topbar">
        <div class="navbar navbar-default" role="navigation">
            <button id="insert" type="button" class="pull-right btn btn-success waves-effect w-md waves-light m-r-10 m-t-5">{{ trans('layout.insert') }}</button>
        </div>
    </div>
    <div class="content-page">
        <div class="content">
            <!-- Start content -->
            <div class="container">

                <div class="row port">
                    <div id="photo-container" class="portfolioContainer select-active">
                        @include('auth.photo._photoList')
                    </div>
                    <div id="photo-no-more-button" class="text-center" style="display: none; padding-top: 20px;">
                        <button type="button" class="btn btn-inverse waves-effect w-md waves-light m-b-5">{{ trans('layout.no-more') }}</button>
                    </div>
                </div> <!-- End row -->

            </div>
            <!-- end container -->
        </div>
        <!-- end content -->
    </div>

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
    <!-- Custom main Js -->
    <script src="/auth/js/jquery.app.js"></script>
    <script src="/auth/plugins/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="/auth/plugins/masonry/dist/masonry.pkgd.min.js"></script>
    <script src="/auth/plugins/waypoints/lib/jquery.waypoints.js"></script>

    <script src="/auth/plugins/tinymce/plugins/imagebrowse/insert.js"></script>
    <script>
        var page = 2,
            $photoContainer = $('#photo-container'),
            $insert = $('#insert');
        $photoContainer.imagesLoaded( function() {
            $photoContainer.masonry({
                columnWidth: '.photo-item',
                itemSelector: '.photo-item'
            });
        });
        $(document).on('click', '.select-active .gal-detail', function (e) {
            e.preventDefault();
            if( $(this).hasClass('active')){
                $(this).removeClass('active');
            }else{
                $('.gal-detail.active').removeClass('active');
                $(this).toggleClass('active');
            }
        });
        $photoContainer.waypoint({
            handler: function(direction) {
                if(direction == 'down') callApi();
            },
            offset: 'bottom-in-view'
        });
        $insert.on('click', function(){
            var src = $('.gal-detail.active').find('img').attr('src');
            ImageBrowse.InsertSuccess({
                code : src
            });
        });
        function callApi(){
            $.ajax({
                url: '/api/gallery',
                data: {
                    'page' : page,
                    'html' : 1
                },
                success: function(data){
                    var $items = $(data);
                    if($items.length > 0){
                        $items.hide();
                        $photoContainer.append($items);
                        $items.imagesLoaded().progress( function(imgLoad, image) {
                            var $item = $( image.img ).parents('.photo-item');
                            $item.show();
                            $photoContainer.masonry( 'appended', $item)
                        });
                        // 全部 load 完 Refresh Waypoint
                        $items.imagesLoaded(function(){
                            Waypoint.refreshAll();
                        });
                        page++;
                    }else{
                        Waypoint.destroyAll();
                        $('#photo-no-more-button').fadeIn();
                    }
                }
            });
        }
    </script>

</body>
