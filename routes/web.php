<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/catalog', [App\Http\Controllers\CatalogController::class, 'index'])->name('catalog');
Route::get('/catalog/pdf', [App\Http\Controllers\CatalogController::class, 'pdf'])->name('catalog.pdf');

Route::get('/servers', [App\Http\Controllers\ServersController::class, 'index'])->name('servers');
Route::post('/servers/{server}/add', [App\Http\Controllers\ServersController::class, 'add'])->name('servers.add');

Route::get('/account', [App\Http\Controllers\AccountController::class, 'index'])->name('account');
Route::post('/account', [App\Http\Controllers\AccountController::class, 'update'])->name('account.update');

Route::get('/server/{server}', [App\Http\Controllers\ChatController::class, 'show'])->name('server.show');
Route::post('/server/{server}', [App\Http\Controllers\ChatController::class, 'store'])->name('server.store');
