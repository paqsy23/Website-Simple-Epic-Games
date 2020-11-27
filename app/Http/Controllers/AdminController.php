<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        return view('admin.home');
    }

    public function report()
    {
        $nilai = 350;

        return view('admin.report',["nilai"=>$nilai]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if($request->username=="admin" && $request->password="admin"){
            return redirect('/admin/home');
        }
    }

    public function developer()
    {
        return view('admin.developer');
    }

    public function logout()
    {
        return redirect('/admin');
    }
}
