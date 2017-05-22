<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',
['as' => 'home', 'uses' => function () {
    return view('home');
}])->middleware('profile');

Route::get('/home', function () {
    return view('home');
});

Route::post('/user/login', 'Auth\LoginController@login');

Route::post('/user/logout',
    ['as' => 'logout', 'uses' => 'Auth\LoginController@logout'
]);

Route::post('/user/register',
    ['as' => 'register', 'uses' => 'Auth\RegisterController@register']
);

// Password Reset Routes...
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');

$this->get('password/email/{token?}',
    ['as' => 'password.reset', 'uses' => 'Auth\ResetPasswordController@showResetForm']);

$this->post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get(
    '/user/profile',
    ['as' => 'profile.update', 'uses' => 'UserProfileController@edit']
);

Route::put(
    '/user/profile/{profile}',
    ['as' => 'profile.update', 'uses' => 'UserProfileController@update']
);

//Socialite routes
Route::get('/redirect/{provider}', 'SocialAuthController@redirect');
Route::get('/callback/{provider}', 'SocialAuthController@callback');