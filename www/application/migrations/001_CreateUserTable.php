<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_CreateUserTable extends CI_Migration
{
	private $table='user';
	
	public function up()
	{
		$fields=[
					'id'=>[
							'type'=>'INT',
							'unsigned' => TRUE,
							'auto_increment' => TRUE
						  ],
				 	'username'=>[
				 				  'type'=>'VARCHAR',
				 				  'constraint'=>30,
				 				  'null'=>false,
				 				  'unique'=>TRUE
				 				],
					'password'=>[
									'type'=>'VARCHAR',
									'constraint'=>200,
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