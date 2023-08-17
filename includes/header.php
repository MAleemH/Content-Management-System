<?php
  session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <title>Helping Hand</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">

</head>

<body>
  <header>
    <nav>
        <h3><a href="index.php">CMS</a></h3>
        <ul>
            <li>
              <?php
                if(isset($_SESSION["user_id"])){
              ?>

                <a href=""><?php echo $_SESSION["user_username"]; ?></a>
                <a href="includes/logout.inc.php" class="btn btn-primary">Logout</a>

              <?php
                } else {
              ?>

                <a href="signup.php" class="btn btn-light">Sign Up</a>
                <a href="login.php" class="btn btn-primary">Login</a>

              <?php
                }
              ?>
            </li>
        </ul>
    </nav>
  </header>