<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function searchHotel(Request $request){
        $this->validate($request,[
                   'cari' => 'required'
                ]);
        return view('result',['data' => $request]);
    }
}
