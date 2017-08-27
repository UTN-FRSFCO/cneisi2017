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
                                        <option value="buenos_aires">Buenos Aires</option>
                                        <option value="concepcion_uruguay">Concepción del Uruguay</option>
                                        <option value="cordoba">Córdoba</option>
                                        <option value="delta">Delta</option>
                                        <option value="la_plata">La Plata</option>
                                        <option value="mendoza">Mendoza</option>
                                        <option value="resistencia">Resistencia</option>
                                        <option value="rosario">Rosario</option>
                                        <option value="san_francisco">San Francisco</option>
                                        <option value="santa_fe">Santa Fe</option>
                                        <option value="tucuman">Tucuman</option>
                                        <option value="villa_maria">Villa María</option>
                                        <option value="trenque_lauquen">Villa María</option>
                                        <option value="guest">INVITADOS</option>
                                        <option value="general_public">PÚBLICO EN GENERAL</option>
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
