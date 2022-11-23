<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class CreateTables extends Migration
{
  public function up()
  {
    // Default 
    // TODO: Turn this into a snippet
    // $this->forge->addField([
    //   "id" => [
    //     "type" => "INTEGER",
    //     "auto_increment" => true
    //   ],
    //   "created_at" => [
    //     "type" => "TIMESTAMP",
    //     "default" => new RawSql("CURRENT_TIMESTAMP")
    //   ],
    //   "updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
    // ])->addKey("id", true, true)->createTable("table_name", true);


    // 1. Users
    // TODO: Add more user columns
    $this->forge->addField([
      "id" => [
        "type" => "INTEGER",
        "auto_increment" => true
      ],
      "first_name" => [
        "type" => "VARCHAR",
        "constraint" => 20
      ],
      "last_name" => [
        "type" => "VARCHAR",
        "constraint" => 20
      ],
      "email" => [
        "type" => "VARCHAR",
        "constraint" => 100,
        "unique" => true
      ],
      "password" => [
        "type" => "VARCHAR",
        "constraint" => 255
      ],
      "role" => [ // foreign key to the roles table
        "type" => "INTEGER",
        "constraint" => 1
      ],
      "created_at" => [
        "type" => "TIMESTAMP",
        "default" => new RawSql("CURRENT_TIMESTAMP")
      ],
      "updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
    ])->addKey("id", true, true)->createTable("users", true);

    // 2. Roles
    $this->forge->addField([
      "id" => [
        "type" => "INTEGER",
        "auto_increment" => true
      ],
      "name" => [
        "type" => "VARCHAR",
        "constraint" => 20
      ],
      "role_identifier" => [
        "type" => "VARCHAR",
        "constraint" => 100,
        "unique" => true
      ],
      "created_at" => [
        "type" => "TIMESTAMP",
        "default" => new RawSql("CURRENT_TIMESTAMP")
      ],
      "updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
    ])->addKey("id", true, true)->createTable("roles", true);
  }

  public function down()
  {
    $this->forge->dropTable("users", true);
    $this->forge->dropTable("roles", true);
    $this->forge->dropTable("fees", true);
    $this->forge->dropTable("businesses", true);
    $this->forge->dropTable("applications", true);
    $this->forge->dropTable("receipts", true);
    $this->forge->dropTable("licenses", true);
    $this->forge->dropTable("paymentmethods", true);
    $this->forge->dropTable("payments", true);
  }
}
