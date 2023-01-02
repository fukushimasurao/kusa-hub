<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Livewire\TaskInput;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/task', [TaskController::class, 'create'])->name('task.create');
//    Route::get('/task', [TaskInput::class])->name('task.create');
//    Route::get('/task-confirm', [\App\Http\Livewire\TaskConfirm::class])->name('task.confirm');



});

require_once __DIR__.'/auth.php';
