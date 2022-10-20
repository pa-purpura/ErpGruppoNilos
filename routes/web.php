<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\CollaboratorController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\CustomerController;

use Illuminate\Support\Facades\Route;

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

// ->middleware('auth')
Route::prefix('admin')->name('admin.')->group(function () {
    // Route::get('/', function () {
    //     return view('admin.layout');
    // });
    Route::view('home', 'admin.dashboard.index')->name('dashboard');
    Route::resource('users', UserController::class);
    Route::resource('collaborators', CollaboratorController::class);
    Route::resource('providers', ProviderController::class);
    Route::resource('customers', CustomerController::class);

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
