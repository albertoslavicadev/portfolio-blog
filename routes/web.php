<?php

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
    return view('dashboard');
});

Route::middleware([
    \App\Http\Middleware\AdminAccess::class, 'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/register', function () {
        return view('register');
    })->name('register');
});

Route::get('/policy', function() {
    return view('policy')->name('policy');
});
Route::get('/terms', function() {
    return view('terms')->name('terms');
});

Route::get('/works', function () {
    return view('work');
});

Route::resource('works', App\Http\Controllers\WorkController::class);
