<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::withCount('cars')->latest()->paginate(12);
        return view('admin.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'  =>  'required|string|max:100|unique:brands,name',
            'logo'  =>  'nullable|image|mimes:jpg,jpeg,png,webp|max:1024'
        ]);
        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }
        Brand::create($data);
        return redirect()->route('admin.brands.index')->with('success', 'Brand berhasil ditambahkan!');
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
    public function edit(Brand $brand)
    {
        return view('admin.brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        $data = $request->validate([
            'name'  =>  'required|string|max:100|unique:brands,name,' . $brand->id,
            'logo'  =>  'nullable|image|mimes:jpg,jpeg,png,webp|max:1024'
        ]);
        if ($request->hasFile('logo')) {
            if($brand->logo) Storage::disk('public')->delete($brand->logo);
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }
        $brand->update($data);
        return redirect()->route('admin.brands.index')->with('success', 'Brand berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        if ($brand->logo) Storage::disk('public')->delete($brand->logo);
        $brand->delete();
        return redirect()->route('admin.brands.index')->with('success', 'Brand berhasil dihapus!');
    }
}
