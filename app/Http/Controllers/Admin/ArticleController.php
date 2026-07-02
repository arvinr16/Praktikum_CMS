<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::with('category')->latest()->paginate(12);
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('admin.articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'category_id'   =>  'required|exists:categories,id',
            'title'         =>  'required|string|max:200',
            'image'         =>  'required|image|mimes:jpg,jpeg,png,webp|max:5120',
            'content'       =>  'required|string'
        ]);
        $data['slug'] = Str::slug($data['title']);
        $data['image'] = $request->file('image')->store('articles', 'public');
        Article::create($data);
        return redirect()->route('admin.articles.index')-with('success', 'Artikel berhasil ditambahkan!');
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
    public function edit(Article $article)
    {
        $categories = Category::orderBy('name')->get();
        return view('admin.articles.edit', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $data = $request->validate([
            'category_id'   =>  'required|exists:categories,id',
            'title'         =>  'required|string|max:200',
            'image'         =>  'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'content'       =>  'required|string'
        ]);
        $data['slug'] = Str::slug($data['title']);
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($article->image);
            $data['image'] = $request->file('image')->store('articles', 'public');
            $article->update($data);
            return redirect()->route('admin.articles.index')->with('success', 'Artike berhasil diperbarui!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        Storage::disk('public')->delete($article->image);
        $article->delete();
        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil dihapus');
    }
}
