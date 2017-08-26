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

                    <li class="open">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Speakers<i style="margin-left:5px;" class="fa fa-chevron-down"></i><span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-lightbulb-o"></span></a>
                        <ul class="dropdown-menu forAnimate" style="margin:20px;">
                            <li><a href="{{ route('panel.admin.speakers') }}">Ver todos</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('speakers.createSpeaker') }}">Crear nuevo</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Informes</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Eventos<i style="margin-left:5px;" class="fa fa-chevron-down"></i><span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-list"></span></a>
                        <ul class="dropdown-menu forAnimate" style="margin:20px;">
                            <li><a href="{{ route('panel.admin.events') }}">Ver todos</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('event.createEvent') }}">Crear</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Informes</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                @if (session('status'))
                    <div class="alert alert-success"><em> {!! session('status') !!}</em></div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading">Editar Evento</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{route('event.edit', ['id' => $event->getId()])}}">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-4 control-label">Titulo</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{$event->getTitle()}}" required autofocus>

                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                                <label for="slug" class="col-md-4 control-label">Slug</label>

                                <div class="col-md-6">
                                    <input id="slug" type="text" class="form-control" name="slug" value="{{ $event->getSlug() }}" required>

                                    @if ($errors->has('slug'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('slug') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-4 control-label">Descripción</label>

                                <div class="col-md-6">

                                    <textarea id="description" name="description" class="form-control" required>{{ $event->getDescription() }}</textarea>
                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                                <label for="date" class="col-md-4 control-label">Dia</label>

                                <div class="col-md-6">
                                    <select id="date" type="text" class="form-control" name="date" required>
                                        <option value="day_one">Dia 1</option>
                                        <option value="day_two">Dia 2</option>
                                        <option value="day_three">Dia 3</option>
                                    </select>

                                    @if ($errors->has('date'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
                                <label for="time" class="col-md-4 control-label">Hora</label>

                                <div class="col-md-6">
                                    <input type="time" name="time" class="form-control" value="{{$event->getTime()}}" required>

                                    @if ($errors->has('time'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('time') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('duration') ? ' has-error' : '' }}">
                                <label for="duration" class="col-md-4 control-label">Duracion</label>

                                <div class="col-md-6">
                                    <select id="duration" type="text" class="form-control" name="duration" required>
                                        <option value="30">30 min</option>
                                        <option value="45">45 min</option>
                                        <option value="60">60 min</option>
                                        <option value="75">75 min</option>
                                        <option value="90">90 min</option>
                                        <option value="105">105 min</option>
                                        <option value="120">120 min</option>
                                    </select>

                                    @if ($errors->has('duration'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('duration') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('auditorium') ? ' has-error' : '' }}">
                                <label for="auditorium" class="col-md-4 control-label">Auditorio</label>

                                <div class="col-md-6">
                                    <select id="auditorium" type="text" class="form-control" name="auditorium" required>
                                        @if($event->getAuditorium() == "auditorium_1")
                                            <option value="auditorium_1" selected="selected">Auditorio 1</option>
                                        @else
                                            <option value="auditorium_1">Auditorio 1</option>
                                        @endif

                                        @if($event->getAuditorium() == "auditorium_2")
                                            <option value="auditorium_2" selected="selected">Auditorio 2</option>
                                        @else
                                            <option value="auditorium_2">Auditorio 2</option>
                                        @endif

                                        @if($event->getAuditorium() == "auditorium_3")
                                            <option value="auditorium_3" selected="selected">Auditorio 3</option>
                                        @else
                                            <option value="auditorium_3">Auditorio 3</option>
                                        @endif
                                    </select>

                                    @if ($errors->has('auditorium'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('auditorium') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('speaker_id') ? ' has-error' : '' }}">
                                <label for="speaker_id" class="col-md-4 control-label">Speaker</label>

                                <div class="col-md-6">
                                    <select id="speaker_id" type="text" class="form-control" name="speaker_id" required>
                                        @foreach($speakers as $speaker)
                                            @if($event->speaker['id'] == $speaker->getId())
                                                <option selected="selected" value="{{$speaker->getId()}}">{{$speaker->getId()}} - {{ $speaker->getName() }}</option>
                                            @else
                                                <option value="{{$speaker->getId()}}">{{$speaker->getId()}} - {{ $speaker->getName() }}</option>
                                            @endif

                                        @endforeach
                                    </select>

                                    @if ($errors->has('speaker_id'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('speaker_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('send_via_api') ? ' has-error' : '' }}">
                                <label for="send_via_api" class="col-md-4 control-label">Mostrar el app móvil</label>

                                <div class="col-md-6">
                                    <div class="radio">
                                        <input type="checkbox" id="send_via_api" name="send_via_api" value="1" {{ ($event->getSendViaApi() ? 'checked' : '') }}>
                                    </div>


                                    @if ($errors->has('send_via_api'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('send_via_api') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Editar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @if (session('status'))
                    <div class="alert alert-success"><em> {!! session('status') !!}</em></div>
                @endif
            </div>
        </div>
    </div>

@endsection

@push('scripts')
<script type="text/javascript" src="{{asset('/js/admin-panel.js')}}"></script>
@endpush
