<?php

namespace App\Models;

use CodeIgniter\Model;

class Order extends Model
{
  protected $DBGroup          = 'default';
  protected $table            = 'orders';
  protected $primaryKey       = 'id';
  protected $useAutoIncrement = true;
  protected $insertID         = 0;
  protected $returnType       = 'array';
  protected $useSoftDeletes   = false;
  protected $protectFields    = true;
  protected $allowedFields    = ["user_id", "total", "agent_id", "status"];

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

  public function create_order($data)
  {
    $this->insert($data);
  }

  public function get_all_orders()
  {
    return $this->select("orders.*, users.first_name, users.last_name");
  }

  public function get_total_pending_orders()
  {
    return $this->where("status", 0)->countAllResults();
  }

  public function get_agent_orders($aid)
  {
    return $this->where("agent_id", $aid);
  }

  public function disburse($oid)
  {
    $data = [
      "status" => 1
    ];
    return $this->update($oid, $data);
  }

  public function deliver($oid)
  {
    $data = [
      "status" => 2
    ];
    return $this->update($oid, $data);
  }
}
