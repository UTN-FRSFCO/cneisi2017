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
                <h2> Panel de administración de asistentes </h2>
                <div class="col-md-12">
                    @if (session('status'))
                        <div class="alert alert-success"><em> {!! session('status') !!}</em></div>
                    @endif
                    <div class="panel panel-default panel-table">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col col-xs-6">
                                    <h3 class="panel-title">Lista de asistentes</h3>
                                </div>
                                <div class="col col-xs-6 align-right">
                                    <select id="filter" type="text" class="form-control" name="type" style="display:inline !important; width:50%;">
                                        <option value="all">Mostrar todos</option>
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

                                    <button id="filterBtn" class="btn btn-primary">
                                        Filtrar
                                    </button>

                                    <script type="text/javascript">
                                        document.getElementById("filterBtn").onclick = function () {
                                            var e = document.getElementById("filter");
                                            var param = e.options[e.selectedIndex].value;
                                            console.log(param);
                                            location.href = "/administracion/asistentes/".concat(param);
                                        };
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-list">
                                <thead>
                                <tr>
                                    <th><em class="fa fa-cog"></em></th>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Telefono</th>
                                    <th>Año</th>
                                    <th>Tipo</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($assistants as $assistant)

                                    <tr>
                                        <td align="center" class ="first-column">

                                            <form method="post" action="{{route('assistants.delete', ['id' => $assistant->id])}}">

                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                                @include(
                                                        'admin-panel.confirm',
                                                        [
                                                            'id'       => 'delete-category-' . $assistant->id,
                                                            'title'    => 'Confirmar borrado',
                                                            'question' => '¿Seguro que desea confirmar el borrado del asistente id: '. $assistant->id .'?'  ,
                                                        ]
                                                    )

                                                <div class="form-group">
                                                    <a class="pull-right buy-btn"
                                                       style="color: red"
                                                       data-toggle="modal"
                                                       data-modal-link="delete-category-{{$assistant->id}}">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </div>

                                            </form>

                                        </td>
                                        <td class="align-center">{{ $assistant->id }}</td>
                                        <td class="align-center">{{ $assistant->firstname . ' ' . $assistant->lastname}}</td>
                                        <td class="align-center">{{ $assistant->email }}</td>
                                        <td class="align-center">{{ $assistant->phone }}</td>
                                        <td class="align-center">{{ $assistant->year }}</td>
                                        <td class="align-center">{{ $assistant->type }}</td>
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
