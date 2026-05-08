<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Models\Car;
use App\Http\Controllers\CarController;
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');

Route::post('posts', [PostController::class, 'store'])->name('posts.store');
Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('posts/{post}/update', [PostController::class, 'update'])->name('posts.update');
Route::delete('posts/{post}/destroy', [PostController::class, 'destroy'])->name('posts.delete');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('posts/{post}/duplicate', [PostController::class, 'duplicate'])->name('posts.duplicate');
// {{route ('posts.store)}}

Route::get('contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('contacts', [ContactController::class, 'store'])->name('contacts.store');
Route::get('contacts', [ContactController::class, 'index'])->name('contacts.index');

Route::get('/display-car', [CarController::class, 'display'])->name('car.display');

Route::get('/display-events', [EventController::class, 'display'])->name('event.display');
