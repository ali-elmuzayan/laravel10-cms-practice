<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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


// Front end
Route::view('/', 'frontend.index')->name('home');

Route::view('/about', 'frontend.about')->name('about');


Route::view('/services', 'frontend.service')->name('service');

Route::view('/contact', 'frontend.contact')->name('contact');







Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});


Route::prefix(LaravelLocalization::setLocale() .'/admin')->name('admin.')->group(function () {

    Route::middleware('auth')->group(function () {

        Route::view('/dashboard', 'admin.index')->name('index');

        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
    });


    require __DIR__.'/auth.php';


});
