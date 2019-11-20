<?php


namespace App\Services;


class Parser
{
    public function parse() {
        $url = config('app.gismeteo_url');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $result = curl_exec($ch);
        //curl_close($ch);


        if ($result === false) {
            echo "Ошибка CURL: " . curl_error($ch);
            return false;
        }
        else {
                $result = str_replace('location.href', '', $result);
                $result = str_replace('window.location', '', $result);
                $result = str_replace('https://www.gismeteo.ua/page/agreement/', 'localhost', $result);

                preg_match_all('&class="forecast_wrap.+?__frame&xus',$result,$body);

           // dd($style);

                return $body;
                }
        curl_close($ch);
    }
}
