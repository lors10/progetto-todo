<?php

    include_once "../sessions/session-start.php";

    unset($_SESSION["id"]);
    unset($_SESSION["name"]);
    header("Location: ../index.php");

?>
