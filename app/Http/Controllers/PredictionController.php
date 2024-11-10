<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PredictionController extends Controller
{
    
    
    public function predict(Request $request)
    {
        // Ambil data dari permintaan
        $data = $request->all();

        // Konversi nilai data menjadi bilangan bulat
        $data_int = [];
        foreach ($data as $value) {
            $data_int[] = (int) $value;
        }

        // Ubah data ke dalam format list
        $data_list = array_values($data_int);

        // Buat instance dari Guzzle HTTP client
        $client = new Client();

        // Buat permintaan POST ke endpoint Flask
        $response = $client->post('http://localhost:5000/predict', [
            'json' => $data_list // Mengirim data dalam format list
        ]);

        // Kembalikan respons dari endpoint Flask
        return $response->getBody();
    }


}
