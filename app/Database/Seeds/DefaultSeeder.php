<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DefaultSeeder extends Seeder
{
  public function run()
  {
    // Call default seeds
    $this->call("Roles");
    $this->call("Users");
    $this->call("Fees");
    $this->call("Businesses");
    $this->call("PaymentMethods");
  }
}
