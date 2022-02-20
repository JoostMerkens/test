<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HorseController;
use Illuminate\Support\Facades\Request;
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
    return view('welcome');
});

Route::resource('horses', HorseController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/sendmail', function (Request $request) {
    Mail::raw('Hi user, a new login into your account from the IP Address:', function ($message) {
        $message->from('joostevalue8@gmail.com','Joost');
        $message->to('jw.merkens@gmail.com', 'Joost Merkens')->subject('test');
    });
});

