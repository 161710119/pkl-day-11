<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Mobil;
class MemberController extends Controller
{
    public function index()
    {
        $members = Member::with('Mobil')->get();
        return view('member.index',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mobils = Mobil::all();
        return view('member.create',compact('mobils'));
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
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'alamat' => 'required',
            'mobil_id' => 'required|'
        ]);
        $members = new Member;
        $members->nama = $request->nama;
        $members->email = $request->email;
        $members->password = $request->password;
        $members->alamat = $request->alamat;
        $members->mobil_id = $request->mobil_id;
        $members->save();
        return redirect()->route('members.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $members = Member::findOrFail($id);
        return view('member.show',compact('members'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $members = Member::findOrFail($id);
        $mobils = Mobil::all();
        $selectedmbl = Promo::findOrFail($id)->merk_id;
        return view('member.edit',compact('members','mobils','selectedmbl'));
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
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'alamat' => 'required',
            'mobil_id' => 'required|'
        ]);
        $members = Member::findOrFail($id);
        $members->nama = $request->nama;
        $members->email = $request->email;
        $members->password = $request->password;
        $members->alamat = $request->alamat;
        $members->mobil_id = $request->mobil_id;
        $members->save();
        return redirect()->route('members.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $members = Member::findOrFail($id);
        $members->delete();
        return redirect()->route('members.index');
    }
}
