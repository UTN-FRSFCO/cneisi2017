<div id = "register-user" class="modal-window" data-modal="user-register" style="background-color: rgba(2, 2, 2, 0.85);">
    <div class="modal-box small animated" data-animation="zoomIn" data-duration="700">
        <span class="close-btn icon icon-office-52"></span>

        <h5 class="align-center"><span class="highlight">Registro</span></h5>

        <form class="registration-form align-center" role="form" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <fieldset class="col-sm-12">
                <label for="name">Nombre</label>
                <input id="name" name="name" type="text" class="form-control" value="{{ old('name') }}" required autofocus>
            </fieldset>

            <fieldset class="col-sm-12">
                <label for="lastname">Apellido</label>
                <input id="lastname" name="lastname" class="form-control" type="text" value="{{ old('lastname') }}" required>
            </fieldset>

            <fieldset class="col-sm-12">
                <label for="email">Email</label>
                <input id="email" name="email" class="form-control" type="email" value="{{ old('email') }}" required>
            </fieldset>

            <fieldset class="col-sm-12">
                <label for="password">Contraseña</label>
                <input id="password" name="password" class="form-control" type="password" required>
            </fieldset>

            <fieldset class="col-sm-12">
                <label for="password-confirm" class="control-label">Confirmar Contraseña</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </fieldset>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Registrarse
                </button>
            </div>
        </form>

    </div>
</div>