<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SISFO - Manajemen Pembayaran</title>
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
          <h3>RIWAYAT PEMBAYARAN</h3>
        </div>

        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Pengguna</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
                <th>Metode Pembayaran</th>
                <th>Keterangan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Intan Aulia Rosydah</td>
                <td>Rp1.000.000</td>
                <td>2024-10-15</td>
                <td>BANK BCA</td>
                <td><span class="badge bg-success">Sudah Bayar</span></td>
                <td>
                  <button class="btn btn-primary btn-sm">Cetak</button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Agniesa Junica Putri</td>
                <td>Rp3.000.000</td>
                <td>2024-10-16</td>
                <td>BANK BNI</td>
                <td><span class="badge bg-success">Sudah Bayar</span></td>
                <td>
                  <button class="btn btn-primary btn-sm">Cetak</button>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Fitri Aisyah Ramadhani</td>
                <td>Rp5.100.000</td>
                <td>2024-10-17</td>
                <td>BANK MANDIRI</td>
                <td><span class="badge bg-success">Sudah Bayar</span></td>
                <td>
                  <button class="btn btn-primary btn-sm">Cetak</button>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>M. Yasir Rahmatullah</td>
                <td>Rp3.000.000</td>
                <td>2024-10-19</td>
                <td>BANK BNI</td>
                <td><span class="badge bg-danger">Belum Bayar</span></td>
                <td>
                  <button class="btn btn-primary btn-sm">Cetak</button>
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>Michael Fernando</td>
                <td>Rp5.100.000</td>
                <td>2024-10-20</td>
                <td>BANK MANDIRI</td>
                <td><span class="badge bg-danger">Belum Bayar</span></td>
                <td>
                  <button class="btn btn-primary btn-sm">Cetak</button>
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
