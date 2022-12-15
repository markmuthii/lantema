<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Order;

class Account extends BaseController
{
  public function __construct()
  {
    helper(["url", "form", "user_session", "global_variables"]);
    authorize_access();
  }
  public function getIndex()
  {
    // Profile page

    return view("account/profile");
  }

  public function getOrders()
  {
    $orderModel = new Order();

    $orders = $orderModel->where("user_id", get_user_info("id"))->paginate(10);

    $data = [
      "orders" => $orders,
      "pager" => $orderModel->pager
    ];

    return view("account/orders", $data);
  }
}
