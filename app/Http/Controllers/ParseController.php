<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ParseController extends Controller
{
    public function index()
    {
        $ch = curl_init('https://u0362146.plsk.regruhosting.ru/api');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        do {
            
            $result = json_decode(curl_exec ($ch), true);
            $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        
        } while ($code == 429);
        
        curl_close($ch);

        $data['summPrice'] = (array_sum(array_column($result, 'Price')));

        $names = [];
        foreach ($result as $name) {

            $names[] .= $name['warehouseName'];

        }
        
        $data['uniqueWarehouse'] = array_unique($names);
        $data = json_encode($data, JSON_UNESCAPED_UNICODE);

        $filename = date('Y-m-d-H-i-s') . '.json';
        Storage::put('json/' . $filename, $data); 

        return view('resultApi', [
            'data' => $data
        ]);
        
    }
}
