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
                @if(Auth::guest())
                    <a href="#" class="btn btn-md" data-modal-link="user-login">Ingresar</a>
                    <a href="#" class="btn btn-md" data-modal-link="user-register">Registrarse</a>
                @else
                    <h4 class="thin base-font">{{ Auth::User()->getName() }}<a href="/user/logout"
                                                                               onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            Salir.
                        </a></h4>
                    <form id="logout-form" action="/user/logout" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @endif

            </div>
        </div>
    </div>
</section>