<?php

namespace App\Http\Controllers;

use App\Models\staff;
use Illuminate\Http\Request;

class pengajarController extends Controller
{
    public function index(Request $request)
    {
        $data = staff::all();
        return view('compro.pengajar')->with('data_staff', $data);
    }

    public function show($id)
    {
        $data = staff::orderby('NIK',$id );
        return view('compro.pengajar')->with('data_staff', $data);
    }
}
