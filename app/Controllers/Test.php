<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class Test extends BaseController
{
  public function getIndex()
  {
    $userModel = new User();

    print_r($userModel->get_random_agent()[0]->id);
  }
}
