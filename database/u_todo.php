<?php

    include_once "connection.php";
    //include_once "../sessions/session-start.php";


    // query per conoscere la situazione attuale
    $query = "SELECT * FROM todo WHERE idUser = " . $_GET['idUser'];


    // query tramite connessione
    //$connection ="";
    $result = $connection->query($query);


    if ($result->num_rows > 0) {

        // query come array associativo
        $todo = $result->fetch_assoc();


        // qui inserisco la query per aggiornare
        if ($todo['completed'] == 1) {

            $query = "UPDATE todo SET completed = 0 WHERE idUser = " . $_GET['idUser'] .
                " AND idTodo = " . $_GET['idTodo'];
        } else {

            $query = "UPDATE todo SET completed = 1 WHERE idUser = " . $_GET['idUser'] .
                " AND idTodo = " . $_GET['idTodo'];
        }

        // la query viene presa ed eseguita e quindi si ritorna alla pagina homepage
        if ($connection->query($query) === TRUE) {

            // redirect alla pagina della lista di todo
            header("Location: ../home-page.php");

        } else {

            // check errore
            echo "Errore: " . $query . '<br />' . $connection->connect_error;

        }

    } else {

        echo "Nessun todo trovato";
    }







?>
