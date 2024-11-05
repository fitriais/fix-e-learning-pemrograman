<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pembayaran Langganan</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
  </head>
  <style>
    body {
      font-family: "Montserrat", sans-serif;
      background-color: #092635;
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
  <body>
    <!-- Paket Langganan dan Biaya -->
    <div class="container text-center text-white py-5">
      <h1 class="display-6">Paket Langganan 1 Bulan</h1>
      <p class="fs-3">Biaya: <strong>Rp 1.000.000</strong></p>
    </div>

    <!-- Konten Utama -->
    <main class="container mb-3">
      <section
        class="text-center bg-light rounded-3 shadow-lg p-4 mx-auto"
        style="max-width: 800px"
      >
        <!-- Metode Pembayaran -->
        <div class="payment-method mb-4">
          <h3 class="my-4">Metode Pembayaran</h3>
          <div class="d-flex flex-column align-items-center">
            <div class="form-check mb-2">
              <input
                class="form-check-input"
                type="radio"
                id="va_bca"
                name="payment_method"
              />
              <label class="form-check-label" for="va_bca">
                <img
                  src="images/logobca.png"
                  alt="BCA Logo"
                  class="img-fluid"
                  style="width: 100px; transition: transform 0.2s"
                  onmouseover="this.style.transform='scale(1.1)'"
                  onmouseout="this.style.transform='scale(1)'"
                />
              </label>
            </div>
            <div class="form-check mb-2">
              <input
                class="form-check-input"
                type="radio"
                id="va_bni"
                name="payment_method"
              />
              <label class="form-check-label" for="va_bni">
                <img
                  src="images/logobni.png"
                  alt="BNI Logo"
                  class="img-fluid"
                  style="width: 100px; transition: transform 0.2s"
                  onmouseover="this.style.transform='scale(1.1)'"
                  onmouseout="this.style.transform='scale(1)'"
                />
              </label>
            </div>
            <div class="form-check mb-2">
              <input
                class="form-check-input"
                type="radio"
                id="va_mandiri"
                name="payment_method"
              />
              <label class="form-check-label" for="va_mandiri">
                <img
                  src="images/logomandiri.png"
                  alt="Mandiri Logo"
                  class="img-fluid"
                  style="width: 100px; transition: transform 0.2s"
                  onmouseover="this.style.transform='scale(1.1)'"
                  onmouseout="this.style.transform='scale(1)'"
                />
              </label>
            </div>
          </div>
        </div>

        <!-- Tombol Pembayaran -->
        <div class="payment-button my-4">
          <a href="bayar-sekarang.php" class="btn btn-dark btn-md"
            >Bayar Sekarang</a
          >
        </div>

        <!-- Instruksi Pembayaran -->
        <div
          class="shadow bg-light text-dark rounded p-3 my-5 mx-auto"
          style="max-width: 400px"
        >
          <h5>Instruksi Pembayaran</h5>
          <p>
            Setelah memilih metode pembayaran, silakan transfer ke Virtual
            Account yang tersedia sesuai dengan pilihan Anda. Pembayaran akan
            diproses secara otomatis setelah transfer berhasil dilakukan.
          </p>
        </div>
      </section>
    </main>

    <!-- Tombol Kembali -->
    <div class="container text-center my-5">
      <a href="bayar1.php" class="btn btn-outline-light">Kembali</a>
    </div>

    <!-- Footer -->
    <footer class="text-center">
      <div class="container">
        <div class="social-icons mb-3">
          <a href="#"><img src="images/facebook-icon.png" alt="Facebook" /></a>
          <a href="#"><img src="images/x-icon.png" alt="Twitter" /></a>
          <a href="#"><img src="images/linkedin-icon.png" alt="LinkedIn" /></a>
          <a href="#"
            ><img src="images/instagram-icon.png" alt="Instagram"
          /></a>
        </div>
        <nav>
          <a href="index.php" class="me-3 text-decoration-none">Home</a>
          <a href="aboutUs.php" class="me-3 text-decoration-none">About Us</a>
          <a href="product.php" class="me-3 text-decoration-none">Product</a>
          <a href="profil.php" class="text-decoration-none">Login</a>
        </nav>
        <p class="mt-3">
          &copy; 2024 AIFYCODE Learning | All Rights Reserved. Made With Love
        </p>
      </div>
    </footer>
    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>