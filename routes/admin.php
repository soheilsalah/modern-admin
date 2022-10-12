<?php

use App\Http\Controllers\Admin\Pages\ComponentPagesController;
use App\Http\Controllers\Admin\Pages\DatatableController;
use App\Http\Controllers\Admin\Pages\FormbuilderController;
use App\Http\Controllers\Admin\Pages\FormsController;
use App\Http\Controllers\Admin\Pages\IconPagesController;
use App\Http\Controllers\Admin\Pages\InputController;
use App\Http\Controllers\Admin\Pages\NotificationController;
use App\Http\Controllers\Admin\Pages\UserController;
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


    /************************************************** START MY PROJECTS  **************************************************/
    
    /* Start User CRUD Pages */
    Route::get('my-projects/users', [UserController::class, 'index'])->name('users');
    Route::get('my-projects/user/show/{slug}', [UserController::class, 'show'])->name('user.show');
    Route::get('my-projects/user/create', [UserController::class, 'create'])->name('user.create');

    // ajax call to get all users
    Route::get('datatables/users', [UserController::class, 'usersDatatable'])->name('datatables.users');
    // ajax call to create new user
    Route::post('ajax/user/create', [UserController::class, 'ajaxCreateUser'])->name('ajax.user.create');
    // ajax call to update user info
    Route::post('ajax/user/update-user-info', [UserController::class, 'ajaxUpdateUserInfo'])->name('ajax.user.update-user-info');
    // ajax call to update user password
    Route::post('ajax/user/update-user-password', [UserController::class, 'ajaxUpdateUserPassword'])->name('ajax.user.update-user-password');
    // ajax call to delete user
    Route::post('ajax/user/delete', [UserController::class, 'ajaxDeleteUser'])->name('ajax.user.delete');
    // ajax call to restote user
    Route::post('ajax/user/restore', [UserController::class, 'ajaxRestoreUser'])->name('ajax.user.restore');
    // ajax call to force delete user
    Route::post('ajax/user/force-delete', [UserController::class, 'ajaxForceDeleteUser'])->name('ajax.user.force-delete');
    /* End User CRUD Pages */



    /* Start Form Builder Pages */
    Route::get('my-projects/forms', [FormbuilderController::class, 'index'])->name('forms');
    Route::get('my-projects/form-builder', [FormBuilderController::class, 'create'])->name('form-builder');
    /* Start Form Builder Pages */

    /************************************************** End MY PROJECTS    **************************************************/
    


    

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
    Route::get('datatables', [DatatableController::class, 'index'])->name('datatables');
    Route::get('datatables-api', [DatatableController::class, 'datatablesApi'])->name('datatables-api');
    Route::get('datatables-ajax', [DatatableController::class, 'datatablesAJAX'])->name('datatables-ajax');

    Route::get('datatables/data', [DatatableController::class, 'Userdatatable'])->name('datatables.data');
    /* End Datatables Pages */


    /* Start Form Pages */
    Route::get('forms/basic-layouts', [FormsController::class, 'basicLayouts'])->name('forms.basic-layouts');
    Route::get('forms/bordered-layouts', [FormsController::class, 'borderedLayouts'])->name('forms.bordered-layouts');
    Route::get('forms/wizard', [FormsController::class, 'wizard'])->name('forms.wizard');
    /* End Form Pages */


    /* Start Form Pages */
    Route::get('inputs/radio-and-checkboxes', [InputController::class, 'radioAndChecboxes'])->name('inputs.radio-and-checkboxes');
    Route::get('inputs/switch', [InputController::class, 'switch'])->name('inputs.switch');
    Route::get('inputs/select2', [InputController::class, 'select2'])->name('inputs.select2');
    Route::get('inputs/tags', [InputController::class, 'tags'])->name('inputs.tags');
    /* End Form Pages */
    

    /* Start Components Pages */
    Route::get('sweet-alerts', [ComponentPagesController::class, 'sweetAlerts'])->name('sweet-alerts');
    Route::get('toastr', [ComponentPagesController::class, 'toastr'])->name('toastr');
    /* End Components Pages */
});