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
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                @if (session('status'))
                    <div class="alert alert-success"><em> {!! session('status') !!}</em></div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading">Nuevo Speaker</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('speakers.create') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nombre</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                                <label for="slug" class="col-md-4 control-label">Slug</label>

                                <div class="col-md-6">
                                    <input id="slug" type="text" class="form-control" name="slug" value="{{ old('slug') }}" required>

                                    @if ($errors->has('slug'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('slug') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('tagline') ? ' has-error' : '' }}">
                                <label for="tagline" class="col-md-4 control-label">Tagline</label>

                                <div class="col-md-6">
                                    <input id="tagline" type="text" class="form-control" name="tagline" value="{{ old('tagline') }}"required>

                                    @if ($errors->has('tagline'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('tagline') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-4 control-label">Descripción</label>

                                <div class="col-md-6">

                                    <textarea id="description" name="description" class="form-control" value="{{ old('description') }}"required></textarea>
                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('googleLink') ? ' has-error' : '' }}">
                                <label for="googleLink" class="col-md-4 control-label">Link Perfil Google</label>

                                <div class="col-md-6">
                                    <input id="googleLink" type="text" class="form-control" name="googleLink" value="{{ old('googleLink') }}">

                                    @if ($errors->has('googleLink'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('googleLink') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('facebookLink') ? ' has-error' : '' }}">
                                <label for="facebookLink" class="col-md-4 control-label">Link Perfil Facebook</label>

                                <div class="col-md-6">
                                    <input id="facebookLink" type="text" class="form-control" name="facebookLink" value="{{ old('facebookLink') }}" >

                                    @if ($errors->has('facebookLink'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('facebookLink') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('twitterLink') ? ' has-error' : '' }}">
                                <label for="twitterLink" class="col-md-4 control-label">Link Perfil Twitter</label>

                                <div class="col-md-6">
                                    <input id="twitterLink" type="text" class="form-control" name="twitterLink" value="{{ old('twitterLink') }}" >

                                    @if ($errors->has('twitterLink'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('twitterLink') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('video') ? ' has-error' : '' }}">
                                <label for="video" class="col-md-4 control-label">Video (link)</label>

                                <div class="col-md-6">
                                    <input id="video" type="text" class="form-control" name="video" value="{{ old('video') }}">

                                    @if ($errors->has('video'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('video') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('score') ? ' has-error' : '' }}">
                                <label for="score" class="col-md-4 control-label">Score</label>

                                <div class="col-md-6">
                                    <input id="score" type="text" class="form-control" name="score" value="{{ old('score') }}">

                                    @if ($errors->has('score'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('score') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="picture" class="col-md-4 control-label">Imagen (link)</label>

                                <div class="col-md-6">
                                    <input id="picture" type="text" class="form-control" name="picture" value="{{ old('picture') }}" required>

                                    @if ($errors->has('picture'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('picture') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Crear
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
