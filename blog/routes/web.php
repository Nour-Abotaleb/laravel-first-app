<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});



use App\Http\Controllers\PostController;
# use index function in Post Controller
// Route::get("/posts",[PostController::class,"index"] )
//     ->name("posts.index");

// Route::get("/posts/{id}", [PostController::class, "show"])
//     ->name("posts.show")->where('id', '[0-9]+');

// Route::get('/posts/create',[PostController::class, 'create'])
//     ->name('posts.create');

// Route::post("/posts", [PostController::class, 'store'])
//     ->name('posts.store');

// Route::get('/posts/{id}/delete',
//     [PostController::class, 'destroy'])->name('posts.destroy');


// Route::get('posts/{id}/edit', [PostController::class, 'edit'])
//     ->name('posts.edit');


// Route::put('posts/{id}', [PostController::class, 'update'])
//     ->name('posts.update');


Route::resource('posts', PostController::class);

