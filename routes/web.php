<?php

Route::get('/',
['as' => 'home', 'uses' => 'HomeController@index'])->middleware('profile');

Route::get('/home', function () {
    return view('home');
})->middleware('profile');

Route::get('/user/login',
    ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);

Route::post('/user/login', 'Auth\LoginController@login');

Route::post('/user/logout',
    ['as' => 'logout', 'uses' => 'Auth\LoginController@logout'
]);

Route::post('/user/register',
    ['as' => 'register', 'uses' => 'Auth\RegisterController@register']
);

// Password Reset Routes...
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');

Route::get('/password/reset',
    ['as' => 'forgot.password', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);

Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('password/email/{token?}',
    ['as' => 'password.reset', 'uses' => 'Auth\ResetPasswordController@showResetForm']
);

//Auth routes
Route::group(['middleware' => 'auth'], function () {

    Route::get(
        '/user/profile/',
        ['as' => 'profile.update', 'uses' => 'UserProfileController@edit']
    );

    Route::get(
        '/user/panel/',
        ['as' => 'user.panel', 'uses' => 'UserPanelController@show']
    );

    Route::put(
        '/user/profile/{profile}',
        ['as' => 'profile.update', 'uses' => 'UserProfileController@update']
    );

    Route::get(
        '/user/welcome-message', function () {
        return view('user.welcome-message');
    });

});

//Socialite routes
Route::get('/redirect/{provider}', 'SocialAuthController@redirect');
Route::get('/callback/{provider}', 'SocialAuthController@callback');

//Home routes
Route::post('/confirm-assistance', 'ConferenceUsersController@atachOrDetachAssistances');

//Docs routes
Route::get('/FormatPaper', function () {
    $file_path = storage_path() .'/files/formato_cfp.doc';
    if (file_exists($file_path))
    {
        return Response::download($file_path, 'formato_cfp.doc', [
            'Content-Length: '. filesize($file_path)
        ]);
    }
});

Route::get('/FormatPoster', function () {
    $file_path = storage_path() .'/files/formato.png';
    if (file_exists($file_path))
    {
        return Response::download($file_path, 'formato.png', [
            'Content-Length: '. filesize($file_path)
        ]);
    }
});


