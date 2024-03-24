<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Fanpit | Login</title>
        <link rel="stylesheet" type="text/css" href="../css/reset.css"/>
        <link rel="stylesheet" type="text/css" href="../css/login.css"/>
        <link rel="stylesheet" type="text/css" href="../css/media.css">
    </head>

    <body>
        <div class="wrapper">
        <div class="logo">
            <img src="../images/fanpit-no-bg.png" class="fanpit-logo"/>
        </div>
        <form action="login.php" method="POST">
        <div class="backdrop">
            <div class="login-header">
                <h1>Login</h1>
            </div>
            <div class="login-box">
                <div class="input-field">
                    <input type="text" name="username" id="user" class="input-box" placeholder="" required/>
                    <label for="user" class="label-user">Username</label>
                </div>
                <div class="input-field">
                    <input type="text" name="password" id="pass" class="input-box" placeholder="" required/>
                    <label for="pass" class="label-pass">Password</label>
                </div>
                <div class="remember-forgot">
                    <div class="remember-me">
                        <label for="remember">Remember me</label>
                        <input type="checkbox" name="remember" class="remember"/>
                    </div>
                    <div class="forgot-password">
                        <a href="#">Forgot Password?</a>
                    </div>
                </div>
                <div class="submit-box">
                    <input type="submit" value="Login" name="submit"/>
                </div>
                <div class="register">
                    <span>Don't have an account? <a href="#"> Register</a></span>
                </div>
                <div class="error">
                    <?php if(empty($login_err) == false ) {
                                echo $login_err;
                            }
                     ?>
                </div>
            </div>
        </div>
        </form>
    </div>
    </body>
    
</html>
<?php
    
    session_start();
    $connection = mysqli_connect("localhost", "root", "", "fanpit", 3306);
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        header("location: index.php");
        exit;
    }
    require "connect.php";
    $field_err = "";
    $login_err = "";

    if(isset($_POST["submit"])) {
        $user = $_POST["username"];
        $pass = $_POST["password"];
        if(isset($user) && isset($pass)) {
            $check = mysqli_query($connection, "SELECT * FROM user WHERE username = '".$user."'");
            $rows = mysqli_num_rows($check);

            if($rows != 0) {
                while($row = mysqli_fetch_assoc($check)) {
                    $db_user = $row["username"];
                    $db_pass = $row["pass"];
                }

                if($user == $db_user && $pass == $db_pass) {
                    session_start();

                    $_SESSION["loggedin"] = true;
                    $_SESSION["username"] = $user;

                    header("Location: index.php");
                } else {
                    $login_err = "Invalid username or password.";
                }
            } else {
                $login_err = "Invalid username or password.";
            }
        }
    }
?>

