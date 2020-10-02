<?php
 // ----------------------------
    if(isset($_POST['signup'])){ // ini buat ngecek tombol yang namenya register dah di pencet ato belom $_POST itu method di formnya
 // ----------------------------
    include('../db.php'); // ini buat manggil fungsi buat connect ke database yang tadi kita udah bikin. Jadi ga perlu bikin ulang manual querynya 1 1 :3
 // ----------------------------
 // --------------------------------------------------------------------
 //tampung nilai yang ada di from ke variable
 $username = $_POST['username'];
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $email = $_POST['email'];
 $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
 $birthdate = $_POST['birthdate'];
 $gender = $_POST['gender'];
    
  // ini query buat insert data ke database kita :3
  $query = mysqli_query($con, "INSERT INTO users(username, password, nama, nim, ukm) VALUES ('$username' , '$firstname' , '$lastname' , '$email' , '$password' , '$birthdate' , '$gender')") or die(mysqli_error($con));
   // ---------------------------------------------------------------------
    if($query){
    echo
        '<script>
            alert("Sign Up Success"); window.location = "../index.php"
        </script>';
    }else{
    echo
        '<script>
            alert("Sign Up Failed"); window.location = "../signup/signupform.php"
        </script>';
    }
   }else{
   echo
    '<script>
        window.history.back()
    </script>';
   }
  ?>