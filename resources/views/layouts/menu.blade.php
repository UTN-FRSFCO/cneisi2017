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
                        <li class="navigation-item"><a href="{{ route('home') }}" class="navigation-link">Inicio</a></li>
                        <li class="navigation-item"><a href="" class="navigation-link"></a></li>
                        <li class="navigation-item"><a href="" class="navigation-link"></a></li>
                        <li class="navigation-item"><a href="" class="navigation-link"></a></li>
                        <li class="navigation-item"><a href="" class="navigation-link"></a></li>
                    </ul>
                    <ul class="navigation-list pull-right light-text">
                        @if(Auth::guest())
                            <a href="" class="pull-right" data-modal-link="user-login">Ingresar</a>
                            <a href="" class="pull-right" data-modal-link="user-register">Registrarse</a>
                        @else
                            <h4 class="navigation-item thin base-font">{{ Auth::User()->getName() }}<a href="/user/logout"
                                                                                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    Salir.
                                </a></h4>
                            <form id="logout-form" action="/user/logout" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>