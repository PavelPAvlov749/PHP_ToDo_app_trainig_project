<?php
    require_once "../Database/database.php";
    echo $_GET['id'];
    $database->delete_todo($_GET['id']);
    
    header("location:../index.php");

?>