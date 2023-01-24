<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

/*-----------------------------------------------------------------------
| Admin all Route
|----------------------------------------------------------------------*/
Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function(){

    // [:admin login:] [:logout:] [:update password:] [:admin ajax password check:] [:admin info update:]
    Route::match(['get', 'post'], 'login', [AdminController::class, 'login']);
    Route::match(['get', 'post'], 'updatepassword', [AdminController::class, 'updateAdminPassword']);
    Route::match(['get', 'post'], 'update-admin-details', [AdminController::class, 'updateAdminDetails']);
    Route::post('check-admin-password', [AdminController::class, 'checkAdminCurrentPassword']);
    Route::get('logout', [AdminController::class, 'logout']);

    // Vendor details update
    Route::match(['get', 'post'], 'update-vendor-details/{slug}', [AdminController::class, 'updateVendorDetails']);
    // admin dashboard
  Route::group(['middleware' => ['admin'] ], function(){
  Route::get('dashboard', [AdminController::class, 'AdminDashboard']);
    });
});
