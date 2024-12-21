<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePage;
use App\Http\Controllers\Login;
use App\Http\Controllers\Admin;

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

Route::get('/',[HomePage::class, 'index']);
Route::get('/services',[HomePage::class, 'services']);
Route::get('/gallery',[HomePage::class, 'gallery']);
Route::get('/braidtip',[HomePage::class, 'braidtip']);
Route::get('/about',[HomePage::class, 'about']);
Route::get('/contact',[HomePage::class, 'contact']);

Route::get('/book',[HomePage::class, 'book']);
Route::post('/book',[HomePage::class, 'save_book'])->name('book');

Route::post('/email',[HomePage::class, 'save_email'])->name('email');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/login',[Login::class, 'login']);
    Route::POST('/login',[Login::class, 'save'])->name('login');

    Route::get('/dashboard',[Admin::class, 'dashboard']);
    Route::get('/booking',[Admin::class, 'booking']);
    Route::post('/booking/{id}/del', [Admin::class, 'booking_action'])->name('booking.delete');
    Route::post('/booking/{id}/app', [Admin::class, 'booking_action'])->name('booking.approve');

    Route::get('/email',[Admin::class, 'email']);
    Route::post('/email/{id}',[Admin::class, 'delete_email'])->name('email.delete');
    Route::get('/booking_history',[Admin::class, 'booking_history']);

    Route::get('/gallery',[Admin::class, 'gallery'])->middleware('auth')->name('admin.gallery');
    Route::post('/gallery',[Admin::class, 'save_gallery'])->middleware('auth')->name('picture');
    Route::post('/gallery/{id}',[Admin::class, 'delete_gallery'])->middleware('auth')->name('picture_delete');
    
    Route::post('/logout', [Admin::class, 'logout'])->name('logout');
});

