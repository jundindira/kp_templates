<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {

        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    // Menyimpan kategori baru
    public function store(Request $request)
    {
        $request->validate([
            'name_category' => 'required|string|max:255', // Tambahkan validasi untuk kolom name_category
        ]);

        Category::create([
            'name_category' => $request->name_category,
        ]);

        return redirect()->back()->with('success', 'Category added successfully.');
    }

    // Menampilkan form edit kategori
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    // Memperbarui kategori
    public function update(Request $request, Category $category)
    {
        $request->validate(['name_category' => 'required|string|max:255']);

        $category->update([
            'name_category' => $request->name_category,
        ]);

        return redirect()->route('category.index')->with('success', 'Category updated successfully.');
        // return redirect()->back()->with('success', 'Category updated successfully.');
    }

    // Menghapus kategori
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->back()->with('success', 'Category deleted successfully.');
        // return redirect()->route('category.index')->with('success', 'Category deleted successfully.');
    }
}
