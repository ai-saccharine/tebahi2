<?php

namespace App\Models;

use CodeIgniter\Model;

class MateriModel extends Model
{
  protected $table = 'materi';
  protected $primaryKey = 'id';
  protected $allowedFields = ['kategori-materi', 'materi'];
  protected $useTimestamps = true;

  public function getMateri($id = false)
  {
    if ($id == false) {
      return $this->findAll();
    }
    return $this->where(["id" => $id])->first();
  }
}
