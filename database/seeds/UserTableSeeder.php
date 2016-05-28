<?php 

use Lighty\Kernel\Database\Seeder;

/**
* UserTableSeeder
*/
class UserTableSeeder extends Seeder
{
	/*
	* Name of DataTable
	*/
	public $table = "user";

	/*
	* Run the Database Seeder
	*/
	public function run()
	{
		/**
		 * Exmple for userTable with columns (name,mail,password,token,rememberToken)
		 */
		$data = array();
		for ($i=0; $i < 50; $i++) 
			Table::push($data , array('name' => Faker::firstName() , 'mail' => Faker::Email(),'password'=> Faker::hash() ,'token'=> Faker::hash(),'rememberToken' =>  Faker::hash() ));
		//
		return Schema::table($this->table)->insert($data);
	}
}

