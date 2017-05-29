@extends('layouts.master')

@section('content')
    <div class="preloader-mask">
        <div class="preloader"></div>
    </div>

    @include('partials.hero')

    @include('partials.header')

    @include('partials.about')

    @include('partials.counters')

    @include('partials.speakers')

    @include('partials.schedule')

    @include('partials.papers')

    @if(Auth::guest())
        @include('partials.register')
    @endif

    @include('partials.gallery')

    @include('partials.sponsors')

    @include('partials.contact')

    @include('user.auth.modal-user-login')

    @include('user.auth.modal-user-register')

    @include('user.auth.modal-password-reset')

    @include('partials.modal-error')

@endsection

