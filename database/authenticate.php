<?php

    include_once "connection.php";

    session_start();

    // Now we check if the data from the login form was submitted, isset() will check if the data exists.
    if ( !isset($_POST['username'], $_POST['password']) ) {
    // Could not get the data that should have been sent.
    exit('Please fill both the username and password fields!');
    } else {
        // echo "username" . $_POST['username'] . "password" . $_POST['password'];
    }

    // FUNZIONA

    // query per selezionare utente che si sta loggando
    // $query = "SELECT * FROM user WHERE email = " . $_POST['username'];
    // query tramite connessione al db
    // $result = $connection->query($query);

    // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
    if ($stmt = $connection->prepare('SELECT idUser, password FROM user WHERE email = ?')) {
        // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        // Store the result so we can check if the account exists in the database.
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $password);
            $stmt->fetch();
            // Account exists, now we verify the password.
            // Note: remember to use password_hash in your registration file to store the hashed passwords.
            if ($_POST['password'] === $password) {
                // Verification success! User has logged-in!
                // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
                //session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $_POST['username'];
                $_SESSION['id'] = $id;

            } else {
                // Incorrect password
                echo 'Incorrect username and/or password!';
            }
        } else {
            // Incorrect username
            echo 'Incorrect username and/or password!';
        }

        if(isset($_SESSION['id'])) {
            header("Location: ../home-page.php");
        }




        $stmt->close();
}

?>

