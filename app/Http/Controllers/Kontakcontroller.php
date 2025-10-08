<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function kontak()
    {
        $dataKontak = [
            'email' => 'aldikkyarfian@gmail.com',
            'nomor' => '085328750007',
        ];
        return view('kontak', $dataKontak, [
            'title' => 'Kontak'
        ]);
    }
}