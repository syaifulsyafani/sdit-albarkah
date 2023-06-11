<?php

namespace App\Http\Controllers;

use App\Models\kegiatan;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Support\Facades\Session;

class kegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request )
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 3;
        if(strlen($katakunci)){
            $data = kegiatan::where('id_kegiatan','like',"%$katakunci%")
                ->orWhere('judul_kegiatan','like',"%$katakunci%")
                ->orWhere('isi_kegiatan','like',"%$katakunci%")
                ->paginate($jumlahbaris);
        }else{

        
        $data = kegiatan::orderby('id_kegiatan', 'asc')->paginate($jumlahbaris);

        }
        return view('kegiatan.index')->with('data_kegiatan', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kegiatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('id_kegiatan',$request->id_kegiatan);
        Session::flash('judul_kegiatan',$request->judul_kegiatan);
        Session::flash('isi_kegiatan',$request->isi_kegiatan);

        $request->validate([
            'id_kegiatan'=>'required|numeric|unique:kegiatan,id_kegiatan',
            'judul_kegiatan' =>'required',
            'foto_kegiatan' =>'required|mimes:jpeg,jpg,png,gif',
            'isi_kegiatan' =>'required',
        ], [
            'id_kegiatan.required'=>'ID Wajib diisi',
            'id_kegiatan.numeric'=>'ID Wajib dalam diisi dalam angka',
            'id_kegiatan.unique'=>'ID Wajib disiikan sudah ada dalam database',
            'judul_kegiatan.required'=>'Judul wajib diisi',
            'foto_kegiatan.required'=>'Foto wajib diisi',
            'foto_kegiatan.mimes' => 'Foto wajib berupa file jpg, png, dan jpeg',
            'isi_kegiatan.required'=>'Isi wajib diisi',
        ]);

        $foto_file = $request->file('foto_kegiatan');
        $foto_ekstensi = $foto_file->extension();
        $foto_kegiatan = date('ymdhis').".".$foto_ekstensi;
        $foto_file->move(public_path('foto'), $foto_kegiatan);

        $data = [
            'id_kegiatan'=>$request->id_kegiatan,
            'judul_kegiatan'=>$request->judul_kegiatan,
            'foto_kegiatan'=>$foto_kegiatan,
            'isi_kegiatan'=>$request->isi_kegiatan,
        ];
        kegiatan::create($data);
        return redirect()-> to('kegiatan')->with('success','Berhasil menambahkan data');
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
        $data = kegiatan::where('id_kegiatan', $id)->first();
        return view('kegiatan.edit')->with('data', $data);
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
        $request->validate([
            'judul_kegiatan' =>'required',
            'isi_kegiatan' =>'required',
        ], [
            'judul_kegiatan.required'=>'Judul wajib diisi',
            'isi_kegiatan.required'=>'Isi wajib diisi',
        ]);
        $data = [
            'judul_kegiatan'=>$request->judul_kegiatan,
            'isi_kegiatan'=>$request->isi_kegiatan,
        ];

        if($request->hasFile('foto_kegiatan')){
            $request->validate([
                'foto_kegiatan' => 'mimes:jpeg,jpg,png'
            ],[
                'foto_kegiatan.mimes' => 'Foto wajib berupa file jpg, png, dan jpeg'
            ]);

        $foto_file = $request->file('foto_kegiatan');
        $foto_ekstensi = $foto_file->extension();
        $foto_kegiatan = date('ymdhis').".".$foto_ekstensi;
        $foto_file->move(public_path('foto'), $foto_kegiatan);

        $data_foto = kegiatan::where('id_kegiatan', $id)->first();
        FacadesFile::delete(public_path('foto').'/'. $data_foto->foto_kegiatan);

        $data ['foto_kegiatan'] = $foto_kegiatan;

        }
        
        kegiatan::where('id_kegiatan', $id)->update($data);
        return redirect()-> to('kegiatan')->with('success','Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = kegiatan::where('id_kegiatan', $id)->first();
        FacadesFile::delete(public_path('foto') .'/'. $data->foto_kegiatan);

        kegiatan::where('id_kegiatan', $id)->delete();
        return redirect()->to('kegiatan')->with('success', 'Berhasil menghapus data');
    }
}
