<?php

namespace Vinala\Plugins\Google;

class QR
{
    public static function generate($text, $size = 100)
    {
        \View::import('qr', 'code', ['text' => $text, 'size' => $size]);
    }
}
