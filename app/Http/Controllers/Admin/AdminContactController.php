<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function index()
    {
        return view('components.admin.kontak', [
            'title' => 'Kontak Admin',
            'email' => 'aldikky@gmail.com',
            'instagram' => '@aldikky_',
            'whatsapp' => '+62 853 2875 0007'
        ]);
    }
}