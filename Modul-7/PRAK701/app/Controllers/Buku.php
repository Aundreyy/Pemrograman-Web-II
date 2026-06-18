<?php

namespace App\Controllers;

use App\Models\Buku as BukuModel;

class Buku extends BaseController
{
    protected $bukuModel;

    public function __construct()
    {
        $this->bukuModel = new BukuModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Buku',
            'buku'  => $this->bukuModel->findAll()
        ];
        
        return view('buku/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data Buku',
            'validation' => \Config\Services::validation()
        ];
        return view('buku/create', $data);
    }

    public function store()
    {
        $rules = [
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul buku wajib diisi.'
                ]
            ],
            'penulis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama penulis wajib diisi.'
                ]
            ],
            'penerbit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama penerbit wajib diisi.'
                ]
            ],
            'tahun_terbit' => [
                'rules' => 'required|numeric|greater_than[1800]|less_than[2024]',
                'errors' => [
                    'required'     => 'Tahun terbit wajib diisi.',
                    'numeric'      => 'Tahun terbit harus berupa angka.',
                    'greater_than' => 'Tahun terbit harus lebih besar dari 1800.',
                    'less_than'    => 'Tahun terbit harus lebih kecil dari 2024.'
                ]
            ]
    ];

        if (!$this->validate($rules)) {
            return redirect()->to('/buku/create')->withInput();
        }

        $this->bukuModel->insert([
            'judul'        => $this->request->getPost('judul'),
            'penulis'      => $this->request->getPost('penulis'),
            'penerbit'     => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit')
        ]);

        session()->setFlashdata('pesan', 'Data buku berhasil ditambahkan.');
        return redirect()->to('/buku');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data Buku',
            'validation' => \Config\Services::validation(),
            'buku' => $this->bukuModel->find($id)
        ];

        if (empty($data['buku'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Buku dengan ID ' . $id . ' tidak ditemukan');
        }

        return view('buku/edit', $data);
    }

    public function update($id)
    {
        $rules = [
            'judul' => [
                'rules' => 'required|string',
                'errors' => [
                    'required' => 'Judul buku wajib diisi.',
                    'string'   => 'Judul buku harus berupa teks.'
                ]
            ],
            'penulis' => [
                'rules' => 'required|string',
                'errors' => [
                    'required' => 'Nama penulis wajib diisi.',
                    'string'   => 'Nama penulis harus berupa teks.'
                ]
            ],
            'penerbit' => [
                'rules' => 'required|string',
                'errors' => [
                    'required' => 'Nama penerbit wajib diisi.',
                    'string'   => 'Nama penerbit harus berupa teks.'
                ]
            ],
            'tahun_terbit' => [
                'rules' => 'required|numeric|greater_than[1800]|less_than[2024]',
                'errors' => [
                    'required'     => 'Tahun terbit wajib diisi.',
                    'numeric'      => 'Tahun terbit harus berupa angka.',
                    'greater_than' => 'Tahun terbit harus lebih besar dari 1800.',
                    'less_than'    => 'Tahun terbit harus lebih kecil dari 2024.'
                ]
            ]
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('/buku/edit/' . $id)->withInput();
        }

        $this->bukuModel->update($id, [
            'judul'        => $this->request->getPost('judul'),
            'penulis'      => $this->request->getPost('penulis'),
            'penerbit'     => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit')
        ]);

        session()->setFlashdata('pesan', 'Data buku berhasil diubah.');
        return redirect()->to('/buku');
    }

    public function delete($id)
    {
        $this->bukuModel->delete($id);
        
        session()->setFlashdata('pesan', 'Data buku berhasil dihapus.');
        return redirect()->to('/buku');
    }
}