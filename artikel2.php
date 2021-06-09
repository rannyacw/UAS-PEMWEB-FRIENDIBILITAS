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
                    <img src="img/d2.jpg" class="card-img-top" alt="Card image cap">
                      <h2>Peluang Usaha, Memberdayakan Difabel</h2>
                      <p> <span></span>[Bandung, 2 September 2020] Membuka peluang kerja untuk memberdayakan potensi difabel mungkin terdengar masih langka. Hingga saat ini, asumsi masyarakat luas terkait individu difabel belum seutuhnya mampu memahami dengan baik.</p>
                      <p> <span> Sebuah </span> pemikiran yang miris terkait citra difabel yang cenderung dinilai negatif saat disodorkan segudang kemampuan masyarakat difabel dalam berbagai bidang kehidupan. Di kancah olah raga, sudah terbukti nyata difabel mampu bersaing hingga kelas dunia dan membawa nama baik untuk bangsa. Di bidang pendidikan, banyak masyarakat difabel yang berhasil memperoleh gelar akademis mulai dari sarjana hingga profesor. Di bidang ekonomi, mulai bermunculan sosok difabel yang sukses mandiri secara finansial sebagai wirausahawan.</p>
                      <p>Namun, sejauh apa kita dapat mengetahui perjuangan dan perjalanan yang mereka tempuh untuk meraih itu semua? Hasil besar selalu dimulai dari langkah kecil. Adalah Yadi Sofiyan (48), sosok difabel netra yang memiliki kepedulian untuk ikut membangun pemberdayaan bagi para difabel netra. Disampaikan Yadi, dirinya pernah mengikuti rehabilitasi pada tahun 1999 hingga 2001 di Wyata Guna dengan mempelajari teknik shiatsu.</p>
                      <p>Berbekal dari pembelajaran tersebut, Yadi Sofiyan yang lebih dikenal sebagai atlet catur nasional dan internasional ini, sejak 2011 membuka usaha massage untuk memfasilitasi para terapis difabel netra. Di awal hanya memiliki dua orang terapis laki-laki, berangsur meningkat hingga lima terapis sebelum masa pandemi. Hingga kini masih terdapat tiga tenaga terapis yang terus diberdayakan.
                        Yang menjadi unik adalah, di saat dirinya lebih memilih menjadi seorang atlet catur, masih tergerak untuk memfasilitasi tempat usaha para terapis difabel netra.</p>
                    <p>“Saya memiliki sedikit keterampilan di bidang massage dan ingin terus mengembangkannya, maka dibukalah rumah terapi tersebut. Kebetulan juga di rumah ada lahan yang bisa dioptimalkan,” tuturnya.
                        Usaha yang dibangunnya ini, dilandasi untuk membantu para terapis lain yang memang memerlukan tempat agar dapat mengembangkan potensi mereka. Meski dalam masa pandemi, Yadi sebagai pemiliki tempat usaha mengaku tidak merasakan duka walau omsetnya menurun. Para terapis pun tetap mendapatkan fasilitas yang layak seperti tempat tinggal dan makan seperti biasa. Dari sisi penghasilan, pembagiannya berimbang di lima puluh persen antara terapis dan pemilik tempat.</p>
                    <p>Ditegaskan Yadi, niat dari awal membuka tempat usaha tersebut adalah untuk membantu memberdayakan potensi difabel netra. Secara umum, pembagian hasil biasanya berkisar di enam puluh-empat puluh. Yaitu enam puluh untuk pemilik tempat, sisanya untuk para terapis. Namun, tidak demikian untuk Klinik Terus Jaya Massage milik Yadi Sofiyan di Kawasan Babakan Ciparay, Bandung.
                        “Di klinik, saya menerapkan aturan bagi hasil sendiri yaitu sama rata antara pemilik dan terapis, tanpa mengurangi fasilitas lainnya seperti tempat tinggal dan makan yang diberikan pada para terapis,” kata Yadi.</p>
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