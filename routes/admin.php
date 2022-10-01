<?php

use App\Http\Controllers\Admin\Pages\ComponentPagesController;
use App\Http\Controllers\Admin\Pages\DatatableController;
use App\Http\Controllers\Admin\Pages\IconPagesController;
use App\Http\Controllers\Admin\Pages\NotificationController;
use Illuminate\Support\Facades\Route;

// Dashboard
Route::get('/', 'HomeController@index')->name('home');

// Login
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Register
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Reset Password
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Confirm Password
Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

// Verify Email
// Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
// Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
// Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');


Route::group(['middleware' => 'admin.auth:admin'], function (){
    
    Route::get('/', function () {
        return view('admin.index');
    })->name('index');
    
    /* Start Icon Pages */
    Route::get('feather-icons', [IconPagesController::class, 'featherIcons'])->name('feather-icons');
    Route::get('line-awesome-icons', [IconPagesController::class, 'lineAwesomeIcons'])->name('line-awesome-icons');
    Route::get('meteocons-icons', [IconPagesController::class, 'meteoconsIcons'])->name('meteocons-icons');
    Route::get('simple-line-icons', [IconPagesController::class, 'simpleLineIcons'])->name('simple-line-icons');
    /* End Icon Pages */
    
    
    /* Start Pusher Notifications Pages */
    Route::get('pusher-notification', [NotificationController::class, 'pusher'])->name('pusher-notification');
    
    Route::post('send-notification', [NotificationController::class, 'sendNotification'])->name('send-notification');
    /* End Pusher Notifications Pages */

    /* Start Datatables Pages */
    Route::get('datatables-api', [DatatableController::class, 'datatablesApi'])->name('datatables-api');
    Route::get('datatables-ajax', [DatatableController::class, 'datatablesAJAX'])->name('datatables-ajax');

    Route::get('datatables/users', [DatatableController::class, 'Userdatatable'])->name('datatables.users');
    /* End Datatables Pages */
    

    /* Start Components Pages */
    Route::get('sweet-alerts', [ComponentPagesController::class, 'sweetAlerts'])->name('sweet-alerts');
    Route::get('toastr', [ComponentPagesController::class, 'toastr'])->name('toastr');
    /* End Components Pages */
});