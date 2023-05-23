<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome'); });

Route::middleware(['auth:sanctum','verified'])->group(function(){
    
    Route::get('/dashboard', function () {
            return view('dashboard');
        }
    )->name('dashboard');

    //Route::resource('projects', App\Http\Controllers\ProjectController::class);

    Route::get('projects', [ProjectController::class, 'index'])->name('pages.projects.creations.index');
    Route::get('projects/create', [ProjectController::class, 'create'])->name('pages.projects.creations.create');
    Route::get('projects/{project}', [ProjectController::class, 'show'])->name('pages.projects.creations.show');
    Route::get('projects/{project}/edit', [ProjectController::class, 'edit'])->name('pages.projects.creations.edit');
    

});