<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
  protected $DBGroup          = 'default';
  protected $table            = 'users';
  protected $primaryKey       = 'id';
  protected $useAutoIncrement = true;
  protected $insertID         = 0;
  protected $returnType       = 'array';
  protected $useSoftDeletes   = false;
  protected $protectFields    = true;
  protected $allowedFields    = ['first_name', 'last_name', 'email', 'password', 'role', 'added_by', 'username', 'telephone'];

  // Dates
  protected $useTimestamps = false;
  protected $dateFormat    = 'datetime';
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';

  // Validation
  protected $validationRules      = [];
  protected $validationMessages   = [];
  protected $skipValidation       = false;
  protected $cleanValidationRules = true;

  // Callbacks
  protected $allowCallbacks = true;
  protected $beforeInsert   = [];
  protected $afterInsert    = [];
  protected $beforeUpdate   = [];
  protected $afterUpdate    = [];
  protected $beforeFind     = [];
  protected $afterFind      = [];
  protected $beforeDelete   = [];
  protected $afterDelete    = [];

  public function create_user($data)
  {
    return $this->insert($data);
  }

  public function update_user()
  {
  }

  public function get_user_by_email($email)
  {
    return $this->select("users.*, roles.role_identifier")
      ->where("users.email", $email)
      ->join("roles", "users.role = roles.id")
      ->first();
  }

  public function get_all_users()
  {
    return $this->get()->getResult();
  }

  public function get_total_customers()
  {
    return $this->where("role", 1)->countAllResults();
  }

  public function get_random_agent()
  {
    return $this->where("role", 3)->orderBy("id", "random")->limit(1)->get()->getResult();
  }
}
