<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlagaMedController;
use App\Http\Controllers\AuthController;
//use App\Http\Controllers\Auth\AuthenticatedSessionController;
//use App\Http\Controllers\Auth\RegisteredUserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // returns the home page with all posts
Route::get('/alagamed/index', AlagaMedController::class .'@index')->name('alagamed.index');
// adds a post to the database
Route::post('/alagamed', AlagaMedController::class .'@store')->name('alagamed.store');
// updates a post
Route::put('/alagamed/{post}', AlagaMedController::class .'@update')->name('alagamed.update');
// deletes a post
Route::delete('/alagamed/{post}', AlagaMedController::class .'@destroy')->name('alagamed.destroy');

// returns the form for adding a post
Route::post('/alagamed/appointment', [AlagamedController::class, 'appointment'])->name('alagamed.appointment');


// returns a page that shows a full post
Route::get('/alagamed/{post}', AlagaMedController::class .'@about')->name('alagamed.about');
// returns the form for editing a post
Route::get('/alagamed/services', AlagaMedController::class .'@services')->name('alagamed.services');
Route::get('/alagamed/doctors', AlagaMedController::class .'@doctors')->name('alagamed.doctors');
Route::get('/alagamed/reviews', AlagaMedController::class .'@reviews')->name('alagamed.reviews');
Route::get('/alagameds/blogs', AlagaMedController::class .'@blogs')->name('alagamed.blogs');
});



require __DIR__.'/auth.php';
