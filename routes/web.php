<?php

use App\Http\Controllers\AvatarController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;
use App\Models\Image;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/dashboard/gallery', function () {
    $images = Image::all();
    return view('dashboard.pages.gallery.index', compact('images'));
}); // INDEX

Route::get('/dashboard/gallery/{id}/download', function ($id) {
    $image = Image::find($id);
    return response()->download("storage/img/" . $image->fileName);
}); // DOWNLOAD


Route::middleware(['auth', 'isAdmin'])->group( function () {
    Route::resource('/dashboard/avatar', AvatarController::class);
    Route::resource('/dashboard/category', CategorieController::class);
    Route::resource('/dashboard/image', ImageController::class);
    Route::resource('/dashboard/user', UserController::class);
});


require __DIR__.'/auth.php';
