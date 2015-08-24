<?php

namespace App\Http\Controllers\Admin;

use View, Input, Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;


class AdminController extends Controller {
    use ThrottlesLogins;

    public function __construct(){
//        $this->middleware('guest');
    }

    public function getIndex()
    {
        return view('admin.index');
    }

    public function postIndex(Request $request)
    {
        $email = Input::get('email');
        $password = Input::get('password');

        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required|min:6',
        ]);

        if (auth()->attempt(['email' => $email, 'password' => $password]))
        {
            return redirect()->intended('/admin/dashboard');
        }

        return redirect()->back()
            ->withInput()
            ->withErrors('Email or Password is invalid.');
    }



}