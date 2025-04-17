<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin</title>
  <link rel="stylesheet" href="style/dashboard.css"> 
</head>
<body style="background-color: #7FA175;">
  <div class="navbar-wrapper">
      <nav class="navbar">
        <div class="nav-content">
          <div class="logo">
            <img src="img/logo.png" alt="Logo">
          </div>
          <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Product</a></li>
            <li><a href="#">Promo</a></li>
          </ul>
          <div class="auth-links">
            <?php if (!isset($_SESSION['username'])): ?>
              <a href="login.php">Sign In</a>
            <?php else: ?>
              <a href="logout.php">Log Out</a>
            <?php endif; ?>
          </div>
        </div>
      </nav>
    </div>
  <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
    <div class="popup-success">
      <p>Data berhasil ditambah!</p>
    </div>
  <?php endif; ?>

  <div class="container">
    <h1>Dashboard Admin</h1>
    
    <h2>Tambah Barang</h2>
    <form action="admin_dashboard.php?success=1" method="POST" enctype="multipart/form-data">
      <label for="merk">Merk Barang:</label>
      <input type="text" id="merk" name="merk" required>

      <label for="kategori">Kategori Barang:</label>
      <input type="text" id="kategori" name="kategori" required>

      <label for="gambar">Upload Img:</label>
      <input type="file" id="gambar" name="gambar" required hidden>
      <label for="gambar" class="custom-file-upload">Choose File</label>
      <span id="file-chosen">No file chosen</span>

      <label for="diskon">Diskon</label>
      <div class="radio-group">
        <input type="radio" id="iya" name="diskon" value="iya" class="custom-radio">
        <label for="iya" class="custom-radio-label">Iya</label>

        <input type="radio" id="tidak" name="diskon" value="tidak" class="custom-radio">
        <label for="tidak" class="custom-radio-label">Tidak</label>
      </div>

      <button type="submit">Tambah Barang</button>
    </form>



  </div>

  <script>
    const realFileInput = document.getElementById("gambar");
    const fileChosenText = document.getElementById("file-chosen");

    realFileInput.addEventListener("change", function() {
      fileChosenText.textContent = this.files[0].name;
    });
  </script>

</body>
</html>
