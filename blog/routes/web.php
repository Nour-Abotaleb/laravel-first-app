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



use App\Http\Controllers\StudentController;
# use index function in Student Controller
Route::get("/posts",[StudentController::class,"index"] )
    ->name("students.index");

Route::get("/posts/{id}", [StudentController::class, "show"])
    ->name("students.show")->where('id', '[0-9]+');

Route::get('/posts/create',[StudentController::class, 'create'])
    ->name('students.create');

Route::post("/posts", [StudentController::class, 'store'])
    ->name('students.store');

Route::get('/posts/{id}/delete',
    [StudentController::class, 'destroy'])->name('students.destroy');


Route::get('posts/{id}/edit', [StudentController::class, 'edit'])
    ->name('students.edit');


Route::put('posts/{id}', [StudentController::class, 'update'])
    ->name('students.update');

