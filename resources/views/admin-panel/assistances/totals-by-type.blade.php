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
                                <div class="col col-md-6 hidden-xs ">
                                    <h3 class="panel-title">Totales por regionales en todos los bloques</h3>
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
                                    <th class="align-center">Regional</th>
                                    <th class="align-center">Cantidad asistentes</th>
                                    <th class="align-center">Asistencias totales</th>
                                    <th class="align-center">% asistentes</th>
                                </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td class="align-center">Buenos Aires</td>
                                        <td class="align-center">{{ $data['buenos_aires']['total_assistants'] }}</td>
                                        <td class="align-center">{{ $data['buenos_aires']['total_assistances'] }}</td>
                                        @if($data['buenos_aires']['percentage'] < 70)
                                            <td class="align-center" style="color: red; text-decoration: double;">{{ $data['buenos_aires']['percentage'] }}%</td>
                                        @else
                                            <td class="align-center">{{ $data['buenos_aires']['percentage'] }}%</td>
                                        @endif
                                    </tr>

                                    <tr>
                                        <td class="align-center">Concepcion del Uruguay</td>
                                        <td class="align-center">{{ $data['concepcion_uruguay']['total_assistants'] }}</td>
                                        <td class="align-center">{{ $data['concepcion_uruguay']['total_assistances'] }}</td>
                                        @if($data['concepcion_uruguay']['percentage'] < 70)
                                            <td class="align-center" style="color: red; text-decoration: double;">{{ $data['concepcion_uruguay']['percentage'] }}%</td>
                                        @else
                                            <td class="align-center">{{ $data['concepcion_uruguay']['percentage'] }}%</td>
                                        @endif
                                    </tr>

                                    <tr>
                                        <td class="align-center">Córdoba</td>
                                        <td class="align-center">{{ $data['cordoba']['total_assistants'] }}</td>
                                        <td class="align-center">{{ $data['cordoba']['total_assistances'] }}</td>
                                        @if($data['cordoba']['percentage'] < 70)
                                            <td class="align-center" style="color: red; text-decoration: double;">{{ $data['cordoba']['percentage'] }}%</td>
                                        @else
                                            <td class="align-center">{{ $data['cordoba']['percentage'] }}%</td>
                                        @endif
                                    </tr>

                                    <tr>
                                        <td class="align-center">Delta</td>
                                        <td class="align-center">{{ $data['delta']['total_assistants'] }}</td>
                                        <td class="align-center">{{ $data['delta']['total_assistances'] }}</td>
                                        @if($data['delta']['percentage'] < 70)
                                            <td class="align-center" style="color: red; text-decoration: double;">{{ $data['delta']['percentage'] }}%</td>
                                        @else
                                            <td class="align-center">{{ $data['delta']['percentage'] }}%</td>
                                        @endif
                                    </tr>

                                    <tr>
                                        <td class="align-center">La Plata</td>
                                        <td class="align-center">{{ $data['la_plata']['total_assistants'] }}</td>
                                        <td class="align-center">{{ $data['la_plata']['total_assistances'] }}</td>
                                        @if($data['la_plata']['percentage'] < 70)
                                            <td class="align-center" style="color: red; text-decoration: double;">{{ $data['la_plata']['percentage'] }}%</td>
                                        @else
                                            <td class="align-center">{{ $data['la_plata']['percentage'] }}%</td>
                                        @endif
                                    </tr>

                                    <tr>
                                        <td class="align-center">Mendoza</td>
                                        <td class="align-center">{{ $data['mendoza']['total_assistants'] }}</td>
                                        <td class="align-center">{{ $data['mendoza']['total_assistances'] }}</td>
                                        @if($data['mendoza']['percentage'] < 70)
                                            <td class="align-center" style="color: red; text-decoration: double;">{{ $data['mendoza']['percentage'] }}%</td>
                                        @else
                                            <td class="align-center">{{ $data['mendoza']['percentage'] }}%</td>
                                        @endif
                                    </tr>

                                    <tr>
                                        <td class="align-center">Resistencia</td>
                                        <td class="align-center">{{ $data['resistencia']['total_assistants'] }}</td>
                                        <td class="align-center">{{ $data['resistencia']['total_assistances'] }}</td>
                                        @if($data['resistencia']['percentage'] < 70)
                                            <td class="align-center" style="color: red; text-decoration: double;">{{ $data['resistencia']['percentage'] }}%</td>
                                        @else
                                            <td class="align-center">{{ $data['resistencia']['percentage'] }}%</td>
                                        @endif
                                    </tr>

                                    <tr>
                                        <td class="align-center">Rosario</td>
                                        <td class="align-center">{{ $data['rosario']['total_assistants'] }}</td>
                                        <td class="align-center">{{ $data['rosario']['total_assistances'] }}</td>
                                        @if($data['rosario']['percentage'] < 70)
                                            <td class="align-center" style="color: red; text-decoration: double;">{{ $data['rosario']['percentage'] }}%</td>
                                        @else
                                            <td class="align-center">{{ $data['rosario']['percentage'] }}%</td>
                                        @endif
                                    </tr>

                                    <tr>
                                        <td class="align-center">San Francisco</td>
                                        <td class="align-center">{{ $data['san_francisco']['total_assistants'] }}</td>
                                        <td class="align-center">{{ $data['san_francisco']['total_assistances'] }}</td>
                                        @if($data['san_francisco']['percentage'] < 70)
                                            <td class="align-center" style="color: red; text-decoration: double;">{{ $data['san_francisco']['percentage'] }}%</td>
                                        @else
                                            <td class="align-center">{{ $data['san_francisco']['percentage'] }}%</td>
                                        @endif
                                    </tr>


                                    <tr>
                                        <td class="align-center">Santa Fe</td>
                                        <td class="align-center">{{ $data['santa_fe']['total_assistants'] }}</td>
                                        <td class="align-center">{{ $data['santa_fe']['total_assistances'] }}</td>
                                        @if($data['santa_fe']['percentage'] < 70)
                                            <td class="align-center" style="color: red; text-decoration: double;">{{ $data['santa_fe']['percentage'] }}%</td>
                                        @else
                                            <td class="align-center">{{ $data['santa_fe']['percentage'] }}%</td>
                                        @endif
                                    </tr>

                                    <tr>
                                        <td class="align-center">Tucumán</td>
                                        <td class="align-center">{{ $data['tucuman']['total_assistants'] }}</td>
                                        <td class="align-center">{{ $data['tucuman']['total_assistances'] }}</td>
                                        @if($data['tucuman']['percentage'] < 70)
                                            <td class="align-center" style="color: red; text-decoration: double;">{{ $data['tucuman']['percentage'] }}%</td>
                                        @else
                                            <td class="align-center">{{ $data['tucuman']['percentage'] }}%</td>
                                        @endif
                                    </tr>

                                    <tr>
                                        <td class="align-center">Villa María</td>
                                        <td class="align-center">{{ $data['villa_maria']['total_assistants'] }}</td>
                                        <td class="align-center">{{ $data['villa_maria']['total_assistances'] }}</td>
                                        @if($data['villa_maria']['percentage'] < 70)
                                            <td class="align-center" style="color: red; text-decoration: double;">{{ $data['villa_maria']['percentage'] }}%</td>
                                        @else
                                            <td class="align-center">{{ $data['villa_maria']['percentage'] }}%</td>
                                        @endif
                                    </tr>

                                    <tr>
                                        <td class="align-center">Trenque Lauquen</td>
                                        <td class="align-center">{{ $data['trenque_lauquen']['total_assistants'] }}</td>
                                        <td class="align-center">{{ $data['trenque_lauquen']['total_assistances'] }}</td>
                                        @if($data['trenque_lauquen']['percentage'] < 70)
                                            <td class="align-center" style="color: red; text-decoration: double;">{{ $data['trenque_lauquen']['percentage'] }}%</td>
                                        @else
                                            <td class="align-center">{{ $data['trenque_lauquen']['percentage'] }}%</td>
                                        @endif
                                    </tr>

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
