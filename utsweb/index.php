<?php
session_start();

$harga1 = 800000;
$harga2 = 600000;

$qty1 = isset($_POST['quantity1']) ? $_POST['quantity1'] : 1;
$qty2 = isset($_POST['quantity2']) ? $_POST['quantity2'] : 1;

$total1 = $harga1 * $qty1;
$total2 = $harga2 * $qty2;

$orderSuccess = false;

if (isset($_POST['konfirmasi'])) {
    $orderSuccess = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel="stylesheet" href="style/home.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
</head>

<body style="background-color: #7FA175;">
  <div class="navbar-wrapper">
    <nav class="navbar">
      <div class="nav-content">
        <div class="logo">
          <img src="img/logo.png" alt="Logo">
        </div>
        <ul class="nav-links">
          <li><a href="#">Home</a></li>
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

  <div class="content">
    <?php if (isset($_SESSION['username'])): ?>
      <h1 style="font-family: 'Poppins', sans-serif; font-weight: bold;">
        Hi <?php echo $_SESSION['username']; ?>! Here is the Easy way to shopping anytime, anywhere
      </h1>
    <?php else: ?>
      <h1 style="font-family: 'Poppins', sans-serif; font-weight: bold;">
        Welcome! Please sign in to start shopping.
      </h1>
    <?php endif; ?>

    <h2 class="section-title">Meja</h2>
    <hr class="divider">


    <div class="card-container">

      <div class="card">
        <div class="card-image">
          <img src="img/meja1.jpg" alt="Meja 1">
        </div>
        <div class="card-info">
          <h3 class="merk">NORGBERG</h3>
          <p class="kategori">Meja</p>
          <p class="harga">Rp. 800.000</p>
          <?php if (!isset($_SESSION['username'])): ?>
            <a href="#popup-login" class="buy-button">Buy</a>
          <?php else: ?>
            <a href="#popup1" class="buy-button">Buy</a>
          <?php endif; ?>
        </div>
      </div>
      
      <div class="card">
        <div class="card-image">
          <img src="img/meja2.jpg" alt="Meja 1">
        </div>
        <div class="card-info">
          <h3 class="merk">MICKE</h3>
          <p class="kategori">Meja</p>
          <p class="harga">Rp. 1.709.000</p>
          <?php if (!isset($_SESSION['username'])): ?>
            <a href="#popup-login" class="buy-button">Buy</a>
          <?php else: ?>
            <a href="#popup1" class="buy-button">Buy</a>
          <?php endif; ?>
        </div>
      </div>

      <div class="card">
        <div class="card-image">
          <img src="img/meja3.jpg" alt="Meja 1">
        </div>
        <div class="card-info">
          <h3 class="merk">LAGKAPTEN/ADILS</h3>
          <p class="kategori">Meja</p>
          <p class="harga">Rp. 499.000</p>
          <?php if (!isset($_SESSION['username'])): ?>
            <a href="#popup-login" class="buy-button">Buy</a>
          <?php else: ?>
            <a href="#popup1" class="buy-button">Buy</a>
          <?php endif; ?>
        </div>
      </div>

      <div class="card">
        <div class="card-image">
          <img src="img/meja4.jpg" alt="Meja 1">
        </div>
        <div class="card-info">
          <h3 class="merk">SANDSBERG</h3>
          <p class="kategori">Meja</p>
          <p class="harga">Rp. 579.000</p>
          <?php if (!isset($_SESSION['username'])): ?>
            <a href="#popup-login" class="buy-button">Buy</a>
          <?php else: ?>
            <a href="#popup1" class="buy-button">Buy</a>
          <?php endif; ?>
        </div>
      </div>

      <div class="card">
        <div class="card-image">
          <img src="img/meja5.jpg" alt="Meja 1">
        </div>
        <div class="card-info">
          <h3 class="merk">VOXLÖV</h3>
          <p class="kategori">Meja</p>
          <p class="harga">Rp. 4.999.000</p>
          <?php if (!isset($_SESSION['username'])): ?>
            <a href="#popup-login" class="buy-button">Buy</a>
          <?php else: ?>
            <a href="#popup1" class="buy-button">Buy</a>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <h2 class="section-title">Kursi</h2>
    <hr class="divider">

    <div class="card-container2">

      <div class="card">
          <div class="card-image">
            <img src="img/kursi1.jpg" alt="Meja 1">
          </div>
          <div class="card-info">
            <h3 class="merk">TEODORES</h3>
            <p class="kategori">Kursi</p>
            <p class="harga">Rp. 450.000</p>
            <?php if (!isset($_SESSION['username'])): ?>
              <a href="#popup-login" class="buy-button">Buy</a>
            <?php else: ?>
              <a href="#popup1" class="buy-button">Buy</a>
            <?php endif; ?>
          </div>
        </div>

      <div class="card">
          <div class="card-image">
            <img src="img/kursi2.jpg" alt="Meja 1">
          </div>
          <div class="card-info">
            <h3 class="merk">ADDE</h3>
            <p class="kategori">Kursi</p>
            <p class="harga">Rp. 145.000</p>
            <?php if (!isset($_SESSION['username'])): ?>
              <a href="#popup-login" class="buy-button">Buy</a>
            <?php else: ?>
              <a href="#popup1" class="buy-button">Buy</a>
            <?php endif; ?>
          </div>
        </div>

        <div class="card">
          <div class="card-image">
            <img src="img/kursi3.jpg" alt="Meja 1">
          </div>
          <div class="card-info">
            <h3 class="merk">TOBERGET</h3>
            <p class="kategori">Kursi</p>
            <p class="harga">Rp. 599.000</p>
            <?php if (!isset($_SESSION['username'])): ?>
              <a href="#popup-login" class="buy-button">Buy</a>
            <?php else: ?>
              <a href="#popup1" class="buy-button">Buy</a>
            <?php endif; ?>
          </div>
        </div>

        <div class="card">
          <div class="card-image">
            <img src="img/kursi4.jpg" alt="Meja 1">
          </div>
          <div class="card-info">
            <h3 class="merk">MARKUS</h3>
            <p class="kategori">Kursi</p>
            <p class="harga">Rp. 999.000</p>
            <?php if (!isset($_SESSION['username'])): ?>
              <a href="#popup-login" class="buy-button">Buy</a>
            <?php else: ?>
              <a href="#popup1" class="buy-button">Buy</a>
            <?php endif; ?>
          </div>
        </div>

        <div class="card">
          <div class="card-image">
            <img src="img/kursi5.jpg" alt="Meja 1">
          </div>
          <div class="card-info">
            <h3 class="merk">TOBIAS</h3>
            <p class="kategori">Kursi</p>
            <p class="harga">Rp. 1.595.000</p>
            <?php if (!isset($_SESSION['username'])): ?>
              <a href="#popup-login" class="buy-button">Buy</a>
            <?php else: ?>
              <a href="#popup1" class="buy-button">Buy</a>
            <?php endif; ?>
          </div>
        </div>
    </div>
      
    <div class="popup" id="popup-login">
      <div class="popup-content">
        <a href="#" class="close">&times;</a>
        <h2>Please Sign In</h2>
        <p>You need to sign in to purchase this product.</p>
        <a href="login.php" class="btn green-btn">Sign In</a>
      </div>
    </div>

    <div class="popup" id="popup1">
      <div class="popup-content">
        <a href="#" class="close">&times;</a>
        <h2>NORGBERG</h2>
        <p>Kategori: Meja</p>
          <form method="POST" action="#popup1">
            <label>Harga Satuan:</label><br>
            <input type="text" name="harga1" value="Rp. <?php echo number_format($harga1, 0, ',', '.'); ?>" readonly><br>
            
            <label>Quantity:</label><br>
            <input type="number" name="quantity1" value="<?php echo $qty1; ?>" min="1"><br>

            <label>Total:</label><br>
            <input type="text" name="total1" value="Rp. <?php echo number_format($total1, 0, ',', '.'); ?>" readonly><br><br>

            <button type="submit" name="hitung" style="margin-bottom: 10px;">Hitung Total</button><br>

            <button type="submit" name="konfirmasi" style="background-color: green; color: white;">Konfirmasi Pesanan</button>
          </form>
        </div>
    </div>

  <?php if ($orderSuccess): ?>
  <div class="popup-notif">
    Pemesanan Berhasil!
  </div>
<?php endif; ?>


  </div>
</body>

</html>
