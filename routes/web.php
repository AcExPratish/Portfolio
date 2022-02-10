<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('isAdmin');


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/dashboard', [HomeController::class,'index'])->name('dashboard');
Route::get('/aboutUs',[AboutUsController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contact',[ContactController::class,'contact'])->name('contact');
Route::get('/blog',[PostController::class,'blog'])->name('blog');
Route::get('/blog/details/{post}',[PostController::class,'blogDetails']);
Route::get('/categories',[CategoryController::class,'category']);
Route::get('/categories/{category}',[CategoryController::class,'categoryFilter']);
Route::post('/newsletter', [AdminController::class, 'newsletter']);


Route::middleware(['auth','isAdmin'])->group(function (){
    Route::prefix('admin')->group(function (){
        Route::get('/add/productForm', [AdminController::class, 'addproductForm']);
        Route::post('/add/addProduct', [AdminController::class, 'addProduct']);
        Route::get('/edit/productForm/{id}', [AdminController::class, 'editproductForm']);
        Route::put('/edit/editProduct/{id}', [AdminController::class, 'editProduct']);
        Route::get('/show/product', [AdminController::class, 'showProduct']);
        Route::delete('/delete/product/{id}', [AdminController::class, 'deleteProduct']);

        Route::get('/add/userForm', [AdminController::class, 'adduserForm']);
        Route::post('/add/addUser', [AdminController::class, 'addUser']);
        Route::get('/edit/userForm/{id}', [AdminController::class, 'edituserForm']);
        Route::put('/edit/editUser/{id}', [AdminController::class, 'editUser']);
        Route::get('/show/user', [AdminController::class, 'showUser']);
        Route::delete('/delete/user/{id}', [AdminController::class, 'deleteUser']);
    });
});
