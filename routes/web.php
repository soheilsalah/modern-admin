<?php

use App\Http\Controllers\Pages\IconPagesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'auth'], function (){

    Route::get('/', function () {
        return view('user.index');
    })->name('index');
    
    
    /* Start Icon Pages */
    Route::get('feather-icons', [IconPagesController::class, 'featherIcons'])->name('feather-icons');
    Route::get('line-awesome-icons', [IconPagesController::class, 'lineAwesomeIcons'])->name('line-awesome-icons');
    Route::get('meteocons-icons', [IconPagesController::class, 'meteoconsIcons'])->name('meteocons-icons');
    Route::get('simple-line-icons', [IconPagesController::class, 'simpleLineIcons'])->name('simple-line-icons');
    /* End Icon Pages */
    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
