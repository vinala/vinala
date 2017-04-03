<?php

namespace Fiesta\Plugins\Google;

class ini
{
    public static function generate($text, $size = 100)
    {
        \View::import('qr', 'code', ['text' => $text, 'size' => $size]);
    }
}
