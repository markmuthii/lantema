<?php

namespace App\Models;

use CodeIgniter\Model;

class Business extends Model
{
  protected $DBGroup          = 'default';
  protected $table            = 'businesses';
  protected $primaryKey       = 'id';
  protected $useAutoIncrement = true;
  protected $insertID         = 0;
  protected $returnType       = 'array';
  protected $useSoftDeletes   = false;
  protected $protectFields    = true;
  protected $allowedFields    = [
    "business_name",
    "owner_name",
    "email",
    "national_id_number",
    "kra_pin",
    "business_size",
    "address",
    "physical_location",
    "building_name",
    "floor_number",
    "stall_number",
    "fees",
    "added_by",
    "status"
  ];

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

  public function create_business($data)
  {
    return $this->insert($data);
  }

  public function update_business($data)
  {
    return $this->set($data)->update();
  }

  public function get_business($id)
  {
    return $this->select("businesses.*, fees.description as fee_desc, fees.amount as fee_amount")
      ->where("businesses.id", $id)
      ->join("fees", "businesses.fees = fees.id")
      ->first();
  }

  public function get_businesses()
  {
    return $this->get()->getResult();
  }
}
