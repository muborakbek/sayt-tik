<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PageController;
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


Route::get('/', [PageController::class, 'main']);

Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('team', [PageController::class, 'team'])->name('team');
Route::get('news', [PageController::class, 'news'])->name('news');
// Route::get('blog', [PageController::class, 'blog'])->name('blog');
Route::get('contact', [PageController::class, 'contact'])->name('contact');

// Route::get('posts', [PostController::class, 'index'])->name('posts.index');
// Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
// Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
// Route::post('posts/create', [PostController::class, 'store'])->name('posts.store');
// Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
// Route::put('posts/{post}/edit', [PostController::class, 'update'])->name('posts.update');
// Route::delete('posts/{post}/delete', [PostController::class, 'delete'])->name('posts.delete');


Route::resource('posts', PostController::class);







// laravel 12 23:33


// 1. Validatsiya 
// 2. Paginatsiya
// 3. Relationships
// 4. Sedder
// 5. Factory
// 6. Comment