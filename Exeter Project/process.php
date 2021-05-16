<?php

include 'db.php';
$username = $_POST['user'];
$password = $_POST['pass'];


$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' and password = '$password'")
    or die("Failed to query database" . mysqli_error($link));
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link href="Untitled design (6).png" rel="shortcut icon" type="image/png">
    <meta charset="UTF-8">
</head>

<body>
    <div class="title">
        <div class="heading">
            <h1>
                <?php
                if ($row['username'] == $username && $row['password'] == $password) {
                    echo "👋 Hello " . $row['username'] . "!";
                } else {
                    header("Location:signin.php");
                }
                ?>
            </h1>
        </div>
        <br>
        <div class="heading">
            <form action="main.php" method="post">
                <label>Make a meeting code!</label>
                <input type="text" name="code" id="code" alt="code" placeholder="meeting code">
                <input type="submit" name="Createmeeting">
            </form>
        </div>
    </div>

</body>

</html>