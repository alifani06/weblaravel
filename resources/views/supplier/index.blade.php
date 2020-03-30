@extends('layout/main')
@section('content')
@if (session('status'))
                <div class="alert alert-success">
                    {{session ('status')}}
                </div>
            @endif
<div class="container">
    <div class="row">
            <h1 class="mt-3">Daftar Supplier</h1>          
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Suplier</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Email</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">jenis</th>
                    <th scope="col">Opi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($supplier as $sup)
                    <tr>
                        <th scope="row">{{ $loop->iteration}}</th>
                        <td>{{$sup->nama}}</td>
                        <td>{{$sup->alamat}}</td>
                        <td>{{$sup->email}}</td>
                        <td>{{$sup->no_hp}}</td>
                        <td>{{$sup->material->jenis}}</td>
                        <td>
                        <a href="{{$sup->id}}/edit" class="btn btn-success">Ubah</a>
                        <form action="/supplier/{{ $sup->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Data Akan dihapus ?')">Hapus</button>
                        </form>
                        <a href="/supplier/{{$sup->id}}" class="btn btn-info">Lihat</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection 