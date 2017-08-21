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
                <h2> Panel de administración de usuarios </h2>
                <div class="col-md-12">

                    <div class="panel panel-default panel-table">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col col-xs-6">
                                    <h3 class="panel-title">Cantidad de usuarios registrados: <strong> {{ count($users) }} </strong></h3>
                                </div>
                                <div class="col col-xs-6 text-right">
                                    <button type="button" class="btn btn-sm btn-primary btn-create">Crear nuevo</button>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-list">
                                <thead>
                                <tr>
                                    <th class="hidden-xs">Nombre</th>
                                    <th>Email</th>
                                    <th>Tipo de usuario</th>
                                    <th>Facultad regional</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($users as $user)

                                    <tr>

                                        <td>{{ $user[0] }}</td>
                                        <td>{{ $user[1] }}</td>
                                        <td>{{ $user[2] }}</td>
                                        <td>{{ $user[3] }}</td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>

                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col col-xs-12 align-right">
                                    {{ $userss->links() }}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection

@push('scripts')
<script type="text/javascript" src="{{asset('/js/admin-panel.js')}}"></script>
@endpush
