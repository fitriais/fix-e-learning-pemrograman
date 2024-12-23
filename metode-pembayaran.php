<?php
require 'config.php'; // Include database connection

// Tangkap parameter package dari URL tanpa pengecekan manual
$package = isset($_GET['package']) ? (int)$_GET['package'] : 1;

// Query untuk mengambil data paket berdasarkan ID
$query = "SELECT * FROM paket WHERE id_paket = :id_paket";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':id_paket', $package, PDO::PARAM_INT);
$stmt->execute();
$paket = $stmt->fetch(PDO::FETCH_ASSOC);

// Jika paket tidak ditemukan, redirect ke halaman lain atau tampilkan error
if (!$paket) {
  die("Paket tidak ditemukan.");
}

// Query untuk mengambil metode pembayaran
$query_metode = "SELECT * FROM metode_pembayaran";
$stmt_metode = $pdo->prepare($query_metode);
$stmt_metode->execute();
$metode_pembayaran = $stmt_metode->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pembayaran Langganan</title>
  <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: "Montserrat", sans-serif;
      background-color: #092635;
      color: white;
    }

    footer {
      background-color: #092635;
      color: white;
      padding: 20px;
    }

    .social-icons a img {
      width: 30px;
      margin-right: 10px;
    }
  </style>
</head>

<body>
  <!-- Paket Langganan dan Biaya -->
  <div class="container text-center text-white py-5">
    <h1 class="display-6">Paket Langganan <?php echo htmlspecialchars($paket['nama_paket']); ?></h1>
    <p class="fs-3">Biaya: <strong>Rp <?php echo number_format($paket['harga_paket'], 0, ',', '.'); ?></strong></p>
  </div>

  <!-- Konten Utama -->
  <main class="container mb-3">
    <section class="text-center bg-light rounded-3 shadow-lg p-4 mx-auto" style="max-width: 800px">
      <!-- Metode Pembayaran -->
      <div class="payment-method mb-4 text-dark">
        <h3 class="my-4">Metode Pembayaran</h3>
        <div class="d-flex flex-column align-items-center">
          <?php foreach ($metode_pembayaran as $metode): ?>
            <div class="form-check mb-2">
              <input class="form-check-input" type="radio" id="payment_method_<?php echo $metode['id_metode_pembayaran']; ?>" name="payment_method" />
              <label class="form-check-label" for="payment_method_<?php echo $metode['id_metode_pembayaran']; ?>">
                <img src="data:image/jpeg;base64,<?php echo base64_encode($metode['logo_metode_pembayaran']); ?>" alt="Logo Pembayaran" class="img-fluid" style="width: 100px; transition: transform 0.2s" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'" />
              </label>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Tombol Pembayaran -->
      <div class="payment-button my-4">
        <a href="bayar-sekarang.php?package=<?php echo $paket['id_paket']; ?>" class="btn btn-dark btn-md">Bayar Sekarang</a>
      </div>

      <!-- Instruksi Pembayaran -->
      <div class="shadow bg-light text-dark rounded p-3 my-5 mx-auto" style="max-width: 400px">
        <h5>Instruksi Pembayaran</h5>
        <p>
          Setelah memilih metode pembayaran, silakan transfer ke Virtual Account yang tersedia sesuai dengan pilihan Anda. Pembayaran akan diproses secara otomatis setelah transfer berhasil dilakukan.
        </p>
      </div>
    </section>
  </main>

  <!-- Tombol Kembali -->
  <div class="container text-center my-5">
    <a href="product-login.php" class="btn btn-outline-light">Kembali</a>
  </div>

  <?php require 'footer.php'; ?>
</body>

</html>