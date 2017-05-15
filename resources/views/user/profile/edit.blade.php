@extends('layouts.master')
@include('layouts.menu')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" style="margin-bottom: 200px;">
                    <h5 class="align-center"><span class="highlight">Para continuar, rellene su perfil</span></h5>
                    <div class="panel-body">
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('profile.update', Auth::user()->userProfile->id) }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="PUT">

                                <div class="form-group{{ $errors->has('dni') ? ' has-error' : '' }}">
                                    <label for="dni" class="col-md-4 control-label">{{ trans('profiles.dni') }}</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text" type="number" class="form-control" name="dni" value="{{ old('dni') }}" required autofocus>
                                        @if ($errors->has('dni'))
                                            <span class="help-block">
                                                {{ $errors->first('dni') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('userType') ? ' has-error' : '' }}">
                                    <label for="userType" class="col-md-4 control-label">{{ trans('profiles.type') }}</label>
                                    <div class="col-md-6">
                                        <select name="userType" id='userType' required class="select-form">
                                            <option value=""></option>
                                            @foreach ($userTypes as $key => $userType)
                                                <option value="{{ $userType}}" {{ (old("userType") == $userType ? "selected":"") }}>{{ trans('profiles.'.$userType) }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('userType'))
                                            <span class="help-block">
                                                {{ $errors->first('userType') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('university_region') ? ' has-error' : '' }}" id="university_region">
                                    <label for="university_region" class="col-md-4 control-label">{{ trans('profiles.region') }}</label>
                                    <div class="col-md-6">
                                        <select name="university_region" class="select-form" value="{{ old('university_region') }}">
                                            <option value=""></option>
                                            @foreach ((array) $universities as $key => $value)
                                                {
                                                <option value="{{$key}}">{{$value}}</option>
                                                }
                                            @endforeach
                                        </select>
                                        @if ($errors->has('university_region'))
                                            <span class="help-block">
                                                {{ $errors->first('university_region') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('legajo') ? ' has-error' : '' }}" id="legajo">
                                    <label for="legajo" class="col-md-4 control-label">{{ trans('profiles.legajo') }}</label>
                                    <div class="col-md-6">
                                        <input id="legajo" type="text" type="number" class="form-control" name="legajo" value="{{ old('legajo') }}">
                                        @if ($errors->has('legajo'))
                                            <span class="help-block">
                                                {{ $errors->first('legajo') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{trans ('buttons.continue')}}
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
        $(document).ready(function(){

            var e = document.getElementById("userType");
            var userType = e.options[e.selectedIndex].value;

            switch(userType) {
                case 'student':
                    break;
                case 'graduated':
                    $("#legajo").hide();
                    break;
                case 'general_audience':
                    $("#legajo").hide();
                    $("#university_region").hide();
                    break;
                default:
                    $("#legajo").hide();
                    $("#university_region").hide();
            }

            $('#userType').change(function() {
                if ( this.value === 'general_audience')
                {
                    $("#university_region").hide();
                    $("#legajo").hide();
                }
                if ( this.value === 'graduated')
                {
                    $("#legajo").hide();
                    $("#university_region").show();
                }
                if ( this.value === 'student')
                {
                    $("#university_region").show();
                    $("#legajo").show();
                }
            });
        });
    </script>
@endsection