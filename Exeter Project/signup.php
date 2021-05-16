<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link href="Untitled design (6).png" rel="shortcut icon" type="image/png">
</head>

<body>
    <div class="headingh">
        <h1 class="signup-title">Sign Up</h1>
        <br>
        <form action="register.php" method="post" class="form-holder">
            <label class="container-input">Username</label>
            <input class="container-input" type="text" name="username" id="username" alt="Username" placeholder="Username">
            <label class="container-input">Password</label>
            <input class="container-input" type="password" name="password" id="password" alt="Username" placeholder="Password">
            <input class="general-btn" type="submit" name="register"></input>
        </form>
        <br>
        <p>Already have an account? <a href="signing.php" class="start">Sign In!</a></p>
    </div>
</body>

</html>