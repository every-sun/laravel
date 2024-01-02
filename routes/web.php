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

// create post -> store
// create get -> create
// update put -> update
// update get -> edit
// get -> show
// get -> index
// delete -> destroy

Route::get('/', [PostController::class, 'indexPosts'])->name('posts.index');
Route::get('/post/create', [PostController::class, 'createPost'])->name('post.create');
Route::get('/post/{id}', [PostController::class, 'showPost'])->name('post.show');
Route::post('/post', [PostController::class, 'storePost'])->name('post.store');
Route::get('/post/{id}/edit', [PostController::class, 'editPost'])->name('post.edit');
Route::put('/post/{id}', [PostController::class, 'updatePost'])->name('post.update');
Route::delete('/post/{id}', [PostController::class, 'destroyPost'])->name('post.destroy');
