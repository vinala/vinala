<?php

namespace Vinala\Plugins\Google;

class Youtube
{
    public static function embed($id, $width = 560, $height = 315)
    {
        \View::import('ytb', 'player', ['id' => $id, 'width' => $width, 'height' => $height]);
    }
}
