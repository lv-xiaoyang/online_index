<?php

namespace App\Http\Controllers\index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class Common extends Controller
{
    function getpost($url,$data){
        $urls=env('API_URL').$url;
        $client = new Client();
            $response = $client->request('POST', $urls, [
                'form_params' => [
                    $data
                ]
            ]);
            $body=$response->getBody();
            $remainingBytes = $body->getContents();
            return $remainingBytes;
    }
    function getGet($url){
        $urls=env('API_URL').$url;
        $client = new Client();
        $response = $client->get($urls);
        $body=$response->getBody();
        $remainingBytes = $body->getContents();
        return $remainingBytes;
    }
}
