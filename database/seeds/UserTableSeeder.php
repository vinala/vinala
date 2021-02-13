<?php

use Vinala\Kernel\Database\Seeder;

/**
 * UserTableSeeder.
 */
class UserTableSeeder extends Seeder
{
    /*
    * Name of DataTable
    */
    public $table = 'user';

    /*
    * Number of rows to insert
    */
    public $count = 7;

    /*
    * Set the data here to insert
    */
    public function data()
    {
        return [
            'name'             => Faker::firstName(),
            'mail'             => Faker::Email(),
            'password'         => Faker::hash(),
            'token'            => Faker::hash(),
            'rememberToken'    => Faker::hash(),
        ];
    }
}
