<?php

    include_once "connection.php";

    //query per cancellare un todo
    $query = "DELETE FROM todo WHERE idUser = " . $_GET['idUser'] .
                " AND idTodo = " . $_GET['idTodo'];

    if ($connection->query($query) === TRUE) {

        // redirect alla pagina della lista di todo
        header("Location: ../home-page.php");

    } else {
        // check errore
        echo "Errore: " . $query . '<br />' . $connection->connect_error;

    }

?>