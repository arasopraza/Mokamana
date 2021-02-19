<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WisataController extends Controller
{
    /**
     * Display a listing of the wisata.
     *
     * @return $wisata;
     */

    public function searchWisata($cityName) {
        $kota = $cityName;
        $wisata = DB::table('wisata')
        ->where('kota', 'like', "%".$kota."%")->get();

        return $wisata;
    }

    // function detailWisata($id) {
    //     $idWisata = $id;
    //     $wisata = DB::table('wisata')
    //     ->where('id', $idWisata)->get();

    //     return $wisata;
    // }

    function detailWisata(Request $request) {
        $idWisata = $request->route('id');
        $wisata = DB::table('wisata')
            ->where('id', $idWisata)->get();

        $detailWisata = json_decode($wisata, true);
        return view('detail_wisata', compact('detailWisata'));
    }

}
