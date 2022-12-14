<?php

use App\Http\Controllers\Pages\IconPagesController;
use App\Http\Controllers\Website\AppController;
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

Route::get('/', [AppController::class, 'index'])->name('index');
Route::get('/about', [AppController::class, 'about'])->name('about');
Route::get('/contact', [AppController::class, 'contact'])->name('contact');
Route::get('/policy', [AppController::class, 'policy'])->name('policy');
Route::get('/faqs', [AppController::class, 'faqs'])->name('faqs');
Route::get('/terms-and-conditions', [AppController::class, 'terms'])->name('terms-and-conditions');

Route::group(['middleware' => 'auth'], function (){
    
    /* Start Icon Pages */
    Route::get('feather-icons', [IconPagesController::class, 'featherIcons'])->name('feather-icons');
    Route::get('line-awesome-icons', [IconPagesController::class, 'lineAwesomeIcons'])->name('line-awesome-icons');
    Route::get('meteocons-icons', [IconPagesController::class, 'meteoconsIcons'])->name('meteocons-icons');
    Route::get('simple-line-icons', [IconPagesController::class, 'simpleLineIcons'])->name('simple-line-icons');
    /* End Icon Pages */
    
});

Auth::routes([
    'login' => false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
