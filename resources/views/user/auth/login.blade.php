@extends('layouts.master')
@include('components.menu')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default" style="margin-bottom: 200px;">
                    <h5 class="align-center" style="margin-top: 20px"><span class="highlight">Ingresar</span></h5>

                    <div class="panel-body">
                        <div class="panel-body">
                            <form id="login-form" class="align-center" role="form" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <fieldset class="col-sm-12">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}")>

                                        <label for="email">{{ trans('strings.email' ) }}</label>
                                        <input id="email" name="email" class="form-control" type="email" value="{{ old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="help-block" style="color: orangered">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                </fieldset>

                                <fieldset class="col-sm-12">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                        <label for="password">{{ trans('strings.password') }}</label>
                                        <input id="password" name="password" class="form-control" type="password" required>
                                        @if ($errors->has('password'))
                                            <span class="help-block" style="color: orangered">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                </fieldset>

                                <fieldset class="col-sm-12 align-center" style="margin: 10px;">

                                    <input checked="checked" name="remember" type="checkbox" id="remember"> <label>{{ trans('strings.remember_me') }}</label>

                                </fieldset>


                                <fieldset class="col-sm-12 align-center" style="margin: 10px;">

                                    <a href="{{ route('forgot.password') }}" id="forgot-password">{{ trans('strings.forgot_password') }}</a>

                                </fieldset>

                                <fieldset class="col-sm-12 align-center" style="margin: 10px;">

                                    <button type="submit" class="btn btn-primary">
                                        {{ trans('strings.login_button') }}
                                    </button>

                                </fieldset>

                                <fieldset class="col-sm-12" style="text-align:center; margin: 10px;">

                                    <h6><span class="highlight">{{ trans('strings.login-with') }}</span></h6>
                                    <a href="redirect/facebook"><span class="fa fa-facebook-official fa-2x"></span></a>
                                    <a href="redirect/twitter"><span class="fa fa-twitter fa-2x"></span></a>

                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection