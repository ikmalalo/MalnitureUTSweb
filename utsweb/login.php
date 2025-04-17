<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link rel="stylesheet" href="style/login.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
  <div class="login-container">
    <img src="img/logo.png" alt="Logo" class="logo">

    <?php
    if (isset($_GET['error']) && $_GET['error'] == '1') {
      echo "<p style='color:red; text-align:center;'>Username atau password salah!</p>";
    }
    ?>

    <form action="cek_login.php" method="post">
      <input type="text" placeholder="Username" name="username" required>
      <input type="password" placeholder="Password" name="password" required>

      <div class="forgot-password">
        <a href="#">Forgot Password?</a>
      </div>

      <button type="submit">Sign In</button>
      <a href="index.php" class="back-button">Back</a>
    </form>
  </div>
</body>
</html>
