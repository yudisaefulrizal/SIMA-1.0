<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MuhaffizhsController;
use App\Http\Controllers\AbsensiSIswaController;
use App\Http\Controllers\DasboardPostController;
use App\Http\Controllers\AdminCategoryController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\DashboardController;

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
    return view(
        'home',
        [
            "title" => "Home",
            "active" => 'home'
        ]
    );
});

Route::get('/about', [AboutController::class, 'about']);
Route::get('/blog', [PostController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post By Category : $category->name",
        'active' => 'categories',
        'posts' => $category->posts->load('category', 'author')

    ]);
});
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'post categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});
Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'authenticate']);
Route::post('logout', [LoginController::class, 'logout']);
Route::get('register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store']);

Route::resource('/dashboard', DashboardController::class)->middleware('auth');


Route::get('/dashboard/posts/checkSlug', [DasboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DasboardPostController::class)->middleware('auth');
Route::resource('/dashboard/categories', AdminCategoryController::class)->middleware('auth');
Route::resource('/dashboard/siswa', SiswaController::class)->middleware('auth');
Route::resource('/dashboard/absen', AbsenController::class)->middleware('auth');
Route::resource('muhaffizh', MuhaffizhsController::class);
