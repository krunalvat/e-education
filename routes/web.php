<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RolesController;

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
});

/**
 * Admin Route
 */
Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', [AdminController::class,'index'])->name('admin.index');
        
    /**
     * User Routes
     */
    Route::resource('/users', UserController::class);
    Route::get('users-data', [UserController::class, 'getData'])->name('users.data');

    /**
     * Roles Routes
     */
    Route::resource('/roles', RolesController::class);
    Route::get('roles-data', [RolesController::class, 'getData'])->name('roles.data');

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
