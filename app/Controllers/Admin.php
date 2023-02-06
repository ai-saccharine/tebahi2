<?php

namespace App\Controllers;

use App\Models\MateriModel;
use App\Models\SoalModel;

class Admin extends BaseController
{
  protected $soalModel;
  protected $materiModel;
  public function __construct()
  {
    $this->soalModel = new SoalModel();
    $this->materiModel = new MateriModel();
  }

  public function index()
  {
    $data = [
      'title' => 'Welcome | TEBAHI',
      'navbar' => false,
    ];
    return view('admin/index', $data);
  }

  public function kategori()
  {
    $data = [
      'title' => 'Kategori | TEBAHI',
      'navbar' => true,
    ];
    return view('admin/kategori', $data);
  }

  public function soal()
  {
    $keyword = $this->request->getVar('keyword');
    if ($keyword) {
      $soal = $this->soalModel->search($keyword);
    } else {
      $soal = $this->soalModel->getSoal();
    }
    $data = [
      'title' => 'Soal | TEBAHI',
      'navbar' => true,
      'soal' => $soal
    ];
    return view('admin/soal', $data);
  }

  public function tambahSoal()
  {
    $data = [
      'title' => 'Tambah Soal | TEBAHI',
      'navbar' => false,
    ];
    return view('admin/tambahSoal', $data);
  }

  public function simpanSoal()
  {
    $this->soalModel->save([
      "pertanyaan" => $this->request->getVar("pertanyaan"),
      "tingkatan" => $this->request->getVar("tingkatan"),
      "pilihan" => $this->request->getVar("pilihan"),
      "jawaban" => $this->request->getVar("jawaban"),
      "grammar" => $this->request->getVar("grammar"),
    ]);

    session()->setFlashdata("pesan", "Soal berhasil ditambahkan!");

    return redirect()->to("/admin/soal");
  }

  public function detailSoal($id)
  {
    $data = [
      'title' => 'Soal | TEBAHI',
      'navbar' => false,
      'soal' => $this->soalModel->getSoal($id)
    ];
    return view('admin/ubahSoal', $data);
  }

  public function ubahSoal($id)
  {
    $this->soalModel->save([
      "id" => $id,
      "pertanyaan" => $this->request->getVar("pertanyaan"),
      "tingkatan" => $this->request->getVar("tingkatan"),
      "pilihan" => $this->request->getVar("pilihan"),
      "jawaban" => $this->request->getVar("jawaban"),
      "grammar" => $this->request->getVar("grammar"),
    ]);

    session()->setFlashdata("pesan", "Soal berhasil diubah!");

    return redirect()->to("/admin/soal");
  }

  public function hapusSoal($id)
  {
    $this->soalModel->delete($id);
    session()->setFlashdata("pesan", "Soal berhasil dihapus!");
    return redirect()->to("/admin/soal");
  }

  public function materi()
  {
    $data = [
      'title' => 'Materi | TEBAHI',
      'navbar' => true,
      'materi' => $this->materiModel->getMateri()
    ];
    return view('admin/materi', $data);
  }

  public function tambahMateri()
  {
    $data = [
      'title' => 'Tambah Materi | TEBAHI',
      'navbar' => false,
    ];
    return view('admin/tambahMateri', $data);
  }

  public function simpanMateri()
  {
    $this->materiModel->save([
      "kategori-materi" => $this->request->getVar("kategori-materi"),
      "materi" => $this->request->getVar("materi")
    ]);

    session()->setFlashdata("pesan", "Materi berhasil ditambahkan!");

    return redirect()->to("/admin/materi");
  }

  public function detailMateri($id)
  {
    $data = [
      'title' => 'Materi | TEBAHI',
      'navbar' => false,
      'materi' => $this->materiModel->getMateri($id)
    ];
    return view('admin/ubahMateri', $data);
  }

  public function ubahMateri($id)
  {
    $this->materiModel->save([
      "id" => $id,
      "kategori-materi" => $this->request->getVar("kategori-materi"),
      "materi" => $this->request->getVar("materi"),
    ]);

    session()->setFlashdata("pesan", "Materi berhasil diubah!");

    return redirect()->to("/admin/materi");
  }

  public function hapusMateri($id)
  {
    $this->materiModel->delete($id);
    session()->setFlashdata("pesan", "Materi berhasil dihapus!");
    return redirect()->to("/admin/materi");
  }
}
