<?php

//Page routes
Route::get('/',
    ['as' => 'home', 'uses' => 'HomeController@index']
)->middleware('profile');

Route::get('/acerca-de',
    [
        'as'   => 'about',
        'uses' => function () {
            return view('about');
        }
    ]
);

Route::get('/disertantes',
    ['as' => 'speakers', 'uses' => 'SpeakerController@index']
);

Route::get('/disertantes/{id}',
    ['as' => 'speaker.show', 'uses' => 'SpeakerController@show']
);

Route::get('/presentaciones',
    [
        'as'   => 'presentations',
        'uses' => function () {
            return view('papers-posters');
        }
    ]
);

Route::get('politicas-y-privacidad',
    [
        'as'   => 'privacy',
        'uses' => function () {
            return view('privacypolicy');
        }
    ]
);

Route::get('/usuario/login',
    ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']
);

Route::post('/usuario/login',
    ['as' => 'login', 'uses' => 'Auth\LoginController@login']
);

Route::post('/usuario/logout',
    ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']
);

Route::post('/usuario/register',
    ['as' => 'register', 'uses' => 'Auth\RegisterController@register']
);

// Password Reset Routes...
Route::post('contraseña/email',
    ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']
);

Route::get('/contraseña/reestablecer',
    ['as' => 'forgot.password', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']
);

Route::post('contraseña/reestablecer',
    ['as' => 'reset.password', 'uses' => 'Auth\ResetPasswordController@reset']
);

Route::get('contraseña/email/{token?}',
    ['as' => 'password.reset', 'uses' => 'Auth\ResetPasswordController@showResetForm']
);

//Auth routes
Route::group(['middleware' => 'auth'], function () {
    Route::get(
        '/usuario/perfil/',
        ['as' => 'profile.update.form', 'uses' => 'UserProfileController@edit']
    );

    Route::get(
        '/usuario/panel/',
        ['as' => 'user.panel', 'uses' => 'UserPanelController@show']
    )->middleware('profile');

    Route::put(
        '/usuario/perfil/{profile}',
        ['as' => 'profile.update', 'uses' => 'UserProfileController@update']
    );

    Route::get('/usuario/mensaje-bienvenida',
        [
            'as'   => 'user.welcome',
            'uses' => function () {
                return view('user.welcome-message');
            }
        ]
    );

    Route::get('contraseña/cambiar',
        ['as' => 'password.change', 'uses' => 'UpdatePasswordController@show']
    );

    Route::post('/contraseña/cambiar',
        ['as' => 'password.change', 'uses' => 'UpdatePasswordController@update']
    );
});

//Socialite routes
Route::get('/redirect/{provider}', 'SocialAuthController@redirect');
Route::get('/callback/{provider}', 'SocialAuthController@callback');

//Home routes
Route::post('/confirmar-asistencia',
    ['as' => 'confirm.assistance', 'uses' => 'ConferenceUsersController@atachOrDetachAssistances']
)->middleware('profile');

//Docs routes
Route::get('/FormatPaper', function () {
    $file_path = storage_path() . '/files/formato_cfp.doc';
    if (file_exists($file_path)) {
        return Response::download($file_path, 'formato_cfp.doc', [
            'Content-Length: ' . filesize($file_path)
        ]);
    }
});

Route::get('/FormatPoster', function () {
    $file_path = storage_path() . '/files/formato.png';
    if (file_exists($file_path)) {
        return Response::download($file_path, 'formato.png', [
            'Content-Length: ' . filesize($file_path)
        ]);
    }
});

//admin panel routes
Route::group(['middleware' => ['admin']], function () {
    Route::get('/administracion',
        ['as' => 'panel.admin', 'uses' => 'Admin\HomePanelController@index']
    );

//admin panel users
    Route::get('/administracion/usuarios',
        ['as' => 'panel.admin.users', 'uses' => 'Admin\UsersPanelController@index']
    );

//admin panel speakers
    Route::get('/administracion/speakers',
        ['as' => 'panel.admin.speakers', 'uses' => 'Admin\SpeakersPanelController@index']
    );

    Route::get('/administracion/speakers/crear',
        ['as' => 'panel.admin.speakers.create_speaker', 'uses' => 'Admin\SpeakersPanelController@createSpeaker']
    );

    Route::post('/administracion/speaker/crear',
        ['as' => 'speakers.create', 'uses' => 'Admin\SpeakersPanelController@create']
    );

    Route::get('/administracion/speaker/editar/{id}',
        ['as' => 'speakers.editSpeaker', 'uses' => 'Admin\SpeakersPanelController@editSpeaker']
    );

    Route::put('/administracion/speaker/editar/{id}',
        ['as' => 'speakers.edit', 'uses' => 'Admin\SpeakersPanelController@edit']
    );

    Route::delete('/administracion/speaker/{id}',
        ['as' => 'speakers.delete', 'uses' => 'Admin\SpeakersPanelController@delete']
    );

//admin panel events
    Route::get('/administracion/eventos',
        ['as' => 'panel.admin.events', 'uses' => 'Admin\EventsPanelController@index']
    );

    Route::get('/administracion/evento/crear',
        ['as' => 'panel.admin.event.create_event', 'uses' => 'Admin\EventsPanelController@createEvent']
    );

    Route::post('/administracion/evento/crear',
        ['as' => 'event.create', 'uses' => 'Admin\EventsPanelController@create']
    );

    Route::get('/administracion/evento/editar/{id}',
        ['as' => 'event.editEvent', 'uses' => 'Admin\EventsPanelController@editEvent']
    );

    Route::put('/administracion/evento/editar/{id}',
        ['as' => 'event.edit', 'uses' => 'Admin\EventsPanelController@edit']
    );

    Route::delete('/administracion/evento/{id}',
        ['as' => 'event.delete', 'uses' => 'Admin\EventsPanelController@delete']
    );


    //admin panel assistants

    Route::get('/administracion/asistentes/cargar',
        ['as' => 'panel.admin.assistants.load_assistants', 'uses' => 'Admin\AssistantController@loadAssistants']
    );

    Route::post('/administracion/asistentes/cargar',
        ['as' => 'assistants.load', 'uses' => 'Admin\AssistantController@load']
    );

    Route::get('/administracion/asistentes/crear',
        ['as' => 'panel.admin.assistants.create', 'uses' => 'Admin\AssistantController@create']
    );

    Route::post('/administracion/asistentes',
        ['as' => 'assistants.store', 'uses' => 'Admin\AssistantController@store']
    );

    Route::delete('/administracion/asistentes/{id}',
        ['as' => 'assistants.delete', 'uses' => 'Admin\AssistantController@delete']
    );

    Route::get(
        '/administracion/asistentes/credenciales',
        ['as' => 'panel.admin.assistants.print-credentials', 'uses' => 'Admin\AssistantController@printCredentials']
    );

    Route::post(
        '/administracion/asistentes/credenciales',
        ['as' => 'panel.admin.assistants.qr_codes', 'uses' => 'Admin\AssistantController@qrCodes']
    );

    Route::get('/administracion/asistentes-por-tipo/{type?}',
        ['as' => 'panel.admin.assistants', 'uses' => 'Admin\AssistantController@index']
    );

    //admin panel assistance

    Route::get('/administracion/asistencias/conferencias',
        ['as' => 'panel.admin.assistances.conferences', 'uses' => 'Admin\AssistancesPanelController@byConference']
    );

    Route::get('/administracion/asistencias/evento/{eventId}',
        ['as' => 'panel.admin.assistances.show', 'uses' => 'Admin\AssistancesPanelController@show']
    );

    Route::delete('/administracion/asistencias/{id}',
        ['as' => 'assistance.delete', 'uses' => 'Admin\AssistancesPanelController@delete']
    );

    //admin panel blocks

    Route::get('/administracion/bloques',
        ['as' => 'panel.admin.blocks', 'uses' => 'Admin\BlocksPanelController@index']);

    Route::get('/administracion/bloques/crear',
        ['as' => 'panel.admin.blocks.create_block', 'uses' => 'Admin\BlocksPanelController@createBlock']);

    Route::post('/administracion/bloques/crear',
        ['as' => 'blocks.create', 'uses' => 'Admin\BlocksPanelController@create']);

    Route::get('/administracion/bloques/agregar-conferencia',
        ['as' => 'panel.admin.blocks.add_conference_view', 'uses' => 'Admin\BlocksPanelController@loadAddconference']);

    Route::post('/administracion/bloques/agregar-conferencia',
        ['as' => 'blocks.add_conference', 'uses' => 'Admin\BlocksPanelController@addConference']);

    Route::get('/administracion/bloques/eliminar-conferencia',
        ['as' => 'panel.admin.blocks.remove_conference_view', 'uses' => 'Admin\BlocksPanelController@loadRemoveConference']);

    Route::post('/administracion/bloques/eliminar-conferencia',
        ['as' => 'blocks.remove_conference', 'uses' => 'Admin\BlocksPanelController@removeConference']);

    Route::get('/administracion/bloques/conferencias',
        ['as' => 'panel.admin.blocks.conferences', 'uses' => 'Admin\BlocksPanelController@blocksAndConferences']);
});
