<?php 
    require_once(__DIR__.'/includes/db.php');

    session_unset();
    session_destroy();
    header("Location: admin.php"); // redirect back to home
?>