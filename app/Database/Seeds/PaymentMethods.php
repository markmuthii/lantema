<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PaymentMethods extends Seeder
{
  public function run()
  {
    // Data
    $data = [
      [
        "name" => "mpesa",
        "description" => "Mpesa"
      ],
      [
        "name" => "cash",
        "description" => "Cash"
      ],
    ];

    $this->db->table("paymentmethods")->insertBatch($data);
  }
}
