<?php
require('./cat/signup_proses.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">

    <title>Form Sign-Up</title>
  </head>
  <body>
    <div class="container">
        <div class="card login-form">             
            <div class="card-body">
              <h2 class="card-title">Sign-Up</h2>
              <h6 class="card-subtitle text-muted mb-4 mt-2 fw-bold">Please sign-up to use this site!</h6>

              <form action="signup_process.php" method="POST">
                <div class="mb-4">
                    <label for="name" class="form-label">Name*</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Your Name" Required>
                </div>
                <div class="mb-4">
                    <label for="username" class="form-label">Username*</label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Your Username" Required>
                </div>
                <div class="mb-4">
                  <label for="email" class="form-label">Email*</label>
                  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Your Email" Required>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password*</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Min 8 character" Required>
                </div>

                <div class="d-grid mt-5">
                    <button type="submit" name="register" class="btn btn-custom btn-login">Sign Up</button>
                </div>

                <div class="mt-3 text-center">
                  <label>Already have an account ? <a href="login.php" class="link">Log in your account</a></label>
                </div>
            </form>
            </div>
          </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>
