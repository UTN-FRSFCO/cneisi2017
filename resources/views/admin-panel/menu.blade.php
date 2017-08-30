<header class="header header-black">
    <div class="header-wrapper">
        <div class="container">


            <div class="col-sm-12 col-xs-12 navigation-container">
                <div id="navigation" class="navbar-collapse collapse">
                    <ul class="navigation-list pull-left light-text">
                        <li class="navigation-item"><a href="{{ route('panel.admin.assistances.totalsByType', ['block' => 1]) }}" class="navigation-link">Total Regionales/Bloques </a></li>
                        <li class="navigation-item"><a href="{{ route('panel.admin.assistances.type', ['block' => 1]) }}" class="navigation-link">Regional/Bloque </a></li>
                        <li class="navigation-item"><a href="{{ route('panel.admin.assistances.conferences') }}" class="navigation-link">Totales en Conferencias</a></li>
                        <li class="navigation-item"><a href="{{ route('panel.admin.assistances.blocks', ['block' => 1]) }}" class="navigation-link">Por bloque</a></li>
                        <li class="navigation-item"><a href="{{ route('panel.admin.assistances.assistants') }}" class="navigation-link">Por asistente</a></li>
                        <li class="navigation-item"><a href="{{ route('panel.admin.assistances.show', ['eventId' => 1]) }}" class="navigation-link">Por conferencia</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>


