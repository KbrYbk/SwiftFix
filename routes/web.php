<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhoneBrand;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\CallbackControler;
use App\Models\Callback;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//главная страница
Route::get('/', [PhoneBrand::class, 'main'])->name('main');
Route::post('/callback-request', [CallbackControler::class, 'callback'])->name('callback');

//страница где нас найти
Route::get('/HowToContact', function () {
    return view('HowToContact');
});

//таблица услуг
Route::get('/services', [ServicesController::class, 'services'])->name('ServicesController'); // услуги

//админ
Route::group(['middleware' => 'auth'], function () {
Route::get('/admin', [AdminController::class, 'admin'])->name('admin')->middleware('admin');
Route::get('/admin/brand/delete/{id}', [AdminController::class, 'delete_phonebrands'])->name('delbrand')->middleware('admin'); //удаление бренда с главной страницы
Route::get('/admin/callback/delete/{id}', [AdminController::class, 'delete_callback'])->name('delcall')->middleware('admin'); //удаление заявки на звонок
Route::get('/admin/services/delete/{id}', [AdminController::class, 'delete_services'])->name('delserv')->middleware('admin'); //удаление услуги из таблицы
Route::get('/brands/create', [AdminController::class, 'create'])->name('brands.create')->middleware('admin');//отправка информации из формы добавления бренда
Route::post('/brands', [AdminController::class, 'store'])->name('brands.store')->middleware('admin');//страница на форму добавления бренда
Route::get('/services/create', [AdminController::class, 'createservices'])->name('services.create')->middleware('admin');//
Route::post('/services', [AdminController::class, 'storeservices'])->name('services.store')->middleware('admin');
});