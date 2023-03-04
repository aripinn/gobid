<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuctionController;
use App\Http\Controllers\MyBidController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\AdminAuctionController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\Ajax\UserAjaxController;
use App\Http\Controllers\Admin\Ajax\AdminAjaxController;
use App\Http\Controllers\Admin\Ajax\StaffAjaxController;

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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/profile', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
// require __DIR__.'/adminauth.php';


Route::middleware('auth', 'role:Staff,Admin')->group(function () {

    Route::get('/admin', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/members', [PageController::class, 'user'])->name('dashboard-users');
    
    Route::resource('userAjax', UserAjaxController::class);
    Route::resource('/admin/items', ItemController::class);
});

Route::middleware('auth', 'role:Admin')->group(function () {
    Route::get('/admin/staffs', [PageController::class, 'staff'])->name('dashboard-staff');
    // Route::get('/admin/admins', [PageController::class, 'admin'])->name('dashboard-admin');
    
    Route::resource('staffAjax', StaffAjaxController::class);
    // Route::resource('adminAjax', AdminAjaxController::class);
});

Route::middleware('auth', 'role:Staff')->group(function () {
    //open/close auction
    Route::resource('/admin/auctions', AdminAuctionController::class);
});

// Client
Route::get('/', [HomeController::class, 'index']);

Route::get('/auctions', [AuctionController::class, 'index']);
Route::get('/auction/{auction}', [AuctionController::class, 'show'])->name('auction-show');
Route::post('/auction/{auction}', [AuctionController::class, 'store'])->name('auction-store');

Route::get('/mybid', [MyBidController::class, 'index']);

Route::get('/auctions/404', function () {
    return view('pages.auction404');
});




