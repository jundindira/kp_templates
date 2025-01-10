@extends('dashboard')

@section('title', 'Edit Category')

@section('content')

    <h1 class="mt-4">Category</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Edit Category</li>
    </ol>

    <!-- Pesan Sukses -->
    {{-- @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif --}}

    <!-- Form Edit -->
    <form class="form-floating" action="{{ route('category.update', $category->id_category) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <label for="floatingStaticValue" class="col-sm-2 col-form-label">Name Category</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="floatingStaticValue" name="name_category" value="{{ $category->name_category }}" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="floatingInputValue" class="col-sm-2 col-form-label">Update</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="floatingInputValue" name="name_category" required>
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" class="btn btn-danger btn-md" onclick="window.history.back()">Back</button>
            <button type="submit" class="btn btn-primary btn-md me-md-2" type="button">Update Category</button>
        </div>
    </form>

@endsection
