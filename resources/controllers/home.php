<?php

use Vinala\Kernel\Setup\Setup;

class Home
{
    public static function hello()
    {
        if (!config('app.setup')) {
            return Setup::launch();
        } else {
            return view('welcome');
        }
    }
}
