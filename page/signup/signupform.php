<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tiap Page Yg ini dibuat sendiri cssnya -->
    <link rel="stylesheet" href="../../layout/signup.css">
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
                <li class="list-nav"><a class="link-nav" href="../loginlogout/loginform.php">Sign In</a></li>
                <li class="list-nav"><a class="link-nav" href="badges.html">Contact</a></li>
            </ul>
          </div>
        </nav>
      </div>
      <!-- Form Sign Up -->
      <div class="row">
        <form class="col s12" class="needs-validation" novalidate>
          <div class="row">
            <div class="input-field col s6">
              <input id="firstname" type="text" class="validate" required>
              <label for="firstname">First Name</label>              
            </div>
            <div class="input-field col s6">
              <input id="lastname" type="text" class="validate" required>
              <label for="lastname">Last Name</label>              
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="username" type="text" class="validate" required>
              <label for="username">Username</label>             
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" class="validate" required>
              <label for="email">Email</label>              
            </div>
          </div>          
          <div class="row">
            <div class="input-field col s12">
              <input id="password" type="password" class="validate" required>
              <label for="password">Password</label>
            </div>
          </div>
          <div class="row">
            </div>
            <div class="input-field col s12">
            <select>
            <option value="1">Male</option>
            <option value="2">Female</option>
            </select>
            <label>Gender</label>
            </div>
          </div> 
          <div class="row">
            <div class="input-field col s12">
              <input id="birthdate" type="date" class="validate">
              <label for="birthdate">Date of Birth</label>
            </div>
          </div>   
          <button name="signup" type="submit" class="btn btn-primary">Sign Up</button>  
          <br>    
          <small>Already have account ? <a href="../loginlogout/loginform.php">Login</a></small>
        </form>
      </div>

      <!-- Footer -->
      <footer class="page-footer" style="margin-top: 15vh; width: 100vw;">
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