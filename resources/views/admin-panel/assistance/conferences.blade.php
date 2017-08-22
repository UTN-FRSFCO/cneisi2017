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
    <div class="container-fluid" >
        <div class="col-md-10">
            <div class="side-body">
                <h2> Panel de administración de asistencias </h2>
                <div class="col-md-12">
                    @if (session('status'))
                        <div class="alert alert-success"><em> {!! session('status') !!}</em></div>
                    @endif
                    <div class="panel panel-default panel-table">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col col-xs-6">
                                    <h3 class="panel-title">Asistencias por tipo de asistente y conferencia</h3>
                                </div>
                                <div class="col col-xs-6 align-right">
                                    <select id="filter" type="text" class="form-control" name="type" style="display:inline !important; width:50%;">
                                        <option value="all">Todas las charlas</option>
                                        @forelse($conferences as $conference)
                                            <option value="{{$conference->getSlug()}}">{{ $conference->getName() }}</option>
                                        @empty
                                            <option value="Buenos Aires">Charla 1</option>
                                            <option value="Buenos Aires">Charla 2</option>
                                        @endforelse
                                    </select>

                                    <button id="filterBtn" class="btn btn-primary">
                                        Filtrar
                                    </button>

                                    <script type="text/javascript">
                                        document.getElementById("filterBtn").onclick = function () {
                                            var e = document.getElementById("filter");
                                            var param = e.options[e.selectedIndex].value;
                                            console.log(param);
                                            location.href = "/administracion/asistencias/".concat(param);
                                        };
                                    </script>
                                </div>
                            </div>
                            <div class="row">

                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-list">
                                <thead>
                                <tr>
                                    <th class="align-center">Tipo</th>
                                    <th class="align-center">Cantidad de asistentes</th>
                                    <th class="align-center">% sobre total de tipo</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="align-center">Invitados</td>
                                    <td class="align-center">3</td>
                                    <td class="align-center">45%</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col col-xs-12 align-right">

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
