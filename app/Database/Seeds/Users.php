<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
  public function run()
  {
    // Data
    $data = [
      [
        'first_name' => 'Mark',
        'last_name' => 'Muthii',
        'email' => 'mark@muthii.me',
        'password' => '$2y$10$qK.C9Rw5MUQN8UjoBq5mVeoyqTIhORy4Z4/hCkkfjiRd3DMN6pp4G',
        'role' => 2,
        'added_by' => 1
      ],
      [
        'first_name' => 'Kram',
        'last_name' => 'Biller',
        'email' => 'mainamark20@gmail.com',
        'password' => '$2y$10$qK.C9Rw5MUQN8UjoBq5mVeoyqTIhORy4Z4/hCkkfjiRd3DMN6pp4G',
        'role' => 4,
        'added_by' => 1
      ]
    ];

    $this->db->table("users")->insertBatch($data);
  }
}
