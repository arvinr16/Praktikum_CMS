<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\CarController;
use App\Http\Controllers\Front\ArticleController;
use App\Http\Controllers\Front\PageController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CarController as AdminCarController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ArticleController as AdminArticleController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// => PUBLIC - Halaman yang tidak perlu autentikasi/login
Route::get('/', [HomeController::class, 'index'])->name('home');

// Katalog & Detail Mobil
Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
Route::get('/cars/{car:slug}', [CarController::class, 'show'])->name('cars.show');

// Artikel
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{article:slug}', [ArticleController::class, 'show'])->name('articles.show');

// Halaman Statis (About, Services, dll)
Route::get('/pages/{page:slug}', [PageController::class, 'show'])->name('pages.show');

// Kontak
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// => AUTENTIKASI - Bawaan Laravel Breeze
Route::get('/dashboard', function () {
    if (auth()->user()->is_admin) {
        return redirect()->route('admin.dashboard');
    }
    return redirect()->route('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// => ADMIN - Halaman yang memerlukan autentikasi + role admin
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    
    // 1. Dashboard
    Route::get('/', function () {
        $totalCars = \App\Models\Car::count();
        $availableCars = \App\Models\Car::where('status', 'available')->count();
        $soldCars = \App\Models\Car::where('status', 'sold')->count();
        $unreadMessages = \App\Models\Message::where('is_read', false)->count();
        $recentCars = \App\Models\Car::with('brand')->latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalCars',
            'availableCars',
            'soldCars',
            'unreadMessages',
            'recentCars'
        ));
    })->name('dashboard');

    // 2. Katalog - Brand (tanpa show)
    Route::resource('brands', BrandController::class)->except(['show']);

    // Katalog - Car (tanpa show)
    Route::resource('cars', AdminCarController::class)->except(['show']);

    // 3. Konten - Category (tanpa show)
    Route::resource('categories', CategoryController::class)->except(['show']);

    // Konten - Article (tanpa show)
    Route::resource('articles', AdminArticleController::class)->except(['show']);

    // Konten - Page (tanpa show)
    Route::resource('pages', AdminPageController::class)->except(['show']);

    // 4. CRM - Messages (hanya index, show, destroy)
    Route::resource('messages', MessageController::class)->only(['index', 'show', 'destroy']);

    // Tandai pesan sudah dibaca
    Route::patch('messages/{message}/read', [MessageController::class, 'markRead'])->name('messages.markRead');
});