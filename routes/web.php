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
    // admin dashboard
  Route::group(['middleware' => ['admin'] ], function(){   
  Route::get('dashboard', [AdminController::class, 'AdminDashboard']);
    });

    // admin login
    Route::match(['get', 'post'], 'login', [AdminController::class, 'login']);
  
});









