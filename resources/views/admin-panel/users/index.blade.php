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
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default" style="margin-bottom: 50px;">

                    <h5 class="align-center" style="margin-top: 25px;"><span class="highlight">Opciones</span></h5>

                    <div class="panel-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <ul class="nav nav-pills nav-stacked admin-menu">
                                        <li class="active"><a href="#" data-target-id="home"><i class="fa fa-home fa-fw"></i>Inicio</a></li>
                                        <li><a href="#" data-target-id="widgets"><i class="fa fa-list-alt fa-fw"></i>Eventos</a></li>
                                        <li><a href="#" data-target-id="pages"><i class="fa fa-user fa-fw"></i>Usuarios</a></li>
                                        <li><a href="#" data-target-id="charts"><i class="fa fa-bar-chart-o fa-fw"></i>Charts</a></li>
                                        <li><a href="#" data-target-id="table"><i class="fa fa-table fa-fw"></i>Table</a></li>
                                        <li><a href="#" data-target-id="forms"><i class="fa fa-tasks fa-fw"></i>Forms</a></li>
                                        <li><a href="#" data-target-id="calender"><i class="fa fa-calendar fa-fw"></i>Calender</a></li>
                                        <li><a href="#" data-target-id="library"><i class="fa fa-book fa-fw"></i>Library</a></li>
                                        <li><a href="#" data-target-id="applications"><i class="fa fa-pencil fa-fw"></i>Applications</a></li>
                                        <li><a href="#" data-target-id="settings"><i class="fa fa-cogs fa-fw"></i>Settings</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Titulo</h3>
                        <div class="pull-right">
							<span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
								<i class="fa fa-filter fa-fw"></i>
							</span>
                        </div>
                    </div>
                    <div class="panel-body">
                        <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
                    </div>
                    <table class="table table-hover" id="dev-table">
                        <thead>
                        <tr>
                            <th></th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Kilgore</td>
                            <td>Trout</td>
                            <td>kilgore</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Bob</td>
                            <td>Loblaw</td>
                            <td>boblahblah</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Holden</td>
                            <td>Caulfield</td>
                            <td>penceyreject</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script type="text/javascript" src="{{asset('/js/admin-panel.js')}}"></script>
@endpush
