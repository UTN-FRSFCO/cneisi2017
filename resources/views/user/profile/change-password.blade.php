@extends('layouts.master')
@include('components.menu')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2" style="margin-bottom: 100px;">
                <div class="panel panel-default">
                    <h5 class="align-center" style="margin-top: 20px;"><span class="highlight">{{ trans('strings.change-password-title') }}</span></h5>

                    <div class="panel-body">
                        @if (Session::has('success'))
                            <div class="alert alert-success">{!! Session::get('success') !!}</div>
                        @endif
                        @if (Session::has('failure'))
                            <div class="alert alert-danger">{!! Session::get('failure') !!}</div>
                        @endif
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('password.change') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('currentPassword') ? ' has-error' : '' }}">
                                <label for="currentPassword" class="col-md-4 control-label">{{ trans('strings.currentPassword') }}</label>

                                <div class="col-md-6">
                                    <input id="currentPassword" type="password" class="form-control" name="currentPassword" value="" required autofocus>

                                    @if ($errors->has('currentPassword'))
                                        <span class="help-block" style="color: orangered">
                                        <strong>{{ $errors->first('currentPassword') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">{{ trans('strings.new-password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block" style="color: orangered">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password-confirm" class="col-md-4 control-label">{{ trans('strings.confirm-new-password') }}</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block" style="color: orangered">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ trans('buttons.change-password') }}
                                    </button>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-8">
                                    <a href="{{ route('user.panel') }}" class="btn btn-outline-clr btn-sm">{{ trans('buttons.back-profile') }}</a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
