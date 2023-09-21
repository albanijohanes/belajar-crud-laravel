@extends('include.layout')
@section('title', 'CRUD')
@extends('include.navbar')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="my-4">Edit Produk</h1>

        <div class="card mb-4">
            <div class="card-body">
                <form onsubmit="return confirm('Apakah anda yakin untuk diubah?')" action="{{ route('main.update', $mahasiswa->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control @error('nama_produk') is-invalid @enderror"
                            id="nama_produk" value="{{ $mahasiswa->nama }}" name="nama"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">harga</label>
                        <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga"
                            value="" name="nim" value="{{ $mahasiswa->nim }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('main.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</main>
