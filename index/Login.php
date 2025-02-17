<?php
session_start();
include_once 'Database.php';
include_once 'User.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $connection = $db->getConnection();
    $user = new User($connection);

   
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($user->login($email, $password)) {
        header("Location: index.php"); 
        exit;
    } else {
        echo "Invalid login credentials!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="style.css">
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    rel="stylesheet"
  />
</head>
<body class>
    <main class="Loginclass">
        <div class="header-content">
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="Gallery.php">Gallery</a>
            <a href="Music.php">Music</a>
            <a href="Login.php">Log in</a>
            <a href="Register.php">Register</a>
            
        </nav>
        </div>
    <div class="login-container ">
        <form class="login-form" method="POST">
            <div class="profile-icon">
                <img src="img\Person.png" alt="profile-icon">
            </div>
            <input type="email" name="email" placeholder="username" required></p>
             <p><input type="password" name="password" placeholder="Password" required></p>
             <button type="submit">Login</button>
        </form>
<!--<div class="register-link">
            <p>Don't have an account?</p>
            <a href="Register.php">Register here</a> 
        </div>-->

    </div>
   <!-- <script src="script.js"></script>-->
</main>
<footer class="footer">
    <div class="footer-content">
      <div class="social-icons">
          <a href="https://www.facebook.com/zayn"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/zayn/"><i class="fab fa-instagram"></i></a>
          <a href="https://www.youtube.com/channel/UC3PdiRW5dUA4V70ueeR1eHA"><i class="fab fa-youtube"></i></a>
      </div>
      <p> @ 2024 ZAYN OFFICIAL. ALL RIGHTS RESERVED,REPBULIC RECORDS</p>
      <p>
        Design by:Olta Kerqeli & Anile Zuzaku
      </p>
    </div>
    
</footer>
</body>

</html>