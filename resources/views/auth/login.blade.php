@extends('auth.master')

@section('content')
    <div class="wrapper-page">


        <form class="form-horizontal m-t-20" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

            @include('auth.layouts.logo')

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="col-xs-12">
                    <input id="email" name="email" class="form-control" type="email" required="" placeholder="{{ trans('validation.attributes.email') }}">
                    <i class="zmdi zmdi-account-circle form-control-feedback l-h-34"></i>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="col-xs-12">
                    <input id="password" type="password" class="form-control" name="password" required="" placeholder="{{ trans('validation.attributes.password') }}">
                    <i class="zmdi zmdi-key form-control-feedback l-h-34"></i>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-12">
                    <div class="checkbox checkbox-primary">
                        <input id="checkbox-signup" type="checkbox">
                        <label for="checkbox-signup">
                            Remember me
                        </label>
                    </div>

                </div>
            </div>

            <div class="form-group text-right m-t-20">
                <div class="col-xs-12">
                    <button class="btn btn-primary btn-custom w-md waves-effect waves-light" type="submit">Log In
                    </button>
                </div>
            </div>

            <div class="form-group m-t-30">
                <div class="col-sm-12 text-center">
                    <a href="{{ url('/password/reset') }}" class="text-muted">
                        <i class="fa fa-lock m-r-5"></i>
                        Forgot your password?
                    </a>
                </div>
                {{--<div class="col-sm-5 text-right">--}}
                    {{--<a href="{{ url('/register') }}" class="text-muted">Create an account</a>--}}
                {{--</div>--}}
            </div>
        </form>
    </div>
@endsection

@section('footerjs')
    <!-- Custom main Js -->
    <script src="/auth/js/jquery.core.js"></script>
    <script src="/auth/js/jquery.app.js"></script>
@endsection
