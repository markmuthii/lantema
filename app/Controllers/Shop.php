<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Product;

class Shop extends BaseController
{

  private $productModel;

  public function __construct()
  {
    helper(["url", "user_session", "form", "global_variables"]);
    $this->productModel = new Product();
  }

  /**
   * Get and display all products
   */
  public function getIndex()
  {

    $productModel = new Product();

    $data = [
      'products' => $productModel->get_products()->paginate(9),
      'pager' => $productModel->pager,
    ];

    return view("shop/index", $data);
  }


  public function getSearch()
  {
    // Get the search query
  }
}
