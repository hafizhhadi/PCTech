<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ComponentController;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [HomeController::class, 'admin'])->name('admin:home')->middleware('is.admin');//middleware 

//feature component

Route::get('/component/index', [ComponentController::class, 'index'])->name('component:index');
Route::get('/component/create', [ComponentController::class, 'create'])->name('component:create');
Route::post('/component/store', [ComponentController::class, 'store'])->name('component:store');
Route::get('/component/edit/{component}', [ComponentController::class, 'edit'])->name('component:edit');
Route::post('/component/update/{component}', [ComponentController::class, 'update'])->name('component:update');
Route::get('/component/delete/{component}', [ComponentController::class, 'destroy'])->name('component:delete');
