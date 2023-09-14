<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\MailController;

// Ngetes
use App\Mail\kirimEmail;
use App\Mail\JadwalDiTolak;

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
})->middleware('guest');

Auth::routes();

// Route ke halaman user
Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->name('user.home')->middleware('is_user');

// Route ke dashboard admin
Route::get('/admin/home', [App\Http\Controllers\UserController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/admin/listbooking', [App\Http\Controllers\AdminController::class, 'viewListBooking'])->name('admin.listbooking')->middleware('is_admin');
Route::get('/admin/createlayanan', [App\Http\Controllers\AdminController::class, 'viewCreateLayanan'])->name('admin.createlayanan')->middleware('is_admin');
Route::get('/admin/approve/{id}', [App\Http\Controllers\AdminController::class, 'approve'])->middleware('is_admin');
Route::get('/admin/canceled/{id}', [App\Http\Controllers\AdminController::class, 'canceled'])->middleware('is_admin');


// Route untuk Email
// Route::get('/tes', [MailController::class, 'index']);
Route::get('/tes', function() {
    return new JadwalDiTolak();
});