<?php

namespace App\Http\Controllers;

use App\Models\Guardians;
use Illuminate\Http\Request;

class GuardiansController extends Controller
{
    public function index()
    {
        $guardians = Guardians::all();

        return view('guardians', [
            'guardians' => $guardians,
            'title' => 'Guardians Page'
        ]);
    }
}
