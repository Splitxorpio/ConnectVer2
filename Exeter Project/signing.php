<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/png" href="/Untitled design (6).png" />
</head>

<body>
    <div class="headingh">
        <h1>Sign In</h1>
        <br>
        <form class="form-holder" action="process.php" method="POST">
            <p class="container-input">
                <label>Username</label>
                <input class="container-input" type="text" id="user" name="user"></input>
            </p>
            <p class="container-input">
                <label>Password</label>
                <input class="container-input" type="password" id="pass" name="pass"></input>
            </p>
            <p>
                <input class="general-btn" type="submit" id="btn" value="Login"></input>
            </p>
        </form>
    </div>
</body>

</html>