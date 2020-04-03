@extends('layout/main')
@section('content')
@if (session('status'))
                <div class="alert alert-success">
                    {{session ('status')}}
                </div>
            @endif
<div class="container">
    <div class="row">
            <h1 class="mt-3">Daftar Pelanggan</h1>          
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Email</th>
                    <th scope="col">No Handphone</th>
                    <th scope="col">No telepon</th>
                    <th scope="col">Opi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($pelanggan as $pel)
                    <tr>
                        <th scope="row">{{ $loop->iteration}}</th>
                        <td>{{$pel->nama}}</td>
                        <td>{{$pel->alamat}}</td>
                        <td>{{$pel->email}}</td>
                        <td>{{$pel->no_hp}}</td>
                        <td>
                        <a href="{{$pel->id}}/edit" class="btn btn-success">Ubah</a>
                        <form action="/pelanggan/{{ $pel->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Data Akan dihapus ?')">Hapus</button>
                        </form>
                        <a href="/pelanggan/{{$pel->id}}" class="btn btn-info">Lihat</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection 