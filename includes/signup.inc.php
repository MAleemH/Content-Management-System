<?php

    if(isset($_POST["signup"]))
    {
        // Grabbing the data
        $username = $_POST["username"];
        $password = $_POST["password"];
        $r_password = $_POST["r_password"];
        $email = $_POST["email"];

        // Instantiate signup controller class
        include "../classes/dbh.classes.php";
        include "../classes/signup.classes.php";
        include "../classes/signup-contr.classes.php";
        $signup = new SignUpContr($username, $password, $r_password, $email);

        // Running error handlers and user sign up
        $signup->signupUser();

        // Going back to front page
        header("Location: ../index.php?error=none");

    }