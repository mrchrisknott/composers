<?php
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 'On');

session_start();

$db_config = [
    "db_host" => "localhost",        // 100% correct
    "db_name" => "sdde_composer",   // 100% correct
    "db_user" => "sdde_composer",   // ???? may be comp???
    "db_pass" => "eGSaYSRz1YI6"    // ?????  may be Chris1964
];

$Conn = new PDO("mysql:host=".$db_config['db_host'].";dbname=".$db_config['db_name'], $db_config['db_user'], $db_config['db_pass']);
