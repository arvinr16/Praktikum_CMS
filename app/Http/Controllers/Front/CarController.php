<?php
// ============================================================
//  FILE: app/Http/Controllers/Front/CarController.php
//  REVISI dari versi PDF — index() sekarang menerima filter
//  brand & status dari query string (?brand=1&status=available)
//  yang dikirim oleh form filter di cars/index.blade.php
// ============================================================

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Brand;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(Request $request)
    {
        $query = Car::with('brand')->latest();

        // Filter berdasarkan brand (dikirim dari tombol brand di halaman cars/index)
        if ($request->filled('brand')) {
            $query->where('brand_id', $request->brand);
        }

        // Filter berdasarkan status: available / sold
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $cars = $query->paginate(12);

        // Daftar brand untuk ditampilkan sebagai tombol filter
        $brands = Brand::orderBy('name')->get();

        return view('cars.index', compact('cars', 'brands'));
    }

    public function show(Car $car) // Route model binding otomatis by slug
    {
        return view('cars.show', compact('car'));
    }
}
