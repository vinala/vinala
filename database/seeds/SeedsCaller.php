<?php

use Vinala\Kernel\Database\Seeder;

/**
 * SeedsCaller.
 */
class SeedsCaller extends Seeder
{
    /**
     * All Seeders to call.
     */
    public static function references()
    {
        return [
            // userTableSeeder::class,
            // carTableSeeder::class,
        ];
    }
}
