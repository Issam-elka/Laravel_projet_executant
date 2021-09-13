<?php

use App\Http\Controllers\AvatarController;
use App\Http\Controllers\ImageController;
use App\Models\Avatar;
use App\Models\Categorie;
use App\Models\Image;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    $users = User::all();
    $avatars = Avatar::all();
    return view('dashboard', compact('users', 'avatars'));
})->middleware(['auth'])->name('dashboard');

Route::get('/avatars', function () {
    $avatars = Avatar::all();
    return view('pages.avatars', compact('avatars'));
});
Route::get('/images', function () {
    $images = Image::all();
    $categories = Categorie::all();
    return view('pages.images', compact('images', 'categories'));
});
Route::get('/galerie', function () {
    $images = Image::all();
    $categories = Categorie::all();
    return view('pages.galerie', compact('images', 'categories'));
});


Route::resource('avatar', AvatarController::class);
Route::resource('image', ImageController::class);


Route::get('/utilisateurs', function () {
    $users = User::all();
    $avatars = Avatar::all();
    return view('pages.utilisateurs', compact('users', 'avatars'));
});



require __DIR__.'/auth.php';