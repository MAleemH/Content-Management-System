<?php
    include 'includes/header.php';
?>
  <main>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-column align-items-center">
                <h4>SIGN UP</h4>
                <form action="includes/signup.inc.php" method="post" class="d-flex flex-column gap-1 w-25">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <input type="password" class="form-control" name="r_password" placeholder="Repeat Password">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                    <input type="submit" name="signup" value="SIGN UP" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
  </main>
<?php
    include 'includes/footer.php';
?>