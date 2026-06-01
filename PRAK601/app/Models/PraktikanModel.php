<?php
namespace App\Models;
use CodeIgniter\Model;

class PraktikanModel extends Model
{
    public function getProfilData()
    {
        return [
            'nama'  => 'Clarissa Dhea Allisya',
            'nim'   => '2410817220023',
            'prodi' => 'Teknologi Informasi',
            'hobi'  => 'Nyantai, nonton',
            'skill' => 'Tidur, Makan, Rebahan'
        ];
    }
}