@extends('layouts.master')

@section('title', $speaker->getName() . ' - Disertantes | CNEISI 2017')
@section('description', 'Conocé a los diserantes que nos van a estar acompañando en el congreso, llevando adelante las diferentes conferencias y charlas en la nueva edición del congreso.')
@section('keywords', 'cneisi, disertantes, congreso, sistemas, speakers')
@section('author', 'UTN-FRSF')
@section('robots', 'index, follow')

@section('og:type', 'article')
@section('og:url', 'http://cneisi.sanfrancisco.utn.edu.ar/disertantes' . $speaker->getSlug())

@include('components.menu')
@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 100px;">
            <div class="col-md-8">
                <div class="panel panel-default" style="margin-bottom: 100px;">
                    <div class="panel-body">
                        <div class="col-md-12 align-center" style="margin-bottom: 30px;">
                            <img alt="{{ $speaker->getName() }}" src="{{ $speaker->getPicture() }}" class="img-circle img-responsive speaker-circle">
                            <h5 class="align-center" style="margin-top: 20px;"><span class="highlight">{{ $speaker->getName() }}</span></h5>
                            <p class="text-alt align-center"><small>{{ $speaker->getTagline() }}</small></p>
                        </div>
                        <p class="text-center"> {{ $speaker->getDescription() }}</p>
                        <div class="speaker">
                            <ul class="speaker-socials" style="text-align: center;">
                                @if($speaker->getFacebookLink())
                                    <li><a target="_blank" href="https://{{ $speaker->getFacebookLink() }}"><span class="fa fa-facebook"></span></a></li>
                                @endif

                                @if($speaker->getTwitterLink())
                                    <li><a target="_blank" href="https://{{ $speaker->getTwitterLink() }}"><span class="fa fa-twitter"></span></a></li>
                                @endif

                                @if($speaker->getGoogleLink())
                                    <li><a target="_blank" href="https://{{ $speaker->getGoogleLink() }}"><span class="fa fa-google-plus"></span></a></li>
                                @endif
                            </ul>
                        </div>
                        <div class="col-xs-12 align-center" style="margin-bottom: 15px;">
                            @include('components.share', ['url' => 'http://cneisi.sanfrancisco.utn.edu.ar/disertantes/' . $speaker->getSlug() ])
                        </div>
                        @include('components.modal-video-speaker')
                    </div>
                </div>
            </div>
            @include('components.sidebar')
        </div>
    </div>
@endsection