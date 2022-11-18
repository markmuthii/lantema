<?php

namespace App\Libraries;

class Hash
{
  public static function make($pass)
  {
    return password_hash($pass, PASSWORD_DEFAULT);
  }

  public static function check($pass, $hash)
  {
    return password_verify($pass, $hash);
  }
}
