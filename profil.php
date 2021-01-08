<!-- butuh file autntikasi session -->
<?php require_once("auth.php"); ?>


<!DOCTYPE html>
<!-- tipe dokumen -->
<html lang="en">
    <!-- bahasa html -->
  <head>
      <!-- unicode yang digunakan dan juga viewport -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- judul halaman -->
    <title>Halaman Landing</title>
    <!-- import css lokal -->
    <link rel="stylesheet" type="text/css" href="css/profil.css" />
  </head>
  <!-- bagian body -->
  <body>
      <!-- kontainer kartu -->
    <div class="card-container">
        <!-- kontainer atas -->
      <div class="upper-container">
          <!-- kontainer gambar -->
        <div class="image-container">
            <!-- gambar untuk profil pada kontainer -->
          <img src="gambar/profil.jpg" alt="" />
        </div>
      </div>
      <!-- kontainer bawah -->
      <div class="lower-container">
        <div>
            <!-- teks -->
          <h3><?php echo  $_SESSION["user"]["name"] ?></h3>
          <p><?php echo $_SESSION["user"]["email"] ?></p>
        </div>
        <div>
            <!-- teks -->
          <p><center>
            I am Founder & Writer at Sarang IT.
          </center></p>
        </div>
        <div>
            <!-- 2 button ke profil dan home -->
          <a href="index.php" class="btn">Home</a>
          <a href="https://www.linkedin.com/in/irvan-maulana-everel4869/" target="_blank" class="btn">Lihat Detail Profil</a>
        </div>
      </div>
    </div>
  </body>
</html>