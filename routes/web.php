<?php


use App\Http\Controllers\UserController;
use App\Http\Controllers\CollaboratorController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AddressController;

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
    // Route::resource('users', UserController::class);
    Route::get('users/{type}', [UserController::class, 'index'])->name('users.index');
    Route::get('users/create', [UserController::class, 'create'])->name('users.create');
    Route::resource('addresses', AddressController::class);

});

// GET|HEAD        admin/users ....................................................................... admin.users.index › UserController@index
// POST            admin/users ....................................................................... admin.users.store › UserController@store
// GET|HEAD        admin/users/create ................................................................ admin.users.create › UserController@create
// GET|HEAD        admin/users/{type} ................................................................ admin.users.index › UserController@index
// GET|HEAD        admin/users/{user} ................................................................ admin.users.show › UserController@show
// PUT|PATCH       admin/users/{user} ................................................................ admin.users.update › UserController@update
// DELETE          admin/users/{user} ................................................................ admin.users.destroy › UserController@destroy
// GET|HEAD        admin/users/{user}/edit ........................................................... admin.users.edit › UserController@edit



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
