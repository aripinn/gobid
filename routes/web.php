<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\Ajax\UserAjaxController;
use App\Http\Controllers\Admin\Ajax\AdminAjaxController;
use App\Http\Controllers\Admin\Ajax\StaffAjaxController;
use App\Http\Controllers\Admin\ItemController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::middleware('auth', 'role:Staff,Admin')->group(function () {

    Route::get('/admin', [PageController::class, 'dashboard'])->name('dashboard');
    
    Route::get('/admin/users', [PageController::class, 'user'])->name('dashboard-users');
    Route::get('/admin/staffs', [PageController::class, 'staff'])->name('dashboard-staff');
    Route::get('/admin/admins', [PageController::class, 'admin'])->name('dashboard-admin');

    Route::resource('/admin/items', ItemController::class);
    Route::resource('staffAjax', StaffAjaxController::class);
    Route::resource('adminAjax', AdminAjaxController::class);
    Route::resource('userAjax', UserAjaxController::class);
});

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/auctions', function(){
    return view('pages.auctions');
});
// Route::get('/auctions/{auction}', function () {
Route::get('/auction', function () {
    return view('pages.auction');
});
Route::get('/mybid', function () {
    return view('pages.mybid');
});
Route::get('/auctions/404', function () {
    return view('pages.auction404');
});

require __DIR__.'/adminauth.php';



