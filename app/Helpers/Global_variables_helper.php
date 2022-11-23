<?php

use App\Models\ProductCategory;

function get_product_categories()
{
  $categoryModel = new ProductCategory();

  return $categoryModel->findAll();
}
