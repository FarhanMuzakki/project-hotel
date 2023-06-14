<?php

namespace App\Controllers;

use App\Models\RoomModel;

class Kamar extends BaseController
{

    protected $form = [''];
    protected $roomModel;

    public function __construct()
    {

        $this->roomModel = new RoomModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Kamar'
        ];

        return view('pages/kamar', $data);
    }

    public function add()
    {

        $data = [
            'title' => 'Add'
        ];

        return view('kamar/add', $data);
    }
    public function list()
    {

        $data = [
            'title' => 'List',
            'kamar' => $this->roomModel->findAll()
        ];

        return view('kamar/list', $data);
    }





    public function insert()
    {

        $fileImg = $this->request->getFile('image');
        $fileImg->move('img');
        $cover = $fileImg->getName();


        $this->roomModel->save([
            'image' => $cover,
            'name' => $this->request->getVar('name'),
            'qty' => $this->request->getVar('qty'),
            'price' => $this->request->getVar('price'),

        ]);

        return redirect()->to(base_url('kamar/list'));
    }
}
