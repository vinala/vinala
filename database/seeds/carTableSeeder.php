<?php

use Lighty\Kernel\Database\Seeder;

/**
* class of seeder carTableSeed
*/
class carTableSeeder extends Seeder
{
	/*
	* Name of DataTable
	*/
	public $table = "car" ;

	/*
	* Number of rows to insert
	*/
	public $count = 0 ;

	/*
	* Set the data here to insert
	*/
	public function data()
	{
		return array(
			array(
				"marque" => "Clio" ,
			),
			array(
				"marque" => "Fiesta" ,
			),
			array(
				"marque" => "Punto" ,
			),
			array(
				"marque" => "Duster" ,
			),
		);
	}
}