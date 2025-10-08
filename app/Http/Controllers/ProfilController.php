<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{


 public function profil()
{
   			 $data = [
       			 'nama' => 'Aldiky Arfian S.',
      			  'kelas' => 'XI PPLG 1', 
       			 'sekolah' => 'SMK RUS Kudus'
    				];
    		return view('profil', $data, [
       			'title' => 'Profil'
   			 ]);
}
}