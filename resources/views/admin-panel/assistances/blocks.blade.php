@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/admin-panel.css')}}" />
@endpush

@section('title', 'Panel de administración | CNEISI 2017')
@section('description', 'Información del CNEISI - Congreso Nacional de Estudiantes de Ingenieria en Sistemas de Informacion')
@section('author', 'UTN-FRSF')
@section('robots', 'noindex, nofollow')

@include('admin-panel.menu')
@section('content')

    @include('admin-panel.sidebar')

    <!-- Main Content -->
    <div class="container-fluid" >
        <div class="col-md-10">
            <div class="side-body">
                <h2> Panel de administración de asistencias </h2>
                <div class="col-md-12 table-responsive">
                    @if (session('status'))
                        <div class="alert alert-success"><em> {!! session('status') !!}</em></div>
                    @endif
                    <div class="panel panel-default panel-table">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col col-md-6 hidden-xs">
                                    <h3 class="panel-title">Bloques</h3>
                                </div>
                                <div class="col col-md-6 col-xs-12 align-center">
                                    <select id="filter" type="text" class="form-control" name="type" style="display:inline !important; width:50%;">
                                        @foreach($blocks as $block)
                                            @if($block->id == $blocksInfo[0]['id'])
                                                <option selected value="{{ $block->id }}">Bloque {{ $block->id }}</option>
                                            @else
                                                <option value="{{ $block->id }}">Bloque {{ $block->id }}</option>
                                            @endif
                                        @endforeach
                                    </select>

                                    <button id="filterBtn" class="btn btn-primary" style="margin: 0 auto;">
                                        Filtrar
                                    </button>

                                    <script type="text/javascript">
                                        document.getElementById("filterBtn").onclick = function () {
                                            var e = document.getElementById("filter");
                                            var param = e.options[e.selectedIndex].value;
                                            console.log(param);
                                            location.href = "/administracion/asistencias/bloques/".concat(param);
                                        };
                                    </script>
                                </div>
                                {{--<div class="col col-xs-6 text-right">--}}
                                {{--<a href="{{ route('event.createEvent') }}">Crear nuevo</a>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                        <div class="panel-body" style="overflow:auto;">
                            <table class="table table-striped table-bordered table-list">
                                <thead>
                                <tr>
                                    <th class="align-center">Id bloque</th>
                                    <th class="align-center">Inicio</th>
                                    <th class="align-center">Fin</th>
                                    <th class="align-center">Total asistentes</th>
                                    <th class="align-center">De regionales</th>
                                    <th class="align-center">Invitados</th>
                                    <th class="align-center">Publico general</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($blocksInfo as $block)

                                    <tr>
                                        <td class="align-center">{{ $block['id'] }}</td>
                                        <td class="align-center">{{ $block['time_start'] }}</td>
                                        <td class="align-center">{{ $block['time_end'] }}</td>
                                        <td class="align-center">{{ $block['total_assistants'] }}</td>
                                        <td class="align-center">{{ $block['university_total'] }}</td>
                                        <td class="align-center">{{ $block['guest_total'] }}</td>
                                        <td class="align-center">{{ $block['public_total'] }}</td>
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
