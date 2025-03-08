<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include './components/style.php' ?>
  </head>
  <body>
    <?php include './components/navbar.php' ?>

    <div class="container pt-3">
      <div class="jumbotron-bg p-2 p-lg-5 mb-5 bg-body-tertiary rounded-3 text-white" >
        <div class="container-fluid py-5">
          <h1 class="display-5 fw-bold t-shadow">Njajan UPN</h1>
          <p class="col-md-12 fs-4 t-shadow">Selamat datang di Njajan UPN, situs web yang dirancang untuk membantu para mahasiswa maupun pengunjung menemukan tempat makan terbaik di sekitar kampus. </p>
          <a href="" class="btn btn-light btn-md rounded-5 px-4 py-2" type="button">
            <span>Lihat daftarnya</span>
          </a>
        </div>
      </div>
    </div>

    <section id="cafe">
      <div class="container" >
        <div class="row">
          <div class="col-12">
            <h5 class="fw-bold">List Rekomendasi Cafe</h5>
            <p>Temukan pilihan kafe terbaik dengan suasana nyaman, cocok untuk belajar atau berkumpul</p>
          </div>
        </div>
      </div>

      <div class="container mb-4">
        <div class="owl-carousel owl-theme">

          <?php $query =  "SELECT t.id_tempat, t.nama_tempat, r.id_rincian, r.tentang, g.id_gambar, g.gambar FROM tempat t LEFT JOIN rincian r ON t.id_tempat = r.id_tempat LEFT JOIN gambar g ON t.id_tempat = g.id_tempat WHERE t.kategori = 'Kafe'";
          foreach (mysqli_query($koneksi, $query) as $card): ?>
          <div class="item rounded-3">
            <div class="card border border-1">
              <div class="cc-item">
                <?= '<img src="data:image/webp;base64,'.base64_encode($card['gambar']).'" class="d-block cc-img rounded-3" />' ?>
              </div>
              <div class="card-body">
                <h5 class="card-title"><?= $card['nama_tempat'] ?></h5>
                <p class="card-text">
                  <?= $card['tentang'] ?>
                </p>
                <a href="tempat.php?id_tempat=<?= $card['id_tempat'] ?>" class="btn btn-success">Lebih Detail</a>
              </div>
            </div>
          </div>
          <?php
            endforeach;
          ?>

        </div>
      </div>
    </section>

    <section id="warung">
      <div class="container" >
        <div class="row">
          <div class="col-12">
            <h5 class="fw-bold">List Rekomendasi Warung</h5>
            <p>Temukan hidangan khas daerah dengan cita rasa autentik dan harga terjangkau</p>
          </div>
        </div>
      </div>

      <div class="container mb-4">
        <div class="owl-carousel owl-theme">

          <?php
            $query =  "SELECT t.id_tempat, t.nama_tempat, r.id_rincian, r.tentang, g.id_gambar, g.gambar FROM tempat t LEFT JOIN rincian r ON t.id_tempat = r.id_tempat LEFT JOIN gambar g ON t.id_tempat = g.id_tempat WHERE t.kategori = 'Warung'";
            foreach (mysqli_query($koneksi, $query) as $card): 
          ?>
          <div class="item rounded-3">
            <div class="card border border-1">
              <div class="cc-item">
                <?= '<img src="data:image/webp;base64,'.base64_encode($card['gambar']).'" class="d-block cc-img rounded-3" />' ?>
              </div>
              <div class="card-body">
                <h5 class="card-title"><?= $card['nama_tempat'] ?></h5>
                <p class="card-text">
                  <?= $card['tentang'] ?>
                </p>
                <a href="tempat.php?id_tempat=<?= $card['id_tempat'] ?>" class="btn btn-success">Lebih Detail</a>
              </div>
            </div>
          </div>
          <?php
            endforeach;
          ?>

        </div>
      </div>
    </section>

    <section id="warkop">
      <div class="container" >
        <div class="row">
          <div class="col-12">
            <h5 class="fw-bold">List Rekomendasi Warkop</h5>
            <p>Temukan atmosfer santai dan kopi berkualitas di kategori Warkop di Njajan UPN</p>
          </div>
        </div>
      </div>

      <div class="container mb-5">
        <div class="owl-carousel owl-theme">

          <?php
            $query =  "SELECT t.id_tempat, t.nama_tempat, r.id_rincian, r.tentang, g.id_gambar, g.gambar FROM tempat t LEFT JOIN rincian r ON t.id_tempat = r.id_tempat LEFT JOIN gambar g ON t.id_tempat = g.id_tempat WHERE t.kategori = 'Warkop'";
            foreach (mysqli_query($koneksi, $query) as $card): 
          ?>
          <div class="item rounded-3">
            <div class="card border border-1">
              <div class="cc-item">
                <?= '<img src="data:image/webp;base64,'.base64_encode($card['gambar']).'" class="d-block cc-img rounded-3" />' ?>
              </div>
              <div class="card-body">
                <h5 class="card-title"><?= $card['nama_tempat'] ?></h5>
                <p class="card-text">
                  <?= $card['tentang'] ?>
                </p>
                <a href="tempat.php?id_tempat=<?= $card['id_tempat'] ?>" class="btn btn-success">Lebih Detail</a>
              </div>
            </div>
          </div>
          <?php
            endforeach;
          ?>

        </div>
      </div>
    </section>

    <?php include './components/footer.php' ?>
    <?php include './components/script.php' ?>
  </body>
</html>