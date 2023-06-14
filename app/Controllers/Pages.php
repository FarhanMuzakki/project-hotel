<?php

namespace App\Controllers;

use App\Models\RoomModel;

class Pages extends BaseController
{

    protected $roomModel;


    public function __construct()
    {
        $this->roomModel = new RoomModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Home',
            'kamar' => $this->roomModel->paginate(3)
        ];
        return view('pages/home', $data);
    }


    public function about()
    {
        $data = [
            'title' => 'About'
        ];
        echo view('pages/about', $data);
    }


    public function login()
    {
        $data = [
            'title' => 'Login Page'
        ];

        return view('pages/login', $data);
    }
    public function signup()
    {
        $data = [
            'title' => 'SignUp Page'
        ];

        return view('pages/signup', $data);
    }
}
