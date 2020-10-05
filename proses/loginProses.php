<?php
    require ('../db.php');
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users where email = '$email'";
    $query = mysqli_query($con,$sql);

    if(mysqli_num_rows($query) == 0 ){
        echo "EMAIL NOT FOUND";
    }else {
        $user = mysqli_fetch_assoc($query);
        if(password_verify($password,$user['password'])){
            if($user['is_verified']==1){
                session_start();
                $_SESSION['isLogin'] = true;
                $_SESSION['user'] = $user;
    
                header("location: ../page/afterlogin/page/page.php");
            }else {
                echo 
                '<script>
                    alert("Please Verify Your Email!!"); window.location = "../page/login/loginform.php"
                </script>';
            }
        }else {
            echo 
            '<script>
                alert("Wrong Password!!"); window.location = "../page/login/loginform.php"
            </script>';
        }
    }
?>