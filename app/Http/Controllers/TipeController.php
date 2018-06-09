<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Merk;
use App\Tipe;
class TipeController extends Controller
{
    public function index()
    {
        $tipes = Tipe::with('Merk')->get();
        return view('tipe.index',compact('tipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $merks = Merk::all();
        return view('tipe.create',compact('merks'));
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
            'merk_id' => 'required'
        ]);
        $tipes = new Tipe;
        $tipes->nama = $request->nama;
        $tipes->merk_id = $request->merk_id;
        $tipes->save();
        return redirect()->route('tipes.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipes = Tipe::findOrFail($id);
        return view('tipe.show',compact('tipes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipes = Tipe::findOrFail($id);
        $merks = Merk::all();
        $selectedmerk = Tipe::findOrFail($id)->merk_id;
        return view('tipe.edit',compact('tipes','merks','selectedmerk'));
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
            'merk_id' => 'required'
        ]);
        $tipes = Tipe::findOrFail($id);
        $tipes->nama = $request->nama;
        $tipes->merk_id = $request->merk_id;
        $tipes->save();
        return redirect()->route('tipes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipes = Tipe::findOrFail($id);
        $tipes->delete();
        return redirect()->route('tipes.index');
    }
}
