<?php

namespace App\Models;

use CodeIgniter\Model;

class Application extends Model
{
  protected $DBGroup          = 'default';
  protected $table            = 'applications';
  protected $primaryKey       = 'id';
  protected $useAutoIncrement = true;
  protected $insertID         = 0;
  protected $returnType       = 'array';
  protected $useSoftDeletes   = false;
  protected $protectFields    = true;
  protected $allowedFields    = [
    "business_id",
    "bill_number",
    "payment_mode",
    "balance",
    "added_by"
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

  public function create_application($data)
  {
    return $this->insert($data);
  }

  public function update_application()
  {
  }

  public function get_application()
  {
  }

  public function get_applications()
  {
  }

  public function get_application_by_bill_number($bn)
  {
    return $this->select()->where("bill_number", $bn)->first();
  }
}
