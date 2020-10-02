<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tiap Page Yg ini dibuat sendiri cssnya -->
    <link rel="stylesheet" href="../../layout/login.css">
    <!-- Link Wajib -->
    <link rel="icon" href="http://www.pngall.com/wp-content/uploads/2016/09/Musical-Notes-Free-Download-PNG.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="../../layout/navbar.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--  -->
    <title>Sign In</title>
</head>
<body>
  <div id="particles-js"></div>
  <script type="text/javascript" src="../../script/particles.js"></script>
  <script type="text/javascript" src="../../script/app.js"></script>
    <!-- Navigasi Bar Dashboard-->
    <div class="navbar-fixed">
        <nav>
          <div class="nav-wrapper">
            <a href="#!" class="brand-logo"><img class="logo-br" src="http://www.pngall.com/wp-content/uploads/2016/09/Musical-Notes-Free-Download-PNG.png" 
                style="height: 30pt; margin: 10pt; margin-left:20pt ;"></a>
            <ul class="right hide-on-med-and-down">
                <li class="list-nav"><a class="link-nav active" href="../../index.php">Dashboard</a></li>
                <li class="list-nav"><a class="link-nav" href="../product/logfalse.php">Product</a></li>
                <li class="list-nav"><a class="link-nav" href="../signup/signupform.php">Sign Up</a></li>
                <li class="list-nav"><a class="link-nav" href="badges.html">Contact</a></li>
            </ul>
          </div>
        </nav>
      </div>
      <!-- Form Login -->
      <main>
      <div class="cardform">
      <div class="cardform2">
      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">account_circle</i>
              <input id="email" type="text" class="validate">
              <label for="email">E-mail</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">fiber_pin</i>
              <input id="icon_prefix" type="password" class="validate">
              <label for="icon_prefix">Password</label>
            </div>
          </div>
          <div class="submitct">
            <div>
            <button class="btn waves-effect waves-light" type="submit" name="action">Log-in
              <i class="material-icons right">send</i>
            </button><br><br>
            <small>New to this page ? <a href="../signup/signupform.php">Make an account</a></small>
            </div>
          </div>
        </form>
      </div>
      </div>
      </div>
      </main>
      <!-- Footer -->
      <footer class="page-footer" style="width: 100vw;">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Music Instrumental Store</h5>
              <p class="grey-text text-lighten-4">MIS is the biggest music store in Indonesia, cooperating with many international music producers.</p>
            </div>
            <div class="col l4 offset-l1 t12">
              <h5 class="white-text textcollab">Offline Store</h5>
              <ul>
                <li>Emporium Pluit Mall Lt. I No. 12, Jakarta Utara</li>
                <li></li>
                <li class="disclaimer">This Is Just Fake Store | The Address Is Pointed for another store</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
          © 2020 Kelompok 7 PAW | Atma Jaya Yogyakarta University
          </div>
        </div>
      </footer>
</body>
</html>