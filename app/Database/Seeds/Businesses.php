<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Businesses extends Seeder
{
  public function run()
  {
    // Data
    $data = [
      'business_name' => 'Quiver',
      'owner_name' => 'Mr X',
      'email' => 'mrx@gmail.com',
      'national_id_number' => '23232323',
      'kra_pin' => 'A2KDS4NB',
      'business_size' => '40',
      'income_type' => 'Income type 1',
      'address' => 'Thika Road',
      'physical_location' => 'Thika Road',
      'building_name' => 'Quiver',
      'floor_number' => 2,
      'stall_number' => 1,
      'fees' => 17,
      'added_by' => 2,
      'status' => 0,
    ];

    $this->db->table("businesses")->insert($data);
  }
}
