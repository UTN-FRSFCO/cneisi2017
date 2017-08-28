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
                                    <h3 class="panel-title">Listado de asistencias por bloque y tipo de asistente </h3>
                                </div>
                                <div class="col col-xs-6 align-right">
                                    <select id="filter" type="text" class="form-control" name="type" style="display:inline !important; width:50%;">
                                        <option value="all">Mostrar todos</option>
                                        @foreach (\App\Enums\AssistantType::values() as $type)
                                            <option value="{{ $type }}">{{ \App\Entities\Assistant::getParsedType($type) }}</option>
                                        @endforeach
                                    </select>

                                    <button id="filterBtn" class="btn btn-primary">
                                        Filtrar
                                    </button>

                                    <script type="text/javascript">
                                        document.getElementById("filterBtn").onclick = function () {
                                            var e = document.getElementById("filter");
                                            var param = e.options[e.selectedIndex].value;
                                            console.log(param);
                                            location.href = "/administracion/asistencias/type/".concat(param);
                                        };
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-list">
                                <thead>
                                <tr>
                                    <th>Id bloque</th>
                                    <th>Charlas del bloque</th>
                                    <th>Tipo de asistente</th>
                                    <th>Total inscriptos</th>
                                    <th>Cantidad asistentes</th>
                                    <th>Porcentaje de asistencias</th>

                                </tr>
                                </thead>
                                <tbody>
                                @forelse($assistants as $assistant)
                                    <tr>
                                        <td class="align-center"></td>
                                        <td class="align-center"> </td>
                                        <td class="align-center"></td>
                                        <td class="align-center"></td>
                                        <td class="align-center"></td>
                                        @if($assistant->assistanceCount * 100 / $conferenceAmount < 80)
                                            <td class="align-center" style="color: red;">{{ round($assistant->assistanceCount * 100 / $conferenceAmount, 2) }}%</td>
                                        @else
                                            <td class="align-center">{{ round($assistant->assistanceCount * 100 / $conferenceAmount, 2) }}%</td>
                                        @endif
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
                                    {{ $assistants->links() }}
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
