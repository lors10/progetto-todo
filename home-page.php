<?php
    include_once "database/connection.php";

    // query
    $query = "SELECT * FROM todo WHERE idUser = 1";

    // query tramite connessione
    $result = $connection->query($query);


// creo un array multidimensionale che conterrà i dati di tutti i todo
// trasformo gli array in oggetti "standard" scrivendo (object) nome_array
$todo_list = array();


// per assicurarci di avere indietro dei dati e non un array di valori vuoto
        if ($result->num_rows > 0) {
            // si prendono tutte le righe dei risultati che arrivano dalla query
            // si interpretano tutti i dati come array associativi
            // 1) si stampa ciascuna parte dell'array nella var. $row
            //
            // 2) si stampano i dati delle righe all'interno dell'array $todo_list
            // ESEMPIO MYSQLI_NUM si interpretano i dati in modo numerico
            foreach ($result->fetch_all(MYSQLI_ASSOC) as $row) {
                // 1)
                //print_r($row);

                // 2)
                array_push($todo_list, (object) $row);
            }

        } else {

            echo "Nessun todo trovato";
        }

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
        <form method="post" action="database/c_todo.php">

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
                    <span>
                        <a href="<?php echo 'database/u_todo.php?idTodo=' . $todo->idTodo . '&idUser=1'?>"></a>
                    </span>
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