<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\TableController as AdminTableController;
use App\Http\Controllers\frontend\CategoryController as FrontendCategoryController;
use App\Http\Controllers\frontend\MenuController as FrontendMenuController;
use App\Http\Controllers\frontend\ReservationController as FrontendReservationController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/category', [FrontendCategoryController::class, 'index'])->name('categories.index');
Route::get('/category/{category}', [FrontendCategoryController::class, 'show'])->name('categories.show');
Route::get('/menus', [FrontendMenuController::class, 'index'])->name('menus.index');
Route::get('/reservation/step-one', [FrontendReservationController::class, 'stepOne'])->name('reservation.step.one');
Route::get('/reservation/step-two', [FrontendReservationController::class, 'stepTwo'])->name('reservation.step.two');
Route::post('/reservation/step-one', [FrontendReservationController::class, 'storeStepOne'])->name('reservation.stepone.store');
Route::post('/reservation/step-two', [FrontendReservationController::class, 'storeStepTwo'])->name('reservation.steptwo.store');
Route::get('/thankyou', function() {
    return view('reservations.thankyou');
})->name('thankyou');

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::resource('/categories', CategoryController::class);
    Route::resource('/menus', MenuController::class);
    Route::resource('/tables', AdminTableController::class);
    Route::resource('/reservations', ReservationController::class);
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
