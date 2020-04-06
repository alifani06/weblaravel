<?php

namespace App\Http\Controllers;

use App\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pelanggan = DB::table('pelanggan')->paginate(5);
        // return view('pelanggan.index', compact('pelanggan'));
        return view('pelanggan.index',['pelanggan' => $pelanggan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelanggan.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'no_hp' => 'required|size:12'

        ]);

        //menggunakn fillabel di model
        Pelanggan::create($request->all());
        return redirect('/pelanggan/index')->with('status', 'Data Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelanggan $pelanggan)
    {
        return view('pelanggan/lihat', compact('pelanggan'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelanggan $pelanggan)
    {
        return view('pelanggan/edit', compact('pelanggan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelanggan $pelanggan)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'no_hp' => 'required|size:12'

        ]);
        Pelanggan::where('id',$pelanggan->id)
            ->update([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'email' => $request->email,
                'email' => $request->email,
                'no_hp'=> $request->no_hp
            ]);
            return redirect('/pelanggan/index')->with('status', 'Data Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelanggan $pelanggan)
    {
        Pelanggan::destroy($pelanggan->id);
        return redirect('/pelanggan/index')->with('status', 'Data Berhasil dihapus'); 
    }


    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$pelanggan = DB::table('pelanggan')
		->where('nama','like',"%".$cari."%")
		->paginate(5);
 
    		// mengirim data pegawai ke view index
		return view('/pelanggan/index',['pelanggan' => $pelanggan]);
 
	}

}
