<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', 'App\Http\Controllers\Auth\LoginController@login_page')->name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login.auth');
Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@register_page')->name('register');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register')->name('register.auth');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', 'App\Http\Controllers\Admin\DashboardController')->name('admin.dashboard');
    Route::prefix('post')->namespace('App\Http\Controllers\Admin\Post')->group(function () {
        Route::get('/', 'IndexController')->name('admin.post.index');
        Route::get('/create', 'CreateController')->name('admin.post.create');
        Route::post('/', 'StoreController')->name('admin.post.store');
        Route::get('/{id}', 'ViewController')->name('admin.post.view');
        Route::get('/{id}/edit', 'EditController')->name('admin.post.edit');
        Route::put('/{id}/edit', 'UpdateController')->name('admin.post.update');
        Route::delete('/{id}', 'DeleteController')->name('admin.post.delete');
    });
    Route::prefix('category')->namespace('App\Http\Controllers\Admin\Category')->group(function () {
        Route::get('/', 'IndexController')->name('admin.category.index');
        Route::get('/create', 'CreateController')->name('admin.category.create');
        Route::post('/', 'StoreController')->name('admin.category.store');
        Route::get('/{id}', 'ViewController')->name('admin.category.view');
        Route::get('/{id}/edit', 'EditController')->name('admin.category.edit');
        Route::put('/{id}/edit', 'UpdateController')->name('admin.category.update');
        Route::delete('/{id}', 'DeleteController')->name('admin.category.delete');
    });
    Route::prefix('tag')->namespace('App\Http\Controllers\Admin\Tag')->group(function () {
        Route::get('/', 'IndexController')->name('admin.tag.index');
        Route::get('/create', 'CreateController')->name('admin.tag.create');
        Route::post('/', 'StoreController')->name('admin.tag.store');
        Route::get('/{id}', 'ViewController')->name('admin.tag.view');
        Route::get('/{id}/edit', 'EditController')->name('admin.tag.edit');
        Route::put('/{id}/edit', 'UpdateController')->name('admin.tag.update');
        Route::delete('/{id}', 'DeleteController')->name('admin.tag.delete');
    });
});
Route::middleware(['auth', 'moderator'])->prefix('moderator')->group(function () {
    Route::get('/', 'App\Http\Controllers\Admin\DashboardController')->name('moderator.dashboard');
    Route::prefix('post')->namespace('App\Http\Controllers\Moderator\Post')->group(function () {
        Route::get('/', 'IndexController')->name('moderator.post.index');
        Route::get('/{id}', 'ViewController')->name('moderator.post.view');
        Route::get('/{id}/edit', 'EditController')->name('moderator.post.edit');
        Route::put('/{id}/edit', 'UpdateController')->name('moderator.post.update');
    });
    Route::prefix('category')->namespace('App\Http\Controllers\Moderator\Category')->group(function () {
        Route::get('/', 'IndexController')->name('moderator.category.index');
        Route::get('/{id}', 'ViewController')->name('moderator.category.view');
        Route::get('/{id}/edit', 'EditController')->name('moderator.category.edit');
        Route::put('/{id}/edit', 'UpdateController')->name('moderator.category.update');
    });
    Route::prefix('tag')->namespace('App\Http\Controllers\Moderator\Tag')->group(function () {
        Route::get('/', 'IndexController')->name('moderator.tag.index');
        Route::get('/{id}', 'ViewController')->name('moderator.tag.view');
        Route::get('/{id}/edit', 'EditController')->name('moderator.tag.edit');
        Route::put('/{id}/edit', 'UpdateController')->name('moderator.tag.update');
    });
});

