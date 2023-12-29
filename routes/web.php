<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use Inertia\Inertia;

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



//Route::inertia('/', 'App')->name('posts.index');
Route::get('/', [PostController::class, 'indexPosts'])->name('posts.index');
Route::inertia('/post/create', 'Post/Create/Index')->name('post.create');
Route::get('/post/{id}', [PostController::class, 'showPost'])->name('post.show');
Route::post('/post', [PostController::class, 'storePost'])->name('post.store');

