<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; // Model untuk kategori
use App\Models\AdminTemplate; // Model untuk template

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('dashboard');

        // Ambil total kategori dan template
        $totalCategories = Category::count(); // Mengambil total kategori
        $totalTemplates = AdminTemplate::count(); // Mengambil total template

        return view('dashboard', compact('totalCategories', 'totalTemplates'));
    }
}
