<section id="calendario" class="section schedule-section align-center">
    <div class="container">
        <span class="icon section-icon icon-office-21"></span>
        <h3 class="highlight">Eventos del congreso</h3>
        <h6>Conoce cuáles van a ser las diferentes charlas y actividades que se van a realizar durante en el congreso</h6>
        <br />

        <!-- Schedule start -->
        <div class="schedule">

            <!-- Navigation by day start -->
            <ul class="nav nav-schedule">
                <li class="active"><a href="#day1" data-toggle="tab"><h5 class="highlight">Dia 1</h5><p class="text-alt">31/08/2017</p></a></li>
                <li><a href="#day2" data-toggle="tab"><h5 class="highlight">Dia 2</h5><p class="text-alt">01/09/2017</p></a></li>
            </ul>
            <!-- Navigation by day end -->

            <!-- First level content start -->
            <div class="tab-content">

                <!-- Day 1 content start -->
                <div id="day1" class="tab-pane fade active in">

                    <!-- Navigation by auditorium start -->
                    <ul class="nav nav-schedule">
                        <li class="active"><a href="#day1_auditorium1" data-toggle="tab">Salón de actos</a></li>
                        <li><a href="#day1_auditorium2" data-toggle="tab">Sala A</a></li>
                        <li><a href="#day1_auditorium3" data-toggle="tab">Sala B</a></li>
                    </ul>
                    <!-- Navigation by auditorium start -->

                    <!-- Second level content start -->
                    <div class="tab-content tab-content-schedule">

                        <!-- Auditorium 1 content start -->
                        <div id="day1_auditorium1" class="tab-pane fade active in">

                            <!-- Accordion start -->
                            <div class="panel-group" id="day1_auditorium1_timeline">
                            @if(count($conferences['day1_auditorium1']) == 0)
                                <!-- Lecture start -->
                                    <div class="panel schedule-item">
                                        <div class="lecture-icon-wrapper">
                                            <img src="{{ asset('img/logo-utn.png') }}" alt="logo_utn" class="img-responsive">
                                        </div>
                                        <a data-toggle="collapse" data-parent="#day1_auditorium1_timeline" href="#day1_auditorium1_time1" class="schedule-item-toggle">
                                            <h6 class="title">Aviso<i class="icon icon-arrows-06"></i></h6>
                                        </a>
                                        <div id="day1_auditorium1" class="panel-collapse collapse in schedule-item-body">
                                            <article>
                                                <p class="description">No hay eventos cargados por el momento.</p>
                                            </article>
                                        </div>
                                    </div>
                                <!-- Lecture end -->
                            @else
                                @foreach ($conferences['day1_auditorium1'] as $key =>$conference)

                                    <!-- Lecture start -->
                                        <div class="panel schedule-item">
                                            <div class="lecture-icon-wrapper">
                                                @if($conference->getTitle() == 'Acto de inicio')
                                                    <img src="{{ asset('img/logo-cneisi.jpg') }}" alt="logo_utn" class="img-responsive">
                                                @elseif($conference->getSpeaker()['picture'] === null)
                                                    <img src="{{ asset('img/logo-utn.png') }}" alt="logo_utn" class="img-responsive">
                                                @else
                                                    <img src="{{ $conference->getSpeaker()['picture'] }}" alt="picture_speaker" class="img-responsive" style="filter: grayscale(100%);">
                                                @endif
                                            </div>
                                            <a data-toggle="collapse" data-parent="#day1_auditorium1_timeline" href="#{{ $conference->getSlug() . '-day1_auditorium1'}}" class="schedule-item-toggle {{ ($key != 0) ? 'collapse' : '' }}">
                                                <strong class="time highlight"><span class="icon icon-office-24"></span>{{ $conference->getTime() }}</strong>
                                                <h6 class="title">{{ $conference->getTitle() }}<i class="icon icon-arrows-06"></i></h6>
                                            </a>
                                            <div id="{{ $conference->getSlug() . '-day1_auditorium1' }}" class="panel-collapse collapse {{ ($key == 0) ? 'in' : '' }} schedule-item-body">
                                                <article>
                                                    <p class="description">{!! nl2br(e($conference->getDescription())) !!}</p>
                                                    @if($conference->getSpeaker()['name'] == 'Marcelo Temperini')
                                                        <strong class="highlight speaker-name">{{ $conference->getSpeaker()['name'] }} & Maximiliano Macedo</strong>
                                                    @else
                                                        <strong class="highlight speaker-name">{{ $conference->getSpeaker()['name'] }}</strong>
                                                    @endif
                                                    {{--@include('components.assistance-form')--}
                                                    {{--@include('components.share', ['url' => env('APP_URL') . '#' . $conference->getSlug() . '-day1_auditorium1' ])--}}
                                                </article>
                                            </div>
                                        </div>
                                    <!-- Lecture end -->

                                @endforeach
                            @endif

                            </div>
                            <!-- Accordion end -->

                        </div>
                        <!-- Auditorium 1 content end -->

                        <!-- Auditorium 2 content start -->
                        <div id="day1_auditorium2" class="tab-pane fade in">

                            <!-- Accordion start -->
                            <div class="panel-group" id="day1_auditorium2_timeline">
                            @if(count($conferences['day1_auditorium2']) == 0)
                                <!-- Lecture start -->
                                    <div class="panel schedule-item">
                                        <div class="lecture-icon-wrapper">
                                            <img src="{{ asset('img/logo-utn.png') }}" alt="logo-utn" class="img-responsive">
                                        </div>
                                        <a data-toggle="collapse" data-parent="#day1_auditorium2_timeline" href="#day1_auditorium2_time1" class="schedule-item-toggle">
                                            <h6 class="title">Aviso<i class="icon icon-arrows-06"></i></h6>
                                        </a>
                                        <div id="day1_auditorium2" class="panel-collapse collapse in schedule-item-body">
                                            <article>
                                                <p class="description">No hay eventos cargados por el momento.</p>
                                            </article>
                                        </div>
                                    </div>
                                <!-- Lecture end -->
                            @else
                                @foreach ($conferences['day1_auditorium2'] as $key =>$conference)

                                    <!-- Lecture start -->
                                        <div class="panel schedule-item">
                                            <div class="lecture-icon-wrapper">
                                                @if($conference->getTitle() == 'Workshop de Realidad Aumentada')
                                                    <img src="{{ asset('img/ranaloca.png') }}" alt="logo_utn" class="img-responsive">
                                                @elseif($conference->getSpeaker()['picture'] === null)
                                                    <img src="{{ asset('img/logo-utn.png') }}" alt="logo_utn" class="img-responsive">
                                                @else
                                                    <img src="{{ $conference->getSpeaker()['picture'] }}" alt="picture_speaker" class="img-responsive" style="filter: grayscale(100%);">
                                                @endif
                                            </div>
                                            <a data-toggle="collapse" data-parent="#day1_auditorium2_timeline" href="#{{ $conference->getSlug() . '-day1_auditorium2'}}" class="schedule-item-toggle {{ ($key != 0) ? 'collapse' : '' }}">
                                                <strong class="time highlight"><span class="icon icon-office-24"></span>{{ $conference->getTime() }}</strong>
                                                <h6 class="title">{{ $conference->getTitle() }}<i class="icon icon-arrows-06"></i></h6>
                                            </a>
                                            <div id="{{ $conference->getSlug() . '-day1_auditorium2'}}" class="panel-collapse collapse {{ ($key == 0) ? 'in' : '' }} schedule-item-body">
                                                <article>
                                                    <p class="description">{!! nl2br(e($conference->getDescription())) !!}</p>
                                                    <strong class="highlight speaker-name">{{ $conference->getSpeaker()['name'] }}</strong>
                                                    @if($conference->getTitle() == 'Workshop de Realidad Aumentada')
                                                        <strong class="highlight speaker-name">Lucia Scharff & Federico Degiovani</strong>
                                                    @endif
                                                    {{--@include('components.assistance-form')--}
                                                    {{--@include('components.share', ['url' => env('APP_URL') . '#' . $conference->getSlug() . '-day1_auditorium2'])--}}
                                                </article>
                                            </div>
                                        </div>
                                    <!-- Lecture end -->

                                @endforeach
                            @endif

                            </div>
                            <!-- Accordion end -->

                        </div>
                        <!-- Auditorium 2 content end -->

                        <!-- Auditorium 3 content start -->
                        <div id="day1_auditorium3" class="tab-pane fade in">

                            <!-- Accordion start -->
                            <div class="panel-group" id="day1_auditorium3_timeline">
                            @if(count($conferences['day1_auditorium3']) == 0)
                                <!-- Lecture start -->
                                    <div class="panel schedule-item">
                                        <div class="lecture-icon-wrapper">
                                            <img src="{{ asset('img/logo-utn.png') }}" alt="logo_utn" class="img-responsive">
                                        </div>
                                        <a data-toggle="collapse" data-parent="#day1_auditorium3_timeline" href="#day1_auditorium3_time1" class="schedule-item-toggle">
                                            <h6 class="title">Aviso<i class="icon icon-arrows-06"></i></h6>
                                        </a>
                                        <div id="day1_auditorium3" class="panel-collapse collapse in schedule-item-body">
                                            <article>
                                                <p class="description">No hay eventos cargados por el momento.</p>
                                            </article>
                                        </div>
                                    </div>
                                <!-- Lecture end -->
                            @else
                                @foreach ($conferences['day1_auditorium3'] as $key =>$conference)

                                    <!-- Lecture start -->
                                        <div class="panel schedule-item">
                                            <div class="lecture-icon-wrapper">

                                                @if($conference->getTitle() == 'Accesibilidad Web (Globant)')
                                                    <img src="{{ asset('img/sponsors/globant-2.jpg') }}" alt="globant" class="img-responsive">
                                                @elseif($conference->getTitle() == 'Desarrollo Mobile con Google Cloud Platform (Nexo)')
                                                    <img src="{{ asset('img/speakers/juan-pablo-bono.png') }}" alt="nexo" class="img-responsive" style="filter: grayscale(100%);">
                                                @elseif($conference->getSpeaker()['picture'] === null)
                                                    <img src="{{ asset('img/logo-utn.png') }}" alt="logo_utn" class="img-responsive">
                                                @else
                                                    <img src="{{ $conference->getSpeaker()['picture'] }}" alt="picture_speaker" class="img-responsive" style="filter: grayscale(100%);">
                                                @endif
                                            </div>
                                            <a data-toggle="collapse" data-parent="#day1_auditorium3_timeline" href="#{{ $conference->getSlug() . '-day1_auditorium3'}}" class="schedule-item-toggle {{ ($key != 0) ? 'collapse' : '' }}">
                                                <strong class="time highlight"><span class="icon icon-office-24"></span>{{ $conference->getTime() }}</strong>
                                                <h6 class="title">{{ $conference->getTitle() }}<i class="icon icon-arrows-06"></i></h6>
                                            </a>
                                            <div id="{{ $conference->getSlug() . '-day1_auditorium3'}}" class="panel-collapse collapse {{ ($key == 0) ? 'in' : '' }} schedule-item-body">
                                                <article>
                                                    <p class="description">{!! nl2br(e($conference->getDescription()))!!}</p>
                                                    @if($conference->getSpeaker()['name'] == 'Emiliano Jramoy')
                                                        <strong class="highlight speaker-name">{{ $conference->getSpeaker()['name'] }} & Juan Zaffaroni</strong>
                                                    @elseif($conference->getTitle() == 'Desarrollo Mobile con Google Cloud Platform (Nexo)')
                                                        <strong class="highlight speaker-name">Juan Pablo Bono</strong>
                                                    @else
                                                        <strong class="highlight speaker-name">{{ $conference->getSpeaker()['name'] }}</strong>
                                                    @endif
                                                    {{--@include('components.assistance-form')--}
                                                    {{--@include('components.share', ['url' => env('APP_URL') . '#' . $conference->getSlug() . '-day1_auditorium3'])--}}
                                                </article>
                                            </div>
                                        </div>
                                    <!-- Lecture end -->

                                @endforeach
                            @endif
                            </div>
                            <!-- Accordion end -->

                        </div>
                        <!-- Auditorium 3 content end -->

                    </div>
                    <!-- Second level content end -->

                </div>
                <!-- Day 1 content end -->

                <!-- Day 2 content start -->
                <div id="day2" class="tab-pane fade in">

                    <!-- Navigation by auditorium start -->
                    <ul class="nav nav-schedule">
                        <li class="active"><a href="#day2_auditorium1" data-toggle="tab">Salón de actos</a></li>
                        <li><a href="#day2_auditorium2" data-toggle="tab">Sala A</a></li>
                        <li><a href="#day2_auditorium3" data-toggle="tab">Sala B</a></li>
                    </ul>
                    <!-- Navigation by auditorium end -->

                    <!-- Second level content start -->
                    <div class="tab-content tab-content-schedule">

                        <!-- Auditorium 1 content start -->
                        <div id="day2_auditorium1" class="tab-pane fade active in">

                            <!-- Accordion start -->
                            <div class="panel-group" id="day2_auditorium1_timeline">
                            @if(count($conferences['day2_auditorium1']) == 0)
                                <!-- Lecture start -->
                                    <div class="panel schedule-item">
                                        <div class="lecture-icon-wrapper">
                                            <img src="{{ asset('img/logo-utn.png') }}" alt="logo_utn" class="img-responsive">
                                        </div>
                                        <a data-toggle="collapse" data-parent="#day2_auditorium1_timeline" href="#day2_auditorium1_time1" class="schedule-item-toggle">
                                            <h6 class="title">Aviso<i class="icon icon-arrows-06"></i></h6>
                                        </a>
                                        <div id="day2_auditorium1" class="panel-collapse collapse in schedule-item-body">
                                            <article>
                                                <p class="description">No hay eventos cargados por el momento.</p>
                                            </article>
                                        </div>
                                    </div>
                                    <!-- Lecture end -->
                            @else
                                @foreach ($conferences['day2_auditorium1'] as $key =>$conference)

                                    <!-- Lecture start -->
                                        <div class="panel schedule-item">
                                            <div class="lecture-icon-wrapper">

                                                @if($conference->getTitle() == 'Acto de cierre' || $conference->getTitle() == 'Presentacion de papers')
                                                    <img src="{{ asset('img/logo-cneisi.jpg') }}" alt="logo_utn" class="img-responsive">
                                                @elseif($conference->getSpeaker()['picture'] === null)
                                                    <img src="{{ asset('img/logo-utn.png') }}" alt="logo_utn" class="img-responsive">
                                                @elseif($conference->getTitle() == 'Animate a cambiar la historia')
                                                    <img src="{{ asset('img/speakers/german-merlo.jpg') }}" alt="socialtools" class="img-responsive">
                                                @else
                                                    <img src="{{ $conference->getSpeaker()['picture'] }}" alt="picture_speaker" class="img-responsive" style="filter: grayscale(100%);">
                                                @endif
                                            </div>
                                            <a data-toggle="collapse" data-parent="#day2_auditorium1_timeline" href="#{{ $conference->getSlug() . '-day2_auditorium1'}}" class="schedule-item-toggle {{ ($key != 0) ? 'collapse' : '' }}">
                                                <strong class="time highlight"><span class="icon icon-office-24"></span>{{ $conference->getTime() }}</strong>
                                                <h6 class="title">{{ $conference->getTitle() }}<i class="icon icon-arrows-06"></i></h6>
                                            </a>
                                            <div id="{{ $conference->getSlug() . '-day2_auditorium1'}}" class="panel-collapse collapse {{ ($key == 0) ? 'in' : '' }} schedule-item-body">
                                                <article>
                                                    <p class="description">{!! nl2br(e($conference->getDescription())) !!}</p>
                                                    <strong class="highlight speaker-name">{{ $conference->getSpeaker()['name'] }}</strong>

                                                    {{--@include('components.assistance-form')--}
                                                    {{--@include('components.share', ['url' => env('APP_URL') . '#' . $conference->getSlug() . '-day2_auditorium1'])--}}
                                                </article>
                                            </div>
                                        </div>
                                    <!-- Lecture end -->

                                @endforeach
                            @endif
                            </div>
                            <!-- Accordion end -->

                        </div>
                        <!-- Auditorium 1 content end -->

                        <!-- Auditorium 2 content start -->
                        <div id="day2_auditorium2" class="tab-pane fade in">

                            <!-- Accordion start -->
                            <div class="panel-group" id="day2_auditorium2_timeline">
                            @if(count($conferences['day2_auditorium2']) == 0)
                                <!-- Lecture start -->
                                    <div class="panel schedule-item">
                                        <div class="lecture-icon-wrapper">
                                            <img src="{{ asset('img/logo-utn.png') }}" alt="logo_utn" class="img-responsive">
                                        </div>
                                        <a data-toggle="collapse" data-parent="#day2_auditorium2_timeline" href="#day2_auditorium2_time1" class="schedule-item-toggle">
                                            <h6 class="title">Aviso<i class="icon icon-arrows-06"></i></h6>
                                        </a>
                                        <div id="day2_auditorium2" class="panel-collapse collapse in schedule-item-body">
                                            <article>
                                                <p class="description">No hay eventos cargados por el momento.</p>
                                            </article>
                                        </div>
                                    </div>
                                <!-- Lecture end -->
                            @else
                                @foreach ($conferences['day2_auditorium2'] as $key =>$conference)

                                    <!-- Lecture start -->
                                        <div class="panel schedule-item">
                                            <div class="lecture-icon-wrapper">
                                                @if($conference->getTitle() == 'Presentacion de papers')
                                                    <img src="{{ asset('img/logo-cneisi.jpg') }}" alt="logo_utn" class="img-responsive">
                                                @elseif($conference->getTitle() == 'Animate a cambiar la historia')
                                                    <img src="{{ asset('img/sponsors/socialtools-2.png') }}" alt="logo_utn" class="img-responsive">
                                                @elseif($conference->getSpeaker()['picture'] === null)
                                                    <img src="{{ asset('img/logo-utn.png') }}" alt="logo_utn" class="img-responsive">
                                                @else
                                                    <img src="{{ $conference->getSpeaker()['picture'] }}" alt="picture_speaker" class="img-responsive" style="filter: grayscale(100%);">
                                                @endif
                                            </div>
                                            <a data-toggle="collapse" data-parent="#day2_auditorium2_timeline" href="#{{ $conference->getSlug() . '-day2_auditorium2'}}" class="schedule-item-toggle {{ ($key != 0) ? 'collapse' : '' }}">
                                                <strong class="time highlight"><span class="icon icon-office-24"></span>{{ $conference->getTime() }}</strong>
                                                <h6 class="title">{{ $conference->getTitle() }}<i class="icon icon-arrows-06"></i></h6>
                                            </a>
                                            <div id="{{ $conference->getSlug() . '-day2_auditorium2'}}" class="panel-collapse collapse {{ ($key == 0) ? 'in' : '' }} schedule-item-body">
                                                <article>
                                                    <p class="description">{!! nl2br(e($conference->getDescription())) !!}</p>
                                                    @if($conference->getTitle() == '¿Cómo funciona una empresa sin jefes?')
                                                        <strong class="highlight speaker-name">{{ $conference->getSpeaker()['name'] }}, Federico Grosso & Lucas Giudice</strong>
                                                    @elseif($conference->getTitle() == 'Animate a cambiar la historia')
                                                        <strong class="highlight speaker-name">Germán Merlo</strong>
                                                    @else
                                                        <strong class="highlight speaker-name">{{ $conference->getSpeaker()['name'] }}</strong>
                                                    @endif

                                                    {{--@include('components.assistance-form')--}
                                                    {{--@include('components.share', ['url' => env('APP_URL') . '#' . $conference->getSlug() . '-day2_auditorium2'])--}}
                                                </article>
                                            </div>
                                        </div>
                                    <!-- Lecture end -->

                                @endforeach
                            @endif
                            </div>
                            <!-- Accordion end -->

                        </div>
                        <!-- Auditorium 2 content end -->

                        <!-- Auditorium 3 content start -->
                        <div id="day2_auditorium3" class="tab-pane fade in">

                            <!-- Accordion start -->
                            <div class="panel-group" id="day2_auditorium3_timeline">
                            @if(count($conferences['day2_auditorium3']) == 0)
                                <!-- Lecture start -->
                                    <div class="panel schedule-item">
                                        <div class="lecture-icon-wrapper">
                                            <img src="{{ asset('img/logo-utn.png') }}" alt="logo_utn" class="img-responsive">
                                        </div>
                                        <a data-toggle="collapse" data-parent="#day2_auditorium3_timeline" href="#day2_auditorium3_time1" class="schedule-item-toggle">
                                            <h6 class="title">Aviso<i class="icon icon-arrows-06"></i></h6>
                                        </a>
                                        <div id="day2_auditorium3" class="panel-collapse collapse in schedule-item-body">
                                            <article>
                                                <p class="description">No hay eventos cargados por el momento.</p>
                                            </article>
                                        </div>
                                    </div>
                                <!-- Lecture end -->
                            @else
                                @foreach ($conferences['day2_auditorium3'] as $key =>$conference)

                                    <!-- Lecture start -->
                                        <div class="panel schedule-item">
                                            <div class="lecture-icon-wrapper">
                                                @if($conference->getTitle() == 'Presentacion de papers')
                                                    <img src="{{ asset('img/logo-cneisi.jpg') }}" alt="logo_utn" class="img-responsive">
                                                @elseif($conference->getSpeaker()['picture'] === null)
                                                    <img src="{{ asset('img/logo-utn.png') }}" alt="logo_utn" class="img-responsive">
                                                @else
                                                    <img src="{{ $conference->getSpeaker()['picture'] }}" alt="picture_speaker" class="img-responsive" style="filter: grayscale(100%);">
                                                @endif
                                            </div>
                                            <a data-toggle="collapse" data-parent="#day2_auditorium3_timeline" href="#{{ $conference->getSlug() . '-day2_auditorium3' }}" class="schedule-item-toggle {{ ($key != 0) ? 'collapse' : '' }}">
                                                <strong class="time highlight"><span class="icon icon-office-24"></span>{{ $conference->getTime() }}</strong>
                                                <h6 class="title">{{ $conference->getTitle() }}<i class="icon icon-arrows-06"></i></h6>
                                            </a>
                                            <div id="{{ $conference->getSlug() . '-day2_auditorium3'}}" class="panel-collapse collapse {{ ($key == 0) ? 'in' : '' }} schedule-item-body">
                                                <article>
                                                    <p class="description">{!! nl2br(e($conference->getDescription())) !!}</p>
                                                    @if($conference->getTitle() == 'MegaMind: Enfoque Práctico de Inteligencia Artificial')
                                                        <strong class="highlight speaker-name">Nicolás Ferrero</strong>
                                                    @else
                                                        <strong class="highlight speaker-name">{{ $conference->getSpeaker()['name'] }}</strong>
                                                    @endif
                                                    {{--@include('components.assistance-form')--}
                                                    {{--@include('components.share', ['url' => env('APP_URL') . '#' . $conference->getSlug() . '-day2_auditorium3'])--}}
                                                </article>
                                            </div>
                                        </div>
                                    <!-- Lecture end -->

                                @endforeach
                            @endif
                            </div>
                            <!-- Accordion end -->

                        </div>
                        <!-- Auditorium 3 content end -->

                    </div>
                    <!-- Second level content end -->

                </div>
                <!-- Day 2 content end -->

            </div>
            <!-- First level content end -->

        </div>
        <!-- Schedule end -->

    </div>

</section>