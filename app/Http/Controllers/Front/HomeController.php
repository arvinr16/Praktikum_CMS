<?php
// ============================================================
//  FILE: app/Http/Controllers/Front/HomeController.php
//  REVISI dari versi PDF — sekarang mengirim data untuk home.blade.php
// ============================================================

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        // Mobil unggulan untuk hero section (mobil terbaru yang berstatus tersedia)
        $featuredCar = Car::where('status', 'available')
                           ->latest()
                           ->first();

        // 3 mobil terbaru untuk section "Featured Collection"
        $latestCars = Car::with('brand')
                          ->where('status', 'available')
                          ->latest()
                          ->take(3)
                          ->get();

        // 3 artikel terbaru untuk section "Latest Insights"
        $latestArticles = Article::with('category')
                                  ->latest()
                                  ->take(3)
                                  ->get();

        return view('home', compact('featuredCar', 'latestCars', 'latestArticles'));
    }
}
