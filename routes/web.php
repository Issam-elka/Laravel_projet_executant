<?php

use App\Http\Controllers\AvatarController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\GalerieController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UtilisateurController;
use App\Models\Avatar;
use App\Models\Categorie;
use App\Models\Image;
use App\Models\Role;
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
    // $avatars = Avatar::all();
    $avatars = Avatar::all()->whereNotIn('id',2);
    return view('pages.avatars', compact('avatars'));
})->middleware('auth', 'verif');

Route::get('/images', function () {
    $images = Image::all();
    $categories = Categorie::all();
    return view('pages.images', compact('images', 'categories'));
})->middleware('auth', 'verif');
Route::get('/categories', function () {
    $categories = Categorie::all();
    return view('pages.categories', compact('categories'));
})->middleware('auth', 'verif');

Route::get('/blog', function () {
    return view('pages.blog');
})->middleware('auth', 'verif');



Route::get('/galerie', function () {
    $images = Image::all();
    $categories = Categorie::all();
    return view('pages.galerie', compact('images', 'categories'));
});


Route::resource('avatar', AvatarController::class);
Route::resource('image', ImageController::class);
Route::resource('categorie', CategorieController::class);
Route::get('/categorie/{id}/edit', [CategorieController::class, 'edit']);
Route::put('/categorie/{id}/update', [CategorieController::class, 'update']);

Route::get('/image/{id}/download', [ImageController::class, 'download']);
Route::get('/utilisateur/{id}/edit', [UtilisateurController::class, 'edit'])->name('utilisateur.edit');
Route::put('/utilisateur/{id}/update', [UtilisateurController::class, 'update']);



Route::get('/utilisateurs', function () {
    $users = User::paginate(5);
    $avatars = Avatar::all();
    $roles = Role::all();
    return view('pages.utilisateurs', compact('users', 'avatars', 'roles'));
})->middleware('auth', 'verif');

Route::resource('utilisateur', UtilisateurController::class);
Route::resource('blog', BlogController::class)->middleware('auth', 'verif');


require __DIR__.'/auth.php';