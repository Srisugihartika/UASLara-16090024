<?php

namespace App\Http\Controllers;

use App\caradaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CaradaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = caradaftar::all();
        return view ('layouts.pendaftar',compact('data'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.tbhdaftar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function upload(){
        $gambar = caradaftars::get();
        return view('layouts.pendaftar',['caradaftar' => $gambar]);
    }
    public function store(Request $request)
    {
         $this->validate($request, [
        'nama' =>'required',
        'alamat' => 'required',
        'no_hp' => 'required',
        'email' => 'required',
        'basis' => 'required',
        'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        'file' => 'required|file|mimes:pdf',
        ]);

                // menyimpan data file yang diupload ke variabel $file
        $foto = $request->file('foto');
        $file = $request->file('file');
 
        $nama_foto = time()."_".$foto->getClientOriginalName();
        $nama_file = time()."_".$file->getClientOriginalName();
 
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'layouts.pendaftar';
        $foto->move($tujuan_upload,$nama_foto);
        $file->move($tujuan_upload,$nama_file);
 
        caradaftar::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'basis' => $request->basis,
            'foto' => $nama_foto,
            'file' => $nama_file,
        ]);

        return redirect('/caradaftar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\caradaftar  $caradaftar
     * @return \Illuminate\Http\Response
     */
    public function show(caradaftar $caradaftar)
    {
       $id = caradaftar::find()->id;
        $caradaftar = caradaftar::where('id', $id)->get();
        return view('showEvent', ['caradaftar' => $caradaftar]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\caradaftar  $caradaftar
     * @return \Illuminate\Http\Response
     */
    public function edit(caradaftar $id)
    {
        $data = caradaftar::find($id)->first();
        return view('layouts.editdaftar', ['caradaftar' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\caradaftar  $caradaftar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = caradaftar::where('id', $id)->first();
        $update->nama = $request['nama'];
        $update->alamat = $request['alamat'];
        $update->no_hp = $request['no_hp'];
        $update->email = $request['email'];
        $update->basis = $request['basis'];

        if($request->file('foto') == "")
        {
            $update->foto= $update->foto;
        } 
        else
        {
            $foto       = $request->file('foto');
            $fileName   = $foto->getClientOriginalName();
            $request->file('foto')->move("image/", $fileName);
            $update->foto = $fileName;
        }

        //$update->update();

        if($request->file('file') == "")
        {
            $update->file= $update->file;
        } 
        else
        {
            $file       = $request->file('file');
            $fileName   = $file->getClientOriginalName();
            $request->file('file')->move(".pdf/", $fileName);
            $update->file = $fileName;
        }
        
        $update->update();



        return redirect('/caradaftar')->with('alert-success','Kamu berhasil update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\caradaftar  $caradaftar
     * @return \Illuminate\Http\Response
     */
    public function destroy(caradaftar $caradaftar)
    {
        //
    }

    public function hapus($id)
    {
        caradaftar::where('id', $id)->delete();
        // $caradaftar = caradaftar::find($id);
        // $caradaftar->delete();
        return redirect('/caradaftar')->with('alert-success','Kamu berhasil menghapus');

    }
}
