<section id="about" class="section align-center">
    <div class="container">
        <span class="icon section-icon icon-multimedia-12"></span>
        <h5>Bienvenidos al <br><span class="highlight">Congreso Nacional de Estudiantes de Ingeniería en Sistemas de Información 2017</span></h5>
        <p class="text-alt"><span class="highlight"></span></p>
        <br />
        <br />

        <div class="tabs-wrapper tabs-horizontal">
            <ul class="nav nav-tabs">
                <li><a href="#horizontal_tab1" data-toggle="tab">
                        <h6 class="heading-alt"><span class="fa fa-clock-o"></span> Cuenta regresiva</h6>
                    </a></li>
                <li class="active"><a href="#horizontal_tab2" data-toggle="tab">
                        <h6 class="heading-alt"><span class="fa fa-code"></span> Información general</h6>
                    </a></li>
                <li><a href="#horizontal_tab3" data-toggle="tab">
                        <h6 class="heading-alt"><span class="fa fa-external-link"></span> Sponsors</h6>
                    </a></li>
            </ul>

            <div class="tab-content">

                <div id="horizontal_tab1" class="tab-pane fade">

                        @include('components.countdown')

                </div>


                    <div id="horizontal_tab2" class="tab-pane fade active in">
                        <div class="col-sm-5 img-column">
                            <img src="{{asset('/img/utn-entrance.jpg')}}" alt="" class="img-responsive" />
                        </div>
                        <div class="col-sm-7 align-left">
                            <h6>Acerca del evento</h6>
                            <p>La facultad regional San Francisco de la <strong>UTN</strong> presenta el undécimo congreso nacional de Ingeniería en Sistemas, cuya realización busca reunir a todas las delegaciones de las distintas facultades regionales y público en general para poder otorgar un espacio de capacitación, reunión, comunión, difusión a través de las diferentes disertaciones realizadas parte de profesionales, graduados y estudiantes vinculados tecnologías de información y sistemas informáticos; y también propiciar un espacio para la presentación y difusión de trabajos realizados en las diferentes regionales sobre investigación científica, desarrollo y/o aplicaciónes innovadoras relacionadas con el rubro.</p>
                            <p>El evento se llevará a cabo el 31 de agosto, 1 y 2 de septiembre en las instalaciones de la facultad. Nuestro objetivo es poder lograr y favorecer el intercambio académico y cultural que año a año nos permite acercarnos y compartir entre todos esta fructífera experiencia.</p>
                            <a href="{{ route('about') }}" class="btn btn-outline-clr btn-sm">{{ trans('buttons.see-more') }}</a>
                            @include('components.share', ['url' => env('APP_URL') . '#' . 'about' ])
                        </div>
                    </div>

                <div id="horizontal_tab3" class="tab-pane fade">
                    <div class="col-sm-5 img-column">
                        <img src="{{asset('/img/logo-utn.png')}}" alt="" class="img-responsive" />
                    </div>
                    <div class="col-sm-7 align-left">
                        <h6>Sponsors</h6>
                        <p>Si estás interesado en participar como sponsor del evento podés comunicarte con nostros al siguiente mail:</p>
                        <p>El espacio de sponsors contará con los siguientes beneficios:</p>
                        <ul>
                            <li>- Aparición en el sitio web.</li>
                            <li>- </li>
                            <li>- </li>
                        </ul>
                        @include('components.share', ['url' => env('APP_URL') . '#' . 'about' ])
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>