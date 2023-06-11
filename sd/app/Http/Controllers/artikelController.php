<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use App\Models\category;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session as FacadesSession;

class artikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 3;
        if(strlen($katakunci)){
            $data = artikel::where('id','like',"%$katakunci%")
                ->orWhere('judul_artikel','like',"%$katakunci%")
                ->orWhere('isi_artikel','like',"%$katakunci%")
                ->paginate($jumlahbaris);
        }else{

        
        $data = artikel::orderby('id', 'asc')->paginate($jumlahbaris);

        }
        $data = artikel::with('category')->paginate(6);

        return view('artikel.index')->with('data_artikel', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = category::all();

        return view('artikel.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        FacadesSession::flash('artikel_id',$request->id);
        FacadesSession::flash('judul_artikel',$request->judul_artikel);
        FacadesSession::flash('isi_artikel',$request->isi_artikel);

        $request->validate([
            'category_id'=>'required',
            'judul_artikel' =>'required',
            'foto_artikel' =>'required|mimes:jpeg,jpg,png,gif',
            'isi_artikel' =>'required',
        ], [
            'category_id.required'=>'Anda belum memilih kategori',
            'judul_artikel.required'=>'Judul wajib diisi',
            'foto_artikel.required'=>'Foto wajib diisi',
            'foto_artikel.mimes' => 'Foto wajib berupa file jpg, png, dan jpeg',
            'isi_artikel.required'=>'Isi wajib diisi',
        ]);

        $foto_file = $request->file('foto_artikel');
        $foto_ekstensi = $foto_file->extension();
        $foto_artikel = date('ymdhis').".".$foto_ekstensi;
        $foto_file->move(public_path('foto'), $foto_artikel);

        $data = [
            'id'=>$request->id,
            'judul_artikel'=>$request->judul_artikel,
            'category_id'=>$request->category_id,
            'foto_artikel'=>$foto_artikel,
            'isi_artikel'=>$request->isi_artikel,
        ];
        artikel::create($data);
        return redirect()-> to('artikel')->with('success','Berhasil menambahkan data');
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
        $category = category::all();

        $data = artikel::where('id', $id)->first();

        return view('artikel.edit', compact('category'))->with('data', $data);
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
            'judul_artikel' =>'required',
            'isi_artikel' =>'required',
        ], [
            'judul_artikel.required'=>'Judul wajib diisi',
            'isi_artikel.required'=>'Isi wajib diisi',
        ]);
        $data = [
            'judul_artikel'=>$request->judul_artikel,
            'category_id'=>$request->category_id,
            'isi_artikel'=>$request->isi_artikel,
        ];

        if($request->hasFile('foto_artikel')){
            $request->validate([
                'foto_artikel' => 'mimes:jpeg,jpg,png'
            ],[
                'foto_artikel.mimes' => 'Foto wajib berupa file jpg, png, dan jpeg'
            ]);

        $foto_file = $request->file('foto_artikel');
        $foto_ekstensi = $foto_file->extension();
        $foto_artikel = date('ymdhis').".".$foto_ekstensi;
        $foto_file->move(public_path('foto'), $foto_artikel);

        $data_foto = artikel::where('id', $id)->first();
        File::delete(public_path('foto').'/'. $data_foto->foto_artikel);

        $data ['foto_artikel'] = $foto_artikel;

        }

        artikel::where('id', $id)->update($data);
        return redirect()-> to('artikel')->with('success','Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = artikel::where('id', $id)->first();
        File::delete(public_path('foto') .'/'. $data->foto_artikel);

        artikel::where('id', $id)->delete();
        return redirect()->to('artikel')->with('success', 'Berhasil menghapus data');
    }
}
