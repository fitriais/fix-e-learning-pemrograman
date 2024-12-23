<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Penukaran Api</title>

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap"
      rel="stylesheet"
    />

    <style>
      body {
        font-family: "Montserrat", sans-serif;
        background-color: #092635;
        color: white;
      }

      .navbar {
        padding: 0;
        position: fixed;
        top: 0;
        width: 100%; /* Full width */
        z-index: 1000;
        background-color: rgba(0, 0, 0, 0.9); /* Hitam dengan transparansi */
        transition: background-color 0.3s ease, transform 0.3s ease;
        transform-origin: center top; /* Tetap di tengah saat zoom */
      }

      /* Navbar menjadi lebih transparan saat di-hover */
      .navbar:hover {
        background-color: rgba(0, 0, 0, 0.5);
      }

      /* Efek zoom in dan zoom out */
      .navbar.zoom-in {
        transform: scale(1.05);
      }

      .navbar.zoom-out {
        transform: scale(1) translateY(-10px); /* Tetap full-width dan turun sedikit */
      }

      .navbar-brand img {
        max-width: 200px;
      }

      .navbar-nav .nav-link {
        padding: 8px 15px;
      }

      footer {
        background-color: #092635;
        color: white;
        padding: 20px;
      }

      .social-icons img {
        width: 30px;
        margin-right: 10px;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="images/new-logo.png" alt="Logo" width="150" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutUs.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="product.php">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profil.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Main Content -->
    <div class="container my-5">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="bg-white text-dark p-4 text-center rounded shadow mb-4">
            <h2>PAKET KURSUS ONLINE 1</h2>
            <p>Langganan 1 bulan</p>
            <p>Penukaran 100 API</p>
            <button
              class="btn btn-dark"
              onclick="handleExchange(100)"
            >
              Tukar
            </button>
          </div>

          <div class="bg-white text-dark p-4 text-center rounded shadow mb-4">
            <h2>PAKET KURSUS ONLINE 2</h2>
            <p>Langganan 3 bulan</p>
            <p>Penukaran 150 API</p>
            <button
              class="btn btn-dark"
              onclick="handleExchange(150)"
            >
              Tukar
            </button>
          </div>

          <div class="bg-white text-dark p-4 text-center rounded shadow mb-4">
            <h2>PAKET KURSUS ONLINE 3</h2>
            <p>Langganan 6 bulan</p>
            <p>Penukaran 200 API</p>
            <button
              class="btn btn-dark"
              onclick="handleExchange(200)"
            >
              Tukar
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="text-center">
      <div class="container">
        <div class="social-icons">
          <a href="#"><img src="images/facebook-icon.png" alt="Facebook" /></a>
          <a href="#"><img src="images/x-icon.png" alt="Twitter" /></a>
          <a href="#"><img src="images/linkedin-icon.png" alt="LinkedIn" /></a>
          <a href="#"><img src="images/instagram-icon.png" alt="Instagram" /></a>
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      function handleExchange(apiRequired) {
        const availableApi = 7; // Replace with actual value
        if (availableApi >= apiRequired) {
          alert("Penukaran telah berhasil");
        } else {
          alert("Penukaran tidak berhasil. API belum mencukupi.");
        }
      }
    </script>

    <script>
      const navbar = document.querySelector(".navbar");

      window.addEventListener("scroll", () => {
        const scrollPos = window.scrollY;

        if (scrollPos > 50) {
          navbar.classList.add("zoom-out");
          navbar.classList.remove("zoom-in");
        } else {
          navbar.classList.add("zoom-in");
          navbar.classList.remove("zoom-out");
        }
      });
    </script>
  </body>
</html>
