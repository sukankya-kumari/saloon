<?php

use App\Http\Controllers\CategoryController;
use App\Models\Category;
// use App\Http\Controllers\ClientController;
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
Route::redirect('/','/home');

Route::resource('category',CategoryController::class)->except(['show','edit','update']);
// Route::get('/category/insert',function(){
//     return view('insert');
// });
// Route::get('/category/client_manage',function(){
//     return view('admin.client_manage');
// });

Route::get('category/client_manage',[CategoryController::class,'client_manage'])->name('admin.client_manage');
Route::post('date_time',[CategoryController::class,'update_date_time']);
Route::get('date_time/{id}',[CategoryController::class,'show_date_time']);
// Route::post('category/isonline',[CategoryController::class,'isonline'])->name("admin.admin_dashboard");

Route::get('isOfline/{id}',[CategoryController::class,'isOfline']);
Route::get('done/{id}',[CategoryController::class,'done']);
Route::get('remove/{id}',[CategoryController::class,'remove']);
Route::get('pending/{id}',[CategoryController::class,'pending']);


Route::get('details',[CategoryController::class,'details'])->name('details');
Route::get('home',[CategoryController::class,'homeindex'])->name('home');

Route::match(['get','post'],'insert',[CategoryController::class,'insert'])->name('insert');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
