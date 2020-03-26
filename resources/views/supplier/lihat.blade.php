@extends('layout/main')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-4">
            <h1 class="mt-3">Detail Supplier</h1>

            <div class="card">
                <div class="card-body">
                <h4 class="card-title"><b>{{$supplier->nama}}</b></h5>
                <h6 class="card-subtitle mb-4 text-muted"><u>{{$supplier->alamat}}</u></h6>
                <p class="card-text"><b>Email </b><i>{{$supplier->email}}</i></p>
                <p class="card-text"><b>No HP </b>{{$supplier->no_hp}}</p>
                <p class="card-text"><b>jenis </b>{{$supplier->jenis}}</p>
                <a href="/supplier/index" class="card-link">Kembali</a>
             
                </div>
            </div>

        </div>
    </div>
</div>
@endsection 