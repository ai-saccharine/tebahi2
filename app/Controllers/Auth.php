<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
  protected $userModel;
  protected $session;
  public function __construct()
  {
    $this->userModel = new UserModel();
    $this->session = \Config\Services::session();
  }

  public function login()
  {
    if ($this->request->getMethod() == 'post') {
      // Ambil data dari form
      $email = $this->request->getVar('email');
      $password = $this->request->getVar('password');

      // Validasi input
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return redirect()->to('/auth/login')->withInput()->with('error', 'Email tidak valid');
      }

      if (empty($password)) {
        return redirect()->to('/auth/login')->withInput()->with('error', 'Password tidak boleh kosong');
      }

      // Autentikasi user
      $userModel = new UserModel();
      $user = $userModel->where('email', $email)->first();

      if (!$user) {
        return redirect()->to('/auth/login')->withInput()->with('error', 'Email tidak terdaftar');
      }

      if (!password_verify($password, $user['password'])) {
        return redirect()->to('/auth/login')->with('error', 'Password salah');
      }

      // Jika login berhasil, set session status
      $this->session->set('status', 'logged_in');
      $this->session->set('email', $email);
      $user = $this->userModel->getEmail($email);
      $this->session->set('role', $user['role']);
      if ($user['role'] == 'siswa') {
        return redirect()->to('/siswa');
      } else {
        return redirect()->to('/admin');
      }
    }

    return view('auth/login');
  }


  public function logout()
  {
    // Hapus session status
    session()->destroy();
    // $this->session->remove('status');
    return redirect()->to('/login');
  }

  public function register()
  {
    $data = [
      "validation" => \Config\Services::validation()
    ];
    return view("auth/register", $data);
  }

  public function saveRegister()
  {
    // validasi input
    // if (!$this->validate([
    //   "nama" => [
    //     "rules" => "required",
    //     "errors" => [
    //       "required" => "Nama harus diisi!"
    //     ]
    //   ],
    //   "jenisKelamin" => [
    //     "rules" => "required",
    //     "errors" => [
    //       "required" => "Jenis kelamin harus diisi!"
    //     ]
    //   ],
    //   "umur" => [
    //     "rules" => "required",
    //     "errors" => [
    //       "required" => "Umur harus diisi!"
    //     ]
    //   ],
    //   "noTelp" => [
    //     "rules" => "required",
    //     "errors" => [
    //       "required" => "Nomor telepon harus diisi!"
    //     ]
    //   ],
    //   "email" => [
    //     "rules" => "required|is_unique[users.email]",
    //     "errors" => [
    //       "required" => "Email harus diisi!",
    //       "is_unique" => "Email sudah terdaftar!"
    //     ]
    //   ],
    //   "password" => [
    //     "rules" => "required",
    //     "errors" => [
    //       "required" => "Password harus diisi!"
    //     ]
    //   ],
    // ])) {
    //   return redirect()->to("auth/register")->withInput();
    // }

    $jenisKelamin = $this->request->getVar('jenisKelamin') === 'l' ? 'Laki - Laki' : 'Perempuan';

    $this->userModel->save([
      'nama' => $this->request->getVar('nama'),
      'jenisKelamin' => $jenisKelamin,
      'umur' => $this->request->getVar('umur'),
      'noTelp' => $this->request->getVar('noTelp'),
      'email' => $this->request->getVar('email'),
      'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
    ]);

    return redirect()->to('/auth/berhasilRegister');
  }

  public function berhasilRegister()
  {
    return view("auth/berhasilRegister");
  }
}
