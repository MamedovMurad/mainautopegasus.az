<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboard;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Front\HomePage;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\ModelController;
use App\Http\Controllers\Admin\CarsController;
use App\Http\Controllers\Admin\EditorController;
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
/* etrafli axtaris */

Route::get('car-detail',[HomePage::class,'carDetail'])->name('carDetail');
Route::get('search-more',[HomePage::class,'moreSearch'])->name('searchMore');

/* avtomobil kategoriya */

Route::get('avtomobil',[HomePage::class,'cars'])->name('product-cars');

/* Indi sat */
Route::get('/indi-sat',[HomePage::class,'fastSell'])->name('fastSell');
/* Teklif al */
Route::get('/teklif-al',[HomePage::class,'getoffer'])->name('getoffer');
/* FAQ */
Route::get('sifarisver',[HomePage::class,'question'])->name('questionPage');


/*

Route::get('/back/panel',[AdminDashboard::class,'index']);*/
Route::get('/',[HomePage::class,'index'])->name('front.index');

Route::prefix('back')->middleware('isPanel')->group(function (){
    Route::get('login',[AuthController::class,'index'])->name('login');
    Route::post('login',[AuthController::class,'signin'])->name('signin');
});
Route::prefix('back')->middleware('isLogin')->group(function (){
    Route::get('logout',[AuthController::class,'logout'])->middleware('isLogin')->name('logout');
    /*Route::resource('/attributes', 'Admin\AttributesController');*/



        /* istifadeci */
Route::get('user',[EditorController::class,'read'])->name('editor');


    //makes route

    Route::get('/makes/',[AttributeController::class,'index'])->name('makes');
    Route::post('/makes/make_add/',[AttributeController::class,'make_add'])->name('make_add');
    Route::post('/models/model_add/',[ModelController::class,'model_add'])->name('model_add');
    Route::get('/makes/get_make/',[AttributeController::class,'get_make'])->name('get_make');
    Route::post('/makes/make_delete/',[AttributeController::class,'make_delete'])->name('make_delete');
    Route::put('/makes/make_update/',[AttributeController::class,'make_update'])->name('make_update');
    Route::get('/panel',[AdminDashboard::class,'index'])->middleware('isLogin')->name('panel');
//models route
    Route::get('/models',[ModelController::class,'index'])->name('models');
    Route::get('/models/get_model/',[ModelController::class,'get_model'])->name('get_model');
    Route::put('/models/model_update/',[ModelController::class,'model_update'])->name('model_update');

    //cars product route

    Route::get('/cars',[CarsController::class,'index'])->name('cars');
    Route::get('/cars_add',[CarsController::class,'cars_add'])->name('cars_add');
    Route::post('cars_added',[CarsController::class,'cars_added'])->name('cars_added');
    Route::post('cars_part_added',[CarsController::class,'cars_part_added'])->name('cars_part_added');
    Route::get('/make_model_select',[CarsController::class,'make_model_select'])->name('make_model_select');


});

