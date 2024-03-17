<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomController;
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

// User Routes
Route::get('/', function () {
    return view('page.homepage');
});
Route::get('about', function () {
    return view('page.about');
});

// Room Routes -> Read
Route::get('room-list', [RoomController::class, 'all'])->name('roomlist');
Route::get('room-tent', [RoomController::class, 'tent'])->name('roomtent');
Route::get('room-hazel', [RoomController::class, 'hazel'])->name('roomhazel');
Route::get('room-holly', [RoomController::class, 'holly'])->name('roomholly');
Route::get('room-detail/{id}', [RoomController::class, 'show'])->name('roomdetail');

// Booking Route
Route::post('booking/{id}', [BookingController::class, 'booking'])->name('booking'); //รับ id ห้องพัก
Route::get('checkout/{id}', [BookingController::class, 'checkout'])->name('checkout');
Route::post('checkout/{booking_id}', [BookingController::class,'customercheck'])->name('customercheck');
Route::get('booking-history', [BookingController::class, 'history'])->name('bookinghistory');
Route::get('booking/result', function () {
    return view('page.room.booking.result');
});

// Admin Routes
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'checkrole'])->group(function () {
    // รายงานผล
    Route::get('dashboard', function () {
        return view('page.admin.dashboard');
    })->name('dashboard');
    // จัดการหน้าเกี่ยวกับ
    Route::get('manage-about', function () {
        return view('page.admin.manage-about');
    })->name('manage-about');
    // จัดการห้องพัก
    Route::get('manage-room', [RoomController::class, 'index'])->name('manage-room');
    Route::post('room/create', [RoomController::class, 'store'])->name('createroom');
    Route::get('edit-room/{id}', [RoomController::class, 'edit'])->name('edit-room');   // หน้า view แก้ไขห้องพัก
    Route::put('update-room/{id}', [RoomController::class, 'update'])->name('update-room'); // อัพเดทห้องพัก
    Route::get('delete-room/{id}', [RoomController::class, 'destroy'])->name('delete-room');
    // จัดการผู้ใช้
    Route::get('manage-user', [App\Http\Controllers\UserController::class, 'index'])->name('manage-user');
});

Route::get('send-mail', [BookingController::class, 'index']);
