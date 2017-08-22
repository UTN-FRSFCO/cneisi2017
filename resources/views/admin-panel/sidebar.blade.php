<nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('panel.admin') }}">Inicio<i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-home"></i></a></li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Asistencias<i style="margin-left:5px;" class="fa fa-chevron-down"></i><span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-check"></span></a>
                    <ul class="dropdown-menu forAnimate" style="margin:20px;">
                        <li><a href="{{ route('panel.admin.assistance') }}">Principal</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ route('assistance.conference') }}">Por conferencias</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ route('assistants.loadAssistants') }}">Por bloque</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ route('assistants.loadAssistants') }}">Por alumno</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Speakers<i style="margin-left:5px;" class="fa fa-chevron-down"></i><span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-lightbulb-o"></span></a>
                    <ul class="dropdown-menu forAnimate" style="margin:20px;">
                        <li><a href="{{ route('panel.admin.speakers') }}">Ver todos</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ route('speakers.createSpeaker') }}">Crear</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Eventos<i style="margin-left:5px;" class="fa fa-chevron-down"></i><span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-list"></span></a>
                    <ul class="dropdown-menu forAnimate" style="margin:20px;">
                        <li><a href="{{ route('panel.admin.events') }}">Ver todos</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ route('event.createEvent') }}">Crear</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Asistentes<i style="margin-left:5px;" class="fa fa-chevron-down"></i><span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-group"></span></a>
                    <ul class="dropdown-menu forAnimate" style="margin:20px;">
                        <li><a href="{{ route('panel.admin.assistants') }}">Ver todos</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ route('assistants.loadAssistants') }}">Cargar</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios<i style="margin-left:5px;" class="fa fa-chevron-down"></i><i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-user"></i></a>
                    <ul class="dropdown-menu forAnimate" style="margin:20px;">
                        <li><a href="{{ route('panel.admin.users') }}">Ver todos</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>