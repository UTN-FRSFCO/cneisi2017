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
                        <li class="navigation-item"><a href="#papers" class="navigation-link">Papers & posters</a></li>
                        <li class="navigation-item"><a href="#gallery" class="navigation-link">Galería</a></li>
                        <li class="navigation-item"><a href="#sponsors" class="navigation-link">Sponsors</a></li>
                        <li class="navigation-item"><a href="#contacts" class="navigation-link">Contacto</a></li>
                        @if(Auth::guest())
                    </ul>
                            <a href="" class="pull-right buy-btn" data-modal-link="user-login">Ingresar</a>
                        @else
                        <li class="navigation-item">
                            <ul class="navigation-list ">
                                <li class="dropdown">
                                        <a href="#" class="navigation-link dropdown-toggle" data-toggle="dropdown">
                                            <span class="fa fa-user"></span>
                                            {{ Auth::User()->getName() }} {{ Auth::User()->getLastname() }}
                                            <span class="fa fa-angle-double-down"></span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-center" style="min-width: 200px">
                                            <li>
                                                <div class="navbar-login">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <p class="text-center"><span class="fa fa-user fa-4x"></span></p>
                                                            <p class="text-center"><h3 class="username">{{ Auth::User()->getName() }} <br>{{ Auth::User()->getLastname() }}</h3></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="divider navbar-login-session-bg"></li>
                                            <li><a href="/user/panel" class="navigation-link">Mi cuenta</a></li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="{{ route('logout') }}" class="navigation-link"
                                                   onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">Salir
                                                </a>
                                            </li>
                                            <form id="logout-form" action="/user/logout" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </ul>

                                </li>
                            </ul>
                        </li>
                    </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>