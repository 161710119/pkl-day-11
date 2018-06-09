<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promo;
use App\Mobil;
class PromoController extends Controller
{
    public function index()
    {
        $promos = Promo::with('Mobil')->get();
        return view('promo.index',compact('promos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mobils = Mobil::all();
        return view('promo.create',compact('mobils'));
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
            'mobil_id' => 'required|',
            'promo' => 'required',
            'harga_awal' => 'required',
            'harga_promo' => 'required',
            'comment' => 'required'
        ]);
        $promos = new Promo;
        $promos->mobil_id = $request->mobil_id;
        $promos->promo = $request->promo;
        $promos->harga_awal = $request->harga_awal;
        $promos->harga_promo = $request->harga_promo;
        $promos->comment = $request->comment;
        $promos->save();
        return redirect()->route('promos.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $promos = Promo::findOrFail($id);
        return view('promo.show',compact('promos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $promos = Promo::findOrFail($id);
        $mobils = Mobil::all();
        $selectedmbl = Promo::findOrFail($id)->merk_id;
        return view('promo.edit',compact('promos','mobils','selectedmbl'));
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
            'mobil_id' => 'required|',
            'promo' => 'required',
            'harga_awal' => 'required',
            'harga_promo' => 'required',
            'comment' => 'required'
        ]);
        $promos = Promo::findOrFail($id);
        $promos->mobil_id = $request->mobil_id;
        $promos->promo = $request->promo;
        $promos->harga_awal = $request->harga_awal;
        $promos->harga_promo = $request->harga_promo;
        $promos->comment = $request->comment;
        $promos->save();
        return redirect()->route('promos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promos = Promo::findOrFail($id);
        $promos->delete();
        return redirect()->route('promos.index');
    }
}
