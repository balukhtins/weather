<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Parser;

class WeatherController extends Controller
{
    public function parse() {
        $parser = new Parser();
        $parse = $parser->parse();
        //dd($parse);
        return view('layouts.home',
            [
                'header' => '',
                'body' => $parse[0][0][0]
            ]
        );
    }
}
