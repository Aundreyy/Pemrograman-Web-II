<?php
namespace App\Controllers;
use App\Models\PraktikanModel;

class Page extends BaseController
{
    protected $praktikanModel;

    public function __construct()
    {
        $this->praktikanModel = new PraktikanModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'praktikan' => $this->praktikanModel->getPraktikan()
        ];
        return view('beranda', $data);
    }

    public function profil()
    {
        $data = [
            'title' => 'Profil',
            'praktikan' => $this->praktikanModel->getPraktikan()
        ];
        return view('profil', $data);
    }
}