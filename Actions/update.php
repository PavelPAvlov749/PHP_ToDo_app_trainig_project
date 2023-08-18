<?php
    require_once "../Database/database.php";
    $task_id = $_POST['id'];
    $task_text = $_POST['text'];
    
    $database->update_todo($task_id,$task_text);


    header("location:../index.php");
    

?>