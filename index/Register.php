<?php
include_once 'Database.php';
include_once 'User.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $connection = $db->getConnection();
    $user = new User($connection);

   
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

   
    if ($user->register($name, $surname, $email, $password)) {
        header("Location: Login.php");
        exit;
    } else {
        echo "Error registering user!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    rel="stylesheet"
  />
</head>
<body>
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
    <div class="Register-container">
        <form class="register-form" method="POST">
          <input type="text" name="name" placeholder="Name" required>
          <input type="text" name="surname" placeholder="Surname" required>
          <input type="text" name="email" placeholder="email" required>
          <input type="password" name="password" placeholder="Password" required>

           <!--<input type="date" name="dob" required>
            <label>
              <input type="checkbox" name="conditions" value="1"> I accept the conditions.
            </label>
          <label>
            <input type="checkbox" name="emails" values="1">    I want to accept emails regarding the company.
          </label>
          <label for="role">Select Role:</label>
<select name="role" id="role" required>
    <option value="user">User</option>
    <option value="admin">Admin</option>
</select>-->
        
            <button type="submit">Register</button>
        </form>
    </div>
    <!--<script src="scriptt.js"></script>-->
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