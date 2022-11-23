<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;

class Shopping extends BaseController
{

  public function __construct()
  {
    helper(["url", "user_session", "form", "global_variables"]);
  }

  public function cart()
  {
  }

  public function getCheckout()
  {
    if (!session()->has("user")) {
      session()->set("next", "checkout");
      session()->setFlashdata("login_error", "Login or create an account to checkout");
      return redirect()->to("/login");
    }
    return view("shop/checkout");
  }

  public function postCheckout()
  {
    authorize_access();
    // TODO: Use a try catch block here, and a transaction

    // Get the products
    $products = $this->request->getPost("products");
    $total = $this->request->getPost("total");

    $userModel = new User();

    // Create the order record and get the order id
    $data = [
      "user_id" => get_user_info("id"),
      "total" => $total,
      "agent_id" => $userModel->get_random_agent()[0]->id
    ];

    $orderModel = new Order();

    $order_id = $orderModel->insert($data);

    $orderItemsModel = new OrderItem();

    // Insert each product into the order items table with the corresponding order id
    foreach ($products as $product) {

      $data = [
        "order_id" => $order_id,
        "product_id" => $product["id"],
        "quantity" => $product["quantity"],
        "price" => $product["price"]
      ];

      $res = $orderItemsModel->insert($data);
    }

    // Return a success message if everything is okay, otherwise return a failure message

    $resp = [
      "success" => true,
      "message" => ""
    ];

    return $this->response
      ->setStatusCode(200)
      ->setJSON($resp);
  }


  public function orderDetails($oid)
  {
    authorize_access();
    $orderItemsModel = new OrderItem();
    $items = $orderItemsModel->get_items($oid);

    return view("shop/order-items", ["items" => $items]);
  }

  public function disburseOrder($oid)
  {
    authorize_access("agent");
    $orderModel = new Order();

    if ($orderModel->disburse($oid)) {
      session()->setFlashdata("order_success", "Status of the order has been updated succesfully.");
    } else {
      session()->setFlashdata("order_error", "Error updating the status of the order.");
    }
    return redirect()->to("/agent");
  }

  public function deliverOrder($oid)
  {
    authorize_access("agent");
    $orderModel = new Order();

    if ($orderModel->deliver($oid)) {
      session()->setFlashdata("order_success", "Status of the order has been updated succesfully.");
    } else {
      session()->setFlashdata("order_error", "Error updating the status of the order.");
    }
    return redirect()->to("/agent");
  }
}
