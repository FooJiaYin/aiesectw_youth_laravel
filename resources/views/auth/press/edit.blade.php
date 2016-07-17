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
                                    <input id="photo_id" name="photo_id" type="file" />
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
@endsection
@section('footerjs')
    {{--<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>--}}
    <script src="/auth/plugins/tinymce/tinymce.min.js"></script>
    <script>
        $(function () {
            if($("#mce-editor-container").length > 0){
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
//                        $('.mce-edit-area').css({ marginTop: editingBox});
                    }

                });
            }

        });
    </script>
@endsection