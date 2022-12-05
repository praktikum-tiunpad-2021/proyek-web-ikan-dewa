<?php
namespace App\Database\Migrations;
 
use CodeIgniter\Database\Migration;
 
class Users extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'Email'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
			],
			'Password'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
			],
			'Name_User'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'Tanggal_Lahir' => [
				'type'           => 'DATE',
			],
 
		]);
		$this->forge->addPrimaryKey('Email', true);
		$this->forge->createTable('users');
	}
 
	//--------------------------------------------------------------------
 
	public function down()
	{
		$this->forge->dropTable('users');
	}
}
?>