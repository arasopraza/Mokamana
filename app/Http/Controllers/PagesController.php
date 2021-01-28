<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function galeri()
    {
        return view('galeri');
    }
    public function tentangKami()
    {
        return view('tentang_kami');
    }
    


}
