@extends('include.layout')
@section('title', 'CRUD')
@extends('include.navbar')
@section('content')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Mahasiswa</h1>
    <!-- Button to trigger the modal -->
    <a class="btn btn-primary mb-2" href="{{ route('main.create') }}" role="button">Create New</a>
</div>
<hr />
<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Kelamin</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $mahasiswa->nama }}</td>
            <td>{{ $mahasiswa->nim }}</td>
            <td>
                <a href="{{ route('main.edit', $mahasiswa->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <a href="{{ route('main.delete', $mahasiswa->id) }}" class="btn btn-sm btn-danger">Delete</a>
            </td>
        </tr>
    </tbody>
</table>
@endsection
