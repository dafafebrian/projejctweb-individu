<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>TI UNIMUS | Kontak</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="/">TI UNIMUS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="/berita">Berita</a></li>
          <li class="nav-item"><a class="nav-link" href="/profile">Profile</a></li>
          <li class="nav-item"><a class="nav-link active" href="/kontak">Kontak</a></li>
        </ul>
      </div>
    </nav>

    <!-- Content -->
    <div class="container mt-5">
      <h2 class="text-center mb-4">Hubungi Kami</h2>

      <div class="row">
        <!-- Info Kontak -->
        <div class="col-md-5">
          <div class="card shadow-sm mb-4">
            <div class="card-body">
              <h5 class="card-title">Informasi Kontak</h5>
              <p class="card-text">
                <strong>Alamat:</strong><br>
                Jl. Kedungmundu Raya No.18, Tembalang, Semarang<br><br>

                <strong>Email:</strong><br>
                ti@unimus.ac.id<br><br>

                <strong>Telepon:</strong><br>
                (024) 1234567
              </p>
            </div>
          </div>
        </div>

        <!-- Form Kontak -->
        <div class="col-md-7">
          <div class="card shadow-sm mb-4">
            <div class="card-body">
              <h5 class="card-title">Kirim Pesan</h5>
              <form>
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">
                </div>
                <div class="form-group">
                  <label for="pesan">Pesan</label>
                  <textarea class="form-control" id="pesan" rows="4" placeholder="Tulis pesan Anda"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
      <small>© {{ date('Y') }} TI UNIMUS</small>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>