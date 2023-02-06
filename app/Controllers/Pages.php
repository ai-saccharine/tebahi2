<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Welcome | TEBAHI',
            'navbar' => true,
            'background' => 'bg1',
        ];
        return view('pages/home', $data);
    }

    public function settings()
    {
        $data = [
            'title' => 'Pengaturan | Tebahi',
            'navbar' => false,
            'background' => 'bg3'
        ];
        if (!isset($_SESSION['status']) == 'logged_in') {
            return redirect()->to('/login');
        }
        return view('pages/settings', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'Tentang | Tebahi',
            'navbar' => false,
            'background' => 'bg3'
        ];
        if (!isset($_SESSION['status']) == 'logged_in') {
            return redirect()->to('/login');
        }
        return view('pages/about', $data);
    }

    public function panduan()
    {
        $data = [
            'title' => 'Panduan | Tebahi',
            'navbar' => false,
            'background' => 'bg3'
        ];
        if (!isset($_SESSION['status']) == 'logged_in') {
            return redirect()->to('/login');
        }
        return view('pages/panduan', $data);
    }

    public function back()
    {
        redirect()->back();
    }
}
