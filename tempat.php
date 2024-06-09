<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include './components/style.php' ?>
  </head>
  <body>
    <?php include './components/navbar.php' ?>

    <?php
      $query =  "SELECT t.id_tempat, t.nama_tempat, t.alamat, t.telepon, t.jam_operasional, r.id_rincian, r.tentang, r.makanan, r.fitur, g.id_gambar, g.gambar FROM tempat t LEFT JOIN rincian r ON t.id_tempat = r.id_tempat LEFT JOIN gambar g ON t.id_tempat = g.id_tempat WHERE t.id_tempat = '".$_GET['id_tempat']."'";
      foreach (mysqli_query($koneksi, $query) as $card): 
    ?>

    <div class="container pt-3 mb-5">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner rounded-3">
                        <div class="carousel-item active c-item">
                            <?= '<img src="data:image/webp;base64,'.base64_encode($card['gambar']).'" class="d-block c-img">' ?>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-12 col-lg-6 mt-3 mt-lg-0">
                <div class="bg-white border border-1 rounded-3 p-4 d-tempat">
                    <h4 class="fw-bold"><?= $card['nama_tempat'] ?></h4>
                    <p><?= $card['tentang'] ?></p>
                    <div class="d-flex align-items-center mb-2">
                        <i class='bx bxs-map bx-sm me-2'></i>
                        <span><?= $card['alamat'] ?></span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <i class='bx bxs-phone-call bx-sm me-2'></i>
                        <span><?= $card['telepon'] ?></span>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <i class='bx bx-time-five bx-sm me-2'></i>
                        <span><?= $card['jam_operasional'] ?></span>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h6 class="fw-bold">Menu</h6>
                            <ul class="m-0">
                                <?= $card['makanan'] ?>
                            </ul>
                        </div>
                        <div class="col-6">
                            <h6 class="fw-bold">Fasilitas</h6>
                            <ul class="m-0">
                                <?= $card['fitur'] ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php
      endforeach;
    ?>

    <footer class="container-fluid pt-lg-5">
      <div class="container">
          <div class="pt-5">
              <div class="row">
              <div class="col-6 col-md-2 mb-3">
                  <h5>Section</h5>
                  <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                  </ul>
              </div>

              <div class="col-6 col-md-2 mb-3">
                  <h5>Section</h5>
                  <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                  </ul>
              </div>

              <div class="col-6 col-md-2 mb-3">
                  <h5>Section</h5>
                  <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                  </ul>
              </div>

              <div class="col-md-5 offset-md-1 mb-3">
                  <form>
                  <h5>Subscribe to our newsletter</h5>
                  <p>Monthly digest of what's new and exciting from us.</p>
                  <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                      <label for="newsletter1" class="visually-hidden">Email address</label>
                      <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                      <button class="btn btn-success" type="button">Subscribe</button>
                  </div>
                  </form>
              </div>
              </div>

              <div class="d-flex flex-column flex-sm-row justify-content-between py-4 border-top">
              <p>© 2024 Company, Inc. All rights reserved.</p>
              <ul class="list-unstyled d-flex">
                  <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="bx bxl-twitter bx-sm bx-tada-hover"></i></a></li>
                  <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="bx bxl-instagram bx-sm bx-tada-hover"></i></a></li>
                  <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="bx bxl-facebook-circle bx-sm bx-tada-hover"></i></a></li>
              </ul>
              </div>
          </div>
      </div>
    </footer>
    <?php include './components/script.php' ?>
  </body>
</html>
