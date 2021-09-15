<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function kantor(){
        return view('sarana.kantor');
    }
    public function lab(){
        return view('sarana.lab');
    }
    public function kelas(){
        return view('sarana.kelas');
    }
    public function lain(){
        return view('sarana.lain');
    }
}
