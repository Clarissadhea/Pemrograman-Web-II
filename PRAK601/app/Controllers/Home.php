<?php
namespace App\Controllers;
use App\Models\PraktikanModel;

class Home extends BaseController
{
    protected $praktikanModel;

    public function __construct()
    {
        $this->praktikanModel = new PraktikanModel();
    }

    public function index()
    {
        $data = $this->praktikanModel->getProfilData();
        $data['title'] = 'Beranda';
        
        return view('beranda', $data);
    }

    public function profil()
    {
        $data = $this->praktikanModel->getProfilData();
        $data['title'] = 'Profil Praktikan';
        
        return view('profil', $data);
    }
}