@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
            <div class="card border border-info-subtle">
                <div class="card-header">{{ __('Menu') }}</div>
                <div class="card-body p-0">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('home') }}">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Kelola Template
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Pengguna
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Laporan
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-9">
            <div class="card border border-info-subtle">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <p>{{ __('Selamat datang di dashboard admin!') }}</p>
                    <p>{{ __('Pilih menu di sebelah kiri untuk mengelola data.') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
