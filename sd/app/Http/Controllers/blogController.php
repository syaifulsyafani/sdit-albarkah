<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentsRequest;
use App\Models\artikel;
use App\Models\category;
use App\Models\Comment;
use Illuminate\Http\Request;
use Spatie\LaravelIgnition\Support\Composer\FakeComposer;

class blogController extends Controller
{
    public function index(Request $request)
    {
    
        $data = artikel::all();
        return view('compro.blog')->with('data_artikel', $data);
    }

    public function show($id)
    {
        $data = artikel::orderby('id',$id );
    
        return view('compro.blog')->with('data_artikel', $data);
    }

    public function detail(Request $request, $id)
    {
        $category = category::all();

        $artikel = artikel::where('id', $id)->first();

        
        return view('compro.deblog', [
            'artikel' => $artikel , 
            'category'=> $category , 
            'comments'=> Comment::where('artikel_id', '=', $artikel->id)->get()

        ]);
    }

}
