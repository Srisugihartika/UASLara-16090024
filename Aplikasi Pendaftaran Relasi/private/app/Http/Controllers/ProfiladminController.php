<?php

namespace App\Http\Controllers;

use App\profiladmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfiladminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = profiladmin::all();
        return view ('layouts.profil',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.tbhprofil');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        DB::table('profiladmins')->insert([
        'nama' => $request->name,
        'alamat' => $request->alamat,
        'no_hp' => $request->nohp,
        'email' => $request->email,
        'jabatan' => $request->jabatan
        ]);


        return redirect('/profiladmin')->with('alert-success','Kamu berhasil tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\profiladmin  $profiladmin
     * @return \Illuminate\Http\Response
     */
    public function show(profiladmin $profiladmin)
    {
        $id = profiladmin::find()->id;
        $profiladmin = profiladmin::where('id', $id)->get();
        return view('showEvent', ['profiladmin' => $profiladmin]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\profiladmin  $profiladmin
     * @return \Illuminate\Http\Response
     */
    public function edit(profiladmin $id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
       // $data = DB::table('profiladmins')->where('id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
       // return view('layouts.editprofil',['profiladmin' => $data]);

       
        $data = profiladmin::find($id)->first();
        return view('layouts.editprofil', ['profiladmin' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\profiladmin  $profiladmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        
        DB::table('profiladmins')->where('id',$request->id)->update([
        'nama' => $request->name,
        'alamat' => $request->alamat,
        'no_hp' => $request->nohp,
        'email' => $request->email,
        'jabatan' => $request->jabatan
        ]);


        return redirect('/profiladmin')->with('alert-success','Kamu berhasil update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\profiladmin  $profiladmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(profiladmin $profiladmin)
    {
        //
    }

    public function hapus($id)
    {
        profiladmin::where('id', $id)->delete();
        
        return redirect('/profiladmin')->with(['message'=> 'Data Berasil Dihapus!!']);
    }
}
