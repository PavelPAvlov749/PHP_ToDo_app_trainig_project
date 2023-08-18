<?php

require_once "../Database/database.php";


$task_id = $_GET['id'];

$task_text = $database->get_task_by_id($task_id)['task'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Styles/update.css">
</head>

<body>

    <h1>Update task</h1>
    <section class="update-form-container">
        <form action="../Actions/update.php" method="post">
            <input type="text" name="id" value="<?=$task_id?>" hidden>
            <input type="text" name="text" value="<?=$task_text?>" required>
            <button type="submit">Update</button>
        </form>
    </section>

</body>

</html>