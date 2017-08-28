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
                                    <h3 class="panel-title">Eventos listados: <strong> {{ count($conferences) }} </strong></h3>
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
                                    <th>Id</th>
                                    <th>Titulo</th>
                                    <th>Bloque</th>
                                    <th>Cantidad de asistentes</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($conferences as $conference)

                                    <tr>
                                        <td class="align-center">{{ $conference['id'] }}</td>
                                        <td class="align-center">{{ $conference['title'] }}</td>
                                        <td class="align-center">{{ $conference['block'] }}</td>
                                        <td class="align-center">{{ $conference['assistants'] }}</td>
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
