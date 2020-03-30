@extends('layout/main')
@section('content')


<div class="container">

    <div class="row">

         
            <h1 class="mt-3">Daftar Material Bangunan</h1>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Material</th>
                    <th scope="col">Kode Material</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">jenis</th>
                    <th scope="col">Opi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($material as $mtr)
                    <tr>
                        <th scope="row">{{ $loop->iteration}}</th>
                        <td>{{$mtr->nama}}</td>
                        <td>{{$mtr->kode}}</td>
                        <td>{{$mtr->deskripsi}}</td>
                        <td>{{$mtr->jenis}}</td>
                        ?
                        <td>
                        <a href="{{$mtr->id}}/edit" class="btn btn-success">Ubah</a>
                        <form action="/materials/{{ $mtr->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Data Akan dihapus ?')">Hapus</button>
                        </form>
            
                        <a href="/materials/{{ $mtr->id}}" class="btn btn-info">Lihat</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection 