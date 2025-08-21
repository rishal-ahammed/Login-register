<?php
   include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Website</title>
    <link rel="stylesheet" href="styles.css">

</head>



<body>

    <header>
        <h2 class="logo">LOGO</h2>
        <nav class="navigator">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
            <button class="btnlogin-popup">Login</button>
        </nav>
    </header>

    <div class="wrapper">

        <span class="icon-close">
            <ion-icon name="close-outline"></ion-icon>
        </span>

        <div class="form-box login">
            <h2>Login</h2>

            <form name="form" action="login.php" method="POST">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="email" name="mail" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" name="pass" required>
                    <label>password</label>
                </div>

                <div class="remember-forgot">
                    <label>
                        <input type="checkbox"> remember me
                    </label>
                    <a href="#">Forgot Pasword?</a>
                </div>

                <button type="submit" class="btn-submit" name="submit" >Login</button>

                <div class="login-register">
                    <p> Don't have an account? 
                        <a href="#" class="register-link">Register</a>
                    </p>
                </div>
            </form>
        </div>


<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


        <div class="form-box register">
            <h2>Register</h2>

            <form name="form" action="signup.php" method="POST">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person"></ion-icon>
                    </span>
                    <input type="text" name="usname" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="email" name="mail1" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" name="pass1" required>
                    <label>password</label>
                </div>

                <div class="remember-forgot">
                    <label>
                        <input type="checkbox"> I agree to the terms & conditions
                    </label>
                </div>

                <button type="submit" class="btn-submit" name="register">Register</button>
                
                <div class="login-register">
                    <p> Already have an account? 
                        <a href="#" class="login-link">Login</a>
                    </p>
                </div>
            </form>
        </div>

    </div>
    

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>