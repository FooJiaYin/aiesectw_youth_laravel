@extends('auth.master')
@section('title', '新聞稿列表｜Youth Speak 後台管理系統')
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
                                <li class="active">{{ trans('menu.press-list') }}</li>
                            </ol>
                            <h4 class="page-title">{{ trans('menu.press-list') }}</h4>
                        </div>
                    </div>
                </div>


                <div class="row">

                    <div class="col-lg-12">
                        <div class="card-box">
                            <table class="table table-striped m-0">
                                <thead>
                                <tr>
                                    <th>
                                        <div class="checkbox checkbox-primary checkbox-single" style="margin: 0;">
                                            <input id="checkbox_all" type="checkbox">
                                            <label for="checkbox_all"></label>
                                        </div>
                                    </th>
                                    <th></th>
                                    <th>狀態</th>
                                    <th>標題</th>
                                    <th class="hidden-xs hidden-sm">作者</th>
                                    <th class="hidden-xs">分類</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($presses as $press)
                                    <tr>
                                        <th scope="row">
                                            <div class="checkbox checkbox-primary checkbox-single" style="margin: 0;">
                                                <input id="checkbox_{{ $press->id }}" type="checkbox">
                                                <label for="checkbox_{{ $press->id }}"></label>
                                            </div>
                                        </th>
                                        <td>
                                            <a href="{{ action('Auth\PressController@edit', ['id' => $press->id]) }}">
                                                <button type="button"
                                                        class="btn btn-primary waves-effect w-xs waves-light m-b-5">
                                                    {{ trans('press.edit') }}
                                                </button>
                                            </a>
                                        </td>
                                        <td>{{ trans('press.mode_'.$press->status) }}</td>
                                        <td>{{ $press->title or '' }}</td>
                                        <td class="hidden-xs hidden-sm">{{ count($press->user) ? $press->user->name : '' }}</td>
                                        <td class="hidden-xs">{{ count($press->category) ? trans('category.'.$press->category->slug) : '' }}</td>
                                    </tr>
                                @empty
                                @endforelse

                                </tbody>
                            </table>
                            <div class="text-center">
                                {{ $presses->render() }}
                            </div>
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
@endsection