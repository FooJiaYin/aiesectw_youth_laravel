@extends('auth.master')
@section('title', trans('press.'.$action).trans('press.press').'｜Youth Speak 後台管理系統')
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
                                <li>{{ trans('menu.press') }}</li>
                                @if($action == 'create')
                                    <li class="active">{{ trans('menu.press-new') }}</li>
                                @else
                                    <li class="active">{{ trans('menu.press-edit') }}</li>
                                @endif
                            </ol>
                            @if($action == 'create')
                                <h4 class="page-title">{{ trans('menu.press-new') }}</h4>
                            @else
                                <h4 class="page-title">{{ trans('menu.press-edit') }}</h4>
                            @endif
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            @if($action == 'create')
                            {!! Form::open(['action' => ['Auth\PressController@store'], 'method' => 'post', 'class' => 'form-horizontal']) !!}
                            @else
                            {!! Form::open(['action' => ['Auth\PressController@update', $press->id], 'method' => 'put', 'class' => 'form-horizontal']) !!}
                            @endif
                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-1 control-label">{{ trans('press.title') }}</label>
                                <div class="col-md-8">
                                    <input id="title" type="text" name="title" class="form-control" value="{{ $press->title or old('title') }}"/>
                                </div>
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('excerpt') ? ' has-error' : '' }}">
                                <label for="excerpt" class="col-md-1 control-label">{{ trans('press.excerpt') }}</label>
                                <div class="col-md-8">
                                    <textarea id="excerpt" name="excerpt" class="form-control">{{ $press->excerpt or old('excerpt') }}</textarea>
                                </div>
                                @if ($errors->has('excerpt'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('excerpt') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('photo_id') ? ' has-error' : '' }}">
                                <label for="photo_id" class="col-md-1 control-label">{{ trans('press.photo_id') }}</label>
                                <div class="col-md-8">
                                    <div id="front_preview" data-toggle="modal" data-target="#frontPhoto" style="cursor: pointer;">
                                    @if((isset($press) && count($press->photo)) || old('photo_id'))
                                        <img src="{{ $press->photo->path }}" width="100"/>
                                    @else
                                        <button type="button"
                                                class="btn btn-success waves-effect w-xs waves-light m-r-10">{{ trans('photo.select-front-image') }}</button>
                                    @endif
                                    </div>
                                    <input type="hidden" id="photo_id" name="photo_id" value="{{ $press->photo_id or old('photo_id') }}"/>
                                </div>
                                @if ($errors->has('photo_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('photo_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                                <label for="category_id" class="col-md-1 control-label">{{ trans('press.category_id') }}</label>
                                <div class="col-md-2">
                                    <select id="category_id" name="category_id" class="form-control">
                                        <option value=""></option>
                                        @foreach($categories as $category)
                                            @if(!isset($category_only_once) && ($category->id == old('category_id') || (!old('category_id') && isset($press) && $category->id == $press->category_id)))
                                                <option value="{{ $category->id }}" selected="selected">{{ trans('category.'.$category->slug) }}</option>
                                                <?php $category_only_once = 1 ?>
                                            @else
                                                <option value="{{ $category->id }}">{{ trans('category.'.$category->slug) }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                @if ($errors->has('category_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                                <label for="status" class="col-md-1 control-label">{{ trans('press.status') }}</label>
                                <div class="col-md-2">
                                    <select id="status" name="status" class="form-control">
                                        @for($i=1;$i<=4;$i++)
                                            @if(!isset($status_only_once) && ($i == old('status') || ( !old('status') && isset($press) && $i == $press->status)))
                                                <option value="{{ $i }}" selected="selected">{{ trans('press.mode_'.$i) }}</option>
                                                <?php $status_only_once = 1 ?>
                                            @else
                                                <option value="{{ $i }}">{{ trans('press.mode_'.$i) }}</option>
                                            @endif
                                        @endfor
                                    </select>
                                </div>
                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                                <label for="content" class="col-md-1 control-label">{{ trans('press.content') }}</label>
                                <div id="mce-editor-container" class="col-md-11">
                                    <textarea id="content" name="content" class="form-control">{{ $press->content or old('content') }}</textarea>
                                    @if ($errors->has('content'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('content') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success waves-effect w-xs waves-light m-r-10 pull-right">{{ trans('press.save') }}</button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>



            </div>
            <!-- end container -->

        </div>
        <!-- end content -->



        <!-- FOOTER -->
    @include('auth.layouts.footer')
    <!-- End FOOTER -->

    </div>
    <div id="frontPhoto" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-full">
            <div class="modal-content p-0">
                {{--<div style="display: inline-block;">--}}
                    {{--<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>--}}
                {{--</div>--}}
                <ul class="nav nav-tabs navtab-custom nav-justified">
                    <li class="">
                        <a href="#upload-front-photo" data-toggle="tab" aria-expanded="false">
                            <span class="visible-xs">{{ trans('photo.upload-front-image') }}</span>
                            <span class="hidden-xs">{{ trans('photo.upload-front-image') }}</span>
                        </a>
                    </li>
                    <li class="active">
                        <a id="select-front-photo-link" href="#select-front-photo" data-toggle="tab" aria-expanded="false">
                            <span class="visible-xs">{{ trans('photo.select-front-image') }}</span>
                            <span class="hidden-xs">{{ trans('photo.select-front-image') }}</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content bg-muted">
                    <div class="tab-pane" id="upload-front-photo">
                        <div>
                            {!! Form::open(array('url' => '/admin/gallery/upload', 'method' => 'POST', 'files' => true, 'id' => 'uploadfile', 'class' => 'dropzone')) !!}
                            <button type="submit" class="btn btn-primary pull-right">{{ trans('photo.upload-file') }}</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="tab-pane active" id="select-front-photo">
                        <div>
                            <div id="photo-container" class="portfolioContainer select-active" style="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">{{ trans('layout.close') }}</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@section('footerjs')
    {{--<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>--}}
    <script src="/auth/plugins/tinymce/tinymce.min.js"></script>
    <script src="/auth/plugins/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="/auth/plugins/masonry/dist/masonry.pkgd.min.js"></script>
    <script src="/auth/plugins/waypoints/lib/jquery.waypoints.js"></script>
    <script src="/auth/plugins/dropzone/dist/dropzone.js"></script>
    <script>
        var page = 1,
            $photoContainer = $('#photo-container'),
            $photoModal = $('#frontPhoto'),
            $selectFrontTab = $('#select-front-photo'),
            $selectFrontLink = $('#select-front-photo-link'),
            $grid;
        $photoContainer.imagesLoaded( function() {
            $grid = $photoContainer.masonry({
                columnWidth: '.photo-item',
                itemSelector: '.photo-item'
            });
        });

        $('#frontPhoto').on('shown.bs.modal', function (e) {
            callPhotoApi();
            $(this).unbind(e);
        });
        $('#front-image-button').on('click', function (e) {
            e.preventDefault();

        });
        $(document).on('click', '.select-active .gal-detail', function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            var src = $(this).find('img').attr('src');
            $('#photo_id').val(id);
            $('#front_preview').html('<img src="' + src + '" width="100"/>');
            $('#frontPhoto').modal('hide');
        });

        function callPhotoApi() {
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
                            var $item = $(image.img).parents('.photo-item');
                            $item.show();
                            $photoContainer.masonry('appended', $item);
                        });
                        // 全部 load 完 Refresh Waypoint
                        $items.imagesLoaded(function(){
                            $photoContainer.masonry('layout');
                            setTimeout(function(){
                                new Waypoint({
                                    element: $('#last-child'),
                                    handler: function(direction) {
                                        if($selectFrontTab.is(':visible')){
                                            alert('show');
                                            $('#last-child').removeAttr('id');
                                            if(direction == 'down') {
                                                callPhotoApi();
                                                this.destroy();
                                            }
                                        }
                                    },
                                    offset: 'bottom-in-view',
                                    context: $photoModal
                                });
                            }, 1000);
                        });
                        page++;
                    }else{
                        Waypoint.destroyAll();
                    }
                }
            });
        }


        $(function () {
            if($("#mce-editor-container").length > 0){
                // 初始化 tiny mce
                tinymce.init({
                    selector: "textarea#content",
                    language: 'zh_TW',
                    theme: "modern",
                    height:300,
                    paste_as_text: true,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor imageupload imagetools autoresize imagebrowse"
                    ],
                    toolbar: "removeformat undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image imageupload imagebrowse | print preview media fullpage | forecolor backcolor emoticons",
                    style_formats: [
                        {title: '文中小標', block: 'h2'},
                    ]
                });
                // 置頂mcd editor 編輯工具列
                $(window).on('scroll resize', function () {
                    var value = $('body').scrollTop(),
                            editing = $('#mce-editor-container').offset().top,
                            editingBottom = $('#mce-editor-container').offset().top + $('#mce-editor-container').outerHeight(),
                            menubar = $('.mce-menubar').outerHeight(),
                            toolbar = $('.navbar-default').outerHeight(),
                            editingBox = $('#mceu_33').outerHeight(),
                            optimize = $('#mce-editor-container').outerHeight()-300 < 0 ? 0 : $('#mce-editor-container').outerHeight()-300 ;
                    if(value > editing-toolbar+menubar && value < editingBottom-300){
                        $('#mceu_33').css({
                            position: 'fixed',
                            top: toolbar+'px',
                            width: $('.mce-edit-area').width() - 12
                        });
                        $('.mce-edit-area').css({ marginTop: editingBox});
                    }else if(value < editing-toolbar+menubar){
                        $('#mceu_33').css({
                            position: 'static',
                            top: '0px',
                            width: 'auto'
                        });
                        $('.mce-edit-area').css({ marginTop: 0});
                    }else if(value > editingBottom-300){
                        $('#mceu_33').css({
                            position: 'absolute',
                            top:  menubar+'px',
                            width: 'auto'
                        });
                    }
                });
            }

            $('#uploadfile').dropzone({
                    autoProcessQueue: true,
                    uploadMultiple: false,
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
                        this.on('success', function(file,data){
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
                            $selectFrontLink.trigger('click');
                        })
                    }
                });
        });
    </script>
@endsection