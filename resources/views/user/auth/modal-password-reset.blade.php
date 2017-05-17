<div class="modal-window" data-modal="password-reset" style="background-color: rgba(2, 2, 2, 0.85);">
    <div class="modal-box small animated" data-animation="zoomIn" data-duration="700">
        <span class="close-btn icon icon-office-52"></span>

        <h5 class="align-center"><span class="highlight">Recuperar contraseña</span></h5>

        <form id="passwordResetForm" class="align-center" role="form" method="POST" action="{{ url('/password/email') }}">
            {{ csrf_field() }}

            <fieldset class="col-sm-12 fieldset-reset">
                <div class="form-group" id="form-group-reset-password-email")>

                    <label for="email" class="label-reset">Email</label>
                    <input id="email" name="email" class="form-control email-reset" type="email" value="{{ old('email') }}" required autofocus>
                    <span class="help-block"></span>

                </div>
            </fieldset>

            <div class="form-group">

                <button type="submit" class="btn btn-primary button-reset">
                    Enviar link a mi correo
                </button>

            </div>
        </form>

    </div>
</div>