<?php

use App\Http\Controllers\AvatarController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Image;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard/gallery', function () {
        $images = Image::all();
        return view('dashboard.pages.gallery.index', compact('images'));
    }); // INDEX

    Route::get('/dashboard/gallery/{id}/download', function ($id) {
        $image = Image::find($id);
        return response()->download("storage/img/" . $image->fileName);
    }); // DOWNLOAD

    Route::get('dashboard/livewire-image', function () {
        return view('dashboard.pages.livewire-image.index');
    });

    Route::resource('/dashboard/post', PostController::class);
    Route::get('/dashboard/blog', function () {
        $posts = Post::all();
        $colors = ['red', 'yellow', 'green', 'blue', 'indigo', 'purple', 'pink'];
        return view('dashboard.pages.blog.index', compact('posts', 'colors'));
    });
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::resource('/dashboard/avatar', AvatarController::class);
    Route::resource('/dashboard/category', CategorieController::class);
    Route::resource('/dashboard/image', ImageController::class);
    Route::resource('/dashboard/user', UserController::class);
});

require __DIR__ . '/auth.php';
