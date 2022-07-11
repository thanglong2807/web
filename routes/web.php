<?php

use App\Http\Controllers\Client\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Http\Request;


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

Route::get('/',[ClientController::class,'index'])->name('home');
Route::get('/chitietsp/{id}',[ClientController::class,'chitietsp'])->name('chitietsp');

Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/',[ProductController::class,'index'])->name('index');   
    Route::get('/add',[ProductController::class,'create'])->name('add');
    Route::post('/add/store',[ProductController::class,'store']);
    Route::get('/edit/{id}',[ProductController::class,'edit'])->name('edit');
    Route::post('/edit/update',[ProductController::class,'update'])->name('update');
    Route::get('/destroy/{id}',[ProductController::class,'destroy'])->name('destroy');
    Route::get('test', function () {
        return view('admin.admin');
    });
});