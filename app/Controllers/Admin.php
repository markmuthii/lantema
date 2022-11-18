<?php

namespace App\Controllers;

use App\Libraries\Hash;
use App\Models\Product;
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
    return view('admin/index');
  }

  public function getProducts()
  {
    $productModel = new Product();

    $products = $productModel->get_products();

    return view("admin/products", ["products" => $products]);
  }

  public function postAdd_users()
  {

    $validation = $this->validate(
      [
        "first_name" => [
          "rules" => "required",
          "errors" => [
            "required" => "First name is required",
          ]
        ],
        "last_name" => [
          "rules" => "required",
          "errors" => [
            "required" => "Last name is required",
          ]
        ],
        "email" => [
          "rules" => "required|valid_email",
          "errors" => [
            "required" => "Email is required",
            "valid_email" => "Please enter a valid email address"
          ]
        ],
        "role" => [
          "rules" => "required",
          "errors" => [
            "required" => "Role is required",
          ]
        ],
      ]
    );

    if (!$validation) {
      $role = new Role();
      $roles = $role->get_roles();
      return view("admin/add_users", ["validation" => $this->validator, "roles" => $roles]);
    } else {
      // Validation passed

      // Generate random password
      $alpbt = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz012345678";

      $pass = substr(str_shuffle($alpbt), 0, 7);

      // Hash the password
      $hash_pass = Hash::make($pass);

      $data = [
        "first_name" => $this->request->getPost('first_name'),
        "last_name" => $this->request->getPost('last_name'),
        "email" => $this->request->getPost('email'),
        "password" => $hash_pass,
        "role" => $this->request->getPost('role'),
        "added_by" => get_user_info("id")
      ];

      if ($this->userModel->create_user($data)) {
        // Data has been inserted 

        // TODO: Fix email sending using SMTP
        // Send email 
        $to = $data["email"];
        $subject = "Account Login Details";
        $name = $data["first_name"];

        $email = \Config\Services::email();
        $view = \Config\Services::renderer();

        $message = $view->setVar('name', $name)
          ->setVar('email', $to)
          ->setVar('password', $pass)
          ->render("email/new_account");

        // echo $message;
        // exit;

        $email->setTo($to);
        $email->setFrom("no-reply@liquorcense.com", "Liquorecense");
        $email->setSubject($subject);
        $email->setMessage($message);

        if ($email->send()) {
          // Email Sent
          session()->setFlashdata("add_users_success", "User with email ${data['email']} has been added successfully and an email has been sent.");
        } else {
          // Email not sent
          session()->setFlashdata("add_users_success", "User with email ${data['email']} has been added successfully, but there was a problem send the email. Their login password is: $pass");
        }

        return redirect()->to("/admin/add_users");
      } else {
        // Error inserting the data
        session()->setFlashdata("add_users_error", "Error adding the user to the database.");
        return redirect()->to("/admin/add_users")->withInput();
      }
    }
  }
}
