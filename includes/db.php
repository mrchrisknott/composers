<?php
//            Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);
//            ini_set — Sets the value of a configuration option
ini_set('display_errors', 'On');

//            session_start — Start new or resume existing session
session_start();

$db_config = [
    "db_host" => "localhost",        // 100% correct
    "db_name" => "sdde_composer",   // 100% correct
    "db_user" => "sdde_composer",   // ???? may be comp???
    "db_pass" => "eGSaYSRz1YI6"    // ?????  may be Chris1964
];

$Conn = new PDO("mysql:host=".$db_config['db_host'].";dbname=".$db_config['db_name'], $db_config['db_user'], $db_config['db_pass']);
$Conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$Conn->setAttribute(PDO::ATTR_PERSISTENT, true);
$Conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);