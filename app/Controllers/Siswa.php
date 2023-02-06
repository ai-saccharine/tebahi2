<?php

namespace App\Controllers;

use App\Models\SoalModel;

class Siswa extends BaseController
{
  protected $session;
  protected $soalModel;
  protected $db;
  public function __construct()
  {
    $db = db_connect();
    $this->session = \Config\Services::session();
    $this->soalModel = new SoalModel();
  }
  public function index()
  {
    $data = [
      'title' => 'Welcome | TEBAHI',
      'navbar' => true,
      'background' => 'bg1'
    ];
    return view('siswa/index', $data);
  }

  public function kategori()
  {
    $data = [
      'title' => 'Kategori | TEBAHI',
      'navbar' => false,
      'background' => 'bg3'
    ];
    if (!isset($_SESSION['status']) == 'logged_in') {
      return redirect()->to('/login');
    }
    return view('siswa/kategori', $data);
  }

  public function beginner()
  {
    $data = [
      'title' => 'Beginner | TEBAHI',
      'navbar' => false,
      'background' => 'bg3',
      'level' => 'Beginner'
    ];
    if (!isset($_SESSION['status']) == 'logged_in') {
      return redirect()->to('/login');
    }
    $this->session->set('level', 'Beginner');
    return view('siswa/level', $data);
  }
  public function intermediate()
  {
    $data = [
      'title' => 'Intermediate | TEBAHI',
      'navbar' => false,
      'background' => 'bg3',
      'level' => 'Intermediate'
    ];
    if (!isset($_SESSION['status']) == 'logged_in') {
      return redirect()->to('/login');
    }
    $this->session->set('level', 'Intermediate');
    return view('siswa/level', $data);
  }
  public function advanced()
  {
    $data = [
      'title' => 'Advanced | TEBAHI',
      'navbar' => false,
      'background' => 'bg3',
      'level' => 'Advanced'
    ];
    if (!isset($_SESSION['status']) == 'logged_in') {
      return redirect()->to('/login');
    }
    $this->session->set('level', 'Advanced');
    return view('siswa/level', $data);
  }

  public function soal($tingkatan = 'beginner')
  {
    $data = [
      'title' => 'Soal | TEBAHI',
      'navbar' => false,
      'background' => 'bg2',
      'soal' => $this->soalModel->getSoalByLevel($tingkatan)
    ];
    return view('siswa/soal', $data);
  }

  public function nilai()
  {
    $jawabanSiswa = $this->request->getVar();
    // dd($jawabanSiswa);
    $i = 1;
    foreach ($_POST as $key => $value) {
      if (is_numeric($key)) {
        $_SESSION["soal$i"] = $key;
      }
      $i++;
    }

    // Ambil data jawaban benar dari database
    $soal = $this->soalModel->getSoalByLevel($_SESSION['level']);

    // Inisialisasi variabel penampung nilai
    $nilai = 0;

    // Bandingkan jawaban siswa dengan jawaban benar
    foreach ($soal as $s) {
      if ($jawabanSiswa[$s['id']] == $s['jawaban']) {
        $nilai++;
      }
    }

    // Tentukan nilai akhir
    $nilai_akhir = $nilai / count($jawabanSiswa) * 100;

    $data = [
      'title' => 'Nilai | TEBAHI',
      'navbar' => false,
      'background' => 'bg1',
      'nilai' => round($nilai_akhir)
    ];
    return view('siswa/nilai', $data);
  }

  public function grammar()
  {
    $data = [
      'title' => 'Grammar | TEBAHI',
      'navbar' => false,
      'background' => 'bg1',
      'soal' => []
    ];
    for ($i = 1; $i <= count($_SESSION); $i++) {
      $soal = "soal" . $i;
      if (isset($_SESSION[$soal])) {
        $data['soal'][] = $_SESSION[$soal];
      }
    }
    return view('siswa/grammar', $data);
  }

  public function checkGrammar($id, $no)
  {
    $data = [
      'title' => 'Check Grammar | TEBAHI',
      'navbar' => false,
      'background' => 'bg1',
      'soal' => $this->soalModel->getSoal($id),
      'noSoal' => $no
    ];
    return view('siswa/checkGrammar', $data);
  }
}
