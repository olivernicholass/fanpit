<!DOCTYPE html>
<html lang="en">

<head>
    <title>Converso | Register</title>
    <link rel="stylesheet" type="text/css" href="../css/reset.css" />
    <link rel="stylesheet" type="text/css" href="../css/register.css" />
    <link rel="stylesheet" type="text/css" href="../css/media.css">
</head>

<body>
    <div class="wrapper">
        <div class="logo">
            <img src="../images/fanpit-no-bg.png" class="fanpit-logo">
        </div>
        <form action="register.php" method="POST">
            <div class="backdrop">
                <div class="register-header">
                    <h1>Create An Account</h1>
                </div>
                <div class="register-box">
                    <div class="input-field">
                        <input type="text" name="nickname" id="nickname" class="input-box" placeholder="" required />
                        <label for="nickname" class="label-nick">Nickname</label>
                    </div>
                    <div class="input-field">
                        <input type="text" name="username" id="user" class="input-box" placeholder="" required />
                        <label for="user" class="label-user">Username</label>
                    </div>
                    <div class="input-field">
                        <input type="text" name="password" id="pass" class="input-box" placeholder="" required />
                        <label for="pass" class="label-pass">Password</label>
                    </div>
                    <div class="input-field">
                        <input type="text" name="email" id="email" class="input-box" placeholder="" required />
                        <label for="email" class="label-email">E-mail</label>
                    </div>
                    <div class="input-field">
                        <input type="date" name="birthday" id="birthday" class="input-box" placeholder="" required />
                        <label for="birthday" class="label-birth">Birthday</label>
                    </div>
                    <div class="submit-box">
                        <input type="submit" name="submit" value="Sign Up" />
                    </div>
                    <div class="login">
                        <span>Already have an account? <a href="login.php"> Login</a> or <a href="index.php">Return Home</a></span>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
<?php
require_once 'connect.php';
$nickname = @$_POST['nickname'];
$username = @$_POST['username'];
$password = @$_POST['password'];
$email = @$_POST['email'];
$birthday = @$_POST['birthday'];

if(isset($_POST['submit'])){
echo $nickname . " ; " . $username . " ; " . $password . " ; " . $email . " ; " . $birthday;

$sql = "INSERT INTO user (nickname, username, pass, email, birthday) VALUES (?,?,?,?,?);";

$prep_stmt = mysqli_prepare($connection, $sql);
mysqli_stmt_bind_param($prep_stmt, "sssss", $nickname, $username, $password, $email, $birthday);
if (mysqli_stmt_execute($prep_stmt)) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

}

?>