@extends('auth.master')
@section('title', trans('menu.gallery').'｜Youth Speak 後台管理系統')
@section('header')
@endsection
@section('content')
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
                                <li>{{ trans('menu.gallery') }}</li>
                            </ol>
                            <h4 class="page-title">{{ trans('menu.gallery') }}</h4>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 ">
                        <div class="pull-left">
                            <button id="add" type="button" data-toggle="modal" data-target="#addPhoto"
                                    class="btn btn-success waves-effect w-md waves-light m-b-5">{{ trans('layout.add') }}</button>
                        </div>
                        <div class="pull-right">
                            <button id="select-delete" type="button" data-select="{{ trans('layout.select-delete') }}"
                                    data-cancel="{{ trans('layout.cancel-delete') }}"
                                    class="btn btn-warning waves-effect w-md waves-light m-b-5">{{ trans('layout.select-delete') }}</button>
                            <button id="delete" type="button"
                                    class="btn btn-danger waves-effect w-md waves-light m-b-5" style="display: none">{{ trans('layout.delete') }}</button>
                        </div>
                    </div>
                </div>

                <div class="row port">
                    <div id="photo-container" class="portfolioContainer">
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

        <!-- FOOTER -->
        @include('auth.layouts.footer')
        <!-- End FOOTER -->

    </div>
    <div id="addPhoto" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">{{ trans('photo.upload-file') }}</h4>
                    <small>{{ trans('photo.upload-file-detail') }}</small>
                </div>
                <div class="modal-body">
                    {!! Form::open(array('url' => '/admin/gallery/upload', 'method' => 'POST', 'files' => true, 'id' => 'uploadfile', 'class' => 'dropzone')) !!}
                        <button type="submit" class="btn btn-primary pull-right">{{ trans('photo.upload-file') }}</button>
                    {!! Form::close() !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">{{ trans('layout.close') }}</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

@endsection
@section('footerjs')
    <script src="/auth/plugins/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="/auth/plugins/masonry/dist/masonry.pkgd.min.js"></script>
    <script src="/auth/plugins/waypoints/lib/jquery.waypoints.js"></script>
    <script src="/auth/plugins/sweetalert/dist/sweetalert.min.js"></script>
    <script src="/auth/plugins/dropzone/dist/dropzone.js"></script>
    <script>
        var page = 2,
            $photoContainer = $('#photo-container'),
            $selectDelete = $('#select-delete'),
            $delete = $('#delete');
        $photoContainer.imagesLoaded( function() {
            $photoContainer.masonry({
                columnWidth: '.photo-item',
                itemSelector: '.photo-item'
            });
        });
        $(document).on('click', '.select-active .gal-detail', function (e) {
            e.preventDefault();
            $(this).toggleClass('active');
        });
        $photoContainer.waypoint({
            handler: function(direction) {
                if(direction == 'down') callApi();
            },
            offset: 'bottom-in-view'
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
        $selectDelete.on('click', function(){
            var $this = $(this),
                cancelText = $this.data('cancel'),
                selectText = $this.data('select');
            $delete.toggle();
            if(selectText == $this.text()){
                $photoContainer.addClass('select-active');
                $this.text(cancelText);
            }else if (cancelText == $this.text()){
                $photoContainer.removeClass('select-active');
                $('.gal-detail.active').removeClass("active");
                $this.text(selectText);
            }
        });
        $delete.on('click', function(){
            var id = [];
            $('.gal-detail.active').each(function(){
                id.push($(this).data('id'));
            });
            swal({
                title: "您確定要刪除？",
                text: "您將無法回復刪除",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "是，請刪除!",
                cancelButtonText: "否，取消！",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function(isConfirm){
                if (isConfirm) {
                    $.ajax({
                        type: "POST",
                        url: '/admin/gallery/delete',
                        data: {
                            id: id
                        },
                        success: function(data){
                            var status = data['status'];
                            if(status == 'success')
                            {
                                swal("刪除", "檔案已刪除", "success");
                                $('.gal-detail.active').remove();
                                $photoContainer.masonry('layout');
                            }
                            else
                            {
                                swal("刪除失敗", "檔案刪除失敗，請重新操作", "error");
                            }
                        }
                    },'json');
                } else {
                    swal("取消刪除", "您的檔案尚未被刪除：)", "error");
                    $('.gal-detail.active').removeClass("active");
                }
            });
        });
        $(function(){
            $('#uploadfile').dropzone({
                autoProcessQueue: false,
                uploadMultiple: true,
                maxFiles: 20,
                maxFilesize: 2,
                parallelUploads: 20,
                // Dropzone settings
                init: function() {
                    var myDropzone = this;
                    this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        myDropzone.processQueue();
                    });
                    this.on('successmultiple', function(file,data){
                        $items = $(data);
                        $photoContainer.prepend($items);
                        $items.imagesLoaded().progress( function(imgLoad, image) {
                            var $item = $( image.img ).parents('.photo-item');
                            $item.show();
                            $photoContainer.masonry( 'prepended', $item)
                        });
                        // 全部 load 完 Refresh Waypoint
                        $items.imagesLoaded(function(){
                            $photoContainer.masonry('layout');
                            Waypoint.refreshAll();
                        });
                    })
                }
            });
        });
    </script>
@endsection