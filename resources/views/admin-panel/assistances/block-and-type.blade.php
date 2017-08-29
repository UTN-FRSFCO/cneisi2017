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
                <div class="col-md-12 table-responsive">
                    @if (session('status'))
                        <div class="alert alert-success"><em> {!! session('status') !!}</em></div>
                    @endif
                    <div class="panel panel-default panel-table">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col col-md-6 hidden-xs ">
                                    <h3 class="panel-title">Bloques</h3>
                                </div>
                                <div class="col col-md-6 col-xs-12 align-center">
                                    <select id="filter" type="text" class="form-control" name="type" style="display:inline !important; width:50%;">
                                        @foreach($blocks as $block)
                                            @if($block->id == $data['block']['id'])
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
                                            location.href = "/administracion/asistencias/tipo/".concat(param);
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
                                    <th class="align-center">Inicio bloque</th>
                                    <th class="align-center">Fin bloque</th>
                                    <th class="align-center">Regional</th>
                                    <th class="align-center">% asistentes</th>
                                </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td class="align-center">{{ $data['block']['day'] }} - {{ $data['block']['time_start'] }} </td>
                                        <td class="align-center">{{ $data['block']['day'] }} - {{ $data['block']['time_end'] }}</td>
                                        <td class="align-center">Buenos Aires</td>
                                        @if($data['buenos_aires'] < 70)
                                            <td class="align-center" style="color: red; text-decoration: double;">{{ $data['buenos_aires'] }}%</td>
                                        @else
                                            <td class="align-center">{{ $data['buenos_aires'] }}%</td>
                                        @endif
                                    </tr>

                                    <tr>
                                        <td class="align-center">{{ $data['block']['day'] }} - {{ $data['block']['time_start'] }} </td>
                                        <td class="align-center">{{ $data['block']['day'] }} - {{ $data['block']['time_end'] }}</td>
                                        <td class="align-center">Concepcion del Uruguay</td>
                                        @if($data['concepcion_uruguay'] < 70)
                                            <td class="align-center" style="color: red; text-decoration: double;">{{ $data['concepcion_uruguay'] }}%</td>
                                        @else
                                            <td class="align-center">{{ $data['concepcion_uruguay'] }}%</td>
                                        @endif
                                    </tr>

                                    <tr>
                                        <td class="align-center">{{ $data['block']['day'] }} - {{ $data['block']['time_start'] }} </td>
                                        <td class="align-center">{{ $data['block']['day'] }} - {{ $data['block']['time_end'] }}</td>
                                        <td class="align-center">Cordoba</td>
                                        @if($data['cordoba'] < 70)
                                            <td class="align-center" style="color: red; text-decoration: double;">{{ $data['cordoba'] }}%</td>
                                        @else
                                            <td class="align-center">{{ $data['cordoba'] }}%</td>
                                        @endif
                                    </tr>

                                    <tr>
                                        <td class="align-center">{{ $data['block']['day'] }} - {{ $data['block']['time_start'] }} </td>
                                        <td class="align-center">{{ $data['block']['day'] }} - {{ $data['block']['time_end'] }}</td>
                                        <td class="align-center">Delta</td>
                                        @if($data['delta'] < 70)
                                            <td class="align-center" style="color: red; text-decoration: double;">{{ $data['delta'] }}%</td>
                                        @else
                                            <td class="align-center">{{ $data['delta'] }}%</td>
                                        @endif
                                    </tr>

                                    <tr>
                                        <td class="align-center">{{ $data['block']['day'] }} - {{ $data['block']['time_start'] }} </td>
                                        <td class="align-center">{{ $data['block']['day'] }} - {{ $data['block']['time_end'] }}</td>
                                        <td class="align-center">La Plata</td>
                                        @if($data['la_plata'] < 70)
                                            <td class="align-center" style="color: red; text-decoration: double;">{{ $data['la_plata'] }}%</td>
                                        @else
                                            <td class="align-center">{{ $data['la_plata'] }}%</td>
                                        @endif
                                    </tr>

                                    <tr>
                                        <td class="align-center">{{ $data['block']['day'] }} - {{ $data['block']['time_start'] }} </td>
                                        <td class="align-center">{{ $data['block']['day'] }} - {{ $data['block']['time_end'] }}</td>
                                        <td class="align-center">Mendoza</td>
                                        @if($data['mendoza'] < 70)
                                            <td class="align-center" style="color: red; text-decoration: double;">{{ $data['mendoza'] }}%</td>
                                        @else
                                            <td class="align-center">{{ $data['mendoza'] }}%</td>
                                        @endif
                                    </tr>

                                    <tr>
                                        <td class="align-center">{{ $data['block']['day'] }} - {{ $data['block']['time_start'] }} </td>
                                        <td class="align-center">{{ $data['block']['day'] }} - {{ $data['block']['time_end'] }}</td>
                                        <td class="align-center">Resistencia</td>
                                        @if($data['resistencia'] < 70)
                                            <td class="align-center" style="color: red; text-decoration: double;">{{ $data['resistencia'] }}%</td>
                                        @else
                                            <td class="align-center">{{ $data['resistencia'] }}%</td>
                                        @endif
                                    </tr>

                                    <tr>
                                        <td class="align-center">{{ $data['block']['day'] }} - {{ $data['block']['time_start'] }} </td>
                                        <td class="align-center">{{ $data['block']['day'] }} - {{ $data['block']['time_end'] }}</td>
                                        <td class="align-center">Rosario</td>
                                        @if($data['rosario'] < 70)
                                            <td class="align-center" style="color: red; text-decoration: double;">{{ $data['rosario'] }}%</td>
                                        @else
                                            <td class="align-center">{{ $data['rosario'] }}%</td>
                                        @endif
                                    </tr>

                                    <tr>
                                        <td class="align-center">{{ $data['block']['day'] }} - {{ $data['block']['time_start'] }} </td>
                                        <td class="align-center">{{ $data['block']['day'] }} - {{ $data['block']['time_end'] }}</td>
                                        <td class="align-center">San Francisco</td>
                                        @if($data['san_francisco'] < 70)
                                            <td class="align-center" style="color: red; text-decoration: double;">{{ $data['san_francisco'] }}%</td>
                                        @else
                                            <td class="align-center">{{ $data['san_francisco'] }}%</td>
                                        @endif
                                    </tr>

                                    <tr>
                                        <td class="align-center">{{ $data['block']['day'] }} - {{ $data['block']['time_start'] }} </td>
                                        <td class="align-center">{{ $data['block']['day'] }} - {{ $data['block']['time_end'] }}</td>
                                        <td class="align-center">Santa Fe</td>
                                        @if($data['santa_fe'] < 70)
                                            <td class="align-center" style="color: red; text-decoration: double;">{{ $data['santa_fe'] }}%</td>
                                        @else
                                            <td class="align-center">{{ $data['santa_fe'] }}%</td>
                                        @endif
                                    </tr>

                                    <tr>
                                        <td class="align-center">{{ $data['block']['day'] }} - {{ $data['block']['time_start'] }} </td>
                                        <td class="align-center">{{ $data['block']['day'] }} - {{ $data['block']['time_end'] }}</td>
                                        <td class="align-center">Tucumán</td>
                                        @if($data['tucuman'] < 70)
                                            <td class="align-center" style="color: red; text-decoration: double;">{{ $data['tucuman'] }}%</td>
                                        @else
                                            <td class="align-center">{{ $data['tucuman'] }}%</td>
                                        @endif
                                    </tr>

                                    <tr>
                                        <td class="align-center">{{ $data['block']['day'] }} - {{ $data['block']['time_start'] }} </td>
                                        <td class="align-center">{{ $data['block']['day'] }} - {{ $data['block']['time_end'] }}</td>
                                        <td class="align-center">Villa María</td>
                                        @if($data['villa_maria'] < 70)
                                            <td class="align-center" style="color: red; text-decoration: double;">{{ $data['villa_maria'] }}%</td>
                                        @else
                                            <td class="align-center">{{ $data['villa_maria'] }}%</td>
                                        @endif
                                    </tr>

                                    <tr>
                                        <td class="align-center">{{ $data['block']['day'] }} - {{ $data['block']['time_start'] }} </td>
                                        <td class="align-center">{{ $data['block']['day'] }} - {{ $data['block']['time_end'] }}</td>
                                        <td class="align-center">Trenque Lauquen</td>
                                        @if($data['trenque_lauquen'] < 70)
                                            <td class="align-center" style="color: red; text-decoration: double;">{{ $data['trenque_lauquen'] }}%</td>
                                        @else
                                            <td class="align-center">{{ $data['trenque_lauquen'] }}%</td>
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
