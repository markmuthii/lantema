<?php

namespace App\Models;

use CodeIgniter\Model;

class Product extends Model
{
  protected $DBGroup          = 'default';
  protected $table            = 'products';
  protected $primaryKey       = 'id';
  protected $useAutoIncrement = true;
  protected $insertID         = 0;
  protected $returnType       = 'array';
  protected $useSoftDeletes   = false;
  protected $protectFields    = true;
  protected $allowedFields    = [
    "name", "price", "quantity", "image_url", "category_id", "description"
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

  public function add_product($data)
  {
    return $this->insert($data);
  }

  public function get_products()
  {
    return $this->get()->getResult();
    return $this->select("products.*, pc.name as category");
    // ->join("product_categories pc", "products.category_id = pc.id");
  }
}
