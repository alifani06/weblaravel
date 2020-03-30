<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Material;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //query builder
        // $barang = DB::table('materials')->get();

        //classmodel
        $material = Material::all();
        return view('materials.index', compact('material'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $material = new Material;
        // $material->nama = $request->nama;
        // $material->kode = $request->kode;
        // $material->ukuran = $request->ukuran;
        // $material->save();

        //valdasi
        $request->validate([
            'nama' => 'required',
            'kode' => 'required|size:4',
            'supplier_id' => 'required',
            'deskripsi' => 'required',
            'jenis' => 'required'

        ]);

        //menggunakn fillabel di model
        Material::create($request->all());
        return redirect('/materials/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Material $material)
    {
        return view('materials/lihat', compact('material'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Material $material)
    {
        return view('materials/edit', compact('material'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Material $material)
    {
        $request->validate([
            'nama' => 'required',
            'kode' => 'required|size:4',
            'supplier_id' => 'required',
            'deskripsi' => 'required',
            'jenis' => 'required'

        ]);
        Material::where('id',$material->id)
            ->update([
                'nama' => $request->nama,
                'kode' => $request->kode,
                'supplier_id' => $request->supplier_id,
                'deskripsi' => $request->deskripsi,
                'jenis' => $request->jenis,
            ]);
            return redirect('/materials/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Material $material)
    {
        Material::destroy($material->id);
        return redirect('/materials/index'); 
    }
}
