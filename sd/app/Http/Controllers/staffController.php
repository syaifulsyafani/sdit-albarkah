<?php

namespace App\Http\Controllers;

use App\Models\staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class staffController extends Controller
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
            $data = staff::where('NIK','like',"%$katakunci%")
                ->orWhere('NIP','like',"%$katakunci%")
                ->orWhere('Nama','like',"%$katakunci%")
                ->orWhere('Profesi','like',"%$katakunci%")
                ->paginate($jumlahbaris);
        }else{

        
        $data = staff::orderby('NIK', 'asc')->paginate($jumlahbaris);

        }
        return view('staff.index')->with('data_staff', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('NIK',$request->NIK);
        Session::flash('NIP',$request->NIP);
        Session::flash('Nama',$request->Nama);
        Session::flash('Profesi', $request->Profesi);

        $request->validate([
            'foto_staff' =>'required|mimes:jpeg,jpg,png,gif',
            'NIK'=>'required|numeric|unique:staff,NIK',
            'NIP'=>'required|numeric|unique:staff,NIP',
            'Nama' =>'required',
            'Profesi' =>'required',
        ], [
            'foto_staff.required'=>'Foto wajib diisi',
            'foto_staff.mimes' => 'Foto wajib berupa file jpg, png, dan jpeg',
            'NIK.required'=>'NIK Wajib diisi',
            'NIK.numeric'=>'NIK Wajib dalam diisi dalam angka',
            'NIK.unique'=>'NIK sudah ada dalam database',
            'NIP.required'=>'NIP Wajib diisi',
            'NIP.numeric'=>'NIP Wajib dalam diisi dalam angka',
            'NIP.unique'=>'NIP sudah ada dalam database',
            'Nama.required'=>'Nama wajib diisi',
            'Profesi.required'=>'Profesi wajib diisi',
        ]);

        $foto_file = $request->file('foto_staff');
        $foto_ekstensi = $foto_file->extension();
        $foto_staff = date('ymdhis').".".$foto_ekstensi;
        $foto_file->move(public_path('foto'), $foto_staff);

        $data = [
            'foto_staff'=>$foto_staff,
            'NIK'=>$request->NIK,
            'NIP'=>$request->NIP,
            'Nama'=>$request->Nama,
            'Profesi'=>$request->Profesi,
        ];
        staff::create($data);
        return redirect()-> to('staff')->with('success','Berhasil menambahkan data');
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
        $data = staff::where('NIK', $id)->first();
        return view('staff.edit')->with('data', $data);
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
            'Nama' =>'required',
            'Profesi' =>'required',
        ], [
            'Nama.required'=>'Nama wajib diisi',
            'Profesi.required'=>'Profesi wajib diisi',
        ]);
        $data = [
            'Nama'=>$request->Nama,
            'Profesi'=>$request->Profesi,
        ];

        if($request->hasFile('foto_staff')){
            $request->validate([
                'foto_staff' => 'mimes:jpeg,jpg,png'
            ],[
                'foto_staff.mimes' => 'Foto wajib berupa file jpg, png, dan jpeg'
            ]);

        $foto_file = $request->file('foto_staff');
        $foto_ekstensi = $foto_file->extension();
        $foto_staff = date('ymdhis').".".$foto_ekstensi;
        $foto_file->move(public_path('foto'), $foto_staff);

        $data_foto = staff::where('NIK', $id)->first();
        File::delete(public_path('foto').'/'. $data_foto->foto_staff);

        $data ['foto_staff'] = $foto_staff;

        }
        
        staff::where('NIK', $id)->update($data);
        return redirect()-> to('staff')->with('success','Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = staff::where('NIK', $id)->first();
        File::delete(public_path('foto') .'/'. $data->foto_staff);

        staff::where('NIK', $id)->delete();
        return redirect()->to('staff')->with('success', 'Berhasil menghapus data');
    }
}
