<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostImageController;
use App\Http\Controllers\UserController;


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

    Route::get('posts', [PostController::class, 'index'])->name('post.index');
    Route::get('post/create', [PostController::class, 'create'])->name('post.create');
    Route::get('post/{id}', [PostController::class, 'show'])->name('post.show');

    Route::get('galeries/posts', [PostImageController::class, 'create'])->name('postImages.create');
    Route::post('galeries/store', [PostImageController::class, 'store'])->name('postImage.store');

    Route::get('users', [UserController::class, 'index'])->name('users.index');

    
    
    //'livewire.post.index'
    //'livewire.post.create'   

    

});