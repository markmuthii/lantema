<?php

namespace App\Controllers;

use App\Libraries\Hash;
use App\Models\User;

class Home extends BaseController
{
  protected $userModel;

  public function __construct()
  {
    helper(["user_session", "form", "url", "global_variables"]);
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

  public function getRegister()
  {
    return view("home/register");
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
          if (session()->has("next")) {
            $next = session()->get("next");
            session()->remove("next");
            return redirect()->to("/${next}");
          }
          return redirect()->to("/${role}");
        }
      }
    }
  }

  public function postRegister()
  {
    $validation = $this->validate([
      "first_name" => [
        "rules" => "required",
        "errors" => [
          "required" => "First name is required"
        ]
      ],
      "last_name" => [
        "rules" => "required",
        "errors" => [
          "required" => "Last name is required"
        ]
      ],
      "username" => [
        "rules" => "required",
        "errors" => [
          "required" => "Username is required"
        ]
      ],
      "email" => [
        "rules" => "required|valid_email",
        "errors" => [
          "required" => "Email is required",
          "valid_email" => "Please enter a valid email address"
        ]
      ],
      "telephone" => [
        "rules" => "required",
        "errors" => [
          "required" => "Phone is required"
        ]
      ],
      "password" => [
        "rules" => "required",
        "errors" => [
          "required" => "Password is required"
        ]
      ],
      "confirm_password" => [
        "rules" => "required|matches[password]",
        "errors" => [
          "required" => "Confirm your password"
        ]
      ],
    ]);

    if (!$validation) {
      // Validation failed
      return view("home/register", ["validation" => $this->validator]);
    } else {
      // Validation passed
      $first_name = $this->request->getPost("first_name");
      $last_name = $this->request->getPost("last_name");
      $username = $this->request->getPost("username");
      $email = $this->request->getPost("email");
      $telephone = $this->request->getPost("telephone");
      $password = $this->request->getPost("password");

      $user = $this->userModel->get_user_by_email($email);

      if ($user) {
        // User email does not exist
        session()->setFlashdata("register_error", "Email already exists");
        return redirect()->to("/register")->withInput();
      } else {
        // User email does not exist

        // Hash the password
        $hashPass = Hash::make($password);

        $data = [
          "first_name" => $first_name,
          "last_name" => $last_name,
          "username" => $username,
          "email" => $email,
          "telephone" => $telephone,
          "password" => $hashPass,
        ];

        if ($this->userModel->insert($data)) {
          session()->setFlashdata("login_success", "Registration successful. Log in");
          return redirect()->to("/login");
        } else {
          // Not registered
          session()->setFlashdata("register_error", "Registration not successful. Try again.");
          return redirect()->to("/register")->withInput();
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
