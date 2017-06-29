@extends('layouts.master')

@section('title', 'Mensaje bienvenida - CNEISI')
@section('description', 'Información del CNEISI - Congreso Nacional de Estudiantes de Ingenieria en Sistemas de Informacion')
@section('keywords', 'cneisi, utn, argentina, universidad, congreso, evento')
@section('author', 'UTN-FRSF')

@include('components.menu')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default" style="margin-bottom: 150px;">
                    <div class="panel-body">
                        <div class="col-md-12 align-center" style="margin-bottom: 30px;">
                            <a href="#" class="logo">
                                <img src="{{asset('/img/logo-utn.png')}}" alt="Cneisi" width="179" height="179" class="retina-hide">
                            </a>
                            <p class="text-center"><h2 class="highlight">
                                Muchas gracias por registrarte para el congreso!</br></br>
                            </h2></p>
                            <p class="text-center"><h3 class="username">
                                Estamos definiendo el cronograma de eventos
                                para que poder darlo a conocer a todos los participantes.
                            </h3></p>
                            <p class="text-center"><h4 class="username" style="color: orangered;">
                                <br><br><strong>Te avisaremos cuando haya novedades!</strong>
                            </h4></p>
                            <p class="text-center">
                                <br><br>
                                A continuación te solicitaremos que completes tu perfil con tus datos personales.
                            <div class="col-md-6 col-md-offset-3">
                                <a href="{{ route('user.panel') }}" class="btn btn-outline-clr btn-sm">{{ trans('buttons.continue') }} <span class="fa fa-chevron-right"></a>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
