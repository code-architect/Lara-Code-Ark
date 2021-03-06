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

Route::get('/token', function (){
    $token = auth()->user()->generateConfirmationToken();

    dd($token);
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

/**
 * Account
 */
Route::group(['prefix' => 'account', 'middleware' => ['auth'], 'as' => 'account.'], function (){
    Route::get('/', 'Account\AccountController@index')->name('index');

    /**
     * Profile
     */
    Route::get('/profile', 'Account\ProfileController@index')->name('profile.index');
    Route::post('/profile', 'Account\ProfileController@store')->name('profile.store');

    /**
     * Password
     */
    Route::get('/password', 'Account\PasswordController@index')->name('password.index');
    Route::post('/password', 'Account\PasswordController@store')->name('password.store');
});

/**
 * Account Activation
 */
Route::group(['prefix' => 'activation', 'as' => 'activation.', 'middleware' => ['guest']], function (){

    /**
     * activate user through confirmation mail
     */
    Route::get('/resend', 'Auth\ActivationResendController@index')->name('resend');
    Route::post('/resend', 'Auth\ActivationResendController@store')->name('resend.store');
    Route::get('/{confirmation_token}', 'Auth\ActivationController@activate')->name('activate');

});

/**
 * Plans
 */
Route::group(['prefix' => 'plans', 'as' => 'plans.'], function (){

    Route::get('/', 'Subscription\PlanController@index')->name('index');
    Route::get('/groups', 'Subscription\PlanGroupController@index')->name('groups.index');
});

/**
 * Subscription
 */
Route::group(['prefix' => 'subscription', 'as' => 'subscription.', 'middleware' => ['auth.register']], function (){

    Route::get('/', 'Subscription\SubscriptionController@index')->name('index');
    Route::post('/', 'Subscription\SubscriptionController@store')->name('store');
});