<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class categoryController extends Controller
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
            $data = category::where('id','like',"%$katakunci%")
                ->orWhere('nama_cat','like',"%$katakunci%")
                ->paginate($jumlahbaris);
        }else{

        
        $data = category::orderby('id', 'asc')->paginate($jumlahbaris);

        }
        return view('category.index')->with('data_category', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('category_id',$request->category_id);

        $request->validate([
            'category_id'=>'required|numeric|unique:category,category_id',
            'nama_cat' =>'required',
        ], [
            'category_id.required'=>'ID Wajib diisi',
            'category_id.numeric'=>'ID Wajib dalam diisi dalam angka',
            'category_id.unique'=>'ID Wajib disiikan sudah ada dalam database',
            'nama_cat.required'=>'Nama Kategori wajib diisi',
        ]);

        $data = [
            'id'=>$request->category_id,
            'nama_cat'=>$request->nama_cat,

        ];
        category::create($data);
        return redirect()-> to('category')->with('success','Berhasil menambahkan data');
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
        $data = category::where('category_id', $id)->first();
        return view('category.edit')->with('data', $data);
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
            'nama_cat' =>'required',
        ], [
            'nama_cat.required'=>'Nama Kategori wajib diisi',
        ]);
        $data = [
            'nama_cat'=>$request->nama_cat,

        ];

    
        
        category::where('category_id', $id)->update($data);
        return redirect()-> to('category')->with('success','Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = category::where('category_id', $id)->first();

        category::where('category_id', $id)->delete();
        return redirect()->to('category')->with('success', 'Berhasil menghapus data');
    }
}
