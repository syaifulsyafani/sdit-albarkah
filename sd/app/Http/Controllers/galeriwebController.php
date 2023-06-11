<?php

namespace App\Http\Controllers;

use App\Models\galeri;
use Illuminate\Http\Request;

class galeriwebController extends Controller
{
    public function index(Request $request)
    {
    
        $data = galeri::all();
        return view('compro.galeriweb')->with('data_galeri', $data);
    }

    public function show($id)
    {
        $data = galeri::orderby('id_galeri',$id );
        return view('compro.galeriweb')->with('data_galeri', $data);
    }
}
