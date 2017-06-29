@extends('layouts.master')

@section('title', '500 error - CNEISI')
@section('description', 'Información del CNEISI - Congreso Nacional de Estudiantes de Ingenieria en Sistemas de Informacion')
@section('keywords', 'cneisi, utn, argentina, universidad, congreso, evento')
@section('author', 'UTN-FRSF')

@include('components.menu')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default" style="margin-bottom: 200px;">
                    <div class="panel-body">
                        <div class="col-md-12 align-center" style="margin-bottom: 30px;">

                            <p class="text-center">
                            <h1 class="highlight">500</h1>
                            </p>

                            <p class="text-center">
                            <h2 class="highlight">Ups! Hubo un error en el servidor! Intentalo más tarde.</h2>
                            </p>
                            <a href="/" class="btn btn-outline-clr btn-sm">Volver al inicio<span class="fa fa-chevron-left"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection