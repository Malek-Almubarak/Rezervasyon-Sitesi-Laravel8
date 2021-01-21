<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::redirect('/anasayfa', '/home')->name('anasayfa');
Route::get('/', function () {
    return view('home.index');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
//Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');

//admin
Route::middleware('auth')->prefix('admin')->group(function (){

    Route::get('/',[App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_home');

    Route::get('category',[App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
    Route::post('category/create',[App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
    Route::get('category/add',[App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
    Route::get('category/edit/{id}',[App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}',[App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('category/delete/{id}',[App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
    Route::get('category/show',[App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');

    #service
    Route::prefix('service')->group(function (){
    Route::get('/',[App\Http\Controllers\Admin\serviceController::class,'index'])->name('admin_service');
    Route::get('create', [App\Http\Controllers\Admin\serviceController::class, 'create'])->name('admin_service_add');
    Route::post('store', [App\Http\Controllers\Admin\serviceController::class, 'store'])->name('admin_service_store');
    Route::get('edit/{id}', [App\Http\Controllers\Admin\serviceController::class, 'edit'])->name('admin_service_edit');
    Route::post('update/{id}', [App\Http\Controllers\Admin\serviceController::class, 'update'])->name('admin_service_update');
    Route::get('delete/{id}', [App\Http\Controllers\Admin\serviceController::class, 'destroy'])->name('admin_service_delete');
    Route::get('show', [App\Http\Controllers\Admin\serviceController::class, 'show'])->name('admin_service_show');

});
});


Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout', [HomeController::class, 'logout'])->name('admin_logout');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

