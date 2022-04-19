<?php

    // creo un array multidimensionale che conterrà i dati di tutti i todo
    // trasformo gli array in oggetti "standard" scrivendo (object) nome_array
    $todo_list = array(
        (object) array(
                    'completed' => false,
                    'text' => 'Comprare il latte',
                    'importance' => 1
            ),

        (object) array(
                'completed' => false,
                'text' => 'Andare dal veterinario per il cane',
                'importance' => 2
            ),

        (object) array(
                'completed' => true,
                'text' => 'Incontrare Maria',
                'importance' => 3
            ),

        (object) array(
                'completed' => false,
                'text' => 'Chiamare Roberto',
                'importance' => 2
            ),

        (object) array(
                'completed' => false,
                'text' => 'Portare fuori la spazzatura',
                'importance' => 3
            )
    );

?>

<!DOCTYPE html>

<html>

<head>
    <title>Todo List</title>

    <link rel="stylesheet" type="text/css" href="resources/css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">

</head>

<body>

<div id="container">

    <!-- Form -->
    <div>
        <form method="post" action="#">

            <input type="text" name="todo" id="todo" placeholder="Cosa hai da fare oggi?">

        </form>
    </div>

    <!-- List -->
    <div>

        <ul id="todo-list">

            <?php foreach ($todo_list as $todo) : ?>
            <li class="
            <?php if ($todo->completed) {
                echo 'done';
            }
                        ?>">

                <div>
                    <span></span>
                </div>

                <p><?php echo $todo->text; ?></p>

                <div class="importance <?php

                    switch ($todo->importance) {

                        case 1:
                            echo 'low';
                            break;
                        case 2:
                            echo 'middle';
                            break;
                        case 3:
                            echo 'high';
                            break;
                        default:
                            '';
                            break;

                    }

                ?>"><?php
                    switch ($todo->importance) {

                        case 1:
                            echo '!';
                            break;
                        case 2:
                            echo '!!';
                            break;
                        case 3:
                            echo '!!!';
                            break;
                        default:
                            '';
                            break;

                    }
                    ?></div>

                <a href="#">x</a>

            </li>
            <?php endforeach; ?>

        </ul>

    </div>

</div>

</body>

</html>