<?php
    require "database.php";

    if(isset($_POST['submit'])){
        $uname = $_POST['username'];
        $email = $_POST['email'];
        $contact = $_POST['contact_number'];
        $password = $_POST['password'];

      /*   $sql = "INSERT INTO user_login(user_name,user_email,user_contact,user_password)VALUES('$uname','$email','$contact','$password');"; */
        $sql ="INSERT INTO Users(Username,Email,ContactNo,Password)VALUES('$uname','$email','$contact','$password');";

        $result = $con->query($sql);

        if($result === true){
            echo "<script>alert('Data added');
            location.replace('login.php');
            </script>";
        }
        else{
            echo "<script>alert('Data faild');</script>";
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

        <title>Register</title>  
    </head>
    <body>
        <div class="l-form">
            <div class="shape1"></div>
            <div class="shape2"></div>
            <div class="form">
                <div>
                    <img src="assets/img/image.png" alt="" class="form__img">
                    <h1>E-WATCH</h1>
                    <p>Join us today to unlock access to exclusive watch collections,<br> special offers, and personalized recommendations.</p>
                </div>
               

                <form action="" method="POST" class="form__content">
                    <h1 class="form__title">Register</h1>

                    <div class="form__div form__div-one">
                        <div class="form__icon">
                            <i class='bx bx-user-circle'></i>
                        </div>

                        <div class="form__div-input">
                            <label for="username" class="form__label">Username</label>
                            <input type="text" name="username" id="username" class="form__input">
                        </div>
                    </div>

                    <div class="form__div form__div-one">
                        <div class="form__icon">
                            <i class='bx bx-envelope'></i>
                        </div>

                        <div class="form__div-input">
                            <label for="email" class="form__label">Email</label>
                            <input type="email" name="email" id="email" class="form__input">
                        </div>
                    </div>

                    <div class="form__div form__div-one">
                        <div class="form__icon">
                            <i class='bx bx-phone' ></i>
                        </div>

                        <div class="form__div-input">
                            <label for="Contact_number" class="form__label">Contact Number</label>
                            <input type="text" name="contact_number" id="contact_number" class="form__input">
                        </div>
                    </div>

                    <div class="form__div form__div-one">
                        <div class="form__icon">
                            <i class='bx bx-lock' ></i>
                        </div>

                        <div class="form__div-input">
                            <label for="password" class="form__label">Password</label>
                            <input type="password" name="password" id="password" class="form__input">
                        </div>
                    </div>

                    <input type="submit" class="form__button" name="submit" value="Register">

                    <div class="form__social">
                        <span class="form__social-text">Already a member? <a href="login.php">Sign In</a></span>

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
