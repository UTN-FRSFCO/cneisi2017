@extends('layouts.master')

@section('title', 'Panel de usuario - CNEISI')
@section('description', 'Información del CNEISI - Congreso Nacional de Estudiantes de Ingenieria en Sistemas de Informacion')
@section('keywords', 'cneisi, utn, argentina, universidad, congreso, evento')
@section('author', 'UTN-FRSF')

@include('components.menu')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default" style="margin-bottom: 100px;">
                    <div class="panel-body">
                        <div class="col-md-12 align-center" style="margin-bottom: 30px;">
                            <p class="text-center"><span class="fa fa-user fa-4x"></span></p>
                            <p class="text-center"><h3 class="username">{{ $user->getName() }} {{ $user->getLastname() }}</h3></p>
                        </div>

                        <div class="row">
                            <div class="col-xs-6 align-right">
                                <h6 class="heading-alt">DNI</h6>
                            </div>
                            <div class="col-xs-6  align-left">
                                <h6 class="highlight">{{ $profile->getDni() }}</h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6 align-right">
                                <h6 class="heading-alt">Tipo de usuario</h6>
                            </div>
                            <div class="col-xs-6 align-left">
                                <h6 class="highlight">{{ trans('strings.'. $profile->getUserType()) }}</h6>
                            </div>
                        </div>

                        @if($profile->getUserType() != 'general_audience')
                        <div class="row">
                            <div class="col-xs-6 align-right">
                                <h6 class="heading-alt">Fac. Regional</h6>
                            </div>
                            <div class="col-xs-6 align-left">

                                <h6 class="highlight">{{ $university }}</h6>
                            </div>
                        </div>
                        @endif

                        @if($profile->getUserType() == 'student')
                            <div class="row">
                                <div class="col-xs-6 align-right">
                                    <h6 class="heading-alt">Legajo</h6>
                                </div>
                                <div class="col-xs-6 align-left">
                                    <h6 class="highlight">{{ $profile->getLegajo() }}</h6>
                                </div>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-xs-3 align-center">

                            </div>
                            <div class="col-xs-6 align-center" style="margin-top: 30px;">
                                <a href="{{ route('profile.update.form') }}" class="btn btn-outline-clr btn-sm">Editar</a>
                            </div>
                            <div class="col-xs-3 align-center">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-3 align-center">

                            </div>
                            <div class="col-xs-6 align-center" style="margin-top: 30px;">
                                <a href="{{ route('password.change') }}" class="btn btn-outline-clr btn-sm">Cambiar contraseña</a>
                            </div>
                            <div class="col-xs-3 align-center">

                            </div>
                        </div>

                    </div>
                </div>
            </div>

                <div class="col-md-4">
                    <div class="panel panel-default" style="margin-bottom: 50px;">

                        <h5 class="align-center" style="margin-top: 25px;"><span class="highlight">Próximos eventos</span></h5>
                        <div class="panel-body">
                            <div class="panel-body">
                                @if(count($conferences) != 0)
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Fecha</th>
                                            <th>Titulo</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($conferences as $conference)
                                            <tr>
                                                <td class="align-center">{{ $conference->getDate() }}</td>
                                                <td>{{ $conference->getTitle() }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Fecha</th>
                                            <th>Titulo</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="align-center"></td>
                                                <td>No hay eventos cargados</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @if(count($conferencesAssistances) != 0)
                <div class="col-md-8">
                    <div class="panel panel-default" style="margin-bottom: 50px;">

                        <h5 class="align-center" style="margin-top: 25px;"><span class="highlight">Eventos en los que te interesaste</span></h5>
                        <div class="panel-body">
                            <div class="panel-body">

                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Fecha</th>
                                            <th>Speaker</th>
                                            <th>Titulo</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($conferencesAssistances as $conference)
                                            <tr>
                                                <td>{{ $conference->getDate() }}</td>
                                                <td>{{ $conference->getSpeaker()['name'] }}</td>
                                                <td>{{ $conference->getTitle() }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection