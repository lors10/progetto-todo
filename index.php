<?php

    require "include/template.inc.php";

    $main = new Template("skins/index.html");
    $header = new Template("skins/header.html");
    $footer = new Template("skins/footer.html");

    $main->setContent("header",$header->get());
    $main->setContent("footer",$footer->get());
    $main->close();

?>