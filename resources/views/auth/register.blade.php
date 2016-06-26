@extends('auth.master')

@section('content')
    <div class="wrapper-page">

        @include('auth.layouts.logo')

        <form class="form-horizontal m-t-20" role="form" method="POST" action="{{ url('/admin/register') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="col-xs-12">
                    <input id="name" type="text" class="form-control" name="name" placeholder="{{ trans('validation.attributes.name') }}" value="{{ old('name') }}">
                    <i class="zmdi zmdi-account-circle form-control-feedback l-h-34"></i>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="col-xs-12">
                    <input id="email" type="email" class="form-control" name="email" placeholder="{{ trans('validation.attributes.email') }}" value="{{ old('email') }}">
                    <i class="zmdi zmdi-email form-control-feedback l-h-34"></i>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="col-xs-12">
                    <input id="password" type="password" class="form-control" name="password" placeholder="{{ trans('validation.attributes.password') }}">
                    <i class="zmdi zmdi-key form-control-feedback l-h-34"></i>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <div class="col-xs-12">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="再次輸入密碼">
                    <i class="zmdi zmdi-check-circle form-control-feedback l-h-34"></i>
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group text-right m-t-20">
                <div class="col-xs-12">
                    <button class="btn btn-primary btn-custom waves-effect waves-light w-md" type="submit">註冊</button>
                </div>
            </div>

            {{--<div class="form-group m-t-30">--}}
                {{--<div class="col-sm-12 text-center">--}}
                    {{--<a href="{{ url('/login') }}" class="text-muted">Already have account?</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        </form>
    </div>
@endsection
