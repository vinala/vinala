<?php 

$Root="../../";
include_once $Root.'../core/Ini.php';
App::run(null,$Root,false,true,false);

Seeder::ini();
echo "ok";
