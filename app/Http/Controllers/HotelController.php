<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
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
                "x-rapidapi-key: 4204385fa1mshb6e6fbaf5df5a75p1c680djsnd84ad9d5a41d"
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
            $idHotels = $items["destinationId"];
            $getPhotoHotel = $this->get_CURL("https://hotels4.p.rapidapi.com/properties/get-hotel-photos?id=$idHotels");
            $getDetailHotel = $this->get_CURL("https://hotels4.p.rapidapi.com/properties/get-details?id=$idHotels&locale=en_US&currency=USD&checkOut=2020-01-15&adults1=1&checkIn=2020-01-08");

            try {
                $nameHotels = $items["name"];
                $ratingHotels = $getDetailHotel["data"]["body"]["propertyDescription"]["starRating"];
                $locationHotels = $getDetailHotel["data"]["body"]["pdpHeader"]["hotelLocation"]['locationName'];
                $priceHotels = $getDetailHotel["data"]["body"]["propertyDescription"]["featuredPrice"]["currentPrice"]["plain"];
                $priceInRupiah = $priceHotels * 14000;
                $baseUrl = $getPhotoHotel["hotelImages"][0]["baseUrl"];
                $sizeImage = 'y';
                $urlPhotoHotels = str_replace("{size}", $sizeImage, $baseUrl);
                $dataHotel->push(['id' => $idHotels, 'name' => $nameHotels, 'rating' => $ratingHotels, 'photo' => $urlPhotoHotels, 'location' => $locationHotels, 'price' => $priceInRupiah]);
            } catch (Exception $e) {
                report($e);
            }
        }

        return view('result_hotel', compact('dataHotel'), ['data' => $request]);
    }

    function detailHotel(Request $request)
    {
        $detailHotel = collect([]);
        $idHotel = $request->route('id');

        $getPhotoHotel = $this->get_CURL("https://hotels4.p.rapidapi.com/properties/get-hotel-photos?id=$idHotel");
        $getDetailHotel = $this->get_CURL("https://hotels4.p.rapidapi.com/properties/get-details?id=$idHotel&locale=en_US&currency=USD&checkOut=2020-01-15&adults1=1&checkIn=2020-01-08");

        $nameHotel = $getDetailHotel["data"]["body"]["propertyDescription"]["name"];
        $ratingHotel = $getDetailHotel["data"]["body"]["propertyDescription"]["starRating"];
        $locationHotel = $getDetailHotel["data"]["body"]["propertyDescription"]["address"]['fullAddress'];
        $latitudeHotel = $getDetailHotel["data"]["body"]["pdpHeader"]["hotelLocation"]['coordinates']["latitude"];
        $longitudeHotel = $getDetailHotel["data"]["body"]["pdpHeader"]["hotelLocation"]['coordinates']["longitude"];
        $priceHotel = $getDetailHotel["data"]["body"]["propertyDescription"]["featuredPrice"]["currentPrice"]["plain"];
        $priceInRupiah = $priceHotel * 14000;

        $baseUrl1 = $getPhotoHotel["hotelImages"][0]["baseUrl"];
        $baseUrl2 = $getPhotoHotel["hotelImages"][1]["baseUrl"];
        $baseUrl3 = $getPhotoHotel["hotelImages"][2]["baseUrl"];
        $baseUrl4 = $getPhotoHotel["hotelImages"][3]["baseUrl"];

        $sizeImage = 'y';
        $urlPhotoHotels1 = str_replace("{size}", $sizeImage, $baseUrl1);
        $urlPhotoHotels2 = str_replace("{size}", $sizeImage, $baseUrl2);
        $urlPhotoHotels3 = str_replace("{size}", $sizeImage, $baseUrl3);
        $urlPhotoHotels4 = str_replace("{size}", $sizeImage, $baseUrl4);

        $currentWeather = $this->get_CURL("http://api.openweathermap.org/data/2.5/weather?q=Pekanbaru&appid=43099dc76f1ed752ffe8a7f761ecdaf1&units=metric");
        $currentTemp = $currentWeather["main"]["temp"];
        $currentHumidity = $currentWeather["main"]["humidity"];
        $currentWindSpeed = $currentWeather["wind"]["speed"];
        $detailHotel->push([
            'name' => $nameHotel, 'rating' => $ratingHotel, 'address' => $locationHotel,
            'price' => $priceInRupiah, 'latitude' => $latitudeHotel, 'longitude' => $longitudeHotel, 
            'photo1' => $urlPhotoHotels1, 'photo2' => $urlPhotoHotels2, 'photo3' => $urlPhotoHotels3, 
            'photo4' => $urlPhotoHotels4, 'temperature' => $currentTemp, 'humidity' => $currentHumidity, 
            'windspeed' => $currentWindSpeed
        ]);

        return view('detail_hotel', compact('detailHotel'));
    }
}
