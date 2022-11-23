<?php

function get_user_info($col)
{
  return session()->get("user")[$col];
}

function authorize_access($ctrlr = "")
{

  // If the ctrl is not provided, simply check if the person is logged in

  if (!session()->has("user")) {
    session()->setFlashdata("login_error", "You need to be logged in to access that page.");
    header("Location: " . base_url("login"));
    exit();
  } elseif (!empty($ctrlr) && get_user_info("role_identifier") !== $ctrlr) {
    $role = session()->get("user")["role_identifier"];
    header("Location: " . base_url("$role"));
    exit();
  }
}
