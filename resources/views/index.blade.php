@extends('layouts.master')

@section('content')
    <div class="preloader-mask">
        <div class="preloader"></div>
    </div>

    <section id="hero" class="hero-section bg1 bg-cover window-height light-text">
        <ul class="socials-nav">
            <li class="socials-nav-item"><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li class="socials-nav-item"><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li class="socials-nav-item"><a href="#"><span class="fa fa-github"></span></a></li>
            <li class="socials-nav-item"><a href="#"><span class="fa fa-vimeo-square"></span></a></li>
            <li class="socials-nav-item"><a href="#"><span class="fa fa-google-plus"></span></a></li>
            <li class="socials-nav-item"><a href="#"><span class="fa fa-instagram"></span></a></li>
        </ul>
        <div class="heading-block centered-block align-center">
            <div class="container">
                <h5 class="heading-alt" style="margin-bottom: 8px;"><span class="fa fa-calendar-o base-clr-txt"></span>30.ago <span class="fa fa-map-marker base-clr-txt" style="margin-left: 14px;"></span>F.R. San Francisco, Cba</h5>
                <h1 class="extra-heading">CNEISI2017</h1>
                <h6 class="thin base-font">Undécimo congreso nacional de estudiantes en <strong>Ingeniería en Sistemas de información</strong></h6>
                <div class="btns-container">
                    <a href="#" class="btn btn-md" data-modal-link="email-ticket">Registrarse</a>
                    <a href="#" class="btn btn-outline btn-md" data-modal-link="0">VIDEO</a>
                </div>
            </div>
        </div>
    </section>

    <header class="header header-black">
        <div class="header-wrapper">
            <div class="container">
                <div class="col-sm-2 col-xs-12 navigation-header">
                    <a href="#" class="logo">
                        <img src="{{asset('/img/cneisi_logo.png')}}" alt="Cneisi" width="179" height="23" class="retina-hide">
                        <img src="{{asset('/img/ventcamp_logo@2x.png')}}" alt="VentCamp" width="119" height="17" class="retina-show">
                    </a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-controls="navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="col-sm-10 col-xs-12 navigation-container">
                    <div id="navigation" class="navbar-collapse collapse">
                        <ul class="navigation-list pull-left light-text">
                            <li class="navigation-item"><a href="#speakers" class="navigation-link">Speakers</a></li>
                            <li class="navigation-item"><a href="#schedule" class="navigation-link">Calendario</a></li>
                            <li class="navigation-item"><a href="#prices" class="navigation-link">Precios</a></li>
                            <li class="navigation-item"><a href="#gallery" class="navigation-link">Galería</a></li>
                            <li class="navigation-item"><a href="#sponsors" class="navigation-link">Sponsors</a></li>
                            <li class="navigation-item"><a href="#contacts" class="navigation-link">Contacto</a></li>
                            <li class="navigation-item dropdown">
                                <a class="navigation-link dropdown-toggle" data-toggle="dropdown">Elementos</a>
                                <ul class="dropdown-menu">
                                    <li class="navigation-item"><a href="elements/contacts.html" class="navigation-link">Advanced Maps</a></li>
                                    <li class="navigation-item"><a href="elements/buttons.html" class="navigation-link">Buttons</a></li>
                                    <li class="navigation-item"><a href="elements/content.html" class="navigation-link">Content</a></li>
                                    <li class="navigation-item"><a href="elements/counters.html" class="navigation-link">Counters</a></li>
                                    <li class="navigation-item"><a href="elements/countdown.html" class="navigation-link">Countdown</a></li>
                                    <li class="navigation-item"><a href="elements/call_to_action.html" class="navigation-link">Call to action</a></li>
                                    <li class="navigation-item"><a href="elements/gallery.html" class="navigation-link">Gallery</a></li>
                                    <li class="navigation-item"><a href="elements/navigations.html" class="navigation-link">Navigation</a></li>
                                    <li class="navigation-item"><a href="elements/pricing.html" class="navigation-link">Prices</a></li>
                                    <li class="navigation-item"><a href="elements/schedule.html" class="navigation-link">Schedule</a></li>
                                    <li class="navigation-item"><a href="elements/speakers.html" class="navigation-link">Speakers</a></li>
                                    <li class="navigation-item"><a href="elements/tabs.html" class="navigation-link">Tabs</a></li>
                                    <li class="navigation-item"><a href="elements/tables.html" class="navigation-link">Tables</a></li>
                                    <li class="navigation-item"><a href="elements/testimonials.html" class="navigation-link">Testimonials</a></li>
                                    <li class="navigation-item"><a href="elements/typography.html" class="navigation-link">Typography</a></li>
                                    <li class="navigation-item"><a href="elements/sponsors.html" class="navigation-link">Sponsors</a></li>
                                </ul>
                            </li>
                        </ul>

                        <a href="#" class="pull-right buy-btn">Inscribirse</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="about" class="section align-center">
        <div class="container">
            <span class="icon section-icon icon-multimedia-12"></span>
            <h3>Business meets Innovation</h3>
            <p class="text-alt">Starting your own IT business and picking right niche in less then <span class="highlight">30 days</span></p>
            <br />
            <br />

            <div class="tabs-wrapper tabs-horizontal">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#horizontal_tab1" data-toggle="tab">
                            <h6 class="heading-alt"><span class="fa fa-code"></span> General info</h6>
                        </a></li>
                    <li><a href="#horizontal_tab2" data-toggle="tab">
                            <h6 class="heading-alt"><span class="fa fa-rocket"></span> Workshops</h6>
                        </a></li>
                    <li><a href="#horizontal_tab3" data-toggle="tab">
                            <h6 class="heading-alt"><span class="fa fa-external-link"></span> Sponsor info</h6>
                        </a></li>
                </ul>

                <div class="tab-content">
                    <div id="horizontal_tab1" class="tab-pane fade active in">
                        <div class="col-sm-5 img-column">
                            <img src="{{asset('/img/imac-371x412.png')}}" alt="" class="img-responsive" />
                        </div>
                        <div class="col-sm-7 align-left">
                            <h6>About event</h6>
                            <p>Faucibus sed pretium. Ridiculus <strong>consectetuer</strong> et. In arcu enim sit in libero scelerisque mauris sed. Nullam eleifend in varius arcu vitae feugiat magna id ut morbi consectetuer. In vivamus arcu. Id ut dui. Sed massa in. Scelerisque suscipit quisque maecenas aliquet in. Wisi mi ipsum. Elit et mauris. Duis in magni praesent <a href="#">content</a> massa.</p>
                            <p>Consectetuer amet wisi felis sem <strong>tincidunt</strong>. Ultricies blandit id euismod inceptos mauris pulvinar nec nullam quisque consequat nulla eleifend elementum vivamus aliquam placerat nec. Vehicula leo praesent vitae leo mauris ullamcorper lectus sed mollis id turpis dui cras suspendisse. Porta diam <a href="#">eleifend</a>. Praesent magnis sit. Enim ligula vel justo urna.</p>
                            <ul>
                                <li>Nisl cras vitae wisi odio amet.</li>
                                <li>Lacus amet vestibulum belas</li>
                                <li>Quis nunc curabitur assumenda</li>
                            </ul>
                        </div>
                    </div>

                    <div id="horizontal_tab2" class="tab-pane fade">
                        <div class="col-sm-7 align-right">
                            <h6>Workshops</h6>
                            <p>Faucibus sed pretium. Ridiculus <strong>consectetuer</strong> et. In arcu enim sit in libero scelerisque mauris sed. Nullam eleifend in varius arcu vitae feugiat magna id ut morbi consectetuer. In vivamus arcu. Id ut dui. Sed massa in. Scelerisque suscipit quisque maecenas aliquet in. Wisi mi ipsum. Elit et mauris. Duis in magni praesent <a href="#">content</a> massa.</p>
                            <p>Consectetuer amet wisi felis sem <strong>tincidunt</strong>. Ultricies blandit id euismod inceptos mauris pulvinar nec nullam quisque consequat nulla eleifend elementum vivamus aliquam placerat nec. Vehicula leo praesent vitae leo mauris ullamcorper lectus sed mollis id turpis dui cras suspendisse. Porta diam <a href="#">eleifend</a>. Praesent magnis sit. Enim ligula vel justo urna.</p>
                            <ul>
                                <li>Nisl cras vitae wisi odio amet.</li>
                                <li>Lacus amet vestibulum belas</li>
                                <li>Quis nunc curabitur assumenda</li>
                            </ul>
                        </div>

                        <div class="col-sm-5 img-column">
                            <img src="{{asset('/img/imac-371x412.png')}}" alt="" class="img-responsive" />
                        </div>
                    </div>

                    <div id="horizontal_tab3" class="tab-pane fade">
                        <div class="col-sm-5 img-column">
                            <img src="{{asset('/img/imac-371x412.png')}}" alt="" class="img-responsive" />
                        </div>
                        <div class="col-sm-7 align-left">
                            <h6>Sponsors apply</h6>
                            <p>Faucibus sed pretium. Ridiculus <strong>consectetuer</strong> et. In arcu enim sit in libero scelerisque mauris sed. Nullam eleifend in varius arcu vitae feugiat magna id ut morbi consectetuer. In vivamus arcu. Id ut dui. Sed massa in. Scelerisque suscipit quisque maecenas aliquet in. Wisi mi ipsum. Elit et mauris. Duis in magni praesent <a href="#">content</a> massa.</p>
                            <ul>
                                <li>Nisl cras vitae wisi odio amet.</li>
                                <li>Lacus amet vestibulum belas</li>
                                <li>Quis nunc curabitur assumenda</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="counters" class="section align-center overlay bg-cover bg5 light-text">
        <div class="container">

            <div class="row counters-wrapper">
                <div class="col-sm-3">
                    <div class="counter-block counter-block-no-border">
                        <div class="counter-box">
                            <div class="counter-content">
                                <span class="count" data-from="0" data-to="136">0</span>

                                <p class="title">speakers</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="counter-block counter-block-no-border">
                        <div class="counter-box">
                            <div class="counter-content">
                                <span class="count" data-from="0" data-to="5">0</span>

                                <p class="title">days</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="counter-block counter-block-no-border">
                        <div class="counter-box">
                            <div class="counter-content">
                                <span class="count" data-from="0" data-to="25">0</span>

                                <p class="title">workshops</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="counter-block counter-block-no-border">
                        <div class="counter-box">
                            <div class="counter-content">
                                <span class="count" data-from="0" data-to="200">0</span>

                                <p class="title">speeches</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="speakers" class="section align-center">
        <div class="container">
            <span class="icon section-icon icon-faces-users-04"></span>
            <h3>Speakers</h3>
            <p class="text-alt">Meet our <span class="highlight">professonals</span></p>
            <br />
            <br />

            <div class="col-sm-4">
                <div class="speaker">
                    <div class="photo-wrapper rounded"><img src="{{asset('/img/speakers/speaker1.jpg')}}" alt="John Doe" class="img-responsive"></div>
                    <h3 class="name">ERIC BOLDY</h3>
                    <p class="text-alt"><small>Project Manager</small></p>
                    <p class="about">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    <ul class="speaker-socials">
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="speaker">
                    <div class="photo-wrapper rounded"><img src="{{asset('/img/speakers/speaker2.jpg')}}" alt="John Doe" class="img-responsive"></div>
                    <h3 class="name">JAMES ROCK</h3>
                    <p class="text-alt"><small>VP Product @ Flopbox</small></p>
                    <p class="about">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    <ul class="speaker-socials">
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="speaker">
                    <div class="photo-wrapper rounded"><img src="{{asset('/img/speakers/speaker3.jpg')}}" alt="John Doe" class="img-responsive"></div>
                    <h3 class="name">ANDREA WARRAETY</h3>
                    <p class="text-alt"><small>Designer @ Winstagrap</small></p>
                    <p class="about">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    <ul class="speaker-socials">
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="speaker">
                    <div class="photo-wrapper rounded"><img src="{{asset('/img/speakers/speaker4.jpg')}}" alt="John Doe" class="img-responsive"></div>
                    <h3 class="name">MARTIN BRANSON</h3>
                    <p class="text-alt"><small>Evangelist @ Doogle</small></p>
                    <p class="about">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    <ul class="speaker-socials">
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="speaker">
                    <div class="photo-wrapper rounded"><img src="{{asset('/img/speakers/speaker5.jpg')}}" alt="John Doe" class="img-responsive"></div>
                    <h3 class="name">AMY WARNER</h3>
                    <p class="text-alt"><small>Graphic Designer</small></p>
                    <p class="about">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    <ul class="speaker-socials">
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="speaker">
                    <div class="photo-wrapper rounded"><img src="{{asset('/img/speakers/speaker6.jpg')}}" alt="John Doe" class="img-responsive"></div>
                    <h3 class="name">ALEC KROSOVIC</h3>
                    <p class="text-alt"><small>Project Manager</small></p>
                    <p class="about">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    <ul class="speaker-socials">
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-12 align-center">
                <a href="elements/speakers.html" target="_blank" class="btn btn-outline-clr btn-md">SPEAKERS STYLES</a>
            </div>

        </div>
    </section>

    <section id="schedule" class="section schedule-section align-center">
        <div class="container">
            <span class="icon section-icon icon-office-21"></span>
            <h3>Schedule</h3>
            <p class="text-alt">Vast number of different speeches<br/> and <span class="highlight">activities</span></p>
            <br />
            <br />

            <!-- Schedule start -->
            <div class="schedule">

                <!-- Navigation by day start -->
                <ul class="nav nav-schedule">
                    <li class="active"><a href="#day1" data-toggle="tab"><h5 class="highlight">Day 1</h5><p class="text-alt">08/10/2016</p></a></li>
                    <li><a href="#day2" data-toggle="tab"><h5 class="highlight">Day 2</h5><p class="text-alt">09/10/2016</p></a></li>
                    <li><a href="#day3" data-toggle="tab"><h5 class="highlight">Day 3</h5><p class="text-alt">10/10/2016</p></a></li>
                    <li><a href="#day4" data-toggle="tab"><h5 class="highlight">Day 4</h5><p class="text-alt">11/10/2016</p></a></li>
                    <li><a href="#day5" data-toggle="tab"><h5 class="highlight">Day 5</h5><p class="text-alt">12/10/2016</p></a></li>
                </ul>
                <!-- Navigation by day end -->

                <!-- First level content start -->
                <div class="tab-content">

                    <!-- Day 1 content start -->
                    <div id="day1" class="tab-pane fade active in">

                        <!-- Navigation by auditorium start -->
                        <ul class="nav nav-schedule">
                            <li class="active"><a href="#day1_auditorium1" data-toggle="tab">Auditorium 1</a></li>
                            <li><a href="#day1_auditorium2" data-toggle="tab">Auditorium 2</a></li>
                            <li><a href="#day1_auditorium3" data-toggle="tab">Auditorium 3</a></li>
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
                            <li class="active"><a href="#day2_auditorium1" data-toggle="tab">Auditorium 1</a></li>
                            <li><a href="#day2_auditorium2" data-toggle="tab">Auditorium 2</a></li>
                            <li><a href="#day2_auditorium3" data-toggle="tab">Auditorium 3</a></li>
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
                            <li class="active"><a href="#day3_auditorium1" data-toggle="tab">Auditorium 1</a></li>
                            <li><a href="#day3_auditorium2" data-toggle="tab">Auditorium 2</a></li>
                            <li><a href="#day3_auditorium3" data-toggle="tab">Auditorium 3</a></li>
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

                    <!-- Day 4 content start -->
                    <div id="day4" class="tab-pane fade in">

                        <!-- Navigation by auditorium start -->
                        <ul class="nav nav-schedule">
                            <li class="active"><a href="#day4_auditorium1" data-toggle="tab">Auditorium 1</a></li>
                            <li><a href="#day4_auditorium2" data-toggle="tab">Auditorium 2</a></li>
                            <li><a href="#day4_auditorium3" data-toggle="tab">Auditorium 3</a></li>
                        </ul>
                        <!-- Navigation by auditorium start -->

                        <!-- Second level content start -->
                        <div class="tab-content tab-content-schedule">

                            <!-- Auditorium 1 content start -->
                            <div id="day4_auditorium1" class="tab-pane fade active in">

                                <!-- Accordion start -->
                                <div class="panel-group" id="day4_auditorium1_timeline">

                                    <!-- Lecture start -->
                                    <div class="panel schedule-item">
                                        <div class="lecture-icon-wrapper">
                                            <span class="fa fa-cutlery"></span>
                                        </div>
                                        <a data-toggle="collapse" data-parent="#day4_auditorium1_timeline" href="#day4_auditorium1_time1" class="schedule-item-toggle">
                                            <strong class="time highlight"><span class="icon icon-office-24"></span>2:20 PM</strong>
                                            <h6 class="title">How to organize great events<i class="icon icon-arrows-06"></i></h6>
                                        </a>
                                        <div id="day4_auditorium1_time1" class="panel-collapse collapse in schedule-item-body">
                                            <article>
                                                <p class="description">Blandit sed placerat justo curabitur libero ligula mauris senectus. Urna mollis in non venenatis eget. Mi lorem orci eu vitae platea. Lobortis et lobortis. Et maecenas sollicitudin. Rhoncus dictum ullamcorper et con wisi ligula tincidunt.</p>
                                                <strong class="highlight speaker-name">Michael Lambert</strong>
                                            </article>
                                        </div>
                                    </div>
                                    <!-- Lecture end -->

                                    <!-- Lecture start -->
                                    <div class="panel schedule-item">
                                        <div class="lecture-icon-wrapper"></div>
                                        <a data-toggle="collapse" data-parent="#day4_auditorium1_timeline" href="#day4_auditorium1_time2" class="schedule-item-toggle collapsed">
                                            <strong class="time highlight"><span class="icon icon-office-24"></span>5:40 PM</strong>
                                            <h6 class="title">Scaling into crowded space<i class="icon icon-arrows-06"></i></h6>
                                        </a>
                                        <div id="day4_auditorium1_time2" class="panel-collapse collapse schedule-item-body">
                                            <article>
                                                <p class="description">Senectus fusce ut. Montes faucibus corporis. Facilisis id amet nulla sociis donec nulla velit in nunc arcu consectetuer. Eleifend quisque in. Justo ut justo sit aliquam malesuada tellus velit suspendisse. Volutpat aliquam risus non aenean.</p>
                                                <strong class="highlight speaker-name">Michael Lambert</strong>
                                            </article>
                                        </div>
                                    </div>
                                    <!-- Lecture end -->

                                    <!-- Lecture start -->
                                    <div class="panel schedule-item">
                                        <div class="lecture-icon-wrapper">
                                            <img src="{{asset('/img/speakers/speaker1.jpg')}}" alt="" class="img-responsive">
                                        </div>
                                        <a data-toggle="collapse" data-parent="#day4_auditorium1_timeline" href="#day4_auditorium1_time3" class="schedule-item-toggle collapsed">
                                            <strong class="time highlight"><span class="icon icon-office-24"></span>7:00 PM</strong>
                                            <h6 class="title">Close your eyes around the world<i class="icon icon-arrows-06"></i></h6>
                                        </a>
                                        <div id="day4_auditorium1_time3" class="panel-collapse collapse schedule-item-body">
                                            <article>
                                                <p class="description">Nibh odio in vivamus pretium vivamus ullamcorper erat erat. Aliquip tortor justo. Nam venenatis leo. Rutrum at tellus. Tincidunt ac minus turpis urna et. At at sit integer in quam nullam placerat scelerisque est ligula.</p>
                                                <strong class="highlight speaker-name">Michael Lambert</strong>
                                            </article>
                                        </div>
                                    </div>
                                    <!-- Lecture end -->

                                    <!-- Lecture start -->
                                    <div class="panel schedule-item">
                                        <div class="lecture-icon-wrapper">
                                            <img src="{{asset('/img/speakers/speaker1.jpg')}}" alt="" class="img-responsive">
                                        </div>
                                        <a data-toggle="collapse" data-parent="#day4_auditorium1_timeline" href="#day4_auditorium1_time4" class="schedule-item-toggle collapsed">
                                            <strong class="time highlight"><span class="icon icon-office-24"></span>7:40 PM</strong>
                                            <h6 class="title">Passion and people<i class="icon icon-arrows-06"></i></h6>
                                        </a>
                                        <div id="day4_auditorium1_time4" class="panel-collapse collapse schedule-item-body">
                                            <article>
                                                <p class="description">Tellus tincidunt pede. Quam sed non nec ligula ut primis a et. Lorem nulla arcu parturient sem quam. Ut malesuada sapien. Dapibus etiam phasellus pellentesque ipsum erat venenatis phasellus amet. Faucibus scelerisque metus quis eaque.</p>
                                                <strong class="highlight speaker-name">Michael Lambert</strong>
                                            </article>
                                        </div>
                                    </div>
                                    <!-- Lecture end -->

                                </div>
                                <!-- Accordion end -->

                            </div>
                            <!-- Auditorium 1 content end -->

                            <!-- Auditorium 2 content start -->
                            <div id="day4_auditorium2" class="tab-pane fade in">

                                <!-- Accordion start -->
                                <div class="panel-group" id="day4_auditorium2_timeline">

                                    <!-- Lecture start -->
                                    <div class="panel schedule-item">
                                        <div class="lecture-icon-wrapper">
                                            <img src="{{asset('/img/speakers/speaker1.jpg')}}" alt="" class="img-responsive">
                                        </div>
                                        <a data-toggle="collapse" data-parent="#day4_auditorium2_timeline" href="#day4_auditorium2_time1" class="schedule-item-toggle">
                                            <strong class="time highlight"><span class="icon icon-office-24"></span>2:20 PM</strong>
                                            <h6 class="title">How to organize great events<i class="icon icon-arrows-06"></i></h6>
                                        </a>
                                        <div id="day4_auditorium2_time1" class="panel-collapse collapse in schedule-item-body">
                                            <article>
                                                <p class="description">Mollis lobortis gravida. Urna aliquam nonummy tortor aliquam dapibus. Imperdiet ac donec. Sit pharetra bibendum vitae fusce ullamcorper sed ad quam. Vel wisi magna massa mus lacus vestibulum vulputate nec. Pellentesque sit arcu pellentesque posuere.</p>
                                                <strong class="highlight speaker-name">Michael Lambert</strong>
                                            </article>
                                        </div>
                                    </div>
                                    <!-- Lecture end -->

                                    <!-- Lecture start -->
                                    <div class="panel schedule-item">
                                        <div class="lecture-icon-wrapper">
                                            <img src="{{asset('/img/speakers/speaker1.jpg')}}" alt="" class="img-responsive">
                                        </div>
                                        <a data-toggle="collapse" data-parent="#day4_auditorium2_timeline" href="#day4_auditorium2_time2" class="schedule-item-toggle collapsed">
                                            <strong class="time highlight"><span class="icon icon-office-24"></span>5:40 PM</strong>
                                            <h6 class="title">Scaling into crowded space<i class="icon icon-arrows-06"></i></h6>
                                        </a>
                                        <div id="day4_auditorium2_time2" class="panel-collapse collapse schedule-item-body">
                                            <article>
                                                <p class="description">At nunc eget. Con scelerisque nam in fermentum integer. Aliquet ultricies eget elit autem velit maecenas nunc blandit. In nisl vel vel auctor aliquam. Laoreet justo vestibulum nisl tellus convallis. Ornare mauris pellentesque in nec.</p>
                                                <strong class="highlight speaker-name">Michael Lambert</strong>
                                            </article>
                                        </div>
                                    </div>
                                    <!-- Lecture end -->

                                </div>
                                <!-- Accordion end -->

                            </div>
                            <!-- Auditorium 2 content end -->

                            <!-- Auditorium 3 content start -->
                            <div id="day4_auditorium3" class="tab-pane fade in">

                                <!-- Accordion start -->
                                <div class="panel-group" id="day4_auditorium3_timeline">

                                    <!-- Lecture start -->
                                    <div class="panel schedule-item">
                                        <div class="lecture-icon-wrapper">
                                            <img src="{{asset('/img/speakers/speaker1.jpg')}}" alt="" class="img-responsive">
                                        </div>
                                        <a data-toggle="collapse" data-parent="#day4_auditorium3_timeline" href="#day4_auditorium3_time1" class="schedule-item-toggle">
                                            <strong class="time highlight"><span class="icon icon-office-24"></span>2:20 PM</strong>
                                            <h6 class="title">How to organize great events<i class="icon icon-arrows-06"></i></h6>
                                        </a>
                                        <div id="day4_auditorium3_time1" class="panel-collapse collapse in schedule-item-body">
                                            <article>
                                                <p class="description">Praesent praesent semper parturient semper nec donec sit enim. Fames diam massa. Ultrices magna exercitationem ultricies ullamcorper volutpat. Est faucibus felis. Consequat et vitae aliquam nibh mi. Ipsum mauris etiam orci venenatis sem maecenas vestibulum.</p>
                                                <strong class="highlight speaker-name">Michael Lambert</strong>
                                            </article>
                                        </div>
                                    </div>
                                    <!-- Lecture end -->

                                </div>assets
                                <!-- Accordion end -->

                            </div>
                            <!-- Auditorium 3 content end -->

                        </div>
                        <!-- Second level content end -->

                    </div>
                    <!-- Day 4 content end -->

                    <!-- Day 5 content start -->
                    <div id="day5" class="tab-pane fade in">

                        <!-- Navigation by auditorium start -->
                        <ul class="nav nav-schedule">
                            <li class="active"><a href="#day5_auditorium1" data-toggle="tab">Auditorium 1</a></li>
                            <li><a href="#day5_auditorium2" data-toggle="tab">Auditorium 2</a></li>
                            <li><a href="#day5_auditorium3" data-toggle="tab">Auditorium 3</a></li>
                        </ul>
                        <!-- Navigation by auditorium end -->

                        <!-- Second level content start -->
                        <div class="tab-content tab-content-schedule">

                            <!-- Auditorium 1 content start -->
                            <div id="day5_auditorium1" class="tab-pane fade active in">

                                <!-- Accordion start -->
                                <div class="panel-group" id="day5_auditorium1_timeline">

                                    <!-- Lecture start -->
                                    <div class="panel schedule-item">
                                        <div class="lecture-icon-wrapper">
                                            <img src="{{asset('/img/speakers/speaker1.jpg')}}" alt="" class="img-responsive">
                                        </div>
                                        <a data-toggle="collapse" data-parent="#day5_auditorium1_timeline" href="#day5_auditorium1_time1" class="schedule-item-toggle">
                                            <strong class="time highlight"><span class="icon icon-office-24"></span>2:20 PM</strong>
                                            <h6 class="title">How to organize great events<i class="icon icon-arrows-06"></i></h6>
                                        </a>
                                        <div id="day5_auditorium1_time1" class="panel-collapse collapse in schedule-item-body">
                                            <article>
                                                <p class="description">Vitae tellus donec vivamus quam diam. Neque lorem ut nisl nisl ante ipsum eu accumsan phasellus ligula nisl. Eu mauris exercitationem. Nullam eu quam elementum sit phasellus. Erat tempus eiusmod. Ut volutpat venenatis eu feugiat.</p>
                                                <strong class="highlight speaker-name">Michael Lambert</strong>
                                            </article>
                                        </div>
                                    </div>
                                    <!-- Lecture end -->

                                    <!-- Lecture start -->
                                    <div class="panel schedule-item">
                                        <div class="lecture-icon-wrapper">
                                            <img src="{{asset('/img/speakers/speaker1.jpg')}}" alt="" class="img-responsive">
                                        </div>
                                        <a data-toggle="collapse" data-parent="#day5_auditorium1_timeline" href="#day5_auditorium1_time3" class="schedule-item-toggle collapsed">
                                            <strong class="time highlight"><span class="icon icon-office-24"></span>7:00 PM</strong>
                                            <h6 class="title">Close your eyes around the world<i class="icon icon-arrows-06"></i></h6>
                                        </a>
                                        <div id="day5_auditorium1_time3" class="panel-collapse collapse schedule-item-body">
                                            <article>
                                                <p class="description">Odio sed arcu. Lorem tempor mauris. Dolor vitae varius faucibus amet purus etiam vivamus congue sed etiam ullamcorper tellus et interdum. Ut libero interdum. Lacinia vel faucibus. Dis justo dolor enim ante nisl fames a.</p>
                                                <strong class="highlight speaker-name">Michael Lambert</strong>
                                            </article>
                                        </div>
                                    </div>
                                    <!-- Lecture end -->

                                    <!-- Lecture start -->
                                    <div class="panel schedule-item">
                                        <div class="lecture-icon-wrapper">
                                            <img src="{{asset('/img/speakers/speaker1.jpg')}}" alt="" class="img-responsive">
                                        </div>
                                        <a data-toggle="collapse" data-parent="#day5_auditorium1_timeline" href="#day5_auditorium1_time4" class="schedule-item-toggle collapsed">
                                            <strong class="time highlight"><span class="icon icon-office-24"></span>7:40 PM</strong>
                                            <h6 class="title">Passion and people<i class="icon icon-arrows-06"></i></h6>
                                        </a>
                                        <div id="day5_auditorium1_time4" class="panel-collapse collapse schedule-item-body">
                                            <article>
                                                <p class="description">Nunc est elementum. Lorem nullam id. Neque lorem sem. Quam nulla pretium augue condimentum lorem. Irure aliquam eget sapien in hendrerit vitae ducimus tincidunt diam wisi diam. Malesuada erat nibh natoque augue etiam semper justo.</p>
                                                <strong class="highlight speaker-name">Michael Lambert</strong>
                                            </article>
                                        </div>
                                    </div>
                                    <!-- Lecture end -->

                                </div>
                                <!-- Accordion end -->

                            </div>
                            <!-- Auditorium 1 content end -->

                            <!-- Auditorium 2 content start -->
                            <div id="day5_auditorium2" class="tab-pane fade in">

                                <!-- Accordion start -->
                                <div class="panel-group" id="day5_auditorium2_timeline">

                                    <!-- Lecture start -->
                                    <div class="panel schedule-item">
                                        <div class="lecture-icon-wrapper">
                                            <img src="{{asset('/img/speakers/speaker1.jpg')}}" alt="" class="img-responsive">
                                        </div>
                                        <a data-toggle="collapse" data-parent="#day5_auditorium2_timeline" href="#day5_auditorium2_time1" class="schedule-item-toggle">
                                            <strong class="time highlight"><span class="icon icon-office-24"></span>2:20 PM</strong>
                                            <h6 class="title">How to organize great events<i class="icon icon-arrows-06"></i></h6>
                                        </a>
                                        <div id="day5_auditorium2_time1" class="panel-collapse collapse in schedule-item-body">
                                            <article>
                                                <p class="description">Dui maecenas curabitur donec suspendisse ipsum. Vel luctus eros. Porttitor ac repudiandae. Mauris enim risus mauris litora ipsum lectus integer nullam. Sollicitudin mus tortor. Natoque metus etiam euismod bibendum ornare facilisi sit et dui sem.</p>
                                                <strong class="highlight speaker-name">Michael Lambert</strong>
                                            </article>
                                        </div>
                                    </div>
                                    <!-- Lecture end -->

                                </div>
                                <!-- Accordion end -->

                            </div>
                            <!-- Auditorium 2 content end -->

                            <!-- Auditorium 3 content start -->
                            <div id="day5_auditorium3" class="tab-pane fade in">

                                <!-- Accordion start -->
                                <div class="panel-group" id="day5_auditorium3_timeline">

                                    <!-- Lecture start -->
                                    <div class="panel schedule-item">
                                        <div class="lecture-icon-wrapper">
                                            <img src="{{asset('/img/speakers/speaker1.jpg')}}" alt="" class="img-responsive">
                                        </div>
                                        <a data-toggle="collapse" data-parent="#day5_auditorium3_timeline" href="#day5_auditorium3_time1" class="schedule-item-toggle">
                                            <strong class="time highlight"><span class="icon icon-office-24"></span>2:20 PM</strong>
                                            <h6 class="title">How to organize great events<i class="icon icon-arrows-06"></i></h6>
                                        </a>
                                        <div id="day5_auditorium3_time1" class="panel-collapse collapse in schedule-item-body">
                                            <article>
                                                <p class="description">Orci integer suspendisse. Iaculis libero primis rutrum pede eget at fermentum vel. Sem in turpis quis accumsan malesuada. Turpis id vivamus. Nec enim quasi potenti rhoncus id. Sed vestibulum ut tincidunt amet neque nulla vulputate.</p>
                                                <strong class="highlight speaker-name">Michael Lambert</strong>
                                            </article>
                                        </div>
                                    </div>
                                    <!-- Lecture end -->

                                    <!-- Lecture start -->
                                    <div class="panel schedule-item">
                                        <div class="lecture-icon-wrapper">
                                            <img src="{{asset('/img/speakers/speaker1.jpg')}}" alt="" class="img-responsive">
                                        </div>
                                        <a data-toggle="collapse" data-parent="#day5_auditorium3_timeline" href="#day5_auditorium3_time2" class="schedule-item-toggle collapsed">
                                            <strong class="time highlight"><span class="icon icon-office-24"></span>5:40 PM</strong>
                                            <h6 class="title">Scaling into crowded space<i class="icon icon-arrows-06"></i></h6>
                                        </a>
                                        <div id="day5_auditorium3_time2" class="panel-collapse collapse schedule-item-body">
                                            <article>
                                                <p class="description">Suscipit lacus tellus. Varius et at. Eros amet dignissim pede eget augue maecenas in sodales sed sapien nam venenatis lectus iaculis urna nunc dolor. Lobortis class dapibus. Aptent est donec. Ante dolor metus enim mollis.</p>
                                                <strong class="highlight speaker-name">Michael Lambert</strong>
                                            </article>
                                        </div>
                                    </div>
                                    <!-- Lecture end -->

                                    <!-- Lecture start -->
                                    <div class="panel schedule-item">
                                        <div class="lecture-icon-wrapper">
                                            <img src="{{asset('/img/speakers/speaker1.jpg')}}" alt="" class="img-responsive">
                                        </div>
                                        <a data-toggle="collapse" data-parent="#day5_auditorium3_timeline" href="#day5_auditorium3_time4" class="schedule-item-toggle collapsed">
                                            <strong class="time highlight"><span class="icon icon-office-24"></span>7:40 PM</strong>
                                            <h6 class="title">Passion and people<i class="icon icon-arrows-06"></i></h6>
                                        </a>
                                        <div id="day5_auditorium3_time4" class="panel-collapse collapse schedule-item-body">
                                            <article>
                                                <p class="description">Pharetra expedita lorem. Turpis ipsum sodales. Porttitor posuere ipsum vestibulum suspendisse pellentesque. Scelerisque a pellentesque molestie vel ullamcorper dolor scelerisque erat. In vestibulum in suspendisse duis ligula. Urna interdum purus amet mi rutrum maecenas elit.</p>
                                                <strong class="highlight speaker-name">Michael Lambert</strong>
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
                    <!-- Day 5 content end -->

                </div>
                <!-- First level content end -->

            </div>
            <!-- Schedule end -->

            <div class="col-sm-12 align-center">
                <a href="elements/schedule.html" target="_blank" class="btn btn-outline-clr btn-md">SCHEDULE STYLES</a>
            </div>

        </div>

    </section>

    <section id="sign_up" class="section bg-cover overlay bg4 light-text align-center">
        <div class="container">
            <h2><span class="highlight">Newsletter</span> Sign Up</h2>
            <small>No Spam - Only latest news, price and activity updates</small>
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <form id="subscribe_main" action="" method="post" enctype="multipart/form-data" class="form row newsletter-form mailchimp-form">
                    <fieldset class="col-sm-8">
                        <input id="NewsletterEmail" name="NewsletterEmail" type="email" placeholder="email@email.com">
                    </fieldset>
                    <fieldset class="col-sm-4">
                        <input type="submit" value="submit" class="btn btn-sm btn-outline-clr">
                    </fieldset>
                    <div class="response"></div>
                </form>
            </div>
        </div>
    </section>

    <section id="prices" class="section align-center">
        <div class="container">
            <span class="icon section-icon icon-shopping-04"></span>
            <h3>Tickets</h3>
            <p class="text-alt">Get yours why they are still <span class="highlight">available</span></p>
            <br/>
            <br/>

            <div class="row">
                <div class="col-sm-4">
                    <div class="package-column">
                        <h6 class="package-title">Early Bird</h6>
                        <div class="package-price">
                            <span class="currency">$</span>33
                        </div>
                        <div class="package-detail">
                            <ul>
                                <li><span class="fa fa-check check-icon"></span>Regular Seating</li>
                                <li><span class="fa fa-check check-icon"></span>Free Snacks</li>
                                <li><span class="fa fa-check check-icon"></span>Custom Badge</li>
                            </ul>
                        </div>
                        <a href="#" class="btn btn-lg btn-outline-clr">Buy now</a>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="package-column special-column">
                        <span class="sale-label uppercase">Hot!</span>
                        <h6 class="package-title">Silver Pass</h6>
                        <div class="package-price">
                            <span class="currency">$</span>99
                        </div>
                        <div class="package-detail">
                            <ul>
                                <li><span class="fa fa-check check-icon"></span>Regular Seating</li>
                                <li><span class="fa fa-check check-icon"></span>Free Snacks</li>
                                <li><span class="fa fa-check check-icon"></span>Custom Badge</li>
                            </ul>
                        </div>
                        <a href="#" class="btn btn-lg">Buy now</a>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="package-column">
                        <h6 class="package-title">Gold Pass</h6>
                        <div class="package-price">
                            <span class="currency">$</span>150
                        </div>
                        <div class="package-detail">
                            <ul>
                                <li><span class="fa fa-check check-icon"></span>Regular Seating</li>
                                <li><span class="fa fa-check check-icon"></span>Free Snacks</li>
                                <li><span class="fa fa-check check-icon"></span>Custom Badge</li>
                            </ul>
                        </div>
                        <a href="#" class="btn btn-lg btn-outline-clr">Buy now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="feedback" class="section align-center" style="padding-top: 25px;">
        <div class="container">
            <h5 class="heading-alt">TESTIMONIALS</h5>
            <p class="text-alt" style="margin-bottom: 80px;">what people <span class="highlight">say</span></p>

            <div class="row">
                <div class="col-sm-4">
                    <div class="testimonial">
                        <article class="text-box">Esse maxime tempore maiores laboriosam nobis, aut cum quidem est ab ipsam soluta voluptate totam quibusdam quo neque doloremque, provident asperiores error pariatur.</article>
                        <div class="author-block">
                            <div class="photo-container" style="background-image: url('{{asset('/img/testimonials/client1.jpg')}}')"></div>

                            <strong class="name">Rebecca Smith</strong>
                            <small class="text-alt company">Designer @ Baffle</small>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="testimonial">
                        <article class="text-box">Illo repellat dolores laudantium quos, velit, reprehenderit veniam accusamus neque laboriosam tenetur aut quaerat, doloribus autem, facere molestiae? Quisquam ducimus, nesciunt mollitia.</article>
                        <div class="author-block">
                            <div class="photo-container" style="background-image: url('{{asset('/img/testimonials/client2.jpg')}}')"></div>

                            <strong class="name">Michael Scherzzinger</strong>
                            <small class="text-alt company">CTO @ Flopbox</small>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="testimonial">
                        <article class="text-box">Recusandae minima similique rem. Neque quisquam, blanditiis cum, ex ullam obcaecati beatae nobis quos, officia rerum, exercitationem ducimus totam quibusdam! Quia, illum.</article>
                        <div class="author-block">
                            <div class="photo-container" style="background-image: url('{{asset('/img/testimonials/client3.jpg')}}'})"></div>

                            <strong class="name">Mike Meyers</strong>
                            <small class="text-alt company">VP Sales @ Pell Inc.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="register" class="section overlay overlay-clr bg-cover bg4 light-text align-center">
        <div class="container">
            <h2>Register to Ventcamp now!</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting <br /> industry. took a galley of type and scrambled it to make a type.</p>
            <br />
            <br />

            <a href="#" class="btn btn-lg btn-outline">Register</a>
        </div>
    </section>

    <section id="gallery" class="section align-center">
        <div class="container">
            <span class="icon section-icon icon-badges-votes-01"></span>
            <h3>Previous events</h3>
            <p class="text-alt">see what we did <span class="highlight">lately</span></p>
            <br/>

            <div class="gallery masonry">
				<span class="masonry-item">
					<a href="#" class="gallery-thumb-link" data-modal-link="gallery-1">
						<img src="{{asset('/img/gallery/gallery1-thumb.jpg')}}" alt="">
					</a>

					<div class="modal-window" data-modal="gallery-1">
						<div class="modal-box medium animated" data-animation="zoomIn" data-duration="700">
							<span class="close-btn icon icon-office-52"></span>

							<h5 class="heading-alt">Gallery image 1</h5>
							<br/>

							<img src="{{asset('/img/gallery/gallery1.jpg')}}" class="full-width-img" alt="gallery1">
						</div>
					</div>
				</span>

                <span class="masonry-item">
					<a href="#" class="gallery-thumb-link" data-modal-link="gallery-2">
						<img src="{{asset('/img/gallery/gallery2-thumb.jpg')}}" alt="">
					</a>

					<div class="modal-window" data-modal="gallery-2">
						<div class="modal-box medium animated" data-animation="zoomIn" data-duration="700">
							<span class="close-btn icon icon-office-52"></span>

							<h5 class="heading-alt">Gallery image 2</h5>
							<br/>assets

							<img src="{{asset('/img/gallery/gallery2.jpg')}}" class="full-width-img" alt="gallery1">
						</div>
					</div>
				</span>
                <span class="masonry-item">
					<a href="#" class="gallery-thumb-link" data-modal-link="gallery-3">
						<img src="{{asset('/img/gallery/gallery3-thumb.jpg')}}" alt="">
					</a>

					<div class="modal-window" data-modal="gallery-3">
						<div class="modal-box medium animated" data-animation="zoomIn" data-duration="700">
							<span class="close-btn icon icon-office-52"></span>

							<h5 class="heading-alt">Gallery image 3</h5>
							<br/>

							<img src="{{asset('/img/gallery/gallery3.jpg')}}" class="full-width-img" alt="gallery1">
						</div>
					</div>
				</span>

                <span class="masonry-item">
					<a href="#" class="gallery-thumb-link" data-modal-link="gallery-4">
						<img src="{{asset('/img/gallery/gallery4-thumb.jpg')}}" alt="">
					</a>

					<div class="modal-window" data-modal="gallery-4">
						<div class="modal-box medium animated" data-animation="zoomIn" data-duration="700">
							<span class="close-btn icon icon-office-52"></span>

							<h5 class="heading-alt">Gallery image 4</h5>
							<br/>

							<img src="{{asset('/img/gallery/gallery4.jpg')}}" class="full-width-img" alt="gallery1">
						</div>
					</div>
				</span>
                <span class="masonry-item">
					<a href="#" class="gallery-thumb-link" data-modal-link="gallery-5">
						<img src="{{asset('/img/gallery/gallery5-thumb.jpg')}}" alt="">
					</a>

					<div class="modal-window" data-modal="gallery-5">
						<div class="modal-box medium animated" data-animation="zoomIn" data-duration="700">
							<span class="close-btn icon icon-office-52"></span>

							<h5 class="heading-alt">Gallery image 5</h5>
							<br/>

							<img src="{{asset('/img/gallery/gallery5.jpg')}}" class="full-width-img" alt="gallery1">
						</div>
					</div>
				</span>

                <span class="masonry-item">
					<a href="#" class="gallery-thumb-link" data-modal-link="gallery-6">
						<img src="{{asset('/img/gallery/gallery6-thumb.jpg')}}" alt="">
					</a>

					<div class="modal-window" data-modal="gallery-6">
						<div class="modal-box medium animated" data-animation="zoomIn" data-duration="700">
							<span class="close-btn icon icon-office-52"></span>

							<h5 class="heading-alt">Gallery image 6</h5>
							<br/>

							<img src="{{asset('/img/gallery/gallery6.jpg')}}" class="full-width-img" alt="gallery1">
						</div>
					</div>
				</span>
                <span class="masonry-item">
					<a href="#" class="gallery-thumb-link" data-modal-link="gallery-7">
						<img src="{{asset('/img/gallery/gallery7-thumb.jpg')}}" alt="">
					</a>

					<div class="modal-window" data-modal="gallery-7">
						<div class="modal-box medium animated" data-animation="zoomIn" data-duration="700">
							<span class="close-btn icon icon-office-52"></span>

							<h5 class="heading-alt">Gallery image 7</h5>
							<br/>

							<img src="{{asset('/img/gallery/gallery7.jpg')}}" class="full-width-img" alt="gallery1">
						</div>
					</div>
				</span>

                <span class="masonry-item">
					<a href="#" class="gallery-thumb-link" data-modal-link="gallery-8">
						<img src="{{asset('/img/gallery/gallery8-thumb.jpg')}}" alt="">
					</a>

					<div class="modal-window" data-modal="gallery-8">
						<div class="modal-box medium animated" data-animation="zoomIn" data-duration="700">
							<span class="close-btn icon icon-office-52"></span>

							<h5 class="heading-alt">Gallery image 8</h5>
							<br/>

							<img src="{{asset('/img/gallery/gallery8.jpg')}}" class="full-width-img" alt="gallery1">
						</div>
					</div>
				</span>

                <span class="masonry-item">
					<a href="#" class="gallery-thumb-link" data-modal-link="gallery-9">
						<img src="{{asset('/img/gallery/gallery9-thumb.jpg')}}" alt="">
					</a>

					<div class="modal-window" data-modal="gallery-9">
						<div class="modal-box medium animated" data-animation="zoomIn" data-duration="700">
							<span class="close-btn icon icon-office-52"></span>

							<h5 class="heading-alt">Gallery image 9</h5>
							<br/>

							<img src="{{asset('/img/gallery/gallery9.jpg')}}" class="full-width-img" alt="gallery1">
						</div>
					</div>
				</span>
                <span class="masonry-item">
					<a href="#" class="gallery-thumb-link" data-modal-link="gallery-10">
						<img src="{{asset('/img/gallery/gallery10-thumb.jpg')}}" alt="">
					</a>

					<div class="modal-window" data-modal="gallery-10">
						<div class="modal-box medium animated" data-animation="zoomIn" data-duration="700">
							<span class="close-btn icon icon-office-52"></span>

							<h5 class="heading-alt">Gallery image 10</h5>
							<br/>

							<img src="{{asset('/img/gallery/gallery10.jpg')}}" class="full-width-img" alt="gallery1">
						</div>
					</div>
				</span>

                <span class="masonry-item">
					<a href="#" class="gallery-thumb-link" data-modal-link="gallery-11">
						<img src="{{asset('/img/gallery/gallery11-thumb.jpg')}}" alt="">
					</a>

					<div class="modal-window" data-modal="gallery-11">
						<div class="modal-box medium animated" data-animation="zoomIn" data-duration="700">
							<span class="close-btn icon icon-office-52"></span>

							<h5 class="heading-alt">Gallery image 11</h5>
							<br/>

							<img src="{{asset('/img/gallery/gallery11.jpg')}}" class="full-width-img" alt="gallery1">
						</div>
					</div>
				</span>

                <span class="masonry-item">
					<a href="#" class="gallery-thumb-link" data-modal-link="gallery-12">
						<img src="{{asset('/img/gallery/gallery12-thumb.jpg')}}" alt="">
					</a>

					<div class="modal-window" data-modal="gallery-12">
						<div class="modal-box medium animated" data-animation="zoomIn" data-duration="700">
							<span class="close-btn icon icon-office-52"></span>

							<h5 class="heading-alt">Gallery image 12</h5>
							<br/>

							<img src="{{asset('/img/gallery/gallery12.jpg')}}" class="full-width-img" alt="gallery1">
						</div>
					</div>
				</span>
            </div>

        </div>
    </section>

    <section id="sponsors" class="section align-center">
        <div class="container">
            <span class="icon section-icon icon-documents-bookmarks-12"></span>
            <h3>General sponsors</h3>
            <p class="text-alt">companies that <span class="highlight">support</span> us</p>
            <br/>
            <br/>

            <div class="sponsors">
                <div class="sponsor big"><img src="{{asset('/img/sponsors/sponsor-big-1.png')}}" alt=""></div>
                <div class="sponsor big"><img src="{{asset('/img/sponsors/sponsor-big-2.png')}}" alt=""></div>
                <div class="sponsor big"><img src="{{asset('/img/sponsors/sponsor-big-3.png')}}" alt=""></div>
                <div class="sponsor big"><img src="{{asset('/img/sponsors/sponsor-big-4.png')}}" alt=""></div>
            </div>

            <div class="sponsors">
                <div class="sponsor inline"><img src="{{asset('/img/sponsors/sponsor1.png')}}" alt=""></div>
                <div class="sponsor inline"><img src="{{asset('/img/sponsors/sponsor2.png')}}" alt=""></div>
                <div class="sponsor inline"><img src="{{asset('/img/sponsors/sponsor3.png')}}" alt=""></div>
                <div class="sponsor inline"><img src="{{asset('/img/sponsors/sponsor4.png')}}" alt=""></div>
                <div class="sponsor inline"><img src="{{asset('/img/sponsors/sponsor5.png')}}" alt=""></div>
                <div class="sponsor inline"><img src="{{asset('/img/sponsors/sponsor6.png')}}" alt=""></div>
            </div>
            <div class="sponsors">
                <div class="sponsor inline"><img src="{{asset('/img/sponsors/sponsor9.png')}}" alt=""></div>
                <div class="sponsor inline"><img src="{{asset('/img/sponsors/sponsor10.png')}}" alt=""></div>
                <div class="sponsor inline"><img src="{{asset('/img/sponsors/sponsor1.png')}}" alt=""></div>
                <div class="sponsor inline"><img src="{{asset('/img/sponsors/sponsor2.png')}}" alt=""></div>
                <div class="sponsor inline"><img src="{{asset('/img/sponsors/sponsor3.png')}}" alt=""></div>
                <div class="sponsor inline"><img src="{{asset('/img/sponsors/sponsor4.png')}}" alt=""></div>
            </div>
            <div class="sponsors">
                <div class="sponsor inline"><img src="{{asset('/img/sponsors/sponsor5.png')}}" alt=""></div>
                <div class="sponsor inline"><img src="{{asset('/img/sponsors/sponsor6.png')}}" alt=""></div>
                <div class="sponsor inline"><img src="{{asset('/img/sponsors/sponsor7.png')}}" alt=""></div>
                <div class="sponsor inline"><img src="{{asset('/img/sponsors/sponsor3.png')}}" alt=""></div>
            </div>

            <div class="sponsors">
                <div class="sponsor inline"><img src="{{asset('/img/sponsors/sponsor2.png')}}" alt=""></div>
                <div class="sponsor inline"><img src="{{asset('/img/sponsors/sponsor1.png')}}" alt=""></div>
            </div>

        </div>
    </section>

    <section id="contacts">
        <div class="contacts-wrapper">
            <div id="contacts-map" class="map" data-settings="{{asset('map-settings.json')}}" style="height:560px;"></div>

            <div class="container contacts-on-map-container">
                <div class="contacts-on-map">
                    <h3>Location</h3>

                    <ul class="list">
                        <li><i class="fa fa-map-marker"></i> Av. de la Universidad 501 San Francisco, CBA</li>
                        <li><i class="fa fa-envelope"></i>facultad@sanfrancisco.utn.edu.ar</li>
                        <li><i class="fa fa-cloud"></i>https://www.frsfco.utn.edu.ar/</li>
                        <li><i class="fa fa-phone"></i>(03564) 42-1147</li>
                        <li><i class="fa fa-clock-o"></i>8:00 - 22:00</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="container">

            <div class="col-md-4">
                <div class="widget about-widget">
                    <h6 class="widget-head">About <span class="highlight">Ventcamp</span></h6>
                    <p class="text-alt"><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type.</small></p>

                    <img src="{{asset('/img/autograph-143x105.png')}}" alt="autograph">
                </div>
            </div>

            <div class="col-md-4 col-lg-3 col-lg-offset-1">
                <div class="widget twitter-widget">
                    <h6 class="widget-head"><span class="fa fa-twitter"></span> Twitter Feed</h6>

                    <ul class="tweets-list">
                        <li class="tweet">
                            <p class="text-alt tweet-text">Grabehan <a href="#">#NowPlaying</a> Future People by Alabama Shakes <a href="http://spoti.fi/1CTPWcW">http://spoti.fi/1CTPWcW</a></p>
                            <small class="tweet-date">7 sep 2015</small>
                        </li>

                        <li class="tweet">
                            <p class="text-alt tweet-text">Loving <a href="#">@TryGhost</a> so far. Ghost theming here I come!</p>
                            <small class="tweet-date">8 sep 2015</small>
                        </li>

                        <li class="tweet">
                            <p class="text-alt tweet-text">We didn't set out to be superheroes. But sometimes, life doesn't go the way you planned. <a href="#">#TI5</a> <a href="#">#BleedBlue</a></p>
                            <small class="tweet-date">9 sep 2015</small>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-lg-3 col-lg-offset-1">
                <div class="widget instagram-widget">
                    <h6 class="widget-head"><span class="fa fa-instagram"></span> Photo feed</h6>

                    <ul class="instagram-list">
                        <li><img src="{{asset('/img/gallery/footer-photo.jpg')}}" alt="photo" /></li>
                        <li><img src="{{asset('/img/gallery/footer-photo.jpg')}}" alt="photo" /></li>
                        <li><img src="{{asset('/img/gallery/footer-photo.jpg')}}" alt="photo" /></li>
                        <li><img src="{{asset('/img/gallery/footer-photo.jpg')}}" alt="photo" /></li>
                        <li><img src="{{asset('/img/gallery/footer-photo.jpg')}}" alt="photo" /></li>
                        <li><img src="{{asset('/img/gallery/footer-photo.jpg')}}" alt="photo" /></li>
                        <li><img src="{{asset('/img/gallery/footer-photo.jpg')}}" alt="photo" /></li>
                        <li><img src="{{asset('/img/gallery/footer-photo.jpg')}}" alt="photo" /></li>
                        <li><img src="{{asset('/img/gallery/footer-photo.jpg')}}" alt="photo" /></li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="footer-base">
            <div class="container">

                <div class="col-md-6">
                    <ul class="footer-nav">
                        <li class="footer-nav-item"><a href="#">Contact</a></li>
                        <li class="footer-nav-item"><a href="#">Privacy policy</a></li>
                        <li class="footer-nav-item"><a href="#">Press</a></li>
                    </ul>
                </div>

                <div class="col-md-6 align-right">
                    <ul class="socials-nav align-right">
                        <li class="socials-nav-item"><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li class="socials-nav-item"><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li class="socials-nav-item"><a href="#"><span class="fa fa-github"></span></a></li>
                        <li class="socials-nav-item"><a href="#"><span class="fa fa-vimeo-square"></span></a></li>
                        <li class="socials-nav-item"><a href="#"><span class="fa fa-google-plus"></span></a></li>
                        <li class="socials-nav-item"><a href="#"><span class="fa fa-instagram"></span></a></li>
                    </ul>

                    <p class="text-alt"><small>All Rights Reserved © 2015</small></p>
                </div>

            </div>
        </div>
    </section>

    <div class="modal-window" data-modal="email-ticket" style="background-color: rgba(2, 2, 2, 0.85);">
        <div class="modal-box small animated" data-animation="zoomIn" data-duration="700">
            <span class="close-btn icon icon-office-52"></span>

            <h5 class="align-center"><span class="highlight">Event Registration</span></h5>

            <form class="form registration-form align-center">

                <fieldset class="col-sm-12">
                    <label for="first_name">First Name</label>
                    <input id="first_name" name="first_name" type="text">
                </fieldset>

                <fieldset class="col-sm-12">
                    <label for="last_name">Last Name</label>
                    <input id="last_name" name="last_name" type="text">
                </fieldset>

                <fieldset class="col-sm-12">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email">
                </fieldset>

                <fieldset class="col-sm-6">
                    <label for="pass1">Ticket type</label>
                    <select id="pass1" name="pass1">
                        <option value="" selected disabled>-- Select --</option>
                        <option value="0">Early Bird</option>
                        <option value="1">Silver Pass</option>
                        <option value="2">Gold Pass</option>
                        <option value="3">Ultimate Mega Ultra Legendary Pass</option>
                    </select>
                </fieldset>

                <fieldset class="col-sm-6">
                    <label for="pass2"># tickets</label>
                    <select id="pass2" name="pass2">
                        <option value="a">Variant A</option>
                        <option value="b">Variant B</option>
                        <option value="c">Variant C</option>
                        <option value="d">Variant D</option>
                        <option value="e">Variant E</option>
                        <option value="f" disabled>Variant F</option>
                        <option value="g">Variant G</option>
                        <option value="h">Variant H</option>
                        <option value="i">Variant I</option>
                        <option value="j">Variant J</option>
                        <option value="k">Variant K</option>
                        <option value="l">Variant L</option>
                        <option value="m">Variant M</option>
                    </select>
                </fieldset>

                <fieldset class="col-sm-12">
                    <input id="privacy" name="privacy" type="checkbox"><label for="privacy">I read & agree with <a href="#">Terms of service</a> </label>
                    <br />
                    <br />
                </fieldset>

                <input type="submit" value="submit" class="btn">
            </form>

        </div>
    </div>

    <div class="modal-window" data-modal="0" style="background-color: rgba(2, 2, 2, 0.85);">
        <div class="modal-box iframe-box iframe-video">
            <span class="close-btn icon icon-office-52"></span>

            <iframe src="https://www.youtube.com/embed/goH-Pv1w6xo?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>

    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{asset('/js/jquery-1.11.3.min.js?ver=1')}}"></script>
    <![endif]-->
    <!--[if (gte IE 9) | (!IE)]><!-->
    <script type="text/javascript" src="{{asset('/js/jquery-2.1.4.min.js?ver=1')}}"></script>
    <!--<![endif]-->

    <script src="https://maps.googleapis.com/maps/api/js?v=3&libraries=places"></script>
    <script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/jquery.validate.min.js')}}'"></script>
    <script type="text/javascript" src="{{asset('/js/toastr.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/jquery.waypoints.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/jquery.appear.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/jquery.plugin.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/jquery.countTo.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/masonry.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/modal-box.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/ventcamp.js')}}"></script>
@endsection

