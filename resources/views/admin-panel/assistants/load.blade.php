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
                    <div class="panel-heading">Cargar asistentes</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('assistants.load') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                                <label for="file" class="col-md-4 control-label">Archivo CSV</label>

                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="file" accept=".csv" required autofocus>

                                    @if ($errors->has('file'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                                <label for="date" class="col-md-4 control-label">Tipo</label>

                                <div class="col-md-6">
                                    <select id="date" type="text" class="form-control" name="type" required>
                                        <option value="Buenos Aires">Buenos Aires</option>
                                        <option value="Concepcion del Uruguay">Concepción del Uruguay</option>
                                        <option value="Cordoba">Córdoba</option>
                                        <option value="Delta">Delta</option>
                                        <option value="La Plata">La Plata</option>
                                        <option value="Mendoza">Mendoza</option>
                                        <option value="Resistencia">Resistencia</option>
                                        <option value="Rosario">Rosario</option>
                                        <option value="San Francico">San Francisco</option>
                                        <option value="Santa Fe">Santa Fe</option>
                                        <option value="Tucuman">Tucuman</option>
                                        <option value="Villa Maria">Villa María</option>
                                        <option value="Invitado">INVITADOS</option>
                                        <option value="Publico en general">PÚBLICO EN GENERAL</option>
                                    </select>

                                    @if ($errors->has('type'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Cargar
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
