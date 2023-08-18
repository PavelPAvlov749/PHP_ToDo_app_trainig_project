<?php
    require_once "../Database/database";

    $database->delete_all_todos();

    header("location:../index.php");


?>