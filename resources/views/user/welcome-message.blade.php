@extends('layouts.master')
@include('components.menu')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default" style="margin-bottom: 150px;">
                    <div class="panel-body">
                        <div class="col-md-12 align-center" style="margin-bottom: 30px;">
                            <a href="#" class="logo">
                                <img src="{{asset('/img/logo-utn.png')}}" alt="Cneisi" width="179" height="179" class="retina-hide">
                            </a>
                            <p class="text-center"><h4 class="highlight">
                                Muchas gracias por registrarte al congreso!</br></br>
                            </h4></p>
                            <p class="text-center"><h3 class="username">
                                Estamos definiendo el cronograma de eventos
                                para que poder darlo a conocer a todos los participantes. </br></br>Te avisaremos cuando haya novedades!
                            </h3></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>

    window.setTimeout(function(){

        window.location.href = "/usuario/perfil";

    }, 8000);

</script>