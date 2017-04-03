<?php

use Lighty\Kernel\Setup\Setup;

class home
{
    public static function hello()
    {
        if (!Config::get('panel.setup')) {
            Setup::launch();
        } else {
            View::make('hello.hello');
        }
    }
}
