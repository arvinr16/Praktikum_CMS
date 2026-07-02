<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
// Front Controllers
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\CarController;
use App\Http\Controllers\Front\ArticleController;
use App\Http\Controllers\Front\PageController;
use App\Http\Controllers\Front\ContactController;
// Admin Controllers
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CarController as AdminCarController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ArticleController as AdminArticleController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\MessageController;
// Auth (Breeze)
use App\Http\Controllers\ProfileController;



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
// Route Home/Index


// => PUBLIC - Halaman yang tidak perlu autentikasi/login
// 1. Home/Index
Route::get('/', [HomeController::class, 'index'])->name('home');

// 2. Katalog & Detail Mobil
Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
Route::get('/cars/{car:slug}', [CarController::class, 'show'])->name('cars.show');

// 3. Artikel
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{article:slug}', [ArticleController::class, 'show'])->name('articles.show');

// 4. Page atau Halaman Statis (About, Services, dll)
Route::get('/pages/{page:slug}', [PageController::class, 'show'])->name('pages.show');

// 5. Kontak
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/contact', [ContactController::class, 'store'])->name('contact.store');
// Route::get('/', function () {
//     return view('welcome');
// });

// Autentikasi bawaan Breeze
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__ . '/auth.php';

// => ADMIN - Halaman yang memerlukan autentikasi/login
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
// 1. Dashboard
Route::get('/', fn () => view('admin.dashboard'))->name('dashboard');

// 2. Katalog
// Brand
Route::resource('brands', BrandController::class);
// except show for 'brands'
Route::resource('brands', BrandController::class)->except(['show']);

// Car
Route::resource('cars', AdminCarController::class);
// except show for 'cars'
Route::resource('cars', AdminCarController::class)->except(['show']);

// 3. Konten
// Category
Route::resource('categories', CategoryController::class);
// except show for 'categories'
Route::resource('categories', CategoryController::class)->except(['show']);

// Article
Route::resource('articles', AdminArticleController::class);
// except show for 'articles'
Route::resource('articles', AdminArticleController::class)->except(['show']);

// Page
Route::resource('pages', AdminPageController::class);

// => CRM - Hanya index, show, destroy (pesan dari pengunjung, bukan admin)
Route::resource('messages', MessageController::class)->only(['index', 'show', 'destroy']);

// => Tandai pesan sudah dibaca: PATCH /admin/messages/{message}/read
Route::patch('messages/{message}/read', [MessageController::class, 'markRead'])->name('messages.markRead');
});
