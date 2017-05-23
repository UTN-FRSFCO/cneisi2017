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

                                <!-- Lecture start -->
                                <div class="panel schedule-item">
                                    <div class="lecture-icon-wrapper">
                                        <span class="fa fa-cutlery"></span>
                                    </div>
                                    <a data-toggle="collapse" data-parent="#day1_auditorium1_timeline" href="#day1_auditorium1_time1" class="schedule-item-toggle">
                                        <strong class="time highlight"><span class="icon icon-office-24"></span>2:20 PM</strong>
                                        <h6 class="title">How to organize great events<i class="icon icon-arrows-06"></i></h6>
                                    </a>
                                    <div id="day1_auditorium1_time1" class="panel-collapse collapse in schedule-item-body">
                                        <article>
                                            <p class="description">Luctus at accumsan eget ut ante. Cras molestie sollicitudin. Ultricies et eros id quisque auctor. Per mus enim ac lorem integer. Erat netus id. Porta enim quis et elementum amet risus volutpat magna nec ac.</p>
                                            <strong class="highlight speaker-name">Michael Lambert</strong>
                                            @if(!Auth::guest())
                                                <a href="#" class="btn btn-rounded btn-outline-clr btn-sm"><span class="fa fa-thumbs-o-up"></span>Asistiré</a>
                                            @endif
                                            @include('components.share', ['url' => env('APP_URL') . '#day1_auditorium1_time1'])
                                        </article>
                                    </div>
                                </div>
                                <!-- Lecture end -->

                                <!-- Lecture start -->
                                <div class="panel schedule-item">
                                    <div class="lecture-icon-wrapper"></div>
                                    <a data-toggle="collapse" data-parent="#day1_auditorium1_timeline" href="#day1_auditorium1_time2" class="schedule-item-toggle collapsed">
                                        <strong class="time highlight"><span class="icon icon-office-24"></span>5:40 PM</strong>
                                        <h6 class="title">Scaling into crowded space<i class="icon icon-arrows-06"></i></h6>
                                    </a>
                                    <div id="day1_auditorium1_time2" class="panel-collapse collapse schedule-item-body">
                                        <article>
                                            <p class="description">Wisi id tristique. Aliquam orci vulputate. Turpis tempor erat at dictum pellentesque. Neque facilisis cras. Venenatis vel posuere sodales scelerisque leo vel nec enim. Blandit nullam sodales lectus nulla lorem penatibus sed nec eget eros.</p>
                                            <strong class="highlight speaker-name">Michael Lambert</strong>
                                            @if(!Auth::guest())
                                                <a href="#" class="btn btn-rounded btn-outline-clr btn-sm"><span class="fa fa-thumbs-o-up"></span>Asistiré</a>
                                            @endif
                                            @include('components.share', ['url' => env('APP_URL') . '#day1_auditorium1_time2'])
                                        </article>
                                    </div>
                                </div>
                                <!-- Lecture end -->

                                <!-- Lecture start -->
                                <div class="panel schedule-item">
                                    <div class="lecture-icon-wrapper">
                                        <img src="{{asset('/img/speakers/speaker1.jpg')}}" alt="" class="img-responsive">
                                    </div>
                                    <a data-toggle="collapse" data-parent="#day1_auditorium1_timeline" href="#day1_auditorium1_time3" class="schedule-item-toggle collapsed">
                                        <strong class="time highlight"><span class="icon icon-office-24"></span>7:00 PM</strong>
                                        <h6 class="title">Start your business your eyes around the world<i class="icon icon-arrows-06"></i></h6>
                                    </a>
                                    <div id="day1_auditorium1_time3" class="panel-collapse collapse schedule-item-body">
                                        <article>
                                            <p class="description">Integer in eu. Quis id curabitur tellus est enim. Ut est ultrices. Vitae ad ut nunc quisquam interdum libero neque magna nonummy sapien sit. In sit lacus. Maecenas molestie fusce ut feugiat vestibulum dui mauris.</p>
                                            <strong class="highlight speaker-name">Michael Lambert</strong>
                                            @if(!Auth::guest())
                                                <a href="#" class="btn btn-rounded btn-outline-clr btn-sm"><span class="fa fa-thumbs-o-up"></span>Asistiré</a>
                                            @endif
                                            @include('components.share', ['url' => env('APP_URL') . '#day1_auditorium1_time3'])
                                        </article>
                                    </div>
                                </div>
                                <!-- Lecture end -->

                                <!-- Lecture start -->
                                <div class="panel schedule-item">
                                    <div class="lecture-icon-wrapper">
                                        <img src="{{asset('/img/speakers/speaker1.jpg')}}" alt="" class="img-responsive">
                                    </div>
                                    <a data-toggle="collapse" data-parent="#day1_auditorium1_timeline" href="#day1_auditorium1_time4" class="schedule-item-toggle collapsed">
                                        <strong class="time highlight"><span class="icon icon-office-24"></span>7:40 PM</strong>
                                        <h6 class="title">Passion and people<i class="icon icon-arrows-06"></i></h6>
                                    </a>
                                    <div id="day1_auditorium1_time4" class="panel-collapse collapse schedule-item-body">
                                        <article>
                                            <p class="description">Lorem vel lorem. Nulla ab justo. Scelerisque penatibus eget. Nunc ultrices nec sed lobortis et. Vitae massa massa pede magna sociosqu viverra tempus justo. Et quis ornare nisl mi ligula suscipit ullamcorper massa ante diam.</p>
                                            <strong class="highlight speaker-name">Michael Lambert</strong>
                                            @if(!Auth::guest())
                                                <a href="#" class="btn btn-rounded btn-outline-clr btn-sm"><span class="fa fa-thumbs-o-up"></span>Asistiré</a>
                                            @endif
                                            @include('components.share', ['url' => env('APP_URL') . '#day1_auditorium1_time4'])
                                        </article>
                                    </div>
                                </div>
                                <!-- Lecture end -->

                            </div>
                            <!-- Accordion end -->

                        </div>
                        <!-- Auditorium 1 content end -->

                        <!-- Auditorium 2 content start -->
                        <div id="day1_auditorium2" class="tab-pane fade in">

                            <!-- Accordion start -->
                            <div class="panel-group" id="day1_auditorium2_timeline">

                                <!-- Lecture start -->
                                <div class="panel schedule-item">
                                    <div class="lecture-icon-wrapper">
                                        <img src="{{asset('/img/speakers/speaker1.jpg')}}" alt="" class="img-responsive">
                                    </div>
                                    <a data-toggle="collapse" data-parent="#day1_auditorium2_timeline" href="#day1_auditorium2_time1" class="schedule-item-toggle">
                                        <strong class="time highlight"><span class="icon icon-office-24"></span>2:20 PM</strong>
                                        <h6 class="title">How to organize great events<i class="icon icon-arrows-06"></i></h6>
                                    </a>
                                    <div id="day1_auditorium2_time1" class="panel-collapse collapse in schedule-item-body">
                                        <article>
                                            <p class="description">Et lacus id. Est hac amet arcu porta condimentum. Ligula facilisis porta elit ipsum non. Vulputate phasellus arcu nonummy eget wisi. Ullamcorper magna in. In semper luctus rhoncus nisl et erat id suspendisse duis praesent.</p>
                                            <strong class="highlight speaker-name">Michael Lambert</strong>
                                            @if(!Auth::guest())
                                                <a href="#" class="btn btn-rounded btn-outline-clr btn-sm"><span class="fa fa-thumbs-o-up"></span>Asistiré</a>
                                            @endif
                                            @include('components.share', ['url' => env('APP_URL') . '#day1_auditorium2_time1'])
                                        </article>
                                    </div>
                                </div>
                                <!-- Lecture end -->

                                <!-- Lecture start -->
                                <div class="panel schedule-item">
                                    <div class="lecture-icon-wrapper">
                                        <img src="{{asset('/img/speakers/speaker1.jpg')}}" alt="" class="img-responsive">
                                    </div>
                                    <a data-toggle="collapse" data-parent="#day1_auditorium2_timeline" href="#day1_auditorium2_time2" class="schedule-item-toggle collapsed">
                                        <strong class="time highlight"><span class="icon icon-office-24"></span>5:40 PM</strong>
                                        <h6 class="title">Scaling into crowded space<i class="icon icon-arrows-06"></i></h6>
                                    </a>
                                    <div id="day1_auditorium2_time2" class="panel-collapse collapse schedule-item-body">
                                        <article>
                                            <p class="description">Integer ipsum neque eget sem velit. In enim in. Vestibulum cursus dui laoreet ac et. Suspendisse sed est proin nisl ligula vitae magna non. Et vestibulum inceptos. Deserunt in eget et vestibulum velit ut nibh.</p>
                                            <strong class="highlight speaker-name">Michael Lambert</strong>
                                            @if(!Auth::guest())
                                                <a href="#" class="btn btn-rounded btn-outline-clr btn-sm"><span class="fa fa-thumbs-o-up"></span>Asistiré</a>
                                            @endif
                                            @include('components.share', ['url' => env('APP_URL') . '#day1_auditorium2_time2'])
                                        </article>
                                    </div>
                                </div>
                                <!-- Lecture end -->

                            </div>
                            <!-- Accordion end -->

                        </div>
                        <!-- Auditorium 2 content end -->

                        <!-- Auditorium 3 content start -->
                        <div id="day1_auditorium3" class="tab-pane fade in">

                            <!-- Accordion start -->
                            <div class="panel-group" id="day1_auditorium3_timeline">

                                <!-- Lecture start -->
                                <div class="panel schedule-item">
                                    <div class="lecture-icon-wrapper">
                                        <img src="{{asset('/img/speakers/speaker1.jpg')}}" alt="" class="img-responsive">
                                    </div>
                                    <a data-toggle="collapse" data-parent="#day1_auditorium3_timeline" href="#day1_auditorium3_time1" class="schedule-item-toggle">
                                        <strong class="time highlight"><span class="icon icon-office-24"></span>2:20 PM</strong>
                                        <h6 class="title">How to organize great events<i class="icon icon-arrows-06"></i></h6>
                                    </a>
                                    <div id="day1_auditorium3_time1" class="panel-collapse collapse in schedule-item-body">
                                        <article>
                                            <p class="description">Bibendum asperiores proin. Voluptates quam lobortis malesuada dui id ipsum commodo a. Justo con nam euismod arcu malesuada. Pede eget duis. Vel ut donec vestibulum nibh ac dictumst non non. Quam tempus elit id ipsum.</p>
                                            <strong class="highlight speaker-name">Michael Lambert</strong>
                                            @if(!Auth::guest())
                                                <a href="#" class="btn btn-rounded btn-outline-clr btn-sm"><span class="fa fa-thumbs-o-up"></span>Asistiré</a>
                                            @endif
                                            @include('components.share', ['url' => env('APP_URL') . '#day1_auditorium3_time1'])
                                        </article>
                                    </div>
                                </div>
                                <!-- Lecture end -->

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

                                <!-- Lecture start -->
                                <div class="panel schedule-item">
                                    <div class="lecture-icon-wrapper">
                                        <img src="{{asset('/img/speakers/speaker1.jpg')}}" alt="" class="img-responsive">
                                    </div>
                                    <a data-toggle="collapse" data-parent="#day2_auditorium1_timeline" href="#day2_auditorium1_time1" class="schedule-item-toggle">
                                        <strong class="time highlight"><span class="icon icon-office-24"></span>2:20 PM</strong>
                                        <h6 class="title">How to organize great events<i class="icon icon-arrows-06"></i></h6>
                                    </a>
                                    <div id="day2_auditorium1_time1" class="panel-collapse collapse in schedule-item-body">
                                        <article>
                                            <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type.</p>
                                            <strong class="highlight speaker-name">Michael Lambert</strong>
                                            @if(!Auth::guest())
                                                <a href="#" class="btn btn-rounded btn-outline-clr btn-sm"><span class="fa fa-thumbs-o-up"></span>Asistiré</a>
                                            @endif
                                            @include('components.share', ['url' => env('APP_URL') . '#day2_auditorium1_time1'])
                                        </article>
                                    </div>
                                </div>
                                <!-- Lecture end -->

                                <!-- Lecture start -->
                                <div class="panel schedule-item">
                                    <div class="lecture-icon-wrapper">
                                        <img src="{{asset('/img/speakers/speaker1.jpg')}}" alt="" class="img-responsive">
                                    </div>
                                    <a data-toggle="collapse" data-parent="#day2_auditorium1_timeline" href="#day2_auditorium1_time3" class="schedule-item-toggle collapsed">
                                        <strong class="time highlight"><span class="icon icon-office-24"></span>7:00 PM</strong>
                                        <h6 class="title">Close your eyes around the world<i class="icon icon-arrows-06"></i></h6>
                                    </a>
                                    <div id="day2_auditorium1_time3" class="panel-collapse collapse schedule-item-body">
                                        <article>
                                            <p class="description">Justo volutpat blandit eget quis rutrum quam quis sollicitudin. Vel hymenaeos dui. Montes lobortis sodales. Tempor nulla vestibulum suspendisse volutpat vestibulum. Elit a condimentum massa diam vel in lacus donec. Pede at sit nunc sagittis.</p>
                                            <strong class="highlight speaker-name">Michael Lambert</strong>
                                            @if(!Auth::guest())
                                                <a href="#" class="btn btn-rounded btn-outline-clr btn-sm"><span class="fa fa-thumbs-o-up"></span>Asistiré</a>
                                            @endif
                                            @include('components.share', ['url' => env('APP_URL') . '#day2_auditorium1_time3'])
                                        </article>
                                    </div>
                                </div>
                                <!-- Lecture end -->

                                <!-- Lecture start -->
                                <div class="panel schedule-item">
                                    <div class="lecture-icon-wrapper">
                                        <img src="{{asset('/img/speakers/speaker1.jpg')}}" alt="" class="img-responsive">
                                    </div>
                                    <a data-toggle="collapse" data-parent="#day2_auditorium1_timeline" href="#day2_auditorium1_time4" class="schedule-item-toggle collapsed">
                                        <strong class="time highlight"><span class="icon icon-office-24"></span>7:40 PM</strong>
                                        <h6 class="title">Passion and people<i class="icon icon-arrows-06"></i></h6>
                                    </a>
                                    <div id="day2_auditorium1_time4" class="panel-collapse collapse schedule-item-body">
                                        <article>
                                            <p class="description">Lectus mollis praesent. Sed nunc sed vestibulum cursus nulla dicta vel faucibus fringilla orci consequat. A duis sapien. Odio et sit. Elementum porttitor porttitor arcu sem sed. Gravida quisque velit tellus nec sed mus consequat.</p>
                                            <strong class="highlight speaker-name">Michael Lambert</strong>
                                            @if(!Auth::guest())
                                                <a href="#" class="btn btn-rounded btn-outline-clr btn-sm"><span class="fa fa-thumbs-o-up"></span>Asistiré</a>
                                            @endif
                                            @include('components.share', ['url' => env('APP_URL') . '#day2_auditorium1_time4'])
                                        </article>
                                    </div>
                                </div>
                                <!-- Lecture end -->

                            </div>
                            <!-- Accordion end -->

                        </div>
                        <!-- Auditorium 1 content end -->

                        <!-- Auditorium 2 content start -->
                        <div id="day2_auditorium2" class="tab-pane fade in">

                            <!-- Accordion start -->
                            <div class="panel-group" id="day2_auditorium2_timeline">

                                <!-- Lecture start -->
                                <div class="panel schedule-item">
                                    <div class="lecture-icon-wrapper">
                                        <img src="{{asset('/img/speakers/speaker1.jpg')}}" alt="" class="img-responsive">
                                    </div>
                                    <a data-toggle="collapse" data-parent="#day2_auditorium2_timeline" href="#day2_auditorium2_time1" class="schedule-item-toggle">
                                        <strong class="time highlight"><span class="icon icon-office-24"></span>2:20 PM</strong>
                                        <h6 class="title">How to organize great events<i class="icon icon-arrows-06"></i></h6>
                                    </a>
                                    <div id="day2_auditorium2_time1" class="panel-collapse collapse in schedule-item-body">
                                        <article>
                                            <p class="description">Mollis dolore magna tempor egestas laoreet in luctus non. Imperdiet mattis vitae. Vel sed aliquam sed turpis venenatis sed et sodales. Nam sit sed ullamcorper venenatis leo. Aliquam amet nec. Suspendisse enim feugiat eu sit.</p>
                                            <strong class="highlight speaker-name">Michael Lambert</strong>
                                            @if(!Auth::guest())
                                                <a href="#" class="btn btn-rounded btn-outline-clr btn-sm"><span class="fa fa-thumbs-o-up"></span>Asistiré</a>
                                            @endif
                                            @include('components.share', ['url' => env('APP_URL') . '#day2_auditorium2_time1'])
                                        </article>
                                    </div>
                                </div>
                                <!-- Lecture end -->

                            </div>
                            <!-- Accordion end -->

                        </div>
                        <!-- Auditorium 2 content end -->

                        <!-- Auditorium 3 content start -->
                        <div id="day2_auditorium3" class="tab-pane fade in">

                            <!-- Accordion start -->
                            <div class="panel-group" id="day2_auditorium3_timeline">

                                <!-- Lecture start -->
                                <div class="panel schedule-item">
                                    <div class="lecture-icon-wrapper">
                                        <img src="{{asset('/img/speakers/speaker1.jpg')}}" alt="" class="img-responsive">
                                    </div>
                                    <a data-toggle="collapse" data-parent="#day2_auditorium3_timeline" href="#day2_auditorium3_time1" class="schedule-item-toggle">
                                        <strong class="time highlight"><span class="icon icon-office-24"></span>2:20 PM</strong>
                                        <h6 class="title">How to organize great events<i class="icon icon-arrows-06"></i></h6>
                                    </a>
                                    <div id="day2_auditorium3_time1" class="panel-collapse collapse in schedule-item-body">
                                        <article>
                                            <p class="description">Non auctor dolor. Massa mollis montes nibh non vel. Eu luctus at. Mauris blandit convallis. In semper purus in quam fringilla elit vitae convallis purus dignissim a. Libero eros sit id sed vitae magni integer.</p>
                                            <strong class="highlight speaker-name">Michael Lambert</strong>
                                            @if(!Auth::guest())
                                                <a href="#" class="btn btn-rounded btn-outline-clr btn-sm"><span class="fa fa-thumbs-o-up"></span>Asistiré</a>
                                            @endif
                                            @include('components.share', ['url' => env('APP_URL') . '#day2_auditorium3_time1'])
                                        </article>
                                    </div>
                                </div>
                                <!-- Lecture end -->

                                <!-- Lecture start -->
                                <div class="panel schedule-item">
                                    <div class="lecture-icon-wrapper">
                                        <img src="{{asset('/img/speakers/speaker1.jpg')}}" alt="" class="img-responsive">
                                    </div>
                                    <a data-toggle="collapse" data-parent="#day2_auditorium3_timeline" href="#day2_auditorium3_time2" class="schedule-item-toggle collapsed">
                                        <strong class="time highlight"><span class="icon icon-office-24"></span>5:40 PM</strong>
                                        <h6 class="title">Scaling into crowded space<i class="icon icon-arrows-06"></i></h6>
                                    </a>
                                    <div id="day2_auditorium3_time2" class="panel-collapse collapse schedule-item-body">
                                        <article>
                                            <p class="description">Condimentum enim diam. Ipsum lacus tincidunt magna lectus mattis pellentesque morbi magna laoreet suspendisse ut. Dis aliquam lacus mauris maecenas consectetuer. Donec ut nulla. Dui id ornare. Quaerat nibh feugiat dictum vitae ac accumsan ullamcorper.</p>
                                            <strong class="highlight speaker-name">Michael Lambert</strong>
                                            @if(!Auth::guest())
                                                <a href="#" class="btn btn-rounded btn-outline-clr btn-sm"><span class="fa fa-thumbs-o-up"></span>Asistiré</a>
                                            @endif
                                            @include('components.share', ['url' => env('APP_URL') . '#day2_auditorium3_time2'])
                                        </article>
                                    </div>
                                </div>
                                <!-- Lecture end -->

                                <!-- Lecture start -->
                                <div class="panel schedule-item">
                                    <div class="lecture-icon-wrapper">
                                        <img src="{{asset('/img/speakers/speaker1.jpg')}}" alt="" class="img-responsive">
                                    </div>
                                    <a data-toggle="collapse" data-parent="#day2_auditorium3_timeline" href="#day2_auditorium3_time4" class="schedule-item-toggle collapsed">
                                        <strong class="time highlight"><span class="icon icon-office-24"></span>7:40 PM</strong>
                                        <h6 class="title">Passion and people<i class="icon icon-arrows-06"></i></h6>
                                    </a>
                                    <div id="day2_auditorium3_time4" class="panel-collapse collapse schedule-item-body">
                                        <article>
                                            <p class="description">Nunc gravida lacus nunc aptent eros. Condimentum ligula nonummy. Sit urna pellentesque sem est feugiat duis sollicitudin vestibulum nonummy beatae volutpat dui cras eget. Con vivamus elit. Aliquam nec et. Nunc a tellus nulla quisque.</p>
                                            <strong class="highlight speaker-name">Michael Lambert</strong>
                                            @if(!Auth::guest())
                                                <a href="#" class="btn btn-rounded btn-outline-clr btn-sm"><span class="fa fa-thumbs-o-up"></span>Asistiré</a>
                                            @endif
                                            @include('components.share', ['url' => env('APP_URL') . '#day2_auditorium3_time4'])
                                        </article>
                                    </div>
                                </div>
                                <!-- Lecture end -->

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

                                <!-- Lecture start -->
                                <div class="panel schedule-item">
                                    <div class="lecture-icon-wrapper">
                                        <img src="{{asset('/img/speakers/speaker1.jpg')}}" alt="" class="img-responsive">
                                    </div>
                                    <a data-toggle="collapse" data-parent="#day3_auditorium1_timeline" href="#day3_auditorium1_time1" class="schedule-item-toggle">
                                        <strong class="time highlight"><span class="icon icon-office-24"></span>2:20 PM</strong>
                                        <h6 class="title">How to organize great events<i class="icon icon-arrows-06"></i></h6>
                                    </a>
                                    <div id="day3_auditorium1_time1" class="panel-collapse collapse in schedule-item-body">
                                        <article>
                                            <p class="description">Duis etiam et. Lorem eleifend aliquam. Dolor aenean sed. Gravida pellentesque duis nam erat pede per velit risus pellentesque aliquet turpis. Nonummy eros odio dapibus arcu tortor elit nonummy adipiscing. Purus leo ultrices blandit facilisis.</p>
                                            <strong class="highlight speaker-name">Michael Lambert</strong>
                                            @if(!Auth::guest())
                                                <a href="#" class="btn btn-rounded btn-outline-clr btn-sm"><span class="fa fa-thumbs-o-up"></span>Asistiré</a>
                                            @endif
                                            @include('components.share', ['url' => env('APP_URL') . '#day3_auditorium1_time1'])
                                        </article>
                                    </div>
                                </div>
                                <!-- Lecture end -->

                                <!-- Lecture start -->
                                <div class="panel schedule-item">
                                    <div class="lecture-icon-wrapper">
                                        <img src="{{asset('/img/speakers/speaker1.jpg')}}" alt="" class="img-responsive">
                                    </div>
                                    <a data-toggle="collapse" data-parent="#day3_auditorium1_timeline" href="#day3_auditorium1_time2" class="schedule-item-toggle collapsed">
                                        <strong class="time highlight"><span class="icon icon-office-24"></span>5:40 PM</strong>
                                        <h6 class="title">Scaling into crowded space<i class="icon icon-arrows-06"></i></h6>
                                    </a>
                                    <div id="day3_auditorium1_time2" class="panel-collapse collapse schedule-item-body">
                                        <article>
                                            <p class="description">Mauris mi nonummy risus elit quis ut est gravida augue posuere elementum. Vitae dui proin consectetuer donec urna. Sit pede quis. Accumsan ipsum suscipit blandit purus amet. Sodales volutpat et. In ornare per sit ornare.</p>
                                            <strong class="highlight speaker-name">Michael Lambert</strong>
                                            @if(!Auth::guest())
                                                <a href="#" class="btn btn-rounded btn-outline-clr btn-sm"><span class="fa fa-thumbs-o-up"></span>Asistiré</a>
                                            @endif
                                            @include('components.share', ['url' => env('APP_URL') . '#day2_auditorium1_time2'])
                                        </article>
                                    </div>
                                </div>
                                <!-- Lecture end -->

                            </div>
                            <!-- Accordion end -->

                        </div>
                        <!-- Auditorium 1 content end -->

                        <!-- Auditorium 2 content start -->
                        <div id="day3_auditorium2" class="tab-pane fade in">

                            <!-- Accordion start -->
                            <div class="panel-group" id="day3_auditorium2_timeline">

                                <!-- Lecture start -->
                                <div class="panel schedule-item">
                                    <div class="lecture-icon-wrapper">
                                        <img src="{{asset('/img/speakers/speaker1.jpg')}}" alt="" class="img-responsive">
                                    </div>
                                    <a data-toggle="collapse" data-parent="#day3_auditorium2_timeline" href="#day3_auditorium2_time1" class="schedule-item-toggle">
                                        <strong class="time highlight"><span class="icon icon-office-24"></span>2:20 PM</strong>
                                        <h6 class="title">How to organize great events<i class="icon icon-arrows-06"></i></h6>
                                    </a>
                                    <div id="day3_auditorium2_time1" class="panel-collapse collapse in schedule-item-body">
                                        <article>
                                            <p class="description">Nam nulla morbi. Enim velit vel magna nulla dolor. Auctor nisl ut quisque lectus lorem. Urna lacus quisque mi cursus suscipit quis phasellus vulputate. Dapibus consequat nullam elementum taciti massa. Et vitae amet nunc libero.</p>
                                            <strong class="highlight speaker-name">Michael Lambert</strong>
                                            @if(!Auth::guest())
                                                <a href="#" class="btn btn-rounded btn-outline-clr btn-sm"><span class="fa fa-thumbs-o-up"></span>Asistiré</a>
                                            @endif
                                            @include('components.share', ['url' => env('APP_URL') . '#day3_auditorium2_time1'])
                                        </article>
                                    </div>
                                </div>
                                <!-- Lecture end -->

                            </div>
                            <!-- Accordion end -->

                        </div>
                        <!-- Auditorium 2 content end -->

                        <!-- Auditorium 3 content start -->
                        <div id="day3_auditorium3" class="tab-pane fade in">

                            <div class="schedule-item">No schedule yet.</div>

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