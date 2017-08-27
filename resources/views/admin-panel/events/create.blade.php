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

    @include('admin-panel.sidebar')

    <!-- Main Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                @if (session('status'))
                    <div class="alert alert-success"><em> {!! session('status') !!}</em></div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading">Nuevo Evento</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('event.create') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-4 control-label">Titulo</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

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
                                    <input id="slug" type="text" class="form-control" name="slug" value="{{ old('slug') }}" required>

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

                                    <textarea id="description" name="description" class="form-control" value="{{ old('description') }}"></textarea>
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
                                    <input type="time" name="time" class="form-control" required>

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
                                        <option value="auditorium_1">Auditorio 1</option>
                                        <option value="auditorium_2">Auditorio 2</option>
                                        <option value="auditorium_3">Auditorio 3</option>
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
                                        <option value="0">Ninguno</option>
                                        @foreach($speakers as $speaker)
                                            <option value="{{$speaker->getId()}}">{{$speaker->getId()}} - {{ $speaker->getName() }}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('speaker_id'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('speaker_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('block_id') ? ' has-error' : '' }}">
                                <label for="block_id" class="col-md-4 control-label">Bloque</label>

                                <div class="col-md-6">
                                    <select id="block_id" type="text" class="form-control" name="block_id" required>
                                        <option value="0">Ninguno</option>
                                        @foreach($blocks as $block)
                                            <option value="{{$block['id']}}">{{$block['day']}} - {{ $block['time_start'] }} / {{ $block['time_end'] }}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('block_id'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('block_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('send_via_api') ? ' has-error' : '' }}">
                                <label for="send_via_api" class="col-md-4 control-label">Mostrar el app móvil</label>

                                <div class="col-md-6">
                                    <div class="radio">
                                        <input type="checkbox" id="send_via_api" name="send_via_api" value="1" checked>
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
                                        Crear
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
