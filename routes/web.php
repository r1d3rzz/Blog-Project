<?php

use App\Http\Controllers\BlogController;
use App\Models\Category;
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

Route::get('/', [BlogController::class,'index']);

Route::get('/blogs/{blog:slug}', [BlogController::class,'show']);

Route::get('/users/{user:username}', function (User $user) {
    return view('blogs.index', [
        'blogs' => $user->blogs
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('blogs.index', [
        'blogs' => $category->blogs
    ]);
});
