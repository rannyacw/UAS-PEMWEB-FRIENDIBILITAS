    <!-- memnagil koneksi.php -->
    <?php include "koneksi.php";?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- my fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <!-- my css -->
    <link rel="stylesheet" href="t.css">

    <title>Ondibilitas</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">frien<b>dibilitas</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="tipskarir.php">Tips Karir</a>
            <a class="nav-item nav-link" href="profil.php">Profil</a>
            <a class="nav-item nav-link " href="kontak.php">About</a>

          </div>
        </div>
    </div>
    </nav>
    <!-- akhir navbar -->

    <!-- Jumbotroon -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Get work done <span>faster</span> <br> and <span>better</span> with us</h1>
        <a href="https://bbrvbd.kemsos.go.id/" target="_blank" class="btn-primary tombol">Join Us</a>
      </div>
    </div>
    <!-- Akhir Jumbotroon -->
    <div class="container">


      <!-- info panel -->
      <div class="row justify-content-center">
        <div class="col-10 info-panel">
          <div class="row">
            <div class="col-lg">
              <img src="gambar/gambar/home.png"  alt="Employee" class="float-left">
              <h3><a href="home.php" target="_blank" title="Home">Home</a></h3>
            </div>
            <div class="col-lg">
            <img src="gambar/gambar/berita.jpg" alt="High Res"  class="float-left">
              <h3><a href="berita.php" target="_blank" title="Berita">Berita</a></h3>
            </div>
            <div class="col-lg">
            <img src="gambar/gambar/logout.png" alt="Employee"  class="float-left"> 
              <h3><a href="logout.php" target="_blank" title="  Logout">Logout</a></h3>
            </div>
          </div>
        </div>
      </div>
      <!-- akhir info panel -->


      <!-- Working space -->

      <div class="row workingspace">
        <div class="col-lg-6">
          <h1>BERITA</h1>
          <!-- MENAMPILKAN BERITA -->
          <table class border="3" width="200%">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Status</th>
                <th>Action</th>
            </thead>
            <tbody>
              <?php
              $sql = mysqli_query($conect, "select * from tb_anggota");
              while($row=mysqli_fetch_array($sql)){
                ?>
              <tr>
                <td><?= $row['nama'];?></td>
                <td><?= $row['email'];?></td>
                <td><?= $row['status'];?></td>
                <td> <a href="blokiranggota.php?id=<?= $row['id_anggota'];?>" title=="Blokir">Blokir</a> 
                <a href="hapusanggota.php?id=<?= $row['id_anggota'];?>" title="Hapus">Hapus</a> </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
          <!-- AKHIR MENAMPILKAN BERITA -->
        </div>
        <div class="col-lg-5">
        </div> 
        </div>
      </div>
      <!-- akhir working space -->

    <!-- testimonial -->
    <section class="testimonial">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <h5>" Bekerja Dengan Suasana Hati yang lebih asik
            dan mempelajari hal baru setiap harinya "</h5>
        </div>
      </div>
      </section>
      <!-- akhir testimonial -->


      <!-- footer -->
      <div class="footer">
        <div class="col text-center">
          <p>2020 All Rights Reserved by Ondibilitas</p>
        </div>
      </div>
      <!-- akhir footer -->


    </div>
    <!-- container -->

    
    <!-- akhir container -->
  
  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>