<?php

namespace App\Models;

use CodeIgniter\Model;

class SoalModel extends Model
{
  protected $table = 'soal';
  protected $primaryKey = 'id';
  protected $allowedFields = ['pertanyaan', 'tingkatan', 'pilihan', 'jawaban', 'grammar'];
  protected $useTimestamps = true;

  public function getSoal($id = false)
  {
    if ($id == false) {
      return $this->findAll();
    }
    return $this->where(["id" => $id])->first();
  }

  public function getSoalByLevel($tingkatan)
  {
    return $this->where('tingkatan', $tingkatan)->orderBy('RAND()')->findAll(20);
  }

  public function search($keyword)
  {
    return $this->table("soal")
      ->like("pertanyaan", $keyword)
      ->orLike("tingkatan", $keyword)
      ->get()
      ->getResultArray();
  }
}
