<div id = "register-user" class="modal-window" data-modal="user-register" style="background-color: rgba(2, 2, 2, 0.85);">
    <div class="modal-box small animated" data-animation="zoomIn" data-duration="700">
        <span class="close-btn icon icon-office-52"></span>

        <h5 class="align-center"><span class="highlight">{{ trans('strings.register_title') }}</span></h5>

        <form id="registerForm" class="registration-form align-center" role="form" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <fieldset class="col-sm-12">
                <div class="form-group" id="form-group-register-name")>

                    <label for="name">{{ trans('strings.name') }}</label>
                    <input id="name" name="name" type="text" class="form-control" value="" required autofocus>
                    <span class="help-block"></span>

                </div>
            </fieldset>

            <fieldset class="col-sm-12">
                <div class="form-group" id="form-group-register-lastname">

                    <label for="lastname">{{ trans('strings.lastname') }}</label>
                    <input id="lastname" name="lastname" class="form-control" type="text" value="" required>
                    <span class="help-block"></span>

                </div>
            </fieldset>

            <fieldset class="col-sm-12">
                <div class="form-group" id="form-group-register-email">

                    <label for="email">{{ trans('strings.email') }}</label>
                    <input id="email" name="email" class="form-control" type="email" value="" required>
                    <span class="help-block"></span>

                </div>
            </fieldset>

            <fieldset class="col-sm-12">
                <div class="form-group" id="form-group-register-password">

                    <label for="password">{{ trans('strings.password') }}</label>
                    <input id="password" name="password" class="form-control" type="password" required>
                    <span class="help-block"></span>

                </div>
            </fieldset>

            <fieldset class="col-sm-12">
                <div class="form-group" id="form-group-register-password-confirmation">

                    <label for="password-confirm" class="control-label">{{ trans('strings.confirm_password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    <span class="help-block"></span>

                </div>
            </fieldset>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    {{ trans('strings.register_button') }}
                </button>
            </div>
        </form>

    </div>
</div>