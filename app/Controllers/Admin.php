<?php

namespace App\Controllers;

use App\Libraries\Hash;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Role;
use App\Models\User;

class Admin extends BaseController
{
  protected $role_identifier = "admin";
  protected $userModel;

  public function __construct()
  {
    helper(["url", "user_session", "form"]);
    authorize_access($this->role_identifier);
    $this->userModel = new User();
  }

  public function getIndex()
  {
    // TODO: Add reports
    $productModel = new Product();
    $productModel = new Product();
    $orderModel = new Order();

    $total_products = $productModel->get_total_products();
    $total_customers = $this->userModel->get_total_customers();
    $pending_orders = $orderModel->get_total_pending_orders();

    return view('admin/index', ["products" => $total_products, "customers" => $total_customers, "orders" => $pending_orders]);
  }

  public function getOrders()
  {
    $orderModel = new Order();

    $orders = $orderModel->get_all_orders();

    return view("admin/orders", ["orders" => $orders]);
  }

  public function getProducts()
  {
    $productModel = new Product();
    $catModel = new ProductCategory();

    $data = [
      "products" => $productModel->paginate(2),
      "categories" => $catModel->findAll(),
      "pager" => $productModel->pager,
    ];

    return view("admin/products", $data);
  }

  public function getCustomers()
  {
    return view("admin/customers");
  }

  public function getCategories()
  {
    $catModel = new ProductCategory();
    return view("admin/categories", ["categories" => $catModel->findAll()]);
  }

  public function postProducts()
  {
    $validation = $this->validate(
      [
        "name" => [
          "rules" => "required",
          "errors" => [
            "required" => "Product name is required",
          ]
        ],
        "price" => [
          "rules" => "required",
          "errors" => [
            "required" => "Product price is required",
          ]
        ],
        "quantity" => [
          "rules" => "required",
          "errors" => [
            "required" => "Product quantity is required",
          ]
        ],
        "image_url" => [
          "rules" => "required",
          "errors" => [
            "required" => "Product image URL is required",
          ]
        ],
        "category_id" => [
          "rules" => "required",
          "errors" => [
            "required" => "Product category is required",
          ]
        ],
        "description" => [
          "rules" => "required",
          "errors" => [
            "required" => "Product description is required",
          ]
        ]
      ]
    );

    if (!$validation) {
      $productModel = new Product();

      $products = $productModel->get_products();
      session()->setFlashdata("product_error", "Error adding the product. Validate the fields.");
      return view("admin/products", ["validation" => $this->validator, "products" => $products]);
    } else {
      $data = [
        "name" => $this->request->getPost("name"),
        "price" => $this->request->getPost("price"),
        "quantity" => $this->request->getPost("quantity"),
        "image_url" => $this->request->getPost("image_url"),
        "category_id" => $this->request->getPost("category_id"),
        "description" => $this->request->getPost("description")
      ];

      $productModel = new Product();

      if ($productModel->add_product($data)) {
        session()->setFlashdata("product_success", "Product added successfully");
        return redirect()->to("/admin/products");
      } else {
        session()->setFlashdata("product_error", "Error adding the product");
        return redirect()->to("/admin/products")->withInput();
      }
    }
  }

  public function postCategories()
  {
    $validation = $this->validate(
      [
        "name" => [
          "rules" => "required",
          "errors" => [
            "required" => "Category name is required",
          ]
        ],
        "description" => [
          "rules" => "required",
          "errors" => [
            "required" => "Category description is required",
          ]
        ]
      ]
    );

    $catModel = new ProductCategory();

    if (!$validation) {

      $categories = $catModel->findAll();
      session()->setFlashdata("category_error", "Error adding the category. Validate the fields.");
      return view("admin/categories", ["validation" => $this->validator, "categories" => $categories]);
    } else {
      // Generate slug from the name
      $name = $this->request->getPost("name");
      $slug = str_replace(" ", "-", $name);
      $data = [
        "name" => $name,
        "slug" => strtolower($slug),
        "description" => $this->request->getPost("description")
      ];


      if ($catModel->insert($data)) {
        session()->setFlashdata("category_success", "category added successfully");
        return redirect()->to("/admin/categories");
      } else {
        session()->setFlashdata("category_error", "Error adding the category");
        return redirect()->to("/admin/categories")->withInput();
      }
    }
  }
}
