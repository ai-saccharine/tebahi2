<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table = 'users';
  protected $primaryKey = 'id';
  protected $allowedFields = ['nama', 'jenisKelamin', 'umur', 'noTelp', 'email', 'password', 'status'];
  protected $useTimestamps = true;

  public function getEmail($email)
  {
    return $this->where(["email" => $email])->first();
  }
}
