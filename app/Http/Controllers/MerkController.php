<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Merk;
class MerkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $merks = Merk::all();
        return view('merk.index',compact('merks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('merk.create');
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
            'deskripsi' => 'required|'
        ]);
        $merks = new Merk;
        $merks->nama = $request->nama;
        $merks->warna = $request->warna;
        $merks->deskripsi = $request->deskripsi;
        $merks->save();
        return redirect()->route('merks.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $merks = Merk::findOrFail($id);
        return view('merk.show',compact('merks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $merks = Merk::findOrFail($id);
        return view('merk.edit',compact('merks'));
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
            'deskripsi' => 'required|',
        ]);
        $merks = Merk::findOrFail($id);
        $merks->nama = $request->nama;
        $merks->warna = $request->warna;
        $merks->deskripsi = $request->deskripsi;
        $merks->save();
        return redirect()->route('merks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $merks = Merk::findOrFail($id);
        $merks->delete();
        return redirect()->route('merks.index');
    }
}
