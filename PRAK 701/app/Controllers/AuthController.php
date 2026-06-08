<?php 
namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function loginProcess()
    {
        $model = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();

        if ($user && $user['password'] == $password) {
            session()->set([
                'isLoggedIn' => true,
                'username' => $user['username']
            ]);
            return redirect()->to('/buku');
        }

        session()->setFlashdata('error', 'Username atau Password salah!');
        return redirect()->to('/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}