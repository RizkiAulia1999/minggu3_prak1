<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function Comment($nama,$pesan){
        return view('comment',['nama' => $nama,'pesan' => $pesan]);
    }
}
