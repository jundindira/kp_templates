@extends('dashboard')

@section('title', 'Category')

@section('content')

    <h1 class="mt-4">Category</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Category</li>
    </ol>

    <!-- Form Tambah Kategori -->
    <form class="form-floating" action="{{ route('category.store') }}" method="POST">
        @csrf
        <input type="text" class="form-control" id="floatingInputValue" name="name_category" placeholder="Category Name" required>
        <label for="floatingInputValue">Write here</label>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary btn-md me-md-2" type="button">Add Category</button>
        </div>
    </form>

    <br>

    <!-- Tabel Kategori -->
    <table class="table table-bordered table-hover">
        <thead class="table-light">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->name_category }}</td>
                <td>
                    <!-- Edit -->
                    <a href="{{ route('category.edit', $category->id_category) }}" class="btn btn-primary btn-sm">Edit</a>

                    <!-- Delete -->
                    <form action="{{ route('category.destroy', $category->id_category) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="d-flex justify-content-end mt-3">
        {{ $categories->links() }}  <!-- Pagination links -->
    </div>

@endsection
