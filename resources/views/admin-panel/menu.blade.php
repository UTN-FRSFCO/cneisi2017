<header class="header header-black">
    <div class="header-wrapper">
        <div class="container">
            <div class="col-sm-2 col-xs-12 navigation-header">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{asset('/img/isologo-final.png')}}" alt="Cneisi" class="retina-hide" width="133" height="51.52">
                    <img src="{{asset('/img/isologo-final.png')}}" alt="Cneisi" class="retina-show" width="133" height="51.52">
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
                        <li class="navigation-item"><a href="{{ route('panel.admin.assistances.type', ['block' => 1]) }}" class="navigation-link">Asistencia Regional/Bloque </a></li>
                        <li class="navigation-item"><a href="{{ route('panel.admin.assistances.conferences') }}" class="navigation-link">Totales en Conferencias</a></li>
                        <li class="navigation-item"><a href="{{ route('panel.admin.assistances.blocks', ['block' => 1]) }}/#calendario" class="navigation-link">Por bloque</a></li>
                        <li class="navigation-item"><a href="{{ route('panel.admin.assistances.assistants') }}" class="navigation-link">Por asistente</a></li>
                        <li class="navigation-item"><a href="{{ route('panel.admin.assistances.show', ['eventId' => 1]) }}" class="navigation-link">Por conferencia</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>


