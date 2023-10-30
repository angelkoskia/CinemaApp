<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;


class AuthController extends Controller
{
    public function index(){
        return view('backend.auth.src.login');
    }
    public function logout(){
        auth()->logout();
        return redirect('/');
    }
}
