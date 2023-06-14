<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
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
    
    public function contact()
    {
        $data = [
            'title' => 'Contact US'
        ];

        return view('pages/contact', $data);
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
