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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                @if (session('status'))
                    <div class="alert alert-success"><em> {!! session('status') !!}</em></div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading">Agregar conferencia a un bloque</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('blocks.add_conference') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('block') ? ' has-error' : '' }}">
                                <label for="date" class="col-md-4 control-label">Bloque</label>

                                <div class="col-md-6">
                                    <select id="block" type="text" class="form-control" name="block" required>
                                        @foreach($blocks as $block)
                                            <option value="{{ $block->id }}">{{ $block->id }}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('block'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('block') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('conference') ? ' has-error' : '' }}">
                                <label for="conference" class="col-md-4 control-label">Conferencia</label>

                                <div class="col-md-6">
                                    <select id="conference" type="text" class="form-control" name="conference" required>
                                        @foreach($conferences as $conference)
                                            <option value="{{ $conference->id }}">{{ $conference->title }}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('block'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('block') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Agregar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @if (session('status'))
                    <div class="alert alert-success"><em> {!! session('status') !!}</em></div>
                @endif
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script type="text/javascript" src="{{asset('/js/admin-panel.js')}}"></script>
@endpush
