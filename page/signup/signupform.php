<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tiap Page Yg ini dibuat sendiri cssnya -->
    <link rel="stylesheet" href="../../layout/signup.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script type="text/javascript" src="../../script/signup.js"></script>
    <!-- Link Wajib -->
    <link rel="icon" href="http://www.pngall.com/wp-content/uploads/2016/09/Musical-Notes-Free-Download-PNG.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="../../layout/navbar.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--  -->
    <title>Sign Up</title>
</head>
<body>
    <!-- Navigasi Bar Dashboard-->
    <div class="navbar-fixed">
        <nav>
          <div class="nav-wrapper">
            <a href="#!" class="brand-logo"><img class="logo-br" src="http://www.pngall.com/wp-content/uploads/2016/09/Musical-Notes-Free-Download-PNG.png" 
                style="height: 30pt; margin: 10pt; margin-left:20pt ;"></a>
            <ul class="right hide-on-med-and-down">
                <li class="list-nav"><a class="link-nav active" href="../../index.php">Dashboard</a></li>
                <li class="list-nav"><a class="link-nav" href="../product/logfalse.php">Product</a></li>
                <li class="list-nav"><a class="link-nav" href="../login/loginform.php">Sign In</a></li>
                <li class="list-nav"><a class="link-nav" href="../contact/contactmain.php">Contact</a></li>
            </ul>
          </div>
        </nav>
      </div>
      <!-- Form Sign Up -->
      <main>
      <div class="cardform">
        <div class="cardform2">
        <h1>Sign Up</h1>
        <div class="row">
        <form class="col s12" class="needs-validation" action="../../proses/proses_signup.php" method="post" novalidate>
          <div class="row">
            <div class="input-field col s5">
              <input name="firstname" type="text" class="input" required>
              <label for="firstname">First Name</label>
            </div>
            <div class="input-field col s5">
              <input name="lastname" type="text" class="input" required>
              <label for="lastname">Last Name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s10">
              <input name="username" type="text" class="input" required>
              <label for="username">Username</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s10">
              <input name="email" type="email" class="input" required>
              <label for="email">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s10">
              <input name="password" type="password" class="input" required>
              <label for="password">Password</label>
            </div>
          </div>
          <div class="row">
            <p>
              <label>
                <input name="group1" id="gender" type="radio" checked />
                <span>Man</span>
              </label>
            </p>
          <p>
          <label>
                <input name="group1" id="gender" type="radio" />
              <span>Girl</span>
            </label>
           </p>
          </div>
          <div class="row">
            <div class="input-field col s10">
               <input name="birthdate" type="date" class="input">
               <label for="birthdate">Date of Birth</label>
            </div>
          </div>
          <div class="buttoncontainer">
            <div class="ctn2">
              <input name="signup" type="submit" value="SignUp" onclick="animasi()" class="btn btn-primary"></input><br><br>
              <small>Already have an account ? <a href="../login/loginform.php">Sign in</a></small>
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