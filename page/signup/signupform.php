<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      <!-- Card -->
      
      <!-- Form Sign Up -->
      <form>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Username</strong>
                <input name="username" class="input" type="text" placeholder="Your new username">
            </div>
            <div class="form-group">
                <strong>First name</strong>
                <input name="firstname" class="input" type="text" placeholder="First Name">
            </div>
            <div class="form-group">
                <strong>Last name</strong>
                <input name="lastname" class="input" type="text" placeholder="Last Name">
            </div>
            <div class="form-group">
                <strong>Email</strong>
                <input name="email" class="input" type="text" placeholder="examplexxxx@email.com">
            </div>
            <div class="form-group">
                <strong>Password</strong>
                <input name="password" class="input" type="text" placeholder="Password must be more than 6 characters">
            </div>
            <div class="form-group">
                <strong>Date of Birth<strong>
                <input name="birthdate" class="input" type="date" placeholder="dd/mm/yyyy">
            </div>
            <div class="field">
                  <p class="control">
                      <label class="label">Gender</label>
                      <div class="select">
                          <select name="gender" id="gender">
                              <option value="male">Male</option>
                              <option value="female">Female</option>                            
                          </select>
                      </div>
                  </p>
            </div>    
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                  <button type="submit" class="btn btn-primary">Sign up</button>
            </div>  
        </div>         
      </form>


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