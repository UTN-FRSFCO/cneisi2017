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
                    <li><a href="{{ route('panel.admin') }}">Inicio<i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-home"></i></a></li>
                    <li class="open">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios<i style="margin-left:5px;" class="fa fa-chevron-down"></i><i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-user"></i></a>
                        <ul class="dropdown-menu forAnimate" style="margin:20px;">
                            <li class="active"><a href="{{ route('panel.admin.users') }}">Ver todos</a></li>
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
                <h2> Panel de administración de usuarios </h2>
                <div class="col-md-12">

                    <div class="panel panel-default panel-table">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col col-xs-6">
                                    <h3 class="panel-title">Cantidad de usuarios registrados: <strong> {{ count($users) }} </strong></h3>
                                </div>
                                <div class="col col-xs-6 text-right">
                                    <button type="button" class="btn btn-sm btn-primary btn-create">Crear nuevo</button>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-list">
                                <thead>
                                <tr>
                                    <th class="hidden-xs">Nombre</th>
                                    <th>Email</th>
                                    <th>Tipo de usuario</th>
                                    <th>Facultad regional</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($users as $user)

                                    <tr>

                                        <td>{{ $user[0] }}</td>
                                        <td>{{ $user[1] }}</td>
                                        <td>{{ $user[2] }}</td>
                                        <td>{{ $user[3] }}</td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>

                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col col-xs-12 align-right">
                                    {{ $userss->links() }}
                                </div>
                            </div>
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
