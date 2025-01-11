@extends('dashboard')

@section('title', 'Dashboard')

@section('content')

    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>

    <?php
        $totalCategories = \App\Models\Category::count(); // Mengambil total kategori
        $totalTemplates = \App\Models\AdminTemplate::count(); // Mengambil total template
    ?>

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Total Categories</div>
                    <div class="card-body-h1">
                        <h1>{{ $totalCategories }}</h1> <!-- Menampilkan total kategori -->
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ url('category') }}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">Total Templates</div>
                    <div class="card-body-h1">
                        <h1>{{ $totalTemplates }}</h1> <!-- Menampilkan total template -->
                    </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ url('templates') }}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
@endsection
