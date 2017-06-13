@extends('layouts.master')
@include('components.menu')
@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 100px;">
            <div class="col-md-8">
                <div class="panel panel-default" style="margin-bottom: 100px;">
                    <div class="panel-body">
                        <div class="col-md-12 align-center" style="margin-bottom: 30px;">
                            <p class="text-center"><span class="fa fa-bullhorn fa-4x"></span></p>
                            <h5 class="align-center" style="margin-top: 20px;"><span class="highlight">{{ trans('strings.presentations') }}</span></h5>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 align-center" style="margin-bottom: 15px;">
                                @include('components.share', ['url' => env('APP_URL') . 'presentations' ])
                            </div>
                            <div class="col-xs-12 align-center" style="margin-bottom: 15px;">
                                <img src="{{asset('/img/presentations.jpg')}}" alt="presentations" class="img-responsive" /><br>
                                <article>

                                    <p class="align-left">Se invita a los estudiantes de la carrera Ingeniería en Sistemas de Información de la Universidad Tecnológica Nacional a presentar trabajos concluidos o en proceso de desarrollo avanzado (relacionados con proyectos finales de grado, trabajos prácticos de cátedra, trabajos de investigación en grupos de I+D, u otros trabajos académicos) en donde reporten las ideas y resultados más innovadores y significativos de los mismos, desde una perspectiva universitaria y científica.</p>
                                    <p class="align-center"><strong> Enviar los documentos al siguiente mail: </strong></p>

                                </article>
                                <br>
                                <br>
                                <article>

                                    <h6><span class="highlight">Consideraciones</span> de presentación</h6>

                                    <ul class="align-center">
                                        <li><span class="fa fa-check check-icon"></span> Los trabajos aceptados serán expuestos durante el CNEISI 2017 a través de pósters. El tamaño de posters deberá ser de 1 m. de alto y 0.70 m. de ancho. El formato de presentación de poster es el siguiente:</li>
                                        <a href="{{ url('FormatPoster') }}"><img src="{{asset('/img/poster.png')}}" alt="poster" class="img-responsive poster" /></a>
                                        <li><span class="fa fa-check check-icon"></span> Solo se aceptará el envío electrónico de los Papers a través del Envío Online</li>
                                        <li><span class="fa fa-check check-icon"></span> El Autor o los Autores podrán presentar más de un trabajo.</li>
                                        <li><span class="fa fa-check check-icon"></span> Cada trabajo debería contener un máximo de 12 páginas.</li>
                                        <li><span class="fa fa-check check-icon"></span> Formato para el envío de los Papers: Según documento <a href="{{ url('FormatPaper') }}">FormatoPapers.doc</a> </li>
                                        <li><span class="fa fa-check check-icon"></span> El formato preferido es PDF.</li>
                                        <li><span class="fa fa-check check-icon"></span> El idioma requerido es español</li>
                                        <li><span class="fa fa-check check-icon"></span> Se dará aviso vía mail la aprobación del mismo</li>
                                    </ul>

                                </article>
                                <div class="col-xs-12 align-center" style="margin-bottom: 15px;">
                                    @include('components.share', ['url' => env('APP_URL') . 'presentations' ])
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