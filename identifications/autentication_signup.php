<?php

    include_once "../database/connection.php";


    if ( !isset($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password']) ) {
        // Could not get the data that should have been sent.
        exit('Please fill all fields!');
    } else {
        // echo "info: " . $_POST['firstname'] . $_POST['lastname'] . $_POST['email'] . $_POST['password'];
    }

    $query = "INSERT INTO user (email, password, name, surname, createdAt) 
                VALUES ('" . $_POST['email'] . "', '" . $_POST['password'] . "',
                        '" . $_POST['firstname'] . "', '" . $_POST['lastname'] . "',
                         '" . date('Y-m-d H:i:s') . "')";

    if ($connection->query($query) === TRUE) {

        // redirect alla pagina della lista di todo
        header("Location: login.php");

    } else {

        // check errore
        echo "Errore: " . $query . '<br />' . $connection->connect_error;

    }



?>
