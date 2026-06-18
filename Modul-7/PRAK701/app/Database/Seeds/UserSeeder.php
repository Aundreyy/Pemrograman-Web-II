<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'admin',
            'email'    => 'admin@gmail.com',
            'password' => password_hash('12345', PASSWORD_DEFAULT),
        ];

        $this->db->table('user')->insert($data);
    }
}