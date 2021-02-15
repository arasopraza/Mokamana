<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function galeri()
    {
        return view('galeri');
    }
    
    public function favorit()
    {
        return view('bookmark');
    }

    public function tentangKami()
    {
        return view('tentang_kami');
    }
    
}
