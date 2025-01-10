<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\AdminTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminTemplateController extends Controller
{
    public function index()
    {
        $templates = AdminTemplate::with('category')->get(); // Mengambil semua template dengan relasi kategori
        return view('admin.templates.index', compact('templates'));
    }

    public function create()
    {
        $categories = Category::all(); // Ambil semua kategori
        return view('admin.templates.create', compact('categories'));
    }

    public function store(Request $request)
    {
        Log::info('Input data:', $request->all()); // Log input data untuk debugging

        // Validasi input
        $validated = $request->validate([
            'name_templates' => 'required|string|max:255',
            'description' => 'nullable|string',
            'pictures' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'id_category' => 'required|integer|exists:categories,id_category',
            'status_templates' => 'required|boolean',
            'fitur_templates' => 'nullable|string',
            'file_templates' => 'nullable|file|mimes:zip,rar|max:5120',
        ]);

        // Log validasi
        Log::info('Validated data:', $validated);

        // Upload gambar jika ada
        if ($request->hasFile('pictures')) {
            $validated['pictures'] = $request->file('pictures')->store('pictures', 'public');
        }

        // Upload file template jika ada
        if ($request->hasFile('file_templates')) {
            $validated['file_templates'] = $request->file('file_templates')->store('templates', 'public');
        }

        // Simpan ke database
        AdminTemplate::create($validated);

        return redirect()->route('templates.index')->with('success', 'Template berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Ambil data berdasarkan id
        $templates = AdminTemplate::findOrFail($id);
        $categories = Category::all();

        // Kirim data ke view edit
        return view('admin.templates.edit', compact('templates', 'categories'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'name_templates' => 'required|string|max:255',
            'description' => 'nullable|string',
            'pictures' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'id_category' => 'required|integer|exists:categories,id_category',
            'status_templates' => 'required|boolean',
            'fitur_templates' => 'nullable|string',
            'file_templates' => 'nullable|file|mimes:zip,rar|max:5120',
        ]);

        // Ambil data berdasarkan id
        $templates = AdminTemplate::findOrFail($id);

        // Upload gambar jika ada
        if ($request->hasFile('pictures')) {
            // Hapus gambar lama jika ada
            if ($templates->pictures) {
                Storage::disk('public')->delete($templates->pictures);
            }
            $validated['pictures'] = $request->file('pictures')->store('pictures', 'public');
        }

        // Upload file template jika ada
        if ($request->hasFile('file_templates')) {
            // Hapus file lama jika ada
            if ($templates->file_templates) {
                Storage::disk('public')->delete($templates->file_templates);
            }
            $validated['file_templates'] = $request->file('file_templates')->store('templates', 'public');
        }

        // Update data
        $templates->update($validated);

        return redirect()->route('templates.index')->with('success', 'Template berhasil diperbarui!');
    }

    public function destroy($id)
    {
        // Ambil data berdasarkan id
        $templates = AdminTemplate::findOrFail($id);

        // Hapus file gambar jika ada
        if ($templates->pictures) {
            Storage::disk('public')->delete($templates->pictures);
        }

        // Hapus file template jika ada
        if ($templates->file_templates) {
            Storage::disk('public')->delete($templates->file_templates);
        }

        // Hapus data dari database
        $templates->delete();

        return redirect()->route('templates.index')->with('success', 'Template berhasil dihapus!');
    }
}
