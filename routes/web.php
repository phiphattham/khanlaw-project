<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// User Route
Route::get('/', function () {
    return view('page.homepage');
});
Route::get('about', function () {
    return view('page.about');
});
Route::get('roomlist', function () {
    return view('page.room-list');
});


// Admin Route
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {
    Route::get('dashboard', function () {
        return view('page.admin.dashboard');
    })->name('dashboard');
    Route::get('manage-room', [App\Http\Controllers\RoomController::class,'index'])->name('manage-room');
    Route::get('edit-room/{id}', [App\Http\Controllers\RoomController::class,'edit'])->name('edit-room');
    Route::get('delete-room/{id}', [App\Http\Controllers\RoomController::class,'destroy'])->name('delete-room');
});
