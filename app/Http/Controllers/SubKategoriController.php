<?php

namespace App\Http\Controllers;

use App\Models\SubKategoriBarang;
use App\Models\KategoriBarang;
use Illuminate\Http\Request;

class SubKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function index()
    {
        $subKategori = SubKategoriBarang::all();
        return view('sub-kategori.index',compact('subKategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = KategoriBarang::all();
        return view('sub-kategori.create',compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SubKategoriBarang::create([
            'id_kategori' => $request->id_kategori,
            'nama_sub_kategori_brg' => $request->nama_sub_kategori_brg,
        ]);

        return redirect('/master/sub-kategori')->with('success','Data Sub Kategori Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = KategoriBarang::all();
        $subKategori = SubKategoriBarang::find($id);

        return view('sub-kategori.edit',compact('kategori','subKategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        SubKategoriBarang::where('id',$id)->update([
            'id_kategori' => $request->id_kategori,
            'nama_sub_kategori_brg' => $request->nama_sub_kategori_brg,
        ]);

        return redirect('/master/sub-kategori')->with('success','Data Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SubKategoriBarang::find($id)->delete();

        return back()->with('success','Data Berhasil Di Hapus');
    }
}
