<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SISFO - Mata Kuliah List</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      body {
        min-height: 100vh;
      }
      .sidebar {
        min-height: 100vh;
        width: 250px;
        background-color: #343a40;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 100;
        color: white;
        padding-top: 20px;
      }
      .sidebar a {
        color: white;
        text-decoration: none;
        display: block;
        padding: 10px 15px;
      }
      .sidebar a:hover {
        background-color: #495057;
      }
      .content {
        margin-left: 250px;
        padding: 20px;
      }
      .navbar-brand img {
        border-radius: 50%;
        width: 30px;
      }
    </style>
  </head>
  <body>
    <!-- Sidebar -->
    <div class="sidebar">
      <div class="text-center mb-3">
        <img
          src="https://via.placeholder.com/50"
          class="rounded-circle"
          alt="User"
        />
        <p>Admin</p>
      </div>
      <a href="#">Home</a>

      <!-- Dropdown Manajemen Pengguna -->
      <a
        class="dropdown-toggle"
        data-bs-toggle="collapse"
        href="#manajemenPengguna"
        role="button"
        aria-expanded="false"
        aria-controls="manajemenPengguna"
      >
        Manajemen Pengguna
      </a>
      <div class="collapse" id="manajemenPengguna">
        <a href="data-pengguna.php">Data Pengguna</a>
        <a href="monitoring-aktivitas.php">Monitoring Aktivitas Pengguna</a>
        <a href="manajemen-sertifikat.php">Sertifikat Pengguna</a>
      </div>

      <!-- Dropdown Manajemen Kursus -->
      <a
        class="dropdown-toggle"
        data-bs-toggle="collapse"
        href="#manajemenKursus"
        role="button"
        aria-expanded="false"
        aria-controls="manajemenKursus"
      >
        Manajemen Kursus
      </a>
      <div class="collapse" id="manajemenKursus">
        <a href="manajemen-jadwal-kursus.php">Jadwal Kursus</a>
        <a href="manajemen-materi-kursus.php">Materi Kursus</a>
        <a href="manajemen-modul-kursus.php">Modul Kursus</a>
      </div>

      <!-- Dropdown Manajemen Pembayaran -->
      <a
        class="dropdown-toggle"
        data-bs-toggle="collapse"
        href="#manajemenPembayaran"
        role="button"
        aria-expanded="false"
        aria-controls="manajemenPembayaran"
      >
        Manajemen Pembayaran
      </a>
      <div class="collapse" id="manajemenPembayaran">
        <a href="manajemen-pembayaran.php">Riwayat Pembayaran</a>
      </div>

      <a href="index.php">Logout</a>
    </div>

    <!-- Header/Navbar -->
    <nav
      class="navbar navbar-expand-lg navbar-light bg-light fixed-top"
      style="margin-left: 250px"
    >
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="images/new-logo.png" alt="Logo" />
          AIFYCODE Learning
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
          <form class="d-flex">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>
    <!-- Main Content -->
    <div class="content pt-5 mt-3">
      <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3>MODUL KURSUS</h3>
          <div>
            <button class="btn btn-danger me-2">Create</button>
            <button class="btn btn-primary me-2">Excel</button>
            <button class="btn btn-primary me-2">Word</button>
            <button class="btn btn-primary">PDF</button>
          </div>
        </div>

        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>ID Materi</th>
                <th>Nama Materi</th>
                <th>ID Modul</th>
                <th>Nama Modul</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>K001</td>
                <td>Belajar Dasar AI</td>
                <td>M101</td>
                <td>Pengenalan Kecerdasan Buatan</td>
                <td>
                  <button class="btn btn-warning btn-sm me-2">Edit</button>
                  <button class="btn btn-danger btn-sm">Delete</button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>K001</td>
                <td>Belajar Dasar AI</td>
                <td>M102</td>
                <td>Komponen Utama Kecerdasan Buatan</td>
                <td>
                  <button class="btn btn-warning btn-sm me-2">Edit</button>
                  <button class="btn btn-danger btn-sm">Delete</button>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>K001</td>
                <td>Belajar Dasar AI</td>
                <td>M103</td>
                <td>Implementasi AI Sederhana</td>
                <td>
                  <button class="btn btn-warning btn-sm me-2">Edit</button>
                  <button class="btn btn-danger btn-sm">Delete</button>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>K002</td>
                <td>Belajar Dasar Machine Learning</td>
                <td>M201</td>
                <td>Pengenalan Machine Learning</td>
                <td>
                  <button class="btn btn-warning btn-sm me-2">Edit</button>
                  <button class="btn btn-danger btn-sm">Delete</button>
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>K002</td>
                <td>Belajar Dasar Machine Learning</td>
                <td>M202</td>
                <td>Dataset dan Preprocessing</td>
                <td>
                  <button class="btn btn-warning btn-sm me-2">Edit</button>
                  <button class="btn btn-danger btn-sm">Delete</button>
                </td>
              </tr>
              <tr>
                <td>6</td>
                <td>K002</td>
                <td>Belajar Dasar Machine Learning</td>
                <td>M203</td>
                <td>Membangun Model Machine Learning Pertama</td>
                <td>
                  <button class="btn btn-warning btn-sm me-2">Edit</button>
                  <button class="btn btn-danger btn-sm">Delete</button>
                </td>
              </tr>
              <tr></tr>
              <tr>
                <td>7</td>
                <td>K003</td>
                <td>Belajar Dasar Pemrograman</td>
                <td>M301</td>
                <td>Pengenalan Konsep Dasar Pemrograman</td>
                <td>
                  <button class="btn btn-warning btn-sm me-2">Edit</button>
                  <button class="btn btn-danger btn-sm">Delete</button>
                </td>
              </tr>
              <tr>
                <td>8</td>
                <td>K003</td>
                <td>Belajar Dasar Pemrograman</td>
                <td>M302</td>
                <td>Penggunaan Kondisi dan Perulangan</td>
                <td>
                  <button class="btn btn-warning btn-sm me-2">Edit</button>
                  <button class="btn btn-danger btn-sm">Delete</button>
                </td>
              </tr>
              <tr>
                <td>9</td>
                <td>K003</td>
                <td>Belajar Dasar Pemrograman</td>
                <td>M303</td>
                <td>Fungsi dan Modularitas</td>
                <td>
                  <button class="btn btn-warning btn-sm me-2">Edit</button>
                  <button class="btn btn-danger btn-sm">Delete</button>
                </td>
              </tr>
              <tr>
                <td>10</td>
                <td>K004</td>
                <td>Belajar Dasar Pemrograman Web</td>
                <td>M401</td>
                <td>HTML dan Struktur Dasar Web</td>
                <td>
                  <button class="btn btn-warning btn-sm me-2">Edit</button>
                  <button class="btn btn-danger btn-sm">Delete</button>
                </td>
              </tr>
              <tr>
                <td>11</td>
                <td>K004</td>
                <td>Belajar Dasar Pemrograman Web</td>
                <td>M402</td>
                <td>CSS untuk Styling Website</td>
                <td>
                  <button class="btn btn-warning btn-sm me-2">Edit</button>
                  <button class="btn btn-danger btn-sm">Delete</button>
                </td>
              </tr>
              <tr>
                <td>12</td>
                <td>K004</td>
                <td>Belajar Dasar Pemrograman Web</td>
                <td>M403</td>
                <td>Membuat Website Responsif dengan Bootstrap</td>
                <td>
                  <button class="btn btn-warning btn-sm me-2">Edit</button>
                  <button class="btn btn-danger btn-sm">Delete</button>
                </td>
              </tr>
              <tr>
                <td>13</td>
                <td>K005</td>
                <td>Belajar Dasar Pemrograman Game</td>
                <td>M501</td>
                <td>Pengenalan Pemrograman Game</td>
                <td>
                  <button class="btn btn-warning btn-sm me-2">Edit</button>
                  <button class="btn btn-danger btn-sm">Delete</button>
                </td>
              </tr>
              <tr>
                <td>14</td>
                <td>K005</td>
                <td>Belajar Dasar Pemrograman Game</td>
                <td>M502</td>
                <td>Membuat Game Sederhana</td>
                <td>
                  <button class="btn btn-warning btn-sm me-2">Edit</button>
                  <button class="btn btn-danger btn-sm">Delete</button>
                </td>
              </tr>
              <tr>
                <td>15</td>
                <td>K005</td>
                <td>Belajar Dasar Pemrograman Game</td>
                <td>M503</td>
                <td>Pengolahan Grafik dan Animasi</td>
                <td>
                  <button class="btn btn-warning btn-sm me-2">Edit</button>
                  <button class="btn btn-danger btn-sm">Delete</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <nav aria-label="Page navigation">
          <ul class="pagination justify-content-center">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
