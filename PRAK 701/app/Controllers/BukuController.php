<?php namespace App\Controllers;

use App\Models\BukuModel;

class BukuController extends BaseController
{
    public function index()
    {
        $model = new BukuModel();
        $data['buku'] = $model->findAll();
        return view('buku/index', $data);
    }

    public function create()
    {
        return view('buku/create');
    }

    public function store()
    {
        $rules = [
            'judul' => [
                'rules' => 'required|string',
                'errors' => ['required' => 'Judul harus diisi.', 'string' => 'Judul harus berupa teks.']
            ],
            'penulis' => [
                'rules' => 'required|string',
                'errors' => ['required' => 'Penulis harus diisi.', 'string' => 'Penulis harus berupa teks.']
            ],
            'penerbit' => [
                'rules' => 'required|string',
                'errors' => ['required' => 'Penerbit harus diisi.', 'string' => 'Penerbit harus berupa teks.']
            ],
            'tahun_terbit' => [
                'rules' => 'required|numeric|greater_than[1800]|less_than[2024]',
                'errors' => [
                    'required' => 'Tahun terbit harus diisi.',
                    'numeric' => 'Tahun terbit harus berupa angka.',
                    'greater_than' => 'Tahun terbit harus lebih besar dari 1800.',
                    'less_than' => 'Tahun terbit harus lebih kecil dari 2024.'
                ]
            ]
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $model = new BukuModel();
        $model->save($this->request->getPost());
        return redirect()->to('/buku')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $model = new BukuModel();
        $data['buku'] = $model->find($id);
        return view('buku/edit', $data);
    }

    public function update($id)
    {
        $rules = [
            'judul' => [
                'rules' => 'required|string',
                'errors' => ['required' => 'Judul buku harus terisi!', 'string' => 'Judul harus berupa teks.']
            ],
            'penulis' => [
                'rules' => 'required|string',
                'errors' => ['required' => 'Penulis harus terisi!', 'string' => 'Penulis harus berupa teks.']
            ],
            'penerbit' => [
                'rules' => 'required|string',
                'errors' => ['required' => 'Penerbit harus terisi!', 'string' => 'Penerbit harus berupa teks.']
            ],
            'tahun_terbit' => [
                'rules' => 'required|numeric|greater_than[1800]|less_than[2024]',
                'errors' => [
                    'required' => 'Tahun terbit harus terisi!',
                    'numeric' => 'Tahun harus berupa angka!',
                    'greater_than' => 'Tahun terbit harus lebih besar dari 1800!',
                    'less_than' => 'Tahun terbit harus lebih kecil dari 2024!'
                ]
            ]
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $model = new BukuModel();
        $model->update($id, $this->request->getPost());
        
        return redirect()->to('/buku')->with('success', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $model = new BukuModel();
        $model->delete($id);
        return redirect()->to('/buku')->with('success', 'Data berhasil dihapus');
    }
}