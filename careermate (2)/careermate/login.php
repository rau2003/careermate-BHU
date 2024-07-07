<?php
require 'confi.php';

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT * FROM userdata WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($result->num_rows > 0) {
        if ($password == $row["password"]) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: dashboard/index.php"); // Redirect to dashboard.php after successful login
            exit();
        } else {
            echo "<script>alert('Wrong Password');</script>";
        }
    } else {
        echo "<script>alert('User Not Registered');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CareerMate</title>
    <link rel="icon" href="images/favicon-white.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="background-auth">
        <div class="auth-container">
            <div class="auth-left">
                <img src="images/Login.png" alt="Login Image" class="auth-img">
            </div>
            <div class="auth-right">
                <h1 class="heading-auth">Login</h1>
                <form id="loginForm" action="" method="post" class="form-section-auth">
                    <input type="text" id="login-username" name="username" placeholder="Username" class="input-auth" required>
                    <input type="password" id="login-password" name="password" placeholder="Password" class="input-auth" required>
                    <button type="submit" name="submit" class="button-auth">Login</button>
                </form>
                <p class="text-auth">Don't have an account? <a href="signup.php" class="cta-auth">Sign Up</a></p>
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
