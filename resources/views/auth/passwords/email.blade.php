@extends('auth.master')

<!-- Main Content -->
@section('content')
    <div class="wrapper-page">

        @include('auth.layouts.logo')

        <form class="text-center m-t-20" role="form" method="POST" action="{{ url('/password/email') }}">
            {{ csrf_field() }}

            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ trans('passwords.reset-form') }}
            </div>
            <div class="form-group m-b-0{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="input-group">
                    <input id="email" type="email" class="form-control" name="email" placeholder="{{ trans('validation.attributes.email') }}" value="{{ $email or old('email') }}" required="">
                    <i class="zmdi zmdi-email form-control-feedback l-h-34" style="left:6px;"></i>
                    <span class="input-group-btn"> <button type="submit" class="btn btn-email btn-primary waves-effect waves-light">Reset</button> </span>
                </div>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

        </form>
    </div>
@endsection
