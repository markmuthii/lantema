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
      "added_by" => [ // foreign key to the users table
        "type" => "INTEGER",
        "constraint" => 255
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

    // 3. Fees
    $this->forge->addField([
      "id" => [
        "type" => "INTEGER",
        "auto_increment" => true
      ],
      "description" => [
        "type" => "TEXT"
      ],
      "amount" => [
        "type" => "VARCHAR",
        "constraint" => 20
      ],
      "created_at" => [
        "type" => "TIMESTAMP",
        "default" => new RawSql("CURRENT_TIMESTAMP")
      ],
      "updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
    ])->addKey("id", true, true)->createTable("fees", true);

    // 4. Businesses
    $this->forge->addField([
      "id" => [
        "type" => "INTEGER",
        "auto_increment" => true
      ],
      "business_name" => [
        "type" => "VARCHAR",
        "constraint" => 50
      ],
      "owner_name" => [
        "type" => "VARCHAR",
        "constraint" => 255
      ],
      "email" => [
        "type" => "VARCHAR",
        "constraint" => 50
      ],
      "national_id_number" => [
        "type" => "VARCHAR",
        "constraint" => 50
      ],
      "kra_pin" => [
        "type" => "VARCHAR",
        "constraint" => 50
      ],
      "business_size" => [
        "type" => "VARCHAR",
        "constraint" => 50
      ],
      "income_type" => [
        "type" => "VARCHAR",
        "constraint" => 255
      ],
      "address" => [
        "type" => "VARCHAR",
        "constraint" => 50
      ],
      "physical_location" => [
        "type" => "VARCHAR",
        "constraint" => 50
      ],
      "building_name" => [
        "type" => "VARCHAR",
        "constraint" => 50
      ],
      "floor_number" => [
        "type" => "VARCHAR",
        "constraint" => 50
      ],
      "stall_number" => [
        "type" => "VARCHAR",
        "constraint" => 50
      ],
      "fees" => [ // foreign key to the fees table
        "type" => "INTEGER",
        "constraint" => 5
      ],
      "added_by" => [
        "type" => "INTEGER",
        "constraint" => 255
      ],
      "status" => [
        "type" => "INTEGER",
        "constraint" => 1,
        "default" => 0
      ],
      "created_at" => [
        "type" => "TIMESTAMP",
        "default" => new RawSql("CURRENT_TIMESTAMP")
      ],
      "updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
    ])->addKey("id", true, true)->createTable("businesses", true);

    // 5. Applications / bills
    $this->forge->addField([
      "id" => [
        "type" => "INTEGER",
        "auto_increment" => true
      ],
      "business_id" => [
        "type" => "INTEGER"
      ],
      "bill_number" => [
        "type" => "VARCHAR",
        "constraint" => 20,
        "unique" => true
      ],
      "payment_mode" => [
        "type" => "INTEGER",
        "constraint" => 50
      ],
      "type" => [ // application || license
        "type" => "VARCHAR",
        "constraint" => 20
      ],
      "balance" => [
        "type" => "VARCHAR",
        "constraint" => 50
      ],
      "added_by" => [
        "type" => "INTEGER", // Foreign key to users table
        "constraint" => 255
      ],
      "status" => [
        "type" => "INTEGER",
        "constraint" => 1
      ],
      "created_at" => [
        "type" => "TIMESTAMP",
        "default" => new RawSql("CURRENT_TIMESTAMP")
      ],
      "updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
    ])->addKey("id", true, true)->createTable("applications", true);

    // 6. Receipts
    $this->forge->addField([
      "id" => [
        "type" => "INTEGER",
        "auto_increment" => true
      ],
      "receipt_number" => [
        "type" => "VARCHAR",
        "constraint" => 20,
        "unique" => true
      ],
      "application_number" => [
        "type" => "INTEGER"
      ],
      "amount" => [
        "type" => "INTEGER",
        "constraint" => 20
      ],
      "created_at" => [
        "type" => "TIMESTAMP",
        "default" => new RawSql("CURRENT_TIMESTAMP")
      ],
      "updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
    ])->addKey("id", true, true)->createTable("receipts", true);

    // 7. Licences 
    $this->forge->addField([
      "id" => [
        "type" => "INTEGER",
        "auto_increment" => true
      ],
      "application_number" => [ // FK to the applications table
        "type" => "INTEGER",
        "constraint" => 255
      ],
      "file_name" => [
        "type" => "VARCHAR",
        "constraint" => 255,
        "unique" => true
      ],
      "status" => [
        "type" => "INTEGER",
        "constraint" => 1,
        "default" => 1
      ],
      "created_at" => [
        "type" => "TIMESTAMP",
        "default" => new RawSql("CURRENT_TIMESTAMP")
      ],
      "updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
    ])->addKey("id", true, true)->createTable("licenses", true);

    // 8. Payment methods
    $this->forge->addField([
      "id" => [
        "type" => "INTEGER",
        "auto_increment" => true
      ],
      "name" => [
        "type" => "VARCHAR",
        "constraint" => 255
      ],
      "description" => [
        "type" => "TEXT"
      ],
      "status" => [
        "type" => "INTEGER",
        "constraint" => 1,
        "default" => 1
      ],
      "created_at" => [
        "type" => "TIMESTAMP",
        "default" => new RawSql("CURRENT_TIMESTAMP")
      ],
      "updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
    ])->addKey("id", true, true)->createTable("paymentmethods", true);

    // 9. Payments
    $this->forge->addField([
      "id" => [
        "type" => "INTEGER",
        "auto_increment" => true
      ],
      "application_id" => [
        "type" => "INTEGER",
        "constraint" => 255
      ],
      "amount" => [
        "type" => "INTEGER",
        "constraint" => 255
      ],
      "payment_method" => [ // foreign key to the payment_methods table
        "type" => "INTEGER",
        "constraint" => 255
      ],
      "status" => [
        "type" => "INTEGER",
        "constraint" => 1,
        "default" => 0
      ],
      "created_at" => [
        "type" => "TIMESTAMP",
        "default" => new RawSql("CURRENT_TIMESTAMP")
      ],
      "updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
    ])->addKey("id", true, true)->createTable("payments", true);
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
