<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', HomeController::class)->name("site.home");
Route::view('404', 'site.error.index')->name("site.error");

Route::get('produtos', [CategoryController::class, 'index'])->name("site.products");
Route::get('produtos/{slug}', [CategoryController::class, 'show'])->name("site.products.category");

Route::get('blog', [BlogController::class, 'index'])->name("site.blog");
Route::get('blog/{id}/{url}', [BlogController::class, 'read'])->name("site.blog.read");

Route::view('sobre', 'site.about.index')->name("site.about");

Route::get('contato', [ContactController::class, 'index'])->name("site.contact");
Route::post('contato', [ContactController::class, 'form'])->name("site.contact.form");
