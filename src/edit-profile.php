<?php
session_start();
if (!isset($_SESSION["loggedin"])) {
    $_SESSION["loggedin"] = false;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "update_user_data.php"; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../css/edit-profile.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/header.css">
    <script src="../js/edit-profile-controller.js"></script>
    <title>Fanpit</title>
</head>

<body>

    <?php include '../components/header.php';?>
    <?php include '../components/sidebar.php'; ?>

        <div class="main">

            <!-- Change Username -->
            <div class="container" id="change-user-form">
                <div class="row">
                <h1 class="col-md-11">Change Username</h1>
                <div class="close-container d-flex justify-content-center align-items-center col-md-1">
                    <button class="back-button d-flex justify-content-center align-items-center" onclick="closeUserForm()" style="background: none; border: none; height: 25px; width: 25px; padding: 5px;">
                    <img class="close_icon" src="../images/close.png" width="25" height="25"/></button>
                </div>
                </div>
                <form action="change_info.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="username">New Username:</label>
                        <input class="change" type="text" id="username" name="username" required>
                        <button class="change-button" type="submit">Change</button>
                    </div>
                </form>
            </div>
            <!-- Change Nickname -->
            <div class="container" id="change-nickname-form">
                <div class="row">
                <h1 class="col-md-11">Change Nickname</h1>
                <div class="close-container d-flex justify-content-center align-items-center col-md-1">
                    <button class="back-button d-flex justify-content-center align-items-center" onclick="closeNicknameForm()" style="background: none; border: none; height: 25px; width: 25px; padding: 5px;">
                    <img class="close_icon" src="../images/close.png" width="25" height="25"/></button>
                </div>
                </div>
                <form action="change_info.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nickname">New Nickname:</label>
                        <input class="change" type="text" id="nickname" name="nickname" required>
                        <button class="change-button" type="submit">Change</button>
                    </div>
                </form>
            </div>
            <!-- Change Email -->
            <div class="container" id="change-email-form">
                <div class="row">
                <h1 class="col-md-11">Change Email</h1>
                <div class="close-container d-flex justify-content-center align-items-center col-md-1">
                    <button class="back-button d-flex justify-content-center align-items-center" onclick="closeEmailForm()" style="background: none; border: none; height: 25px; width: 25px; padding: 5px;">
                    <img class="close_icon" src="../images/close.png" width="25" height="25"/></button>
                </div>
                </div>
                <form action="change_info.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="email">New Email:</label>
                        <input class="change" type="text" id="email" name="email" required>
                        <button class="change-button" type="submit">Change</button>
                    </div>
                </form>
            </div>
            <!-- Change Picture -->
            <div class="container" id="change-picture-form">
                <div class="row">
                <h1 class="col-md-11">Change Profile Picture</h1>
                <div class="close-container d-flex justify-content-center align-items-center col-md-1">
                    <button class="back-button d-flex justify-content-center align-items-center" onclick="closePictureForm()" style="background: none; border: none; height: 25px; width: 25px; padding: 5px;">
                    <img class="close_icon" src="../images/close.png" width="25" height="25"/></button>
                </div>
                </div>
                <form action="change_info.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="pfp">New Email:</label>
                        <input class="change" type="file" id="pfp-input" name="pfp" required>
                        <button class="change-button" type="submit">Change</button>
                    </div>
                </form>
            </div>
            <!-- Change Password -->
            <div class="container" id="change-pass-form">
                <div class="row">
                <h1 class="col-md-11">Change Password</h1>
                <div class="close-container d-flex justify-content-center align-items-center col-md-1">
                    <button class="back-button d-flex justify-content-center align-items-center" onclick="closePassForm()" style="background: none; border: none; height: 25px; width: 25px; padding: 5px;">
                    <img class="close_icon" src="../images/close.png" width="25" height="25"/></button>
                </div>
                </div>
                <form action="change_info.php" method="POST" enctype="multipart/form-data" id="pass_form" onsubmit="return checkPasswordMatch();">
                    <div class="form-group">
                        <label for="oldpassword">Old Password:</label>
                        <input class="change" type="text" id="oldpassword" name="oldpassword" required>
                        <label for="newpassword">New Password:</label>
                        <input class="change" type="password" id="newpassword" name="newpassword" required>
                        <label for="confirmnewpassword">Confirm New Password:</label>
                        <input class="change" type="password" id="confirmnewpassword" name="confirmnewpassword" required>
                        <button id="change_pass" class="change-button" type="submit">Change</button>
                    </div>
                </form>
                <script>
                    function checkPasswordMatch(e) {
                        <?php echo "var realpassword = '".$_SESSION["password"]."';" ?>
                        var enteredpassword = document.getElementById("oldpassword").value;
                        var password1 = document.getElementById("newpassword").value;
                        var password2 = document.getElementById("confirmnewpassword").value;
                        if(enteredpassword == realpassword) {
                            if (password1 == password2) {
                                return true;
                            } else {
                                alert("Passwords do not match");
                                return false;
                            }
                        } else {
                            alert("Incorrect password");
                            return false;
                        }
                    }
                </script>
            </div>

        <div class="wrapper">
            <div class="top row w-100 rounded">
                <div class="col-md-6">
                    <img src="<?php echo "../uploads/".$_SESSION["userid"]."-pfp.png"; ?>" alt="Profile Picture" class="profile-picture">
                    <button class="open-button" onclick="openPictureForm()" style="position: relative; left: -5%; top: 30%; bottom: 0px; background: none; border: none; height: 25px; width: 25px; padding: 5px;">
                    <img class="edit_icon" src="../images/edit_square_white.png" width="25" height="25"/>
                    </button>
                    <div class="profile-username"><?php echo $_SESSION["nickname"]; ?></div>
                    <div class="profile-subname">f/<?php echo $_SESSION["username"]; ?></div>
                </div>
                <div class="col-md-6"><div class="back-container"><a href="profile.php"><button class="back-button d-flex justify-content-center align-items-center" style="background: none; border: none; height: 25px; width: 25px; padding: 5px;">
                    <img class="close_icon" src="../images/close_white.png" width="25" height="25"/></button></a></button></div></div>
            </div> 
            <div class="second row w-100">
                <div class="col-md-2">
                    <div class="label">Username:</div>
                    <div class="value">f/<?php echo $_SESSION["username"]; ?></div>
                </div>
                <div class="edit col-md-10">
                    <button class="open-button" onclick="openUserForm()" style="background: none; border: none; height: 25px; width: 25px; padding: 5px;"><img class="edit_icon" src="../images/edit_square.png" width="25" height="25"/></button>
                </div>
                <hr>
            </div> 
            <div class="second row w-100">
                <div class="col-md-2">
                    <div class="label">Nickname:</div>
                    <div class="value"><?php echo $_SESSION["nickname"]; ?></div>
                </div>
                <div class="edit col-md-10">
                    <button class="open-button" onclick="openNicknameForm()" style="background: none; border: none; height: 25px; width: 25px; padding: 5px;"><img class="edit_icon" src="../images/edit_square.png" width="25" height="25"/></button>
                </div>
                <hr>
            </div>
            <div class="second row w-100">
                <div class="col-md-2">
                    <div class="label">Email:</div>
                    <div class="value"><?php echo $_SESSION["email"]; ?></div>
                </div>
                <div class="edit col-md-10">
                    <button class="open-button" onclick="openEmailForm()" style="background: none; border: none; height: 25px; width: 25px; padding: 5px;"><img class="edit_icon" src="../images/edit_square.png" width="25" height="25"/></button>
                </div>
                <hr>
            </div>
            <div class="second row w-100">
                <div class="col-md-2">
                    <div class="label">Password:</div>
                    <div class="value"><?php for($x = 0; $x < strlen($_SESSION["password"]); $x++) {
                                                echo "*";
                                            } ?></div>
                </div>
                <div class="edit col-md-10">
                    <button class="open-button" onclick="openPassForm()" style="background: none; border: none; height: 25px; width: 25px; padding: 5px;"><img class="edit_icon" src="../images/edit_square.png" width="25" height="25"/></button>
                </div>
                <hr>
            </div>
            <div class="second row w-100">
                <div class="col-md-2">
                    <div class="label">Birthday:</div>
                    <div class="value"><?php echo $_SESSION["birthday"]; ?></div>
                </div>
                <hr>
            </div>
        </div>
        </div>
</body>
</html>
