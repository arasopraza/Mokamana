<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelController extends Controller
{

    function get_CURL($url)
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: hotels4.p.rapidapi.com",
                "x-rapidapi-key: ba7ebb0ec3msh0c6ba67d0becbe9p1359f6jsn07de4881b75d"
            ],
        ]);
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        return json_decode($response, TRUE);
    }

    function searchHotel(Request $request)
    {
        $dataHotel = collect([]);
        
        //get params
        $cityName = $request->input('kota');
        $this->validate($request, ['kota' => 'required']);
        
        $getHotel = $this->get_CURL("https://hotels4.p.rapidapi.com/locations/search?query=$cityName&locale=en_ID");
        $responseHotel = $getHotel["suggestions"][1]["entities"];
        
        foreach ($responseHotel as $items) {
            $id = $items["destinationId"];
            $getPhotoHotel = $this->get_CURL("https://hotels4.p.rapidapi.com/properties/get-hotel-photos?id=$id");
            $getDetailHotel = $this->get_CURL("https://hotels4.p.rapidapi.com/properties/get-details?id=$id&locale=en_ID&currency=USD&checkOut=2020-01-15&adults1=1&checkIn=2020-01-08");
            
            try {
                $nameHotel = $items["name"];
                $ratingHotel = $getDetailHotel["data"]["body"]["propertyDescription"]["starRating"];
                $locationHotel = $getDetailHotel["data"]["body"]["pdpHeader"]["hotelLocation"]['locationName'];
                $priceHotel = $getDetailHotel["data"]["body"]["propertyDescription"]["featuredPrice"]["currentPrice"]["plain"];
                $baseUrl = $getPhotoHotel["hotelImages"][0]["baseUrl"];
            } catch (\Throwable $th) {
                throw $th;
            }
            $priceInRupiah = $priceHotel * 14000;
            $sizeImage = 'y';
            $urlPhoto = str_replace("{size}", $sizeImage, $baseUrl);

            $dataHotel->push(['id' => $id, 'name' => $nameHotel, 'rating' => $ratingHotel, 'photo' => $urlPhoto, 'location' => $locationHotel, 'price' => $priceInRupiah]);
        }

        return view('result_hotel', compact('dataHotel'), ['data' => $request]);
    }

    public function detailHotel()
    {
        return view('detail_hotel');
    }
}
