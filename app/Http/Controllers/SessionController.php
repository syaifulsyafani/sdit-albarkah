<?php

namespace App\Http\Controllers;

use App\Models\Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session as FacadesSession;

class SessionController extends Controller
{
    function index()
    {
        return view("sesi/index");
    }

    function login(Request $request)
    {
        FacadesSession::flash('email', $request->input('email'));

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);
    
        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)){
            return redirect('home')->with('success', 'Berhasil login');

        } else
        return redirect('sesi')->withErrors('email dan password yang dimasukkan tidak sesuai');
    }

    function logout()
    {

    Auth::logout();
    return redirect('sesi')->with('success', 'Berhasil logout');

    }
    function register()
    {
        return view('sesi/register');
    }

    function create(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ], [
            'nama.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email yang dimasukkan tidak valid',
            'email.unique' => 'Email sudah digunakan, silakan masukkan email yang lain',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minumum password 6 karakter'
        ]);
    
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        User::create($data);
    
        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($infologin)) {
            return redirect('home')->with('success','Berhasil login');
        } else {
            return redirect('sesi')->withErrors('Username dan password yang dimasukkan tidak sesuai');
        }
    }
    
}