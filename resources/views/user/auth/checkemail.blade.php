@extends('layouts.master')

@section('title', 'Recuperar contraseña | CNEISI 2017')
@section('description', 'Información del CNEISI - Congreso Nacional de Estudiantes de Ingenieria en Sistemas de Informacion')
@section('keywords', 'cneisi, utn, argentina, universidad, congreso, evento')
@section('author', 'UTN-FRSF')
@section('robots', 'noindex, nofollow')

@include('components.menu')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default" style="margin-bottom: 300px;">
                    <h5 class="align-center" style="margin-top: 20px"><span class="highlight">{{ trans('strings.reset_password_title') }}</span></h5>

                    <div class="panel-body">
                        <div class="panel-body" style="text-align: center;">
                            Por favor, revisa tu casilla de correo.<br>
                            Te hemos enviado un mail para recuperar tu contraseña.<br><br><br>
                            <a href="/" class="btn btn-outline-clr btn-sm">Volver al inicio<span class="fa fa-chevron-left"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection