<?php

require __DIR__.'/../vendor/autoload.php';

/*
|----------------------------------------------
| Run the console
|----------------------------------------------
| launch the Vinala console
*/
try {
    Vinala\Kernel\Foundation\Application::console();
} catch (Exception $e) {
    echo $e->getMessage();
}
