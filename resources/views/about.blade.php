@extends('layouts.master')

@section('title', 'Acerca del CNEISI')
@section('description', 'Información del CNEISI - Congreso Nacional de Estudiantes de Ingenieria en Sistemas de Informacion')
@section('keywords', 'cneisi, utn, argentina, universidad, congreso, evento')
@section('author', 'UTN-FRSF')
@section('robots', 'index, follow')

@section('og:type', 'article')
@section('og:url', 'http://cneisi.sanfrancisco.utn.edu.ar/acerca-de')

@include('components.menu')
@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 100px;">
            <div class="col-md-8">
                <div class="panel panel-default" style="margin-bottom: 100px;">
                    <div class="panel-body">
                        <div class="col-md-12 align-center" style="margin-bottom: 30px;">
                            <p class="text-center"><span class="fa fa-info-circle fa-4x"></span></p>
                            <h5 class="align-center" style="margin-top: 20px;"><span class="highlight">{{ trans('strings.about') }}</span></h5>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 align-center" style="margin-bottom: 15px;">
                                @include('components.share', ['url' => env('APP_URL') . 'acerca-de' ])
                            </div>
                            <div class="col-xs-12 align-center" style="margin-bottom: 15px;">
                                <img src="{{asset('/img/utn-about.jpg')}}" alt="about" class="img-responsive" /><br>
                                <article>
                                    <p>En el año 1987 en nuestra casa de estudios se incorporó el cursado de Ingeniería en Sistemas y lo que entonces era una "Escuela de Ingeniería San Francisco", pasó a denominarse “Unidad Académica San Francisco”</p>
                                    <p>11 años ya pasaron de aquel primer Congreso Nacional de Estudiantes de Ingeniería en Información, y hoy nos encontramos nuevamente para formar parte de una nueva jornada que reunirá las distintas delegaciones de facultades regionales de la Universidad Tecnológica Nacional, para compartir por 3 días jornadas de capacitaciones, charlas, presentaciones, intercambio de ideas y más</p>
                                    <p>La facultad regional San Francisco de la <strong>UTN</strong> presenta el undécimo congreso nacional de Ingeniería en Sistemas, cuya realización busca reunir a todas las delegaciones de las distintas facultades regionales y público en general para poder otorgar un espacio de capacitación, reunión, comunión, difusión a través de las diferentes disertaciones realizadas parte de profesionales, graduados y estudiantes vinculados tecnologías de información y sistemas informáticos; y también propiciar un espacio para la presentación y difusión de trabajos realizados en las diferentes regionales sobre investigación científica, desarrollo y/o aplicaciónes innovadoras relacionadas con el rubro.</p>
                                    <p>El evento se llevará a cabo el 31 de agosto, 1 y 2 de septiembre en las instalaciones de la facultad. Nuestro objetivo es poder lograr y favorecer el intercambio académico y cultural que año a año nos permite acercarnos y compartir entre todos esta fructífera experiencia.</p>
                                    <p>Los invitamos a todos a formar parte de este evento organizado para promover la unidad y el carácter federativo de esta facultad que año a año sigue creciendo y promoviendo eventos abiertos para toda la comunidad.</p>
                                </article>
                            </div>
                            <div class="col-xs-12 align-center" style="margin-bottom: 15px;">
                                @include('components.share', ['url' => env('APP_URL') . 'acerca-de' ])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('components.sidebar')
        </div>
    </div>
@endsection