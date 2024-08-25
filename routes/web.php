<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('admin/dashboard', [AdminController::class, 'index'])->middleware(['auth', 'admin']);
Route::get('admin/dashboard/seo', [AdminController::class, 'seoPage'])->middleware(['auth', 'admin']);
Route::get('admin/dashboard/seo/fruit', [AdminController::class, 'fruitPage'])->middleware(['auth', 'admin']);
Route::get('admin/dashboard/seo/starchy', [AdminController::class, 'starchyPage'])->middleware(['auth', 'admin']);
Route::get('view/{id}', [AdminController::class, 'longView'])->middleware(['auth', 'admin']);
Route::get('edit/{id}', [AdminController::class, 'editView'])->middleware(['auth', 'admin'])->name('editPage');
Route::get('admin/dashboard/input', [AdminController::class, 'input'])->middleware(['auth', 'admin'])->name('inputPage');
Route::post('item/added', [AdminController::class, 'store'])->middleware(['auth', 'admin'])->name('storePage');
Route::put('{id}/', [AdminController::class, 'update'])->middleware(['auth', 'admin'])->name('updatePage');
Route::get('delete/{id}', [AdminController::class, 'deleted'])->middleware(['auth', 'admin']);
Route::get('admin/dashboard/item', [AdminController::class, 'searchItem'])->middleware(['auth', 'admin'])->name('searchItems');



Route::get('/', [UserController::class, 'index']);
Route::get('health/service', [UserController::class, 'food'])->name('health');
Route::get('diet/service', [UserController::class, 'less'])->name('diet');
Route::get('fitness/service', [UserController::class, 'fit'])->name('fitness');
Route::get('fruit/vegetables', [UserController::class, 'Garden']);
Route::get('starchy/food', [UserController::class, 'Grains']);
Route::get('dairy', [UserController::class, 'Delights']);
Route::get('protein', [UserController::class, 'Proteins']);
Route::get('fat', [UserController::class, 'Savory']);
Route::get('view/{id}', [UserController::class, 'details']);
Route::get('privacy/policy', [UserController::class, 'rules']);


Route::get('search/food', [UserController::class, 'search'])->name('searchItem');