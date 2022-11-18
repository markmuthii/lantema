<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Fees extends Seeder
{
  public function run()
  {
    // Data
    $data = [
      [
        "description" => "APPLICATION FEE FOR ALCOHOLIC DRINK LICENSE",
        "amount" => 2000
      ],
      [
        "description" => "ASSURANCE OF ALCOHOLIC DRINK LICENSE",
        "amount" => 1500
      ],
      [
        "description" => "BOTTLER'S ALCOHOLIC DRINK LICENSE",
        "amount" => 2000
      ],
      [
        "description" => "BOTTLER'S ALCOHOLIC DRINK-DEPOT LICENSE",
        "amount" => 1200
      ],
      [
        "description" => "CLUB ALCOHOLIC DRINK LICENSE",
        "amount" => 1400
      ],
      [
        "description" => "DISTRIBUTION ALCOHOLIC DRINK LICENSE",
        "amount" => 1600
      ],
      [
        "description" => "DISTRIBUTION ALCOHOLIC DRINK-DEPORT LICENSE",
        "amount" => 2100
      ],
      [
        "description" => "DUPLICATE ALCOHOLIC DRINK LICENSE",
        "amount" => 300
      ],
      [
        "description" => "GENERAL RETAIL ALCOHOLIC DRINK LICENSE",
        "amount" => 400
      ],
      [
        "description" => "GENERAL RETAIL-OFF WINE & SPIRITS",
        "amount" => 500
      ],
      [
        "description" => "HOTEL ALCOHOLIC DRINK LICENSE",
        "amount" => 300
      ],
      [
        "description" => "IMPORT ALCOHOLIC DRINK LICENSE",
        "amount" => 500
      ],
      [
        "description" => "LIQUOR COURT FINES",
        "amount" => 700
      ],
      [
        "description" => "LIQUOR LICENSE COURT BAIL",
        "amount" => 900
      ],
      [
        "description" => "LIQUOR LICENSE PENALTIES",
        "amount" => 1000
      ],
      [
        "description" => "LIQUOR SALES PREMISES",
        "amount" => 3000
      ],
      [
        "description" => "RAILWAYS RESTAURANT CAR ALCOHOLIC DRINK LICENSE",
        "amount" => 5000
      ],
      [
        "description" => "REMOVING AN ALCOHOLIC DRINK LICENSE",
        "amount" => 2000
      ],
      [
        "description" => "RESTAURANT ALCOHOLIC DRINK LICENSE",
        "amount" => 2100
      ],
      [
        "description" => "STEAMSHIP ALCOHOLIC DRINK LICENSE",
        "amount" => 30000
      ],
      [
        "description" => "SUPERMARKET & FRANCHISED RETAIL STORE ALCOHOLIC DRINK LICENSE",
        "amount" => 2300
      ],
      [
        "description" => "TEMPORARY OR OCCASIONAL ALCOHOLIC DRINK LICENSE",
        "amount" => 1000
      ],
      [
        "description" => "THEATRE ALCOHOLIC DRINK LICENSE",
        "amount" => 1200
      ],
      [
        "description" => "TRANSFER OF ALCOHOLIC DRINK LICENSE",
        "amount" => 1000
      ],
      [
        "description" => "TRAVELER'S ALCOHOLIC DRINK LICENSE",
        "amount" => 1200
      ],
      [
        "description" => "WHOLESALE ALCOHOLIC DRINK LICENSE",
        "amount" => 1500
      ]
    ];

    $this->db->table("fees")->insertBatch($data);
  }
}
