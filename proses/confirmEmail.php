<?php
    require('../db.php');

    if(isset($_GET['code'])){
        $code = $_GET['code'];
        $sql = "SELECT * FROM users where verif_code = '$code'";
        $query = mysqli_query($con,$sql);
        if(mysqli_num_rows($query) > 0){
            $user = mysqli_fetch_assoc($query);
            $id = $user['id'];
            $sql =  "UPDATE users set is_verified=1 where id=$id";
            $query = mysqli_query($con,$sql);
            if($query){
                echo 
                '<script>
                    alert("Sign Up Success"); window.location = "../index.php"
                </script>';
            }else{
                echo "VERIFICATION ERROR : ".$query;
            }
        }else {
            echo
            '<script>
                    alert("Code was not found or invalid"); window.location = "../index.php"
            </script>';
        }
    }else {
        echo "....";
    }

?>