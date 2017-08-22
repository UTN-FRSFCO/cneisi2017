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
                <h1> Panel de administración </h1>
                <div class="row-index">
                    <div class="col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-user" style="margin-right:4px;"></i>Usuarios</h3>
                                <span class="pull-right clickable index"><i class="fa fa-chevron-up"></i></span>
                            </div>
                            <div class="panel-body">
                                <p>Usuarios registrados: </p>
                                <p>Público general registrado: </p>


                                <ul class="university-users">

                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-lightbulb-o" style="margin-right:4px;"></i>Speakers</h3>
                                <span class="pull-right clickable index"><i class="fa fa-chevron-up"></i></span>
                            </div>
                            <div class="panel-body">Cantidad de speakers: </div>
                        </div>
                    </div>
                </div>
                <div class="row-index">
                    <div class="col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-list" style="margin-right:4px;"></i>Eventos</h3>
                                <span class="pull-right clickable index"><i class="fa fa-chevron-up"></i></span>
                            </div>
                            <div class="panel-body">Cantidad de eventos: </div>
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
