<?php

namespace App\Controllers;

use App\Models\Role;
use App\Models\User;

class Admin extends BaseController
{
  protected $role_identifier = "user";
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
    return view('user/index');
  }
}
