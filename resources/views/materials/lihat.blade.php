@extends('layout/main')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-4">
            <h1 class="mt-3">Detail Material</h1>

            <div class="card">
                <div class="card-body">
                <h3 class="card-title"><b>{{$material->nama}}</b></h3>
                <h6 class="card-subtitle mb-2 text-muted">Kode Material : {{$material->kode}}</h6>
                <p class="card-text">{{$material->deskripsi}}</p>
                <p class="card-text">{{$material->jenis}}</p>
                <a href="/materials/index" class="card-link">Kembali</a>
             
                </div>
            </div>

        </div>
    </div>
</div>
@endsection 