<?php

namespace App\Http\Controllers;

use App\Models\Riwayat;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{

    public function index(){
        return view('riwayat',[
            'title' => 'riwayat',
            /* 'posts' => Post::all() */
            'posts' => Riwayat::all()
        ]);
    }

    
}
