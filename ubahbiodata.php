
<?php
error_reporting(0); 
session_start();
include "koneksi.php"; 


$sesiadmin = $_SESSION['member']; //sesi login
$anggota = mysqli_fetch_array(mysqli_query($conect, "SELECT * FROM tb_anggota where id_anggota='$sesiadmin'"));

$user = mysqli_real_escape_string($conect, $_POST["user"]); //input email
$pass = mysqli_real_escape_string($conect, $_POST["pass"]); //input  paswword
$nama = mysqli_real_escape_string($conect, $_POST["nama"]); //input  nama

$passmd5 = md5($pass);

if(isset($_POST['submit'])){
    if($nama == ""){
        $nama_error = "<span style='color:#FF0000;'>Nama Wajib diisi</span>";
    }if($user == ""){
        $user_error = "<span style='color:#FF0000;'>Email Wajib diisi</span>";
    }else{
        if(empty($pass)){
            $sql = mysqli_query($conect, "update tb_anggota set nama='$nama' where id_anggota='$sesiadmin'");
            if($sql){
                echo "<script>alert('update berhasil !');document.location='ubahbiodata.php'</script>";
            }else{
                echo "<script>alert('Gagal ! Silahkan Ulangi Kembali');document.location='ubahbiodata.php'</script>";
            }
        }else{
                $sql = mysqli_query($conect, "update tb_anggota set nama='$nama', password='$passmd5' where id_anggota='$sesiadmin'");
                if($sql){
                    echo "<script>alert('update berhasil !');document.location='profil.php'</script>";
                }else{
                    echo "<script>alert('Gagal ! Silahkan Ulangi Kembali');document.location='ubahbiodata.php'</script>";
                }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login admin</title>
    <link rel="stylesheet" href="loginanggota.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">
</head>
<body>
<h1 style:>friendibilitas</h1>
    
   <div class="overlay"></div>
   <form action="" method="post" class="box">
       <div class="header">
           <h1>Biodata Anggota </h1>
           <h2>Friendibilitas</h2>
          
       </div>
       <div class="login-area">
            <input type="text" name="nama" class="username" placeholder="Masukan Nama Lengkap" size="50" value="<?= $anggota['nama'];?>"maxlenght="60">
           <?= $nama_error;?>
           <input type="text" name="user" class="username" placeholder="Masukan Email" size="50" value="<?= $anggota['email'];?>"maxlenght="60" readonly="readonly">
           <?= $user_error;?>
           <input type="password" name="pass" class="password" placeholder="Masukan Password" size="50" maxlenght="15" >
           <?= $pass_error;?>
     
           <button type="submit" value="Login" class="submit" name="submit">Update Biodata</a>
            
       </div>
   </form> 
</body>
</html> 