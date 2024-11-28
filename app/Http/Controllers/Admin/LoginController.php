<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use PHPUnit\Metadata\Uses;

class LoginController extends Controller
{
    function index () {
         return view('backoffice.pages.auth.login', [
            'page_title' => 'login form'
         ]); 
    }
    function login(Request $request) 
    {    
        $data = User::where('username', $request->username)->first();
        $formdata = $request->only(['username','password']);
    
    if ($data== null) {
        return redirect()->back()->with('error', 'Username Belum Terdaftar!');
    }
    if (Auth::attempt($formdata)){
        return redirect()->route('admin.school.index')->with('success', 'login berhasil');
    }
        return redirect()->back()->with('error', 'Username dan pasword tidak sesuai!');
    }
    function logout () 
        {
            Auth::logout();
            return redirect()->route('auth.index')->with('success', 'logout berhasil');
        }
        
}
