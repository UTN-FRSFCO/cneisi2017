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
        } else if(action === 'register') {
            window.location.href = "/usuario/mensaje-bienvenida";
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

var popupSize = {
    width: 380,
    height: 430
};

$(document).on('click', '.social-buttons > a', function(e){

    var
        verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
        horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);

    var popup = window.open($(this).prop('href'), 'social',
        'width='+popupSize.width+',height='+popupSize.height+
        ',left='+verticalPos+',top='+horisontalPos+
        ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

    if (popup) {
        popup.focus();
        e.preventDefault();
    }

});

//MOSTRAR NOMBRE PAPER CARGADO
$(document).on('change', ':file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);

    document.getElementById('file-name').innerHTML = label;
});

// ===== Scroll to Top ====
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});

$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});

// ===== VIDEOS SPEAKERS =====
$(".vid-speaker").click(function() {
    var speaker = $(this).parent().attr('class');
    loadFrameVideoSpeaker(speaker);
});

$("#close-video").click(function() {
    $('#modal-speaker-video').modal('hide');
});

function loadFrameVideoSpeaker(speaker) {
    var youtube = 'https://www.youtube.com/embed/';
    var link = document.getElementById('video-speaker-link-'.concat(speaker)).value;
    var autoplay = '?autoplay=1';
    var videoLink = youtube.concat(link).concat(autoplay);

    document.getElementById('video-speaker-iframe').src = videoLink;
    $('#modal-speaker-video').modal('show');
}

//Treating hashbang links
if(window.location.hash) {

    var eventId = window.location.hash;

    if(eventId.includes('auditorium')) {
        //getting the number of day and auditorium
        var day = eventId.slice(-13,-12);
        var auditorium = eventId.slice(-1);

        switch(parseInt(day)) {
            case 1:
                $('a[href="#day1"]').click();
                break;
            case 2:
                $('a[href="#day2"]').click();
                break;
            case 3:
                $('a[href="#day3"]').click();
                break;
            default:
                break;
        }

        $('a[href="'+'#'.concat(eventId.slice(-16))+'"]').click();

        $('a[href="'+eventId+'"]').click();
        setTimeout(function(){
            window.scrollBy(0, -90);
        }, 2000);
    }
}

//asistencia a eventos
$('#assistanceForm').submit(function(e) {
    var form = this;
    e.preventDefault();

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
        data: $(form).serialize(),
    }).done(function (data) {
        $(form).find('.loading').remove();

        var text = document.getElementById('assistanceBtn-'.concat(data)).firstChild;
        text.data = text.data === "Asistiré" ? "No asistiré" : "Asistiré";

            if(text.data === "Asistiré"){
                $(".assistanceBtn span").removeClass('fa-thumbs-o-down');
                $(".assistanceBtn span").addClass('fa-thumbs-o-up');
            } else {
                $(".assistanceBtn span").removeClass('fa-thumbs-o-up');
                $(".assistanceBtn span").addClass('fa-thumbs-o-down');
            }


    }).fail(function (data) {
        $(form).find('.loading').remove();

        var errors = data.responseJSON;

    });
});