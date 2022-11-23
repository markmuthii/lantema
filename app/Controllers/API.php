<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class API extends BaseController
{
  // API METHODS
  public function api()
  {
    $product = [
      [
        "id" => 1,
        "name" => "Product 1",
        "price" => 200,
      ], [
        "id" => 1,
        "name" => "Product 1",
        "price" => 200,
      ]
    ];

    return $this->response
      ->setStatusCode(200)
      ->setJSON($product);
  }
}
