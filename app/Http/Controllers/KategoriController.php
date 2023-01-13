<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriBarang;

class KategoriController extends Controller
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
        $kategori = KategoriBarang::all();

        return view('kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        KategoriBarang::create([
            'nama_kategori_barang' => $request->nama_kategori_barang,
        ]);

        return redirect('/master/kategori')->with('success', 'Data Berhasil Ditambahkan');
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
        $kategori = KategoriBarang::find($id);

        // dd($kategori);
        return view('kategori.edit',compact('kategori'));
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
        KategoriBarang::where('id',$id)->update(
            [
                'nama_kategori_barang' => $request->nama_kategori_barang,
            ]
        );

        return redirect('master/kategori')->with('success', 'Data Baerhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = KategoriBarang::findOrFail($id);
        $kategori->delete();

        return back()->with('success','Data Berhasil Di Hapus');
    }
}
