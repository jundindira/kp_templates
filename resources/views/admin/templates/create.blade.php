@extends('dashboard')

@section('title', 'Tambah Template')

@section('content')
    <h1 class="mt-4">Templates</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Create Template</li>
    </ol>

    <form action="{{ route('templates.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Input Nama Template -->
        <label for="name_templates">Name Template</label>
        <input type="text" id="name_templates" name="name_templates" class="form-control mb-2" required>

        <!-- Dropdown Kategori -->
        <label for="id_category">Category</label>
        <select name="id_category" id="id_category" class="form-select mb-2" required>
            <option value="" disabled selected>Open this select menu</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id_category }}">{{ $category->name_category }}</option>
            @endforeach
        </select>

        <!-- Input Deskripsi -->
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control mb-2" rows="3" required></textarea>

        <!-- Upload Gambar -->
        <label for="pictures">Picture</label>
        <input type="file" id="pictures" name="pictures" class="form-control mb-2" accept="image/*" required>

        <!-- Upload File Template -->
        <label for="file_templates">Upload File</label>
        <input type="file" id="file_templates" name="file_templates" class="form-control mb-2" required>

        <!-- Input Fitur -->
        <label for="fitur_templates">Fitur</label>
        <textarea name="fitur_templates" id="fitur_templates" class="form-control mb-2" rows="3" required></textarea>

        <!-- Dropdown Status -->
        <label for="status_templates">Status</label>
        <select name="status_templates" id="status_templates" class="form-select mb-2" required>
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>
        <!-- Tombol -->
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" class="btn btn-danger btn-md" onclick="window.history.back()">Back</button>
            <button type="submit" class="btn btn-primary btn-md me-md-2" type="button">Add Template</button>
        </div>
    </form>
@endsection
