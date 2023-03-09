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
use App\Http\Controllers\ReportController;

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


// Staff or Admin
Route::middleware('auth', 'role:Staff,Admin')->group(function () {
    Route::get('/admin', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/members', [PageController::class, 'user'])->name('dashboard-users');
    
    Route::resource('userAjax', UserAjaxController::class);
    Route::resource('/admin/items', ItemController::class);
    
    Route::get('/admin/report', [ReportController::class, 'index'])->name('report.index');
});
Route::get('/admin/report/{auction}', [ReportController::class, 'auction'])->name('report.auction');

// Admin
Route::middleware('auth', 'role:Admin')->group(function () {
    Route::get('/admin/staffs', [PageController::class, 'staff'])->name('dashboard-staff');
    // Route::get('/admin/admins', [PageController::class, 'admin'])->name('dashboard-admin');
    
    Route::resource('staffAjax', StaffAjaxController::class);
    // Route::resource('adminAjax', AdminAjaxController::class);
});

// Staff
Route::middleware('auth', 'role:Staff')->group(function () {
    Route::resource('/admin/auctions', AdminAuctionController::class);
});


Route::get('/', [HomeController::class, 'index']);
Route::get('/auctions', [AuctionController::class, 'index']);
Route::get('/auction/{auction}', [AuctionController::class, 'show'])->name('auction-show');
Route::post('/auction/{auction}', [AuctionController::class, 'store'])->name('auction-store');
Route::get('/mybid', [MyBidController::class, 'index'])->middleware('auth');

Route::get('/auctions/404', function () {
    return view('pages.auction404');    
});
