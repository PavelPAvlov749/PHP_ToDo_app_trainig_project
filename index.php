<?php
require_once "./Database/database.php";
$todos = $database->get_all_items();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Including styles  -->
    <link rel="stylesheet" href="./Styles/reset.css">
    <link rel="stylesheet" href="./Styles/index.css">
    <!-- INCLUDE SCRIPTS -->
    <script src="./Scripts/index.js" defer></script>
    <title>ToDoApp</title>
</head>

<body>
    <!-- MODAL WINDOW IF IS MODAL FLAG === TRUE RENDER THE MODAL WINDOW ANOTHERWISE -->
    <!-- SET DISPLAY NONE -->
    <section id="modal-container" class="modal-container--show modal-container--hide">
        <div class="modal-window">
            <!-- CLOSE WINDOW BUTTON -->
            <button id="close" >&#215;</button>
            <form action="./Actions/add.php" class="modal-window__form" method="post">
                <input type="text" name="task" required >
                <button>Add</button>
            </form>
        </div>
    </section>
    <!-- HEADER -->
    <header>
        <h1>ToDo App</h1>
    </header>
    
    <!-- TASK INFO -->
    <section class="info">
        <div class="info-item">
            <span>Todos </span>
            <span>
                <?= count($todos) ?>
            </span>
        </div>
        <div class="info-item">
            <span>In Progress </span>
            <span>0</span>
        </div>
        <div class="info-item">
            <span>Done </span>
            <span>0</span>
        </div>
        <div class="info-item">
            <a href="./Actions/delete_all.php" class="info-item__button">Delete all</a>
            <a href="#" id="add" class="info-item__button">Add new</a>
        </div>

    </section>
    <!-- TASK LIST COMPONENT -->
    <section class="tasks">
        <ul class="tasks__list">
            <?php
            foreach ($todos as $item) { ?>
                <li class="tasks__list__item">
                    <span>
                        <?= $item[0] ?>
                    </span>
                    <span class="tasks__list__item__text">
                        <?= $item[1] ?>
                    </span>
                    <a href="./Pages/update.php?id=<?=$item[0]?>">&#9998;</a>
                    <a href="./Actions/delete.php?id=<?=$item[0]?>">&#215;</a>
                </li>

            <?php } ?>
        </ul>
    </section>
</body>

</html>