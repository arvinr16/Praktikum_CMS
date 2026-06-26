<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::with('brand')->latest()->paginate(12);
        return view('cars.index', compact('cars'));
    }

    public function show(Car $car) // Route model binding otomatis dari slug
    {
        return view('cars.show', compact('car'));
    }
}
