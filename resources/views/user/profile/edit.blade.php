@extends('layouts.master')

@section('title', 'Editar perfil - CNEISI')
@section('description', 'Información del CNEISI - Congreso Nacional de Estudiantes de Ingenieria en Sistemas de Informacion')
@section('keywords', 'cneisi, utn, argentina, universidad, congreso, evento')
@section('author', 'UTN-FRSF')

@include('components.menu')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" style="margin-bottom: 200px;">
                    @if(empty($userProfile->getDni()))
                        <h5 class="align-center" style="margin-top: 25px;"><span class="highlight">Para continuar, rellene su perfil</span></h5>
                    @else
                        <h5 class="align-center" style="margin-top: 25px;"><span class="highlight">Editar perfil</span></h5>
                    @endif
                    <div class="panel-body">
                        <div class="panel-body">
                            @if (Session::has('success'))
                                <div class="alert alert-success">{!! Session::get('success') !!}</div>
                            @endif
                            @if (Session::has('failure'))
                                <div class="alert alert-danger">{!! Session::get('failure') !!}</div>
                            @endif
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('profile.update', Auth::user()->userProfile->id) }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="PUT">

                                <div class="form-group{{ $errors->has('dni') ? ' has-error' : '' }}">
                                    <label for="dni" class="col-md-4 control-label">{{ trans('strings.dni') }}</label>
                                    <div class="col-md-6">
                                        <input id="dni" type="number" class="form-control" name="dni" value="{{ $userProfile->getDni() }}" required autofocus>
                                        @if ($errors->has('dni'))
                                            <span class="help-block">
                                                {{ $errors->first('dni') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('userType') ? ' has-error' : '' }}">
                                    <label for="userType" class="col-md-4 control-label">{{ trans('strings.type') }}</label>
                                    <div class="col-md-6">
                                        <select name="userType" id='userType' required class="select-form" value="">
                                            <option value=""></option>
                                            @foreach ($userTypes as $key => $userType)
                                                <option value="{{ $userType}}" {{ ($userProfile->getUserType() == $userType ? "selected":"") }}>{{ trans('strings.'.$userType) }}</option>
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
                                    <label for="university_region" class="col-md-4 control-label">{{ trans('strings.region') }}</label>
                                    <div class="col-md-6">
                                        <select name="university_region" class="select-form" value="{{ $userProfile->getUniversityRegion() }}">
                                            <option value=""></option>
                                            @foreach ((array) $universities as $key => $university)
                                                <option value="{{$key}}" {{ ($userProfile->getUniversityRegion() == strtolower($key) ? "selected":"") }}>{{ $university }}</option>
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
                                    <label for="legajo" class="col-md-4 control-label">{{ trans('strings.legajo') }}</label>
                                    <div class="col-md-6">
                                        <input id="legajo" type="number" class="form-control" name="legajo" value="{{ $userProfile->getLegajo() }}">
                                        @if ($errors->has('legajo'))
                                            <span class="help-block">
                                                {{ $errors->first('legajo') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4 align-center">
                                        <button type="submit" class="btn btn-primary" style="display: inline-block !important;">
                                            @if(empty($userProfile->getDni()))
                                                {{trans ('buttons.continue')}}
                                            @else
                                                {{trans ('buttons.confirm')}}
                                            @endif
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