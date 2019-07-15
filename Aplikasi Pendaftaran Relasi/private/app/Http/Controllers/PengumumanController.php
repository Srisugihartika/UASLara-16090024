<?php

namespace App\Http\Controllers;

use App\pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = pengumuman::paginate(10);
        return view ('layouts.informasi',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.tbhinfo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upload(){
        $gambar = pengumumen::get();
        return view('layouts.informasi',['pengumuman' => $gambar]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
        'nama' =>'required',
        'tanggal' => 'required',
        //'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        'file' => 'required|file|mimes:pdf',
        ]);

                // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
 
        $nama_file = time()."_".$file->getClientOriginalName();
 
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'layouts.informasi';
        $file->move($tujuan_upload,$nama_file);
 
        pengumuman::create([
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'file' => $nama_file,
        ]);

        return redirect('/pengumuman');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show(pengumuman $pengumuman)
    {
        $id = pengumuman::find()->id;
        $pengumuman = pengumuman::where('id', $id)->get();
        return view('showEvent', ['pengumuman' => $pengumuman]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit(pengumuman $id)
    {
        
        $data = pengumuman::find($id)->first();
        return view('layouts.editinfo', ['pengumuman' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'nama' => 'required',
        //     'tanggal' => 'required',
        //     'file' => 'required|file|mimes:pdf',
        // ]);
        
       
        // $data = pengumuman::find($id);
        // $data->id = $id;
        // $data->nama = $request->nama;
        // $data->tanggal = $request->tanggal;
        // if (!empty($request->file('file'))) {
        //     $uploadedFile = $request->file('file');
        //     $imgName = time() . str_random(22) . '.' . $uploadedFile->getClientOriginalExtension();
        //     $uploadedFile->move(public_path('layouts.informasi'), $imgName);

        //     $data->foto = $imgName;
        // }

        $update = pengumuman::where('id', $id)->first();
        $update->nama = $request['nama'];
        $update->tanggal = $request['tanggal'];

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



        return redirect('/pengumuman')->with('alert-success','Kamu berhasil update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(pengumuman $pengumuman)
    {
        //
    }
    public function hapus($id)
    {
    // $post =Post::where('id',$id)->first();

    // if ($post != null) {
    //     $post->delete();
    //     return redirect('/pengumuman')->with(['message'=> 'Successfully deleted!!']);
    //     }

    // return redirect('/pengumuman')->with(['message'=> 'Wrong ID!!']);
    // $post = Post::findOrFail($id);
    // $post->delete();
    // return redirect('/pengumuman')->with(['message'=> 'Successfully deleted!!']);
    // } 

    // public function hapus($id)
    // {
        pengumuman::where('id', $id)->delete();
        return redirect('/pengumuman')->with('alert-success','Kamu berhasil menghapus');
    }
}
