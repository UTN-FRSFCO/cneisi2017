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

    @if(Auth::guest())
        @include('partials.register')
    @endif

    @include('partials.gallery')

    @include('partials.sponsors')

    @include('partials.contact')

    @include('partials.modal-user-login')

    @include('partials.modal-user-register')

    <div class="modal-window" data-modal="0" style="background-color: rgba(2, 2, 2, 0.85);">
        <div class="modal-box iframe-box iframe-video">
            <span class="close-btn icon icon-office-52"></span>

            <iframe src="https://www.youtube.com/embed/goH-Pv1w6xo?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>

@endsection

