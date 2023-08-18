<?php
    require_once "../Database/database.php";

    $database->create_todo($_POST['task']);
    header("location:../index.php");

?>