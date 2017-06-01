<section id="schedule" class="section schedule-section align-center">
    <div class="container">
        <span class="icon section-icon icon-office-21"></span>
        <h3>Eventos del congreso</h3>
        <br />

        <!-- Schedule start -->
        <div class="schedule">

            <!-- Navigation by day start -->
            <ul class="nav nav-schedule">
                <li class="active"><a href="#day1" data-toggle="tab"><h5 class="highlight">Dia 1</h5><p class="text-alt">31/08/2017</p></a></li>
                <li><a href="#day2" data-toggle="tab"><h5 class="highlight">Dia 2</h5><p class="text-alt">01/09/2017</p></a></li>
                <li><a href="#day3" data-toggle="tab"><h5 class="highlight">Dia 3</h5><p class="text-alt">02/10/2017</p></a></li>
            </ul>
            <!-- Navigation by day end -->

            <!-- First level content start -->
            <div class="tab-content">

                <!-- Day 1 content start -->
                <div id="day1" class="tab-pane fade active in">

                    <!-- Navigation by auditorium start -->
                    <ul class="nav nav-schedule">
                        <li class="active"><a href="#day1_auditorium1" data-toggle="tab">Auditorio 1</a></li>
                        <li><a href="#day1_auditorium2" data-toggle="tab">Auditorio 2</a></li>
                        <li><a href="#day1_auditorium3" data-toggle="tab">Auditorio 3</a></li>
                    </ul>
                    <!-- Navigation by auditorium start -->

                    <!-- Second level content start -->
                    <div class="tab-content tab-content-schedule">

                        <!-- Auditorium 1 content start -->
                        <div id="day1_auditorium1" class="tab-pane fade active in">

                            <!-- Accordion start -->
                            <div class="panel-group" id="day1_auditorium1_timeline">

                            @foreach ($conferences['day1_auditorium1'] as $key =>$conference)

                                <!-- Lecture start -->
                                    <div class="panel schedule-item">
                                        <div class="lecture-icon-wrapper">
                                            
                                            @if($conference->getSpeaker()['picture'] === null)
                                                <img src="{{ asset('img/logo-utn.png') }}" alt="" class="img-responsive">
                                            @else
                                                <img src="{{ $conference->getSpeaker()['picture'] }}" alt="" class="img-responsive">
                                            @endif
                                        </div>
                                        <a data-toggle="collapse" data-parent="#day1_auditorium1_timeline" href="#{{ $conference->getSlug() . '-day1_auditorium1'}}" class="schedule-item-toggle {{ ($key != 0) ? 'collapse' : '' }}">
                                            <strong class="time highlight"><span class="icon icon-office-24"></span>{{ $conference->getTime() }}</strong>
                                            <h6 class="title">{{ $conference->getTitle() }}<i class="icon icon-arrows-06"></i></h6>
                                        </a>
                                        <div id="{{ $conference->getSlug() . '-day1_auditorium1' }}" class="panel-collapse collapse {{ ($key == 0) ? 'in' : '' }} schedule-item-body">
                                            <article>
                                                <p class="description">{{ $conference->getDescription() }}</p>
                                                <strong class="highlight speaker-name">{{ $conference->getSpeaker()['name'] }}</strong>
                                                @if(!Auth::guest())
                                                    <a href="#" class="btn btn-rounded btn-outline-clr btn-sm"><span class="fa fa-thumbs-o-up"></span>Asistiré</a>
                                                @endif
                                                @include('components.share', ['url' => env('APP_URL') . '#' . $conference->getSlug() . '-day1_auditorium1' ])
                                            </article>
                                        </div>
                                    </div>
                                    <!-- Lecture end -->

                            @endforeach

                            </div>
                            <!-- Accordion end -->

                        </div>
                        <!-- Auditorium 1 content end -->

                        <!-- Auditorium 2 content start -->
                        <div id="day1_auditorium2" class="tab-pane fade in">

                            <!-- Accordion start -->
                            <div class="panel-group" id="day1_auditorium2_timeline">

                            @foreach ($conferences['day1_auditorium2'] as $key =>$conference)

                                <!-- Lecture start -->
                                    <div class="panel schedule-item">
                                        <div class="lecture-icon-wrapper">
                                            
                                            @if($conference->getSpeaker()['picture'] === null)
                                                <img src="{{ asset('img/logo-utn.png') }}" alt="" class="img-responsive">
                                            @else
                                                <img src="{{ $conference->getSpeaker()['picture'] }}" alt="" class="img-responsive">
                                            @endif
                                        </div>
                                        <a data-toggle="collapse" data-parent="#day1_auditorium2_timeline" href="#{{ $conference->getSlug() . '-day1_auditorium2'}}" class="schedule-item-toggle {{ ($key != 0) ? 'collapse' : '' }}">
                                            <strong class="time highlight"><span class="icon icon-office-24"></span>{{ $conference->getTime() }}</strong>
                                            <h6 class="title">{{ $conference->getTitle() }}<i class="icon icon-arrows-06"></i></h6>
                                        </a>
                                        <div id="{{ $conference->getSlug() . '-day1_auditorium2'}}" class="panel-collapse collapse {{ ($key == 0) ? 'in' : '' }} schedule-item-body">
                                            <article>
                                                <p class="description">{{ $conference->getDescription() }}</p>
                                                <strong class="highlight speaker-name">{{ $conference->getSpeaker()['name'] }}</strong>
                                                @if(!Auth::guest())
                                                    <a href="#" class="btn btn-rounded btn-outline-clr btn-sm"><span class="fa fa-thumbs-o-up"></span>Asistiré</a>
                                                @endif
                                                @include('components.share', ['url' => env('APP_URL') . '#' . $conference->getSlug() . '-day1_auditorium2'])
                                            </article>
                                        </div>
                                    </div>
                                    <!-- Lecture end -->

                            @endforeach

                            </div>
                            <!-- Accordion end -->

                        </div>
                        <!-- Auditorium 2 content end -->

                        <!-- Auditorium 3 content start -->
                        <div id="day1_auditorium3" class="tab-pane fade in">

                            <!-- Accordion start -->
                            <div class="panel-group" id="day1_auditorium3_timeline">

                            @foreach ($conferences['day1_auditorium3'] as $key =>$conference)

                                <!-- Lecture start -->
                                    <div class="panel schedule-item">
                                        <div class="lecture-icon-wrapper">
                                            
                                            @if($conference->getSpeaker()['picture'] === null)
                                                <img src="{{ asset('img/logo-utn.png') }}" alt="" class="img-responsive">
                                            @else
                                                <img src="{{ $conference->getSpeaker()['picture'] }}" alt="" class="img-responsive">
                                            @endif
                                        </div>
                                        <a data-toggle="collapse" data-parent="#day1_auditorium3_timeline" href="#{{ $conference->getSlug() . '-day1_auditorium3'}}" class="schedule-item-toggle {{ ($key != 0) ? 'collapse' : '' }}">
                                            <strong class="time highlight"><span class="icon icon-office-24"></span>{{ $conference->getTime() }}</strong>
                                            <h6 class="title">{{ $conference->getTitle() }}<i class="icon icon-arrows-06"></i></h6>
                                        </a>
                                        <div id="{{ $conference->getSlug() . '-day1_auditorium3'}}" class="panel-collapse collapse {{ ($key == 0) ? 'in' : '' }} schedule-item-body">
                                            <article>
                                                <p class="description">{{ $conference->getDescription() }}</p>
                                                <strong class="highlight speaker-name">{{ $conference->getSpeaker()['name'] }}</strong>
                                                @if(!Auth::guest())
                                                    <a href="#" class="btn btn-rounded btn-outline-clr btn-sm"><span class="fa fa-thumbs-o-up"></span>Asistiré</a>
                                                @endif
                                                @include('components.share', ['url' => env('APP_URL') . '#' . $conference->getSlug() . '-day1_auditorium3'])
                                            </article>
                                        </div>
                                    </div>
                                    <!-- Lecture end -->

                                @endforeach

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
                        <li class="active"><a href="#day2_auditorium1" data-toggle="tab">Auditorio 1</a></li>
                        <li><a href="#day2_auditorium2" data-toggle="tab">Auditorio 2</a></li>
                        <li><a href="#day2_auditorium3" data-toggle="tab">Auditorio 3</a></li>
                    </ul>
                    <!-- Navigation by auditorium end -->

                    <!-- Second level content start -->
                    <div class="tab-content tab-content-schedule">

                        <!-- Auditorium 1 content start -->
                        <div id="day2_auditorium1" class="tab-pane fade active in">

                            <!-- Accordion start -->
                            <div class="panel-group" id="day2_auditorium1_timeline">

                            @foreach ($conferences['day2_auditorium1'] as $key =>$conference)

                                <!-- Lecture start -->
                                    <div class="panel schedule-item">
                                        <div class="lecture-icon-wrapper">
                                            
                                            @if($conference->getSpeaker()['picture'] === null)
                                                <img src="{{ asset('img/logo-utn.png') }}" alt="" class="img-responsive">
                                            @else
                                                <img src="{{ $conference->getSpeaker()['picture'] }}" alt="" class="img-responsive">
                                            @endif
                                        </div>
                                        <a data-toggle="collapse" data-parent="#day2_auditorium1_timeline" href="#{{ $conference->getSlug() . '-day2_auditorium1'}}" class="schedule-item-toggle {{ ($key != 0) ? 'collapse' : '' }}">
                                            <strong class="time highlight"><span class="icon icon-office-24"></span>{{ $conference->getTime() }}</strong>
                                            <h6 class="title">{{ $conference->getTitle() }}<i class="icon icon-arrows-06"></i></h6>
                                        </a>
                                        <div id="{{ $conference->getSlug() . '-day2_auditorium1'}}" class="panel-collapse collapse {{ ($key == 0) ? 'in' : '' }} schedule-item-body">
                                            <article>
                                                <p class="description">{{ $conference->getDescription() }}</p>
                                                <strong class="highlight speaker-name">{{ $conference->getSpeaker()['name'] }}</strong>
                                                @if(!Auth::guest())
                                                    <a href="#" class="btn btn-rounded btn-outline-clr btn-sm"><span class="fa fa-thumbs-o-up"></span>Asistiré</a>
                                                @endif
                                                @include('components.share', ['url' => env('APP_URL') . '#' . $conference->getSlug() . '-day2_auditorium1'])
                                            </article>
                                        </div>
                                    </div>
                                    <!-- Lecture end -->

                                @endforeach

                            </div>
                            <!-- Accordion end -->

                        </div>
                        <!-- Auditorium 1 content end -->

                        <!-- Auditorium 2 content start -->
                        <div id="day2_auditorium2" class="tab-pane fade in">

                            <!-- Accordion start -->
                            <div class="panel-group" id="day2_auditorium2_timeline">

                            @foreach ($conferences['day2_auditorium2'] as $key =>$conference)

                                <!-- Lecture start -->
                                    <div class="panel schedule-item">
                                        <div class="lecture-icon-wrapper">
                                            
                                            @if($conference->getSpeaker()['picture'] === null)
                                                <img src="{{ asset('img/logo-utn.png') }}" alt="" class="img-responsive">
                                            @else
                                                <img src="{{ $conference->getSpeaker()['picture'] }}" alt="" class="img-responsive">
                                            @endif
                                        </div>
                                        <a data-toggle="collapse" data-parent="#day2_auditorium2_timeline" href="#{{ $conference->getSlug() . '-day2_auditorium2'}}" class="schedule-item-toggle {{ ($key != 0) ? 'collapse' : '' }}">
                                            <strong class="time highlight"><span class="icon icon-office-24"></span>{{ $conference->getTime() }}</strong>
                                            <h6 class="title">{{ $conference->getTitle() }}<i class="icon icon-arrows-06"></i></h6>
                                        </a>
                                        <div id="{{ $conference->getSlug() . '-day2_auditorium2'}}" class="panel-collapse collapse {{ ($key == 0) ? 'in' : '' }} schedule-item-body">
                                            <article>
                                                <p class="description">{{ $conference->getDescription() }}</p>
                                                <strong class="highlight speaker-name">{{ $conference->getSpeaker()['name'] }}</strong>
                                                @if(!Auth::guest())
                                                    <a href="#" class="btn btn-rounded btn-outline-clr btn-sm"><span class="fa fa-thumbs-o-up"></span>Asistiré</a>
                                                @endif
                                                @include('components.share', ['url' => env('APP_URL') . '#' . $conference->getSlug() . '-day2_auditorium2'])
                                            </article>
                                        </div>
                                    </div>
                                    <!-- Lecture end -->

                                @endforeach

                            </div>
                            <!-- Accordion end -->

                        </div>
                        <!-- Auditorium 2 content end -->

                        <!-- Auditorium 3 content start -->
                        <div id="day2_auditorium3" class="tab-pane fade in">

                            <!-- Accordion start -->
                            <div class="panel-group" id="day2_auditorium3_timeline">

                            @foreach ($conferences['day2_auditorium3'] as $key =>$conference)

                                <!-- Lecture start -->
                                    <div class="panel schedule-item">
                                        <div class="lecture-icon-wrapper">
                                            
                                            @if($conference->getSpeaker()['picture'] === null)
                                                <img src="{{ asset('img/logo-utn.png') }}" alt="" class="img-responsive">
                                            @else
                                                <img src="{{ $conference->getSpeaker()['picture'] }}" alt="" class="img-responsive">
                                            @endif
                                        </div>
                                        <a data-toggle="collapse" data-parent="#day2_auditorium3_timeline" href="#{{ $conference->getSlug() . '-day2_auditorium3' }}" class="schedule-item-toggle {{ ($key != 0) ? 'collapse' : '' }}">
                                            <strong class="time highlight"><span class="icon icon-office-24"></span>{{ $conference->getTime() }}</strong>
                                            <h6 class="title">{{ $conference->getTitle() }}<i class="icon icon-arrows-06"></i></h6>
                                        </a>
                                        <div id="{{ $conference->getSlug() . '-day2_auditorium3'}}" class="panel-collapse collapse {{ ($key == 0) ? 'in' : '' }} schedule-item-body">
                                            <article>
                                                <p class="description">{{ $conference->getDescription() }}</p>
                                                <strong class="highlight speaker-name">{{ $conference->getSpeaker()['name'] }}</strong>
                                                @if(!Auth::guest())
                                                    <a href="#" class="btn btn-rounded btn-outline-clr btn-sm"><span class="fa fa-thumbs-o-up"></span>Asistiré</a>
                                                @endif
                                                @include('components.share', ['url' => env('APP_URL') . '#' . $conference->getSlug() . '-day2_auditorium3'])
                                            </article>
                                        </div>
                                    </div>
                                    <!-- Lecture end -->

                                @endforeach

                            </div>
                            <!-- Accordion end -->

                        </div>
                        <!-- Auditorium 3 content end -->

                    </div>
                    <!-- Second level content end -->

                </div>
                <!-- Day 2 content end -->

                <!-- Day 3 content start -->
                <div id="day3" class="tab-pane fade in">

                    <!-- Navigation by auditorium start -->
                    <ul class="nav nav-schedule">
                        <li class="active"><a href="#day3_auditorium1" data-toggle="tab">Auditorio 1</a></li>
                        <li><a href="#day3_auditorium2" data-toggle="tab">Auditorio 2</a></li>
                        <li><a href="#day3_auditorium3" data-toggle="tab">Auditorio 3</a></li>
                    </ul>
                    <!-- Navigation by auditorium end -->

                    <!-- Second level content start -->
                    <div class="tab-content tab-content-schedule">

                        <!-- Auditorium 1 content start -->
                        <div id="day3_auditorium1" class="tab-pane fade active in">

                            <!-- Accordion start -->
                            <div class="panel-group" id="day3_auditorium1_timeline">

                            @foreach ($conferences['day3_auditorium1'] as $key =>$conference)

                                <!-- Lecture start -->
                                    <div class="panel schedule-item">
                                        <div class="lecture-icon-wrapper">
                                            
                                            @if($conference->getSpeaker()['picture'] === null)
                                                <img src="{{ asset('img/logo-utn.png') }}" alt="" class="img-responsive">
                                            @else
                                                <img src="{{ $conference->getSpeaker()['picture'] }}" alt="" class="img-responsive">
                                            @endif
                                        </div>
                                        <a data-toggle="collapse" data-parent="#day3_auditorium1_timeline" href="#{{ $conference->getSlug() . '-day3_auditorium1'}}" class="schedule-item-toggle {{ ($key != 0) ? 'collapse' : '' }}">
                                            <strong class="time highlight"><span class="icon icon-office-24"></span>{{ $conference->getTime() }}</strong>
                                            <h6 class="title">{{ $conference->getTitle() }}<i class="icon icon-arrows-06"></i></h6>
                                        </a>
                                        <div id="{{ $conference->getSlug() . '-day3_auditorium1'}}" class="panel-collapse collapse {{ ($key == 0) ? 'in' : '' }} schedule-item-body">
                                            <article>
                                                <p class="description">{{ $conference->getDescription() }}</p>
                                                <strong class="highlight speaker-name">{{ $conference->getSpeaker()['name'] }}</strong>
                                                @if(!Auth::guest())
                                                    <a href="#" class="btn btn-rounded btn-outline-clr btn-sm"><span class="fa fa-thumbs-o-up"></span>Asistiré</a>
                                                @endif
                                                @include('components.share', ['url' => env('APP_URL') . '#' . $conference->getSlug() . '-day3_auditorium1'])
                                            </article>
                                        </div>
                                    </div>
                                    <!-- Lecture end -->

                                @endforeach
                            </div>
                            <!-- Accordion end -->

                        </div>
                        <!-- Auditorium 1 content end -->

                        <!-- Auditorium 2 content start -->
                        <div id="day3_auditorium2" class="tab-pane fade in">

                            <!-- Accordion start -->
                            <div class="panel-group" id="day3_auditorium2_timeline">

                            @foreach ($conferences['day3_auditorium2'] as $key =>$conference)

                                <!-- Lecture start -->
                                    <div class="panel schedule-item">
                                        <div class="lecture-icon-wrapper">
                                            
                                            @if($conference->getSpeaker()['picture'] === null)
                                                <img src="{{ asset('img/logo-utn.png') }}" alt="" class="img-responsive">
                                            @else
                                                <img src="{{ $conference->getSpeaker()['picture'] }}" alt="" class="img-responsive">
                                            @endif
                                        </div>
                                        <a data-toggle="collapse" data-parent="#day3_auditorium2_timeline" href="#{{ $conference->getSlug() . '-day3_auditorium2'}}" class="schedule-item-toggle {{ ($key != 0) ? 'collapse' : '' }}">
                                            <strong class="time highlight"><span class="icon icon-office-24"></span>{{ $conference->getTime() }}</strong>
                                            <h6 class="title">{{ $conference->getTitle() }}<i class="icon icon-arrows-06"></i></h6>
                                        </a>
                                        <div id="{{ $conference->getSlug() . '-day3_auditorium2'}}" class="panel-collapse collapse {{ ($key == 0) ? 'in' : '' }} schedule-item-body">
                                            <article>
                                                <p class="description">{{ $conference->getDescription() }}</p>
                                                <strong class="highlight speaker-name">{{ $conference->getSpeaker()['name'] }}</strong>
                                                @if(!Auth::guest())
                                                    <a href="#" class="btn btn-rounded btn-outline-clr btn-sm"><span class="fa fa-thumbs-o-up"></span>Asistiré</a>
                                                @endif
                                                @include('components.share', ['url' => env('APP_URL') . '#' . $conference->getSlug() . '-day3_auditorium2'])
                                            </article>
                                        </div>
                                    </div>
                                    <!-- Lecture end -->

                                @endforeach

                            </div>
                            <!-- Accordion end -->

                        </div>
                        <!-- Auditorium 2 content end -->

                        <!-- Auditorium 3 content start -->
                        <div id="day3_auditorium3" class="tab-pane fade in">

                            <!-- Accordion start -->
                            <div class="panel-group" id="day3_auditorium3_timeline">

                            @foreach ($conferences['day3_auditorium3'] as $key =>$conference)

                                <!-- Lecture start -->
                                    <div class="panel schedule-item">
                                        <div class="lecture-icon-wrapper">
                                            
                                            @if($conference->getSpeaker()['picture'] === null)
                                                <img src="{{ asset('img/logo-utn.png') }}" alt="" class="img-responsive">
                                            @else
                                                <img src="{{ $conference->getSpeaker()['picture'] }}" alt="" class="img-responsive">
                                            @endif
                                        </div>
                                        <a data-toggle="collapse" data-parent="#day3_auditorium3_timeline" href="#{{ $conference->getSlug() . '-day3_auditorium3'}}" class="schedule-item-toggle {{ ($key != 0) ? 'collapse' : '' }}">
                                            <strong class="time highlight"><span class="icon icon-office-24"></span>{{ $conference->getTime() }}</strong>
                                            <h6 class="title">{{ $conference->getTitle() }}<i class="icon icon-arrows-06"></i></h6>
                                        </a>
                                        <div id="{{ $conference->getSlug() . '-day3_auditorium3'}}" class="panel-collapse collapse {{ ($key == 0) ? 'in' : '' }} schedule-item-body">
                                            <article>
                                                <p class="description">{{ $conference->getDescription() }}</p>
                                                <strong class="highlight speaker-name">{{ $conference->getSpeaker()['name'] }}</strong>
                                                @if(!Auth::guest())
                                                    <a href="#" class="btn btn-rounded btn-outline-clr btn-sm"><span class="fa fa-thumbs-o-up"></span>Asistiré</a>
                                                @endif
                                                @include('components.share', ['url' => env('APP_URL') . '#' . $conference->getSlug() . '-day3_auditorium3'])
                                            </article>
                                        </div>
                                    </div>
                                    <!-- Lecture end -->

                                @endforeach

                            </div>
                            <!-- Accordion end -->

                        </div>
                        <!-- Auditorium 3 content end -->

                    </div>
                    <!-- Second level content end -->

                </div>
                <!-- Day 3 content end -->

            </div>
            <!-- First level content end -->

        </div>
        <!-- Schedule end -->

    </div>

</section>