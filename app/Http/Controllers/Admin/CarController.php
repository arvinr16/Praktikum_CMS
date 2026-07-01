<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::with('brand')->latest()->paginate(12);
        return view('admin.cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::orderBy('name')->get();
        return view('admin.cars.create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'brand_id'      =>  'required|exists:brands,id',
            'name'          =>  'required|string|max:150',
            'price'         =>  'required|numeric|min:0',
            'year'          =>  'required|integer|min:1990|max:' . date('Y'),
            'image'         =>  'required|image|mimes:jpg,jpeg,png,webp|max:5120',
            'description'   =>  'required|string',
            'status'        =>  'required|in:available,sold',
            'transmission'  =>  'nullable|in:Manual,Matic',
            'mileage'       =>  'nullable|integer|min:0'
        ]);
        $data['slug'] = Str::slug($data['name'] . '_' . $data['year']);
        $data['image'] = $request->file('image')->store('cars', 'public');
        Car::create($data);
        return redirect()->route('admin.cars.index')->with('success', 'Mobil berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
        
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        $brands = Brand::orderBy('name')->get();
        return view('admin.cars.edit', compact('car', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $data = $request->validate([
            'brand_id'      =>  'required|exists:brands,id',
            'name'          =>  'required|string|max:150',
            'price'         =>  'required|numeric|min:0',
            'year'          =>  'required|integer|min:1990|max:' . date('Y'),
            'image'         =>  'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'description'   =>  'required|string',
            'status'        =>  'required|in:available,sold',
            'transmission'  =>  'nullable|in:Manual,Matic',
            'mileage'       =>  'nullable|integer|min:0'
        ]);

        $data['slug'] = Str::slug($data['name'] . '_' . $data['year']);
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($car->image);
            $data['image'] = $request->file('image')->store('cars', 'public');
        }

        $car->update($data);
        return redirect()->route('admin.cars.index')->with('success', 'Data mobil berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        Storage::disk('public')->delete($car->image);
        $car->delete();
        return redirect()->route('admin.cars.index')->with('success', 'Mobil berhasil dihapus!');
    }
}
