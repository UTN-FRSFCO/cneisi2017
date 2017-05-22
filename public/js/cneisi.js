function submitModalForm(form, action){

    var $input = $(form).find('input[type="submit"]'),
        $button = $(form).find('button[type="submit"]');

    if ($button.length) {
        $button.append('<span class="loading fa fa-refresh"></span>');

    } else if ($input) {
        $input.after('<span class="loading fa fa-refresh"></span>');
    }

    $.ajax({
        url: form.action,
        type: 'POST',
        data: $(form).serialize()
    }).done(function (data, status) {
        $(form).find('.loading').remove();

        if(action === 'passwordReset') {
            $(form).find('.email-reset').remove();
            $(form).find('.label-reset').text('Se ha enviado un correo a su cuenta de email. Revise su casilla de correo para establecer su nueva contraseña');
            $(form).find('.label-reset').css('text-align','center');
            $(form).find('.label-reset').css('margin-top','10px');
            $(form).find('.button-reset').remove();
        } else {
            window.location.reload();
        }


    }).fail(function (data) {
        $(form).find('.loading').remove();

        var errors = data.responseJSON;

        $.each(errors, function(index, value) {
            showValidationErrors(index, value, action);
        });
    });
}

function showValidationErrors(name, error, action) {
    var group;
    switch(action) {
        case 'register':
            group = $("#form-group-register-" + name);
            break;
        case 'login':
            group = $("#form-group-login-" + name);
            break;
        case 'passwordReset':
            group = $("#form-group-reset-password-" + name);
            break;
        default:
            group = $("#form-group-" + name);
    }
    group.addClass('has-error');
    group.find('.help-block').text(error);

}

function clearValidationError(name) {
    var registerGroup = $("#form-group-register-" + name);
    var loginGroup = $("#form-group-login-" + name);
    var passwordResetGroup = $('#form-group-reset-password-' + name);

    registerGroup.removeClass('has-error');
    registerGroup.find('.help-block').text('');
    loginGroup.removeClass('has-error');
    loginGroup.find('.help-block').text('');
    passwordResetGroup.removeClass('has-error');
    passwordResetGroup.find('.help-block').text('');

}

$("#name, #lastname, #email, #password").on('keyup', function () {
    clearValidationError($(this).attr('id').replace('#', ''))
});


$('#registerForm').submit(function(e) {
    var form = this;
    console.log(form);
    e.preventDefault();
    submitModalForm(form, 'register');
});

$('#loginForm').submit(function(e) {
    var form = this;
    e.preventDefault();
    submitModalForm(form, 'login');
});

$('#passwordResetForm').submit(function(e) {
    var form = this;
    e.preventDefault();
    submitModalForm(form, 'passwordReset');
});

// Remove the ugly Facebook appended hash
// <https://github.com/jaredhanson/passport-facebook/issues/12>
(function removeFacebookAppendedHash() {
    if (!window.location.hash || window.location.hash !== '#_=_')
        return;
    if (window.history && window.history.replaceState)
        return window.history.replaceState('', document.title, window.location.pathname + window.location.search);
    // Prevent scrolling by storing the page's current scroll offset
    var scroll = {
        top: document.body.scrollTop,
        left: document.body.scrollLeft
    };
    window.location.hash = "";
    // Restore the scroll offset, should be flicker free
    document.body.scrollTop = scroll.top;
    document.body.scrollLeft = scroll.left;
}());