@extends('layouts.master')

@section('title', 'CNEISI 2017')
@section('description', 'Página oficial CNEISI 2017- Congreso Nacional de Estudiantes de Ingenieria en Sistemas de Informacion')
@section('keywords', 'cneisi, utn, argentina, universidad, congreso, evento, san francisco, 2017, conferencias, ingenieria, sistemas, tecnología, estudiantes, investigacion, desarrollo')
@section('author', 'UTN-FRSF')
@section('robots', 'index, follow')

@section('og:type', 'website')
@section('og:url', 'http://cneisi.sanfrancisco.utn.edu.ar/')

@section('content')
    <div class="preloader-mask">
        <div class="preloader"></div>
    </div>

    @include('partials.hero')

    @include('partials.header')

    @include('partials.about')

    @include('partials.counters')

    @include('partials.schedule')

    @include('partials.papers')

    @if(Auth::guest())
        @include('partials.register')
    @endif

    @include('partials.contact')

    @include('user.auth.modal-user-login')

    @include('user.auth.modal-user-register')

    @include('partials.modal-error')

@endsection

