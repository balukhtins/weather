<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function parse() {
        $url = 'https://www.gismeteo.ua/weather-zaporizhia-5093/';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $result = curl_exec($ch);
        //curl_close($ch);


        if ($result === false) {
            echo "Ошибка CURL: " . curl_error($ch);
            curl_close($ch);
            return false;
        } else {

            curl_close($ch);

            $result = str_replace('location.href', '', $result);
            $result = str_replace('window.location', '', $result);
            $result = str_replace('https://www.gismeteo.ua/page/agreement/', 'localhost', $result);

            preg_match_all('&<body.*?>.+&xus',$result,$body);
            preg_match_all('&.*<body.*?>&xus',$result,$head);

            $head = $head[0][0];
            $head = preg_replace('#<head>#','<head>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">',$head);

            $body = preg_replace('&<body.*?>(.+)&xus', '$1', $body[0][0]);

            return view('layouts.home',
                ['head'=>$head],
                ['body'=>$body]
            );
           // dd($head);
        }
    }
}
