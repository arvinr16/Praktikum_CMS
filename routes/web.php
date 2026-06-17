<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;


/*
Notes!
Kita bisa membuat untuk admin kira2 seperti ini:
=> use App\Http\Controllers\Admin\FrontController; <=
*/

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

// Route yg tidak perlu login
Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/pages', [FrontController::class, 'pages'])->name('pages');
Route::get('/cars', [FrontController::class, 'cars'])->name('cars');
Route::get('/brands', [FrontController::class, 'brands'])->name('brands');
Route::get('/articles', [FrontController::class, 'articles'])->name('articles');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('/test', [FrontController::class, 'test'])->name('test');
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route yg perlu login
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
