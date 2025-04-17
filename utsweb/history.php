<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'staff') {
    exit();
}

$penjualan = [
    ['nama_barang' => 'Meja 1', 'qty' => 3, 'total' => 12000000, 'tanggal' => '2025-04-17'],
    ['nama_barang' => 'Kursi 2', 'qty' => 5, 'total' => 8000000, 'tanggal' => '2025-04-10'],
    ['nama_barang' => 'Lampu 3', 'qty' => 7, 'total' => 14000000, 'tanggal' => '2025-03-25'],
    ['nama_barang' => 'Lemari 4', 'qty' => 2, 'total' => 5000000, 'tanggal' => '2025-03-20'],
    ['nama_barang' => 'Meja 5', 'qty' => 4, 'total' => 16000000, 'tanggal' => '2025-03-15'],
];

$filteredData = [];
$today = date('Y-m-d');
$filter = isset($_GET['filter']) ? $_GET['filter'] : 'all';

foreach ($penjualan as $item) {
    if ($filter === '7' || $filter === '30') {
        $selisihHari = (strtotime($today) - strtotime($item['tanggal'])) / (60 * 60 * 24);
        if ($selisihHari <= (int)$filter) {
            $filteredData[] = $item;
        }
    } else {
        $filteredData[] = $item;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>History Penjualan</title>
  <link rel="stylesheet" href="style/history.css"> <!-- File CSS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
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

  <div class="container">
    <h1>History Penjualan</h1>

    <form method="GET" style="margin-bottom: 20px;">
      <label for="filter">Tampilkan:</label>
      <div class="custom-select-wrapper">
        <select name="filter" id="filter" onchange="this.form.submit()">
          <option value="all" <?= $filter === 'all' ? 'selected' : '' ?>>Semua</option>
          <option value="7" <?= $filter === '7' ? 'selected' : '' ?>>7 Hari Terakhir</option>
          <option value="30" <?= $filter === '30' ? 'selected' : '' ?>>30 Hari Terakhir</option>
        </select>
        <span class="custom-arrow"></span>
      </div>
    </form>


    <table>
      <thead>
        <tr>
          <th>No.</th>
          <th>Nama Barang</th>
          <th>Qty</th>
          <th>Total Harga</th>
          <th>Tanggal</th>
        </tr>
      </thead>
      <tbody>
        <?php if (count($filteredData) === 0): ?>
          <tr>
            <td colspan="5" style="text-align:center;">Tidak ada data penjualan dalam periode ini.</td>
          </tr>
        <?php else: ?>
          <?php foreach ($filteredData as $index => $item): ?>
            <tr>
              <td><?= $index + 1; ?></td>
              <td><?= $item['nama_barang']; ?></td>
              <td><?= $item['qty']; ?></td>
              <td>Rp <?= number_format($item['total'], 0, ',', '.'); ?></td>
              <td><?= $item['tanggal']; ?></td>
            </tr>
          <?php endforeach; ?>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</body>
</html>
