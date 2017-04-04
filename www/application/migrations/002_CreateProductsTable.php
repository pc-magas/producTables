<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_CreateProductsTable extends CI_Migration
{
  private $table='products';

  public function up()
  {
      $fields=[
        'id'=>[
            'type'=>'INT',
            'unsigned' => TRUE,
            'auto_increment' => TRUE
        ],
        'title'=>[
          'type'=>'VARCHAR',
          'constraint'=>200,
          'null'=>false,
        ],
        'price'=>[
          'type'=>'FLOAT',
          'null'=>false
        ],
        'discount'=>[
          'type'=>'FLOAT',
          'null'=>false
        ]
      ];

      $this->dbforge->add_field($fields);
      $this->dbforge->add_key('id',true);
      $this->dbforge->create_table($this->table);
  }

  public function down()
  {
    $this->dbforge->drop_table($this->table);
  }
}
