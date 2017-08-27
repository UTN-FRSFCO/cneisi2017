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
                <h2> Panel de administración de speakers </h2>
                <div class="col-md-12">
                    @if (session('status'))
                        <div class="alert alert-success"><em> {!! session('status') !!}</em></div>
                    @endif
                    <div class="panel panel-default panel-table">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col col-xs-6">
                                    <h3 class="panel-title">Cantidad de speakers registrados: <strong> {{ count($speakers) }} </strong></h3>
                                </div>
                                <div class="col col-xs-12 ">
                                    <i> - Si un speaker tiene un evento asociado, deberás borrar el evento previamente a borrar el speaker</i>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-list">
                                <thead>
                                <tr>
                                    <th><em class="fa fa-cog"></em></th>
                                    <th class="hidden-xs">Id</th>
                                    <th>Nombre</th>
                                    <th>Slug</th>
                                    <th>Tagline</th>
                                    <th>Eventos</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($speakers as $speaker)
                                    <tr>
                                        <td align="center" class ="first-column">
                                            <form method="get" action="{{route('speakers.editSpeaker', ['id' => $speaker->getId()])}}">
                                                <div class="form-group">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <div class="form-group">
                                                        <button type="submit" class="fabutton"><i class="fa fa-pencil"></i></button>
                                                    </div>
                                                </div>
                                            </form>

                                            <form method="post" action="{{route('speakers.delete', ['id' => $speaker->getId()])}}">
                                                {{ method_field('DELETE') }}
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                                @include(
                                                        'admin-panel.confirm',
                                                        [
                                                            'id'       => 'delete-category-' . $speaker->getId(),
                                                            'title'    => 'Confirmar borrado',
                                                            'question' => '¿Seguro que desea confirmar el borrado del speaker id: '.$speaker->getId().'?'  ,
                                                        ]
                                                    )

                                                <div class="form-group">
                                                    <a class="pull-right buy-btn"
                                                       style="color: red"
                                                       data-toggle="modal"
                                                       data-modal-link="delete-category-{{$speaker->getId()}}">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </div>

                                            </form>

                                        </td>
                                        <td class ="second-column">{{ $speaker->getId() }}</td>
                                        <td class="align-center">{{ $speaker->getName() }}</td>
                                        <td class="align-center">{{ $speaker->getSlug() }}</td>
                                        <td class="align-center">{{ $speaker->getTagline() }}</td>
                                        
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
                                    {{ $speakers->links() }}
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
