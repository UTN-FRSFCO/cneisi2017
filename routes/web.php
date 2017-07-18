<?php

Route::get('/',
    ['as' => 'home', 'uses' => 'HomeController@index']
)->middleware('profile');

Route::get('/acerca-de',
    ['as' => 'about', 'uses' => function () {
            return view('about');
        }
    ]
);

Route::get('/presentaciones',
    ['as' => 'presentations', 'uses' => function () {
            return view('papers-posters');
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
        ['as' => 'user.welcome', 'uses' => function () {
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
    $file_path = storage_path() .'/files/formato_cfp.doc';
    if (file_exists($file_path)) {
        return Response::download($file_path, 'formato_cfp.doc', [
            'Content-Length: '. filesize($file_path)
        ]);
    }
});

Route::get('/FormatPoster', function () {
    $file_path = storage_path() .'/files/formato.png';
    if (file_exists($file_path)) {
        return Response::download($file_path, 'formato.png', [
            'Content-Length: '. filesize($file_path)
        ]);
    }
});

Route::get('politicas-y-privacidad',
    ['as' => 'privacy', 'uses' => function () {
        return view('privacypolicy');
    }
    ]
);

//admin panel routes
Route::get('/administracion/principal',
    ['as' => 'panel.admin', 'uses' => 'Admin\HomePanelController@index']
);