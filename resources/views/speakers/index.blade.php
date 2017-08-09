@extends('layouts.master')

@section('title', 'Lista de disertantes | CNEISI 2017')
@section('description', 'Conocé a los diserantes que nos van a estar acompañando en el congreso, llevando adelante las diferentes conferencias y charlas en la nueva edición del congreso.')
@section('keywords', 'cneisi, disertantes, congreso, sistemas, speakers')
@section('author', 'UTN-FRSF')
@section('robots', 'index, follow')

@section('og:type', 'article')
@section('og:url', 'http://cneisi.sanfrancisco.utn.edu.ar/disertantes')

@include('components.menu')
@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 100px;">
            <div class="col-md-8">
                <div class="panel panel-default" style="margin-bottom: 100px;">
                    <div class="panel-body">
                        <div class="col-md-12 align-center" style="margin-bottom: 30px;">
                            <p class="text-center"><span class="fa fa-bullhorn fa-4x"></span></p>
                            <h5 class="align-center" style="margin-top: 20px;"><span class="highlight">Disertantes del CNEISI 2017</span></h5>
                        </div>
                        <p class="text-center"> Conocé a los diserantes que nos van a estar acompañando en el congreso, llevando adelante las diferentes conferencias y charlas que tendremos el orgulloso de presentar en la nueva edición del congreso.</p>
                        <div class="row" style="margin-top: 50px">
                            <div class="col-xs-12 align-center" style="margin-bottom: 15px;">
                                @forelse ($speakers as $speaker)
                                    <div class="row">
                                        <div class="col-sm-12" >
                                            <div class="panel panel-info">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-3 col-lg-3 " align="center">
                                                            <img alt="User Pic" src="{{ $speaker->getPicture() }}" class="img-speaker img-circle img-responsive" style="">
                                                        </div>
                                                        <div class=" col-md-9 col-lg-9 align-left">
                                                            <div class="speaker">
                                                                <a href="{{ route('speaker.show', $speaker->getSlug()) }}" id="continue" style="text-decoration: none;">
                                                                    <h3 class="name speaker-name"><a>{{ $speaker->getName() }}</a></h3>
                                                                </a>
                                                                <p class="text-alt speaker-tagline"><small>{{ $speaker->getTagline() }}</small></p>
                                                                <p class="about speaker-desc">{{ str_limit($speaker->getDescription(), $limit = 150, $end = '...') }}</p>
                                                                <ul class="speaker-socials">
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
                                                                <div class="see-more">
                                                                    <a href="{{ route('speaker.show', $speaker->getSlug()) }}" id="continue" style="text-decoration: none;">
                                                                        <h6>Ver más <i class="fa fa-chevron-right" style="vertical-align: middle;"></i></h6>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="row" style="margin-top: 50px">
                                        <div class="col-xs-12 align-center" style="margin-bottom: 15px;">
                                            <em>Todavía no se han cargado disertantes</em>
                                        </div>
                                    </div>
                                @endforelse
                                <div class="col-xs-12 align-center" style="margin-bottom: 15px;">
                                    @include('components.share', ['url' => 'http://cneisi.sanfrancisco.utn.edu.ar/presentaciones' ])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('components.sidebar')
        </div>
    </div>
@endsection