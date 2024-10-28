<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function about(){
        $data = [
           'nama' => 'Saddam Parikesit Ibnu Yahsi',
           'umur' => 'enam belas',
           'hobi' => 'bermain',
        ];
        return view('about', $data);
    }
    public function login(){
        return view('login'); //ini menuju ke halaman login.blade.php
    }

    public function index(){
        return view('index'); //ini menuju ke halaman login.blade.php
    }
}
