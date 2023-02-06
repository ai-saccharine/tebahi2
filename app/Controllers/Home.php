<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Welcome | TEBAHI',
            'navbar' => true,
            'background' => 'bg1',
        ];
        return view('home/index', $data);
    }
}
