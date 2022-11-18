<?php

namespace App\Controllers;

use App\Libraries\Hash;
use App\Models\User;

class Home extends BaseController
{
  protected $userModel;

  public function __construct()
  {
    helper(["user_session", "form"]);
    $this->userModel = new User();
  }

  // GET
  public function getIndex()
  {
    return view('home/index');
  }

  public function getLogin()
  {
    // If the user is already logged in, take them to their dashboard
    if (session()->has("user")) {
      $role = get_user_info("role_identifier");
      return redirect()->to("/${role}");
    }

    return view("home/login");
  }

  // POST 
  public function postLogin()
  {
    $validation = $this->validate([
      "email" => [
        "rules" => "required|valid_email",
        "errors" => [
          "required" => "Email is required",
          "valid_email" => "Please enter a valid email address"
        ]
      ],
      "password" => [
        "rules" => "required",
        "errors" => [
          "required" => "Password is required"
        ]
      ],
    ]);

    if (!$validation) {
      // Validation failed
      return view("home/login", ["validation" => $this->validator]);
    } else {
      // Validation passed
      $email = $this->request->getPost("email");
      $password = $this->request->getPost("password");

      $user = $this->userModel->get_user_by_email($email);

      if (!$user) {
        // User email does not exist
        session()->setFlashdata("login_error", "Incorrect credentials");
        return redirect()->to("/login")->withInput();
      } else {
        // User email exists

        // Check the password
        if (!Hash::check($password, $user['password'])) {
          // Credentials are not correct
          session()->setFlashdata("login_error", "Incorrect credentials");
          return redirect()->to("/login")->withInput();
        } else {
          // Correct creds
          session()->set("user", $user);
          $role = $user["role_identifier"];
          return redirect()->to("/${role}");
        }
      }
    }
  }

  public function logout()
  {
    session()->remove("user");
    session()->setFlashdata("login_success", "You have successfully logged out.");
    return redirect()->to("/login");
  }
}
