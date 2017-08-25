@extends('layouts.master')

@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('/css/admin-panel.css')}}" />
@endpush

@section('title', 'Panel de administración | CNEISI 2017')
@section('description', 'Información del CNEISI - Congreso Nacional de Estudiantes de Ingenieria en Sistemas de Informacion')
@section('author', 'UTN-FRSF')
@section('robots', 'noindex, nofollow')

@include('components.menu')
@section('content')

<nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{ route('panel.admin') }}">Inicio<i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-home"></i></a></li>
            <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios<i style="margin-left:5px;" class="fa fa-chevron-down"></i><i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-user"></i></a>
                <ul class="dropdown-menu forAnimate" style="margin:20px;">
                    <li><a href="{{ route('panel.admin.users') }}">Ver todos</a></li>
                    <li class="divider"></li>
                </ul>
            </li>

            <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Speakers<i style="margin-left:5px;" class="fa fa-chevron-down"></i><span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-lightbulb-o"></span></a>
                <ul class="dropdown-menu forAnimate" style="margin:20px;">
                    <li><a href="{{ route('panel.admin.speakers') }}">Ver todos</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ route('speakers.createSpeaker') }}">Crear</a></li>
                    <li class="divider"></li>
                </ul>
            </li>

            <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Eventos<i style="margin-left:5px;" class="fa fa-chevron-down"></i><span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-list"></span></a>
                <ul class="dropdown-menu forAnimate" style="margin:20px;">
                    <li><a href="{{ route('panel.admin.events') }}">Ver todos</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ route('event.createEvent') }}">Crear</a></li>
                    <li class="divider"></li>
                </ul>
            </li>

            <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Asistencias<i style="margin-left:5px;" class="fa fa-chevron-down"></i><span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-list"></span></a>
                <ul class="dropdown-menu forAnimate" style="margin:20px;">
                    <li class="active"><a href="{{ route('panel.admin.assistances') }}">Ver todas</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Informes</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
</nav>

<!-- Main Content -->
<div class="container-fluid" >
    <div class="col-md-10">
        <div class="side-body">
            <h1> Panel de administración </h1>
            <div class="row-index">
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-user" style="margin-right:4px;"></i>Usuarios</h3>
                            <span class="pull-right clickable index"><i class="fa fa-chevron-up"></i></span>
                        </div>
                        <div class="panel-body">
                            <p>Usuarios registrados: {{ count($users) }}</p>
                            <p>Público general registrado: {{ $generalPublic}}</p>


                            <ul class="university-users">
                            @foreach($usersUniversity as $university => $userAmount)
                                @if($university == 'delta')
                                    <li>Usuarios de universidad del delta: {{ $userAmount }}</li>
                                @elseif($university == 'buenos_aires')
                                    <li>Usuarios de universidad de Buenos Aires: {{ $userAmount }}</li>
                                @elseif($university == 'cordoba')
                                    <li>Usuarios de universidad de Cordoba: {{ $userAmount }}</li>
                                @elseif($university == 'villa_maria')
                                    <li>Usuarios de universidad de Villa María: {{ $userAmount }}</li>
                                @elseif($university == 'san_francisco')
                                    <li>Usuarios de universidad de San Francisco: {{ $userAmount }}</li>
                                @elseif($university == 'tucuman')
                                    <li>Usuarios de universidad de Tucuman: {{ $userAmount }}</li>
                                @elseif($university == 'santa_fe')
                                    <li>Usuarios de universidad de Santa Fe: {{ $userAmount }}</li>
                                @elseif($university == 'mendoza')
                                    <li>Usuarios de universidad de Mendoza: {{ $userAmount }}</li>
                                @elseif($university == 'resistencia')
                                    <li>Usuarios de universidad de Resistencia: {{ $userAmount }}</li>
                                @elseif($university == 'la_plata')
                                    <li>Usuarios de universidad de La Plata: {{ $userAmount }}</li>
                                @elseif($university == 'rosario')
                                    <li>Usuarios de universidad de Rosario: {{ $userAmount }}</li>
                                @elseif($university == 'concepcion_uruguay')
                                    <li>Usuarios de universidad de Concepcion del Uruguay: {{ $userAmount }}</li>
                                @endif



                            @endforeach
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-lightbulb-o" style="margin-right:4px;"></i>Speakers</h3>
                            <span class="pull-right clickable index"><i class="fa fa-chevron-up"></i></span>
                        </div>
                        <div class="panel-body">Cantidad de speakers: {{ count($speakers) }}</div>
                    </div>
                </div>
            </div>
            <div class="row-index">
                <div class="col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-list" style="margin-right:4px;"></i>Eventos</h3>
                            <span class="pull-right clickable index"><i class="fa fa-chevron-up"></i></span>
                        </div>
                        <div class="panel-body">Cantidad de eventos: {{ count($events) }}</div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


@endsection

@push('scripts')
<script type="text/javascript" src="{{asset('/js/admin-panel.js')}}"></script>
@endpush
