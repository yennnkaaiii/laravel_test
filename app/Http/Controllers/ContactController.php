<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index(){
return view('kontak', ['title' => 'Kontak']);
    }
    public function adminIndex()
    {
        return view('components.admin.kontak', [
            'title' => 'Kontak Admin',
            'email' => 'dhitoarza@gmail.com',
            'instagram' => '@arjaaaw',
            'whatsapp' => '+62 812-3456-7890'
        ]);
    }
}

