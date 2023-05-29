<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhoneBrand; //контроллер с брендами телефонов
use App\Http\Controllers\AdminController; //контроллер админа
use App\Http\Controllers\ServicesController; //контроллер услуг
use App\Http\Controllers\CallbackControler; //контроллер обратного звонка
use App\Http\Controllers\BrandController; //контроллер отдельной страницы бренда телефона
use App\Http\Controllers\ReviewController; //контроллер с отзывами пользователей

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

//главная страница
Route::get('/', [PhoneBrand::class, 'main'])->name('main'); //вывод брендов и отзывов на главную страницу
Route::post('/callback-request', [CallbackControler::class, 'callback'])->name('callback');

//страница где нас найти
Route::get('/HowToContact', function () {
    return view('HowToContact');
});

//таблица услуг
Route::get('/services', [ServicesController::class, 'services'])->name('ServicesController'); // услуги

//страница бренда
Route::get('/brandpage/{id}', [BrandController::class, 'output'])->name('BrandPage');

//админ
Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin')->middleware('admin');

    // ______________________________________________________Ссылки на удаление________________________________________________
    Route::get('/admin/brand/delete/{id}', [AdminController::class, 'delete_phonebrands'])->name('delbrand')->middleware('admin'); //удаление бренда с главной страницы
    Route::get('/admin/callback/delete/{id}', [AdminController::class, 'delete_callback'])->name('delcall')->middleware('admin'); //удаление заявки на звонок
    Route::get('/admin/services/delete/{id}', [AdminController::class, 'delete_services'])->name('delserv')->middleware('admin'); //удаление услуги из таблицы

    //_______________________________________________________Ссылки на создание_________________________________________________
    Route::post('/brands', [AdminController::class, 'store'])->name('brands.store')->middleware('admin'); //отправка информации из формы добавления бренда
    Route::get('/brands/create', [AdminController::class, 'create'])->name('brands.create')->middleware('admin'); //страница на форму добавления бренда
    Route::post('/services', [AdminController::class, 'storeservices'])->name('services.store')->middleware('admin'); //отправка информации из формы добавления услуги в таблицу
    Route::get('/services/create', [AdminController::class, 'createservices'])->name('services.create')->middleware('admin'); //страница на форму добавления услуги в таблицу

    //_______________________________________________________Ссылки на редактирование_________________________________________________
    Route::get('/brands/{brand}/edit', [BrandController::class, 'edit'])->name('brands.edit')->middleware('admin');
    Route::put('/brands/{brand}', [BrandController::class, 'update'])->name('brands.update')->middleware('admin');
});

//пользователь
Route::get('/home', [HomeController::class, 'index'])->name('home');//страница пользователя

Route::post('/avatar/upload', [HomeController::class, 'uploadAvatar'])->name('avatar.upload');//загрузка аватара
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');//загрузка отзыва
