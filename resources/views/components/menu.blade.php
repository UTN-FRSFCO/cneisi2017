<header class="header header-black">
    <div class="header-wrapper">
        <div class="container">
            <div class="col-sm-2 col-xs-12 navigation-header">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{asset('/img/isologo.png')}}" alt="Cneisi" class="retina-hide">
                    <img src="{{asset('/img/isologo.png')}}" alt="Cneisi" class="retina-show">
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
                        <li class="navigation-item"><a href="{{ route('home') }}" class="navigation-link">Inicio</a></li>
                        <li class="navigation-item"><a href="{{ route('speakers') }}" class="navigation-link">Disertantes</a></li>
                        <li class="navigation-item"><a href="{{ route('home') }}/#calendario" class="navigation-link">Calendario</a></li>
                        <li class="navigation-item"><a href="{{ route('presentations') }}" class="navigation-link">Papers & posters</a></li>
                        <li class="navigation-item"><a href="{{ route('about') }}" class="navigation-link">Acerca de</a></li>
                        <li class="navigation-item"><a href="{{ route('home') }}/#contacto" class="navigation-link">Contacto</a></li>
                    </ul>
                    <ul class="navigation-list pull-right light-text">
                        @if(!Auth::guest())
                            <li class="dropdown">
                                <a href="#" class="navigation-link dropdown-toggle usermenu" data-toggle="dropdown">
                                    <span class="fa fa-user"></span>
                                    {{ Auth::User()->getName() }} {{ Auth::User()->getLastname() }}
                                    <span class="fa fa-angle-double-down hidden-xs"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right" style="min-width: 200px">
                                    <li class="hidden-xs">
                                        <div class="navbar-login">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <p class="text-center"><span class="fa fa-user fa-4x"></span></p>
                                                    <p class="text-center"><h3 class="username">{{ Auth::User()->getName() }} <br>{{ Auth::User()->getLastname() }}</h3></p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="divider navbar-login-session-bg hidden-xs"></li>
                                    <li><a href="{{ route('user.panel') }}" class="navigation-link">Mi cuenta</a></li>
                                    <li class="divider"></li>
                                    @if(Auth::User()->isAdmin())
                                        <li><a href="{{ route('panel.admin') }}" class="navigation-link">Admin panel</a></li>
                                        <li class="divider"></li>
                                    @endif
                                    <li>
                                        <a href="{{ route('logout') }}" class="navigation-link"
                                           onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">Salir
                                        </a>
                                    </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </ul>
                            </li>
                        @else
                            <a href="{{ route('login') }}" class="pull-right buy-btn">Ingresar</a>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>


