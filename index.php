<?php

$controller = isset($_SERVER['PATH_INFO']) ? str_replace('/', '', $_SERVER['PATH_INFO']) : 'index';



require "controllers/{$controller}.controller.php";

?>
