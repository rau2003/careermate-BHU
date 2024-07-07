<?php
require 'confi.php';

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

    $duplicate = mysqli_query($conn, "SELECT * FROM userdata WHERE username = '$username' OR email = '$email'");

    if (mysqli_num_rows($duplicate) > 0) {
        echo "<script>alert('Username or Email already exists');</script>";
    } else {
        if ($password == $confirmpassword) {
            $query = "INSERT INTO userdata (username, email, password) VALUES ('$username', '$email', '$password')";
            mysqli_query($conn, $query);
            echo "<script>alert('Signup Successful'); window.location.href = 'dashboard/index.php';</script>";
        } else {
            echo "<script>alert('Passwords do not match');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - CareerMate</title>
    <link rel="icon" href="images/favicon-white.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="background-auth">
        <div class="auth-container">
            <div class="auth-left">
                <img src="images/Sign up.png" alt="Signup Image" class="auth-img">
            </div>
            <div class="auth-right">
                <h1 class="heading-auth">Sign Up</h1>
                <form action="" method="post" class="form-section-auth">
                    <input type="text" id="username" name="username" placeholder="Username" class="input-auth" required>
                    <input type="email" id="email" name="email" placeholder="Email" class="input-auth" required>
                    <input type="password" id="password" name="password" placeholder="Password" class="input-auth" required>
                    <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" class="input-auth" required>
                    <button type="submit" name="submit" class="button-auth">Sign Up</button>
                </form>
                <p class="text-auth">Already have an account? <a href="login.php" class="cta-auth">Login</a></p>
            </div>
        </div>
    </div>
    <div class="about-values">
        <h2>Values We Provide</h2>
        <div class="values-list">
            <div class="value-item">
                <img src="images/Guidance.png" alt="Expert Guidance">
                <p>Expert Guidance</p>
            </div>
            <div class="value-item">
                <img src="images/update-about.png" alt="Regular Updates">
                <p>Regular Updates</p>
            </div>
            <div class="value-item">
                <img src="images/community.png" alt="Community Support">
                <p>Community Support</p>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
