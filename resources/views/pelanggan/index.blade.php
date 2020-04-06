@extends('layout/main')
@section('content')
@if (session('status'))
                <div class="alert alert-success">
                    {{session ('status')}}
                </div>
            @endif

            <nav class="navbar navbar-light bg-light">
                <form class="form-inline" action="{{url('cari')}}" method="GET">
                    <input class="form-control mr-sm-4" type="text" name="cari" placeholder="cari" value="{{ old('cari') }}">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" value="CARI">Search</button>
                </form>
            </nav>  
<div class="container">
    <div class="row">
  
<!-- <form class="form-inline my-2 my-lg-4 "action="{{url('cari')}}" method="GET">
	<input type="text" name="cari" placeholder="Cari Pelanggan" value="{{ old('cari') }}">
	<input class="btn btn-primary" type="submit" value="CARI">
</form>       -->

            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Email</th>
                    <th scope="col">No Handphone</th>
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
            {{ $pelanggan->links() }}
        </div>
    </div>
</div>
@endsection 