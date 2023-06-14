<?php

namespace App\Controllers;

class Kamar extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Kamar'
        ];
        
        return view('pages/kamar', $data);
    }
}