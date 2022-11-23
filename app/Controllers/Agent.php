<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Order;

class Agent extends BaseController
{
  public function __construct()
  {
    helper(["url", "form", "user_session", "global_variables"]);
    authorize_access("agent");
  }

  public function getIndex()
  {
    $orderModel = new Order();

    $data = [
      "orders" => $orderModel->get_agent_orders(get_user_info("id"))->paginate(10),
      "pager" => $orderModel->pager
    ];
    return view("agent/index", $data);
  }
}
