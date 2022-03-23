<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EngineerController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\AjaxBOOKCRUDController;
use App\Http\Controllers\AjaxProductCRUDController;
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


// Normal Crud Operations
Route::get('/crud/index',[EngineerController::class,'index'])->name('crud.index');
Route::get('/crud/create',[EngineerController::class,'create'])->name('crud.create');

Route::get('/crud/show/{id}',[EngineerController::class,'show'])->name('crud.show');

Route::post('/crud/store',[EngineerController::class,'store'])->name('crud.store');
Route::get('/crud/edit/{id}',[EngineerController::class,'edit'])->name('crud.edit');
Route::post('/crud/update/{id}',[EngineerController::class,'update'])->name('crud.update');
Route::get('/crud/delete/{id}',[EngineerController::class,'destroy'])->name('crud.delete');

// File Routes
Route::get('/file',[FileController::class,'create'])->name('formInput.create');
Route::post('/file',[FileController::class,'store'])->name('formInput.store');



// Image Crud Operations
Route::get('/imageCrud/index',[ImageController::class,'index'])->name('imageCrud.index');
Route::get('/imageCrud/create',[ImageController::class,'create'])->name('imageCrud.create');

Route::post('/imageCrud/store',[ImageController::class,'store'])->name('imageCrud.store');
Route::get('/imageCrud/edit/{id}',[ImageController::class,'edit'])->name('imageCrud.edit');

Route::post('/imageCrud/update/{id}',[ImageController::class,'update'])->name('imageCrud.update');
Route::get('/imageCrud/delete/{id}',[ImageController::class,'destroy'])->name('imageCrud.delete');

// Core 
Route::get('/example',[ExampleController::class,'display'])->name('example');
Route::get('/example1',[ExampleController::class,'display1'])->name('example1');

Route::get('/example2',[ExampleController::class,'store'])->name('example2');
Route::get('/example3',[ExampleController::class,'show'])->name('example3');

Route::get('/sample',[ExampleController::class,'sample'])->name('sample');


// Book Crud Routes
Route::get('ajax-book-crud', [AjaxBOOKCRUDController::class, 'index']);
Route::post('add-update-book', [AjaxBOOKCRUDController::class, 'store']);
Route::post('edit-book', [AjaxBOOKCRUDController::class, 'edit']);
Route::post('delete-book', [AjaxBOOKCRUDController::class, 'destroy']);


// dsf



