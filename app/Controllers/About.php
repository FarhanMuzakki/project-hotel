<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        echo view('pages/about');
    }
}