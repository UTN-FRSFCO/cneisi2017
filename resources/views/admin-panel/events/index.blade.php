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
                <h2> Panel de administración de eventos </h2>
                <div class="col-md-12">
                    @if (session('status'))
                        <div class="alert alert-success"><em> {!! session('status') !!}</em></div>
                    @endif
                    <div class="panel panel-default panel-table">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col col-xs-6">
                                    <h3 class="panel-title">Cantidad de eventos registrados: <strong> {{ count($events) }} </strong></h3>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-list">
                                <thead>
                                <tr>
                                    <th><em class="fa fa-cog"></em></th>
                                    <th>Id</th>
                                    <th>Titulo</th>
                                    <th>Speaker</th>
                                    <th>Auditorio</th>
                                    <th>Fecha y hora</th>
                                    <th>Duracion</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($events as $event)

                                    <tr>
                                        <td align="center" class ="first-column">
                                            <form method="get" action="{{route('event.editEvent', ['id' => $event->getId()])}}">
                                                <div class="form-group">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <div class="form-group">
                                                        <button type="submit" class="fabutton"><i class="fa fa-pencil"></i></button>
                                                    </div>
                                                </div>
                                            </form>

                                            <form method="post" action="{{route('event.delete', ['id' => $event->getId()])}}">

                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                                @include(
                                                        'admin-panel.confirm',
                                                        [
                                                            'id'       => 'delete-category-' . $event->getId(),
                                                            'title'    => 'Confirmar borrado',
                                                            'question' => '¿Seguro que desea confirmar el borrado del evento id: '.$event->getId().'?'  ,
                                                        ]
                                                    )

                                                <div class="form-group">
                                                    <a class="pull-right buy-btn"
                                                       style="color: red"
                                                       data-toggle="modal"
                                                       data-modal-link="delete-category-{{$event->getId()}}">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </div>

                                            </form>

                                        </td>
                                        <td class="align-center">{{ $event->getId() }}</td>
                                        <td class="align-center">{{ $event->getTitle() }}</td>
                                        <td class="align-center">{{ $event->speaker['id'] . ' - ' . $event->speaker['name'] }}</td>
                                        @if(substr($event->getAuditorium(), 11, 1) == 1)
                                            <td class="align-center">Auditorio 1</td>
                                        @elseif(substr($event->getAuditorium(), 11, 1) == 2)
                                            <td class="align-center">Auditorio 2</td>
                                        @else
                                            <td class="align-center">Auditorio 3</td>
                                        @endif

                                        @if(substr($event->getDate(),8,2) == 31)
                                            <td class="align-center">Jueves - Hora: {{ $event->getTime() }}</td>
                                        @elseif(substr($event->getDate(),7,2) == 1)
                                            <td class="align-center">Viernes - Hora: {{ $event->getTime() }}</td>
                                        @else
                                            <td class="align-center">Sábado - Hora: {{ $event->getTime() }}</td>
                                        @endif
                                        <td class="align-center">{{ $event->getDuration() }} min</td>
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
                                    {{ $events->links() }}
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
