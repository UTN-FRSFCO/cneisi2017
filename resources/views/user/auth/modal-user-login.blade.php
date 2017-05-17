<div class="modal-window" data-modal="user-login" style="background-color: rgba(2, 2, 2, 0.85);">
    <div class="modal-box small animated" data-animation="zoomIn" data-duration="700">
        <span class="close-btn icon icon-office-52"></span>

        <h5 class="align-center"><span class="highlight">Ingresar</span></h5>

        <form id="loginForm" class="align-center" role="form" method="POST" action="/user/login">
            {{ csrf_field() }}

            <fieldset class="col-sm-12">
                <div class="form-group" id="form-group-login-email")>

                    <label for="email">Email</label>
                    <input id="email" name="email" class="form-control" type="email" value="{{ old('email') }}" required autofocus>
                    <span class="help-block"></span>

                </div>
            </fieldset>

            <fieldset class="col-sm-12">
                <div class="form-group" id="form-group-login-password")>

                    <label for="password">Contraseña</label>
                    <input id="password" name="password" class="form-control" type="password" required>
                    <span class="help-block"></span>

                </div>
            </fieldset>

            <fieldset class="col-sm-12" style="margin: 10px;">

                <input checked="checked" name="remember" type="checkbox" id="remember"> <label>Recordarme</label>

            </fieldset>

            <fieldset class="col-sm-12" style="margin: 10px;">

                <a href="#" id="forgot-password" class="forgot-password-link" data-modal-link="password-reset">Olvide mi contraseña</a>

            </fieldset>

            <div class="form-group">

                <button type="submit" class="btn btn-primary">
                    Ingresar
                </button>

            </div>
        </form>

    </div>
</div>