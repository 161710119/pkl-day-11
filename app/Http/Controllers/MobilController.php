<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobil;
use App\Tipe;
use App\Kategori;
class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $mobils = Mobil::with('Tipe','Kategori')->get();
        
        return view('mobil.index',compact('mobils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipes = Tipe::all();
        $kategoris = Kategori::all();
        return view('mobil.create',compact('tipes','kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|',
            'warna' => 'required|',
            'transmisi' => 'required',
            'tahun_keluar' => 'required|',
            'harga' => 'required|',
            'deskripsi' => 'required|',
            'tipe_id' => 'required',
            'kategori_id' => 'required|'
        ]);
        $mobils = new Mobil;
        $mobils->nama = $request->nama;
        $mobils->warna = $request->warna;
        $mobils->transmisi = $request->transmisi;
        $mobils->tahun_keluar = $request->tahun_keluar;
        $mobils->harga = $request->harga;
        $mobils->deskripsi = $request->deskripsi;
        $mobils->tipe_id = $request->tipe_id;
        $mobils->kategori_id = $request->kategori_id;
        $mobils->save();
        return redirect()->route('mobils.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mobils = Mobil::findOrFail($id);
        return view('mobil.show',compact('mobils'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobils = Mobil::findOrFail($id);
        $tipes = Tipe::all();
        $selectedtipe = Mobil::findOrFail($id)->tipe_id;
        $kategoris = Kategori::all();
        $selectedktg = Mobil::findOrFail($id)->kategori_id;
        return view('mobil.edit',compact('mobils','tipes','selectedtipe','kategoris','selectedktg'));
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
        $this->validate($request,[
            'nama' => 'required|',
            'warna' => 'required|',
            'transmisi' => 'required',
            'tahun_keluar' => 'required|',
            'harga' => 'required|',
            'deskripsi' => 'required|',
            'tipe_id' => 'required',
            'kategori_id' => 'required|'
        ]);
        $mobils = Mobil::findOrFail($id);
        $mobils->nama = $request->nama;
        $mobils->warna = $request->warna;
        $mobils->transmisi = $request->transmisi;
        $mobils->tahun_keluar = $request->tahun_keluar;
        $mobils->harga = $request->harga;
        $mobils->deskripsi = $request->deskripsi;
        $mobils->tipe_id = $request->tipe_id;
        $mobils->kategori = $request->kategori;
        $mobils->save();
        return redirect()->route('mobils.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mobils = Mobil::findOrFail($id);
        $mobils->delete();
        return redirect()->route('mobils.index');
    }
}
