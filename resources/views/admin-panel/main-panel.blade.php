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
            <h1> Panel de administración </h1>
            <div class="row-index">
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-user" style="margin-right:4px;"></i>Usuarios</h3>
                            <span class="pull-right clickable index"><i class="fa fa-chevron-up"></i></span>
                        </div>
                        <div class="panel-body">
                            <p>Usuarios registrados: {{ count($users) }}</p>
                            <p>Público general registrado: {{ $generalPublic}}</p>


                            <ul class="university-users">
                            @foreach($usersUniversity as $university => $userAmount)
                                @if($university == 'delta')
                                    <li>Universidad del delta: {{ $userAmount }}</li>
                                @elseif($university == 'buenos_aires')
                                    <li>Universidad de Buenos Aires: {{ $userAmount }}</li>
                                @elseif($university == 'cordoba')
                                    <li>Universidad de Cordoba: {{ $userAmount }}</li>
                                @elseif($university == 'villa_maria')
                                    <li>Universidad de Villa María: {{ $userAmount }}</li>
                                @elseif($university == 'san_francisco')
                                    <li>Universidad de San Francisco: {{ $userAmount }}</li>
                                @elseif($university == 'tucuman')
                                    <li>Universidad de Tucuman: {{ $userAmount }}</li>
                                @elseif($university == 'santa_fe')
                                    <li>Universidad de Santa Fe: {{ $userAmount }}</li>
                                @elseif($university == 'mendoza')
                                    <li>Universidad de Mendoza: {{ $userAmount }}</li>
                                @elseif($university == 'resistencia')
                                    <li>Universidad de Resistencia: {{ $userAmount }}</li>
                                @elseif($university == 'la_plata')
                                    <li>Universidad de La Plata: {{ $userAmount }}</li>
                                @elseif($university == 'rosario')
                                    <li>Universidad de Rosario: {{ $userAmount }}</li>
                                @elseif($university == 'concepcion_uruguay')
                                    <li>Universidad de Concepcion del Uruguay: {{ $userAmount }}</li>
                                @endif



                            @endforeach
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
                        <div class="panel-body">Cantidad de speakers: {{ count($speakers) }}</div>
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
                        <div class="panel-body">Cantidad de eventos: {{ count($events) }}</div>
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
