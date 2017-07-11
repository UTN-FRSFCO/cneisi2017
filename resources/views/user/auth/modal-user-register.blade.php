<div id = "register-user" class="modal-window" data-modal="user-register" style="background-color: rgba(2, 2, 2, 0.85);">
    <div class="modal-box small animated" data-animation="zoomIn" data-duration="700">
        <span class="close-btn icon icon-office-52"></span>

        <h5 class="align-center"><span class="highlight">{{ trans('strings.register_title') }}</span></h5>

        <form id="registerForm" class="registration-form align-center" role="form" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <fieldset class="col-sm-12">
                <div class="form-group" id="form-group-register-name")>

                    <label for="name">{{ trans('strings.name') }}</label>
                    <input id="name" name="name" type="text" class="form-control" value="" required>
                    <span class="help-block" style="color: orangered"></span>

                </div>
            </fieldset>

            <fieldset class="col-sm-12">
                <div class="form-group" id="form-group-register-lastname">

                    <label for="lastname">{{ trans('strings.lastname') }}</label>
                    <input id="lastname" name="lastname" class="form-control" type="text" value="" required>
                    <span class="help-block" style="color: orangered"></span>

                </div>
            </fieldset>

            <fieldset class="col-sm-12">
                <div class="form-group" id="form-group-register-email">

                    <label for="email">{{ trans('strings.email') }}</label>
                    <input id="email" name="email" class="form-control" type="email" value="" required>
                    <span class="help-block" style="color: orangered"></span>

                </div>
            </fieldset>

            <fieldset class="col-sm-12">
                <div class="form-group" id="form-group-register-password">

                    <label for="password">{{ trans('strings.password') }}</label>
                    <input id="password" name="password" class="form-control" type="password" required><span class="fa fa-check-official fa-4x"></span>
                    <span class="help-block" style="color: orangered"></span>

                </div>
            </fieldset>

            <fieldset class="col-sm-12">
                <div class="form-group" id="form-group-register-password-confirmation">

                    <label for="password-confirm" class="control-label">{{ trans('strings.confirm_password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    <span class="help-block" style="color: orangered"></span>

                </div>
            </fieldset>

            <div class="form-group">
                <button type="submit" class="btn btn-primary" style="display: inline-block !important;">
                    {{ trans('strings.register_button') }}
                </button>
            </div>

        </form>

        <fieldset class="col-sm-12" style="text-align:center; margin: 10px;">

            <h6><span class="highlight">{{ trans('strings.login-with') }}</span></h6>
            <a href="redirect/facebook" style="margin-left:5px; margin-right: 5px;"><span class="fa fa-facebook-official fa-2x"></span></a>
            <a href="redirect/twitter" style="margin-left:5px; margin-right: 5px;"><span class="fa fa-twitter fa-2x"></span></a>
        </fieldset>

    </div>
</div>