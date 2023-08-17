<?php

    if(isset($_POST["login"]))
    {
        // Grabbing the data
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Instantiate signup controller class
        include "../classes/dbh.classes.php";
        include "../classes/login.classes.php";
        include "../classes/login-contr.classes.php";
        $login = new LoginContr($username, $password);

        // Running error handlers and user sign up
        $login->loginUser();

        // Going back to front page
        header("Location: ../index.php?error=none");

    }