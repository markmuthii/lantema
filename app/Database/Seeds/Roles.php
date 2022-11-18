<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Roles extends Seeder
{
  public function run()
  {
    // Data
    $data = [
      [
        "name" => "Super Admin",
        "role_identifier" => "sadmin"
      ],
      [
        "name" => "Admin",
        "role_identifier" => "admin"
      ],
      [
        "name" => "Finance",
        "role_identifier" => "finance"
      ],
      [
        "name" => "Biller",
        "role_identifier" => "biller"
      ],
      [
        "name" => "Inspection Officer",
        "role_identifier" => "iofficer"
      ],
    ];

    $this->db->table("roles")->insertBatch($data);
  }
}
