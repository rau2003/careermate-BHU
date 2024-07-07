<?php
// logout.php - Logs out the user and destroys the session
session_start();
session_unset();
session_destroy();
header("Location: signup.php");
exit();
?>
