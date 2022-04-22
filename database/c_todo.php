<?php

    include_once "connection.php";

    $query = "INSERT INTO todo (idUser, text, completed, createdAt) 
                VALUES (1, '" . $_POST['todo'] . "', 0, '" . date('Y-m-d H:i:s') . "')";

    if ($connection->query($query) === TRUE) {

        // redirect alla pagina della lista di todo
        header("Location: ../home-page.php");

    } else {

        // check errore
        echo "Errore: " . $query . '<br />' . $connection->connect_error;

    }


?>
