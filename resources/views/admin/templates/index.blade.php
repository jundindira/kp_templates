@extends('dashboard')

@section('title', 'Templates')

@section('content')

    <h1 class="mt-4">Templates</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Templates</li>
    </ol>

    <div class="d-grid gap-2 d-md-flex justify-content">
        <a class="btn btn-success btn-md" href="{{ route('templates.create') }}">Add Template</a>
    </div>
    <br>

    <!-- Tabel Templates -->
    <table class="table table-bordered table-hover">
        <thead class="table-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Status</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($templates as $no=>$template)
            <tr>
                <td>{{ $loop->iteration }}</td> <!-- Gunakan $loop->iteration untuk nomor otomatis -->
                <td>{{ $template->name_templates }}</td>
                <td>{{ $template->category->name_category ?? '-' }}</td> <!-- Ambil nama kategori -->
                <td>{{ $template->status_templates ? 'Active' : 'Inactive' }}</td>
                <td>
                    <!-- Edit -->
                    <a href="{{ route('templates.edit', $template->id_template) }}" class="btn btn-primary btn-sm">Edit</a>

                    <!-- Delete -->
                    <form action="{{ route('templates.destroy', $template->id_template) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
