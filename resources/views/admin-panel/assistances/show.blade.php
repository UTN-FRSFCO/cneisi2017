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
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios<i style="margin-left:5px;" class="fa fa-chevron-down"></i><i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-user"></i></a>
                        <ul class="dropdown-menu forAnimate" style="margin:20px;">
                            <li><a href="{{ route('panel.admin.users') }}">Ver todos</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Informes</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Speakers<i style="margin-left:5px;" class="fa fa-chevron-down"></i><span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-lightbulb-o"></span></a>
                        <ul class="dropdown-menu forAnimate" style="margin:20px;">
                            <li><a href="{{ route('panel.admin.speakers') }}">Ver todos</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Informes</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Eventos<i style="margin-left:5px;" class="fa fa-chevron-down"></i><span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-list"></span></a>
                        <ul class="dropdown-menu forAnimate" style="margin:20px;">
                            <li><a href="{{ route('panel.admin.events') }}">Ver todos</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Informes</a></li>
                        </ul>
                    </li>
                    <li class="open">
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
                <h2> Asistencias - {{ $event->getTitle() }}</h2>
                <div class="col-md-12">
                    @if (session('status'))
                        <div class="alert alert-success"><em> {!! session('status') !!}</em></div>
                    @endif
                    <div class="panel panel-default panel-table">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col col-xs-6">
                                    <h3 class="panel-title">Cantidad de asistencias: <strong> {{ $total }} </strong></h3>
                                </div>
                                {{--<div class="col col-xs-6 text-right">--}}
                                {{--<a href="{{ route('event.createEvent') }}">Crear nuevo</a>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-list">
                                <thead>
                                <tr>
                                    <th><em class="fa fa-cog"></em></th>
                                    <th>Id</th>
                                    <th>Nombre y apellido</th>
                                    <th>DNI</th>
                                    <th>Fecha</th>
                                    <th>Portero</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($assistances as $assistance)

                                    <tr>
                                        <td align="center" class ="first-column">
                                            <form method="post" action="{{route('assistance.delete', ['id' => $assistance->getId()])}}">

                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                            @include(
                                                    'admin-panel.confirm',
                                                    [
                                                        'id'       => 'delete-category-' . $assistance->getId(),
                                                        'title'    => 'Confirmar borrado',
                                                        'question' => '¿Seguro que desea confirmar el borrado de la asistencia id: '.$assistance->getId().'?'  ,
                                                    ]
                                                )

                                            <div class="form-group">
                                                <a class="pull-right buy-btn"
                                                   style="color: red"
                                                   data-toggle="modal"
                                                   data-modal-link="delete-category-{{$assistance->getId()}}">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </div>

                                            </form>

                                        </td>
                                        <td class="align-center">{{ $assistance->getId() }}</td>
                                        <td class="align-center">{{ $assistance->getDni() }}</td>
                                        <td class="align-center">{{ $assistance->getDni() }}</td>
                                        <td class="align-center">{{ $assistance->getDate() }} min</td>
                                        <td class="align-center"><b>{{ $assistance->getCatcherName() }}</b></td>
                                    </tr>
                                @empty
                                    <tr>
                                        No se han encontrado registros
                                    </tr>
                                @endforelse

                                </tbody>
                            </table>

                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col col-xs-12 align-right">
                                    {{ $assistances->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success"><em> {!! session('status') !!}</em></div>
                    @endif
                </div>

            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script type="text/javascript" src="{{asset('/js/admin-panel.js')}}"></script>
@endpush
