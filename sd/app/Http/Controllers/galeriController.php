<?php

namespace App\Http\Controllers;

use App\Models\galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class galeriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 3;
        if(strlen($katakunci)){
            $data = galeri::where('id_galeri','like',"%$katakunci%")
                ->paginate($jumlahbaris);
        }else{

        
        $data = galeri::orderby('id_galeri', 'asc')->paginate($jumlahbaris);

        }
        return view('galeri.index')->with('data_galeri', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foto_file = $request->file('foto_galeri');
        $foto_ekstensi = $foto_file->extension();
        $foto_galeri = date('ymdhis').".".$foto_ekstensi;
        $foto_file->move(public_path('foto'), $foto_galeri);

        $data = [
            'foto_galeri'=>$foto_galeri,
        ];
        galeri::create($data);
        return redirect()-> to('galeri')->with('success','Berhasil menambahkan data');
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
        $data = galeri::where('id_galeri', $id)->first();
        return view('galeri.edit')->with('data', $data);
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
        if($request->hasFile('foto_galeri')){
            $request->validate([
                'foto_galeri' => 'mimes:jpeg,jpg,png'
            ],[
                'foto_galeri.mimes' => 'Foto wajib berupa file jpg, png, dan jpeg'
            ]);

        $foto_file = $request->file('foto_galeri');
        $foto_ekstensi = $foto_file->extension();
        $foto_galeri = date('ymdhis').".".$foto_ekstensi;
        $foto_file->move(public_path('foto'), $foto_galeri);

        $data_foto = galeri::where('id_galeri', $id)->first();
        File::delete(public_path('foto').'/'. $data_foto->foto_galeri);

        $data ['foto_galeri'] = $foto_galeri;

        }
        
        galeri::where('id_galeri', $id)->update($data);
        return redirect()-> to('galeri')->with('success','Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = galeri::where('id_galeri', $id)->first();
        File::delete(public_path('foto') .'/'. $data->foto_galeri);

        galeri::where('id_galeri', $id)->delete();
        return redirect()->to('galeri')->with('success', 'Berhasil menghapus data');
    }
}
