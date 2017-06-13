@extends('layouts.master')
@include('components.menu')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default" style="margin-bottom: 200px;">
                <h5 class="align-center" style="margin-top: 20px"><span class="highlight">{{ trans('strings.reset_password_title') }}</span></h5>

                <div class="panel-body">
                    <div class="panel-body">
                        <form class="align-center" role="form" method="POST" action="{{ route('password.email') }}">
                            {{ csrf_field() }}

                            <fieldset class="col-sm-12">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                    <label for="email" class="label-reset">{{ trans('strings.email') }}</label>
                                    <input id="email" name="email" class="form-control email-reset" type="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block" style="color: orangered">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif

                                </div>
                            </fieldset>

                            <div class="form-group">

                                <button type="submit" class="btn btn-primary button-reset">
                                    {{ trans('strings.reset_password_email_button') }}
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection