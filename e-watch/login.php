<?php
require "database.php";

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM Users WHERE Username = '$username'";
    $result = $con->query($sql);
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            $db_em = $row["Username"];
            $db_pw = $row["Password"];

            if($db_em == $username && $db_pw == $password ){
                echo "<script>alert('Login Successful');
                location.replace('index.php?id="."&username=".$row['Username']."'); 
                </script>";
               
            } else {
                echo "<script>alert('Login fail');</script>";
            }
        }
    } else {
        echo "<script>alert('User does not exist');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/logstyles.css">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">

        <title>Login</title>  
    </head>
    <body>
        <div class="l-form">
            <div class="shape1"></div>
            <div class="shape2"></div>

            <div class="form">
                <div>
                <img src="assets/img/image2.png" alt="" class="form__img">
                <h1>Welcome back! </h1>
                <p>Log in to access your account and discover our exclusive <br> collection of premium watches.</p>

                </div>
            

                <form action="" method="POST" class="form__content">
                    <h1 class="form__title">Welcome</h1>

                    <div class="form__div form__div-one">
                        <div class="form__icon">
                            <i class='bx bx-user-circle'></i>
                        </div>

                        <div class="form__div-input">
                            <label for="username" class="form__label">Username</label>
                            <input type="text" name="username" id="username" class="form__input">
                        </div>
                    </div>

                    <div class="form__div">
                        <div class="form__icon">
                            <i class='bx bx-lock' ></i>
                        </div>

                        <div class="form__div-input">
                            <label for="password" class="form__label">Password</label>
                            <input type="password" name="password" id="password" class="form__input">
                        </div>
                    </div>
                    <a href="#" class="form__forgot">Forgot Password?</a>

                    <input type="submit" name="login" class="form__button" value="Login">

                    <div class="form__social">
                        <span class="form__social-text">Don't have account? <a href="register.php"> Sign Up Now</a></span>

                        <a href="#" class="form__social-icon"><i class='bx bxl-facebook' ></i></a>
                        <a href="#" class="form__social-icon"><i class='bx bxl-google' ></i></a>
                        <a href="#" class="form__social-icon"><i class='bx bxl-instagram' ></i></a>
                    </div>
                </form>
            </div>

        </div>
        
        <!-- ===== MAIN JS ===== -->
        <script src="assets/js/logmain.js"></script>
    </body>
</html>