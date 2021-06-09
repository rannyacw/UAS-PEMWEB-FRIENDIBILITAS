    <!-- memnagil koneksi.php -->
    <?php 
    error_reporting(0); 
    session_start();
    include "koneksi.php";
    ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="img/LOGO_1.ico" type="image/x-icon">
    <link rel="icon" href="img/LOGO_1.ico" type="image/x-icon">



    <title>Artikel</title>
  </head>
  <body>
      <header>
          <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.php">Frien<b>dibilitas</b></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="tipskarir.php">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="profil.php">profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontak.php">about</a>
                    </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
              </nav>
          </div>
      </header>

      <!-- jumbotron -->
      <section class="awal jumbotron-bg">
        <div class="jumbotron warna-bg text-white">
            <div class="container">
            <h1 class="display-4">Artikel Friendibilitas </h1>
            </div>
        </div>
      </section>
      <!-- akhir jumbotron -->
      

      <!-- awal konten -->
      <div class="container">
          <div class="row">
            <div class="col-md-8 mb-5">     <!-- awal col 8 -->
                <div class="card">
                    <div class="card-body">
                    <img src="img/d1.jpg" class="card-img-top" alt="Card image cap">
                      <h2>Ide Bisnis Rumahan Ini Cocok Untuk Seorang Difabel</h2>
                      <p> <span></span>Ide Bisnis Rumahan Ini Cocok Untuk Seorang Difabel – Memiliki keterbatasan fisik tidak menghalangi seseorang untuk mencapai kata ‘sukses’. Bahkan banyak juga orang-orang difabel yang bahagia berkat kesuksesan bisnis mereka.
                            Tidak perlu merasa sedih karena tidak bisa bekerja di dalam kantor atau perusahaan besar, karena pada kenyataannya masih banyak ide bisnis yang bisa dijalani untuk menambah penghasilan.
                            Para difabel juga tidak perlu beranjak dari rumah untuk memproduksi dan memasarkan produk/jasa. Manfaatkan saja media-media online untuk membeli bahan baku dan sebagai sarana pemasaran.</p>
                      <p> <span> Kerajinan Tangan </span> Produk buatan tangan atau handmade masih terasa banyak peminatnya. Terlebih lagi, produk kerajinan tangan yang terlihat unik dan sangat bisa dimanfaatkan untuk segala hal. Variasi bahan baku seperti kayu, rotan, tanah liat, kain, dan sebagainya bisa Anda gunakan untuk membuat produk kerajinan tangan unik yang memiliki harga jual lumayan tinggi.
                        Cara penjualannya pun bisa secara online sehingga Anda tidak harus bersusah payah pergi ke pasar untuk menjajakan produk Anda. Selain itu, kekuatan Word of Mouth (WoM) juga memiliki dampak yang bagus untuk kemajuan bisnis rumahan Anda.</p>
                      <p>Tanaman Hias, Bisnis tanaman hias merupakan salah satu bisnis yang terlihat mudah, namun ternyata cukup sulit dalam penerapannya. Anda harus memiliki selera yang bagus dalam merangkai berbagai macam bunga.</p>
                    </form>
                    </div>
                  </div>
            </div>  <!-- akhir col 8 -->

            <div class="col-md-4  mb-5"> <!-- awal col 4 -->

                <div class="card">
                    <div class="card-body bg-light">
                    <!-- profil anggota yang login -->
                    <?php $sesiadmin = $_SESSION['member']; 
                      if(isset($sesiadmin)){ 
                      $anggota = mysqli_fetch_array(mysqli_query($conect, "SELECT * FROM tb_anggota where id_anggota='$sesiadmin'"));
                      ?>
                      <h3>menu anggota</h3>
                      <a class="nav-item btn btn-danger  " href="ubahbiodata.php">Ubah Biodata dan Password</a><br>
                      <?php
                    }?>
                
                  <!-- profil anggota yang login -->
                     </div>
                </div>

        
<br>

                <div class="card">
                    <div class="card-body bg-light">
                      <h5>apakah anda ingin bergabung?</h5>
                      <p>friendibilitas akan membatu anda untuk mendaptkan informasi tentang inf difabel dan belajar bersama</p>
                    <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="*Nama">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="*Email">
                    </div>
                    <button class="btn btn-info">Ya saya mau!</button>
                    </form>
                </div>
            </div> 
          </div> <!-- a khir col 4 -->
      </div>
      <!-- akhir konten -->

   <!-- Footer -->
<footer class="footerset">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mr-auto">
                <a href="#homepage"> <img src="img/logoo.jpg"></a>
                <h1>Friendibilitas</h1>
                <p class="paragraph-footer">let's start <br> make your life better with us</p>

            </div>

            <div class="col-lg-3">

                <h6 class="footer-heading text-uppercase textset">For users</h6>
                <ul class="list-unstyled footer-link mt-4">
                    <li>
                        <a href="#Forumpage" "="">Discussion with us </a></li>
                        <br>
                    <li><a href="https://bit.ly/369GQRy ">Contact with consultant</a></li>
                    <br>
                    <li><a href="daftaranggota.php">New Account</a></li>
                </ul>

            </div>

            <div class="col-lg-2 ">
                <h6 class="footer-heading text-uppercase textset ">Explore us</h6>
                <ul class="list-unstyled footer-link mt-4 ">
                    <li><a href="index.php ">Homepage</a> </li>
                    <br>
                    <li><a href="">Services</a></li>
                    <br>
                    <li><a href="kontak.php">About us</a></li>
                    <br>
                    <li><a href="daftaranggota.php">Sign In</a></li>
                </ul>
            </div>

            <div class="col-lg-3 ">
                <h6 class="footer-heading text-uppercase textset ">Getting touch</h6>
                <ul class="list-unstyled footer-link mt-4 ">
                    <li><a href=" ">Frien<span>dibilitas.com</span></a> </li>
                    <br>
                    <li><a href="https://bit.ly/369GQRy">0812 - 3378 - 5913</a></li>
                    <br>
                    <li><a href=" ">Friendibilitas Indonesia </a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="text-center mt-5 ">
      
    </div>
</footer>

<!-- Akhir Footer -->

 
    <!-- awal jombotron 2 -->
    <div class="jumbotron jumbotron-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="img/gambar_buku.png" class="img-thumbnail" >
                </div>
                <div class="col-md-9">
                  <h1>nama iklan</h1>
                  <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae, voluptates blanditiis! Eveniet laudantium sunt incidunt cum, quo porro sit minima! Laudantium debitis quidem porro qui sapiente laborum earum dolores facilis. </p>
                  <button type="button" class="btn btn-primary">Download</button>
                </div>
            </div>
        </div>
      </div>
    <!-- akhir jombotron 2 --> 

    <!-- awal footer -->
    <footer class="warna-bg">
      <div class="text-white text-center pt-4 pb-4">
        Copyright @2020 Friendibilitas
      </div>
    </footer>
    <!-- akhir footer -->
  
  








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/jquery-3.5.1.slim.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>