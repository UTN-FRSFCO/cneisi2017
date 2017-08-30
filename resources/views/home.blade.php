@extends('layouts.master')

@section('title', 'CNEISI 2017 | UTN Facultad Regional San Francisco')
@section('description', 'Página oficial CNEISI 2017- Congreso Nacional de Estudiantes de Ingenieria en Sistemas de Informacion Edición 2017. Eventos, talleres, videoconferencias y más.')
@section('keywords', 'cneisi, utn, san francisco, congreso, universidad, ingenieria, sistemas')
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

    @include('partials.schedule')

    @include('partials.counters')

    @if(count($speakers) > 0)
        @include('partials.speakers')
    @endif

    @include('partials.sponsors')

    @include('partials.contact')

    @include('user.auth.modal-user-login')

    @include('user.auth.modal-user-register')

    @include('partials.modal-error')

@endsection

