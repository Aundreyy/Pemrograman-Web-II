<?php
namespace App\Models;
use CodeIgniter\Model;

class PraktikanModel extends Model
{
    public function getPraktikan()
    {
        return [
            'nama'  => 'Andre Cristian Nathanael',
            'nim'   => '2410817210006',
            'prodi' => 'Teknologi Informasi',
            'hobi'  => 'Mencintai Carmen',
            'skill' => 'All Rounder'
        ];
    }
}