@extends('layout/main')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Tambah Data Material</h1>
    <form method="post" action="/materials">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{old('nama')}}">
            @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
            <label for="kode">Kode</label>
            <input type="text" class="form-control @error('kode') is-invalid @enderror" id="kode" name="kode" value="{{old('kode')}}">
            @error('kode')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
            <label for="supplier_id">Kode Supplier</label>
            <input type="text" class="form-control @error('supplier_id') is-invalid @enderror" id="supplier_id" name="supplier_id" value="{{old('supplier_id')}}">
            @error('supplier_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" value="{{old('deskripsi')}}">
            @error('deskripsi')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
            <label for="jenis">jenis</label>
            <input type="text" class="form-control @error('jenis') is-invalid @enderror" id="jenis" name="jenis" value="{{old('jenis')}}">
            @error('jenis')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
<button type="submit" class="btn btn-primary">Tambah</button>
    </form>

        </div>
    </div>
</div>
@endsection 