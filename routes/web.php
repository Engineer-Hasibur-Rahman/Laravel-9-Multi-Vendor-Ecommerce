<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Backend\LocationController;

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
Route::prefix('/admin')->group(function(){
    Route::match(['get', 'post'], 'login', [AdminController::class, 'login']);
    Route::match(['get', 'post'], 'updatepassword', [AdminController::class, 'updateAdminPassword'])->name('admin.password.change');
    Route::match(['get', 'post'], 'update-admin-details', [AdminController::class, 'updateAdminDetails'])->name('admin.profile');
    Route::post('check-admin-password', [AdminController::class, 'checkAdminCurrentPassword']);
    Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
    // Vendor details update
    Route::match(['get', 'post'], 'update-vendor-details/{slug}', [AdminController::class, 'updateVendorDetails']);


        // admin dashboard
      Route::group(['middleware' => ['admin'] ], function(){
        Route::get('dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');

          /*----------------------------------------------------------------------------------------------------------------------------
     | COUNTRY ROUTES
     |----------------------------------------------------------------------------------------------------------------------------*/
          Route::group(['prefix'=>'country'],function(){
              Route::get('/', [LocationController::class, 'country'])->name('admin.country');
              Route::match(['get','post'],'/add', [LocationController::class, 'add_country'])->name('admin.country.add');
              Route::get('/edit-country/{id?}',[LocationController::class, 'edit_country'])->name('admin.country.edit');
              Route::post('/edit-update',[LocationController::class, 'update_country'])->name('admin.country.update');
              Route::post('/delete/{id?}',[LocationController::class, 'delete_country'])->name('admin.country.delete');
              
              Route::post('/change-status/{id}',[LocationController::class, 'change_status_country'])->name('admin.country.status');             
              Route::post('/bulk-action', [LocationController::class, 'bulk_action_country'])->name('admin.country.bulk.action');

              Route::get('/csv/import','ImportCsvController@import_settings')->name('admin.import.csv.settings');
              Route::post('/csv/import','ImportCsvController@update_import_settings')->name('admin.country.import');
              Route::post('/csv/import/database','ImportCsvController@import_to_database_settings')->name('admin.country.import.database');
          });

          /*----------------------------------------------------------------------------------------------------------------------------
          | CITY ROUTES
          |----------------------------------------------------------------------------------------------------------------------------*/
          Route::group(['prefix'=>'city'],function(){
              Route::get('/','LocationController@service_city')->name('admin.city');
              Route::match(['get','post'],'/add','LocationController@add_city')->name('admin.city.add');
              Route::match(['get','post'],'/edit-city/{id?}','LocationController@edit_city')->name('admin.city.edit');
              Route::post('/change-status/{id}','LocationController@change_status_city')->name('admin.city.status');
              Route::post('/delete/{id}','LocationController@delete_city')->name('admin.city.delete');
              Route::post('/bulk-action', 'LocationController@bulk_action_city')->name('admin.city.bulk.action');

              Route::get('/csv/import','ImportCsvController@city_import_settings')->name('admin.import.city.csv.settings');
              Route::post('/csv/import','ImportCsvController@city_update_import_settings')->name('admin.city.import');
              Route::post('/csv/import/database','ImportCsvController@city_import_to_database_settings')->name('admin.city.import.database');
          });


          /*----------------------------------------------------------------------------------------------------------------------------
          | AREA ROUTES
          |----------------------------------------------------------------------------------------------------------------------------*/
          Route::group(['prefix'=>'area'],function(){
              Route::get('/','LocationController@area')->name('admin.area');
              Route::match(['get','post'],'/add','LocationController@add_area')->name('admin.area.add');
              Route::match(['get','post'],'/edit-area/{id?}','LocationController@edit_area')->name('admin.area.edit');
              Route::post('/change-status/{id}','LocationController@change_status_area')->name('admin.area.status');
              Route::post('/delete/{id}','LocationController@delete_area')->name('admin.area.delete');
              Route::post('/bulk-action', 'LocationController@bulk_action_area')->name('admin.area.bulk.action');
              Route::get('/csv/import','ImportCsvController@area_import_settings')->name('admin.import.area.csv.settings');
              Route::post('/csv/import','ImportCsvController@area_update_import_settings')->name('admin.area.import');
              Route::post('/csv/import/database','ImportCsvController@area_import_to_database_settings')->name('admin.area.import.database');
              Route::post('/csv/import//get-city-by-country', 'ImportCsvController@area_import_country_by_city')->name('admin.area.import.country.city');
          });

         });
});
