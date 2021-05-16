<?php
include "db.php";
if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $sql = "INSERT INTO users (username, password) VALUES ('$username','$password')";
    mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link href="Untitled design (6).png" rel="shortcut icon" type="image/png">
</head>

<body>
    <div class="headingh">
        <h1>Congrats! You are Registered!</h1>
        <p>These are your login credentials!</p>
        <p>Username: <?php echo $username ?></p>
        <p>Password: <?php echo $password ?> (The password has been encrypted for your safety)</p>
        <p>Copy and paste this somewhere or write it down!</p>
        <br>
        <a href="signing.php" class="start">Sign In</a>
    </div>
</body>

</html>