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
                    <div class="panel-heading">Nuevo Bloque</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('blocks.create') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                                <label for="date" class="col-md-4 control-label">Dia</label>

                                <div class="col-md-6">
                                    <select id="date" type="text" class="form-control" name="date" required>
                                        <option value="day_one">Dia 1</option>
                                        <option value="day_two">Dia 2</option>
                                    </select>

                                    @if ($errors->has('date'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
                                <label for="time_start" class="col-md-4 control-label">Hora Inicio</label>

                                <div class="col-md-6">
                                    <input type="time" name="time_start" class="form-control" required>

                                    @if ($errors->has('time_start'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('time_start') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
                                <label for="time_end" class="col-md-4 control-label">Hora Fin</label>

                                <div class="col-md-6">
                                    <input type="time" name="time_end" class="form-control" required>

                                    @if ($errors->has('time_end'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('time_end') }}</strong>
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
