<?php
  include 'connect.php';
  $query = "SELECT * FROM tb_siswa;";
  $sql = mysqli_query($conn,$query);
  //(untuk menampilkan info query) = var_dump($sql)
  $no =0;

  ?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <script src="js/bootstrap.bundle.min.js"></script>
    <!--font awesome-->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css" />
    <title>Document</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light mb-4">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">CRUD</a>
      </div>
    </nav>
    <div class="container">
        <form method="POST" action="proses.php" enctype="multipart/form-data">
        <div class="mb-3 row">
        <label for="id_Pelanggan" class="col-sm-2 col-form-label"
          >ID Pelanggan</label>
        <div class="col-sm-10">
          <input type="text" name="id_pelanggan" class="form-control" id="Id_Pelanggan" />
        </div>
      </div>
      <div class="mb-3 row">
        <label for="Username" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
          <input type="text" name="username" class="form-control" id="Username" />
        </div>
      </div>
      <div class="mb-3 row">
        <label for="no_hp" class="col-sm-2 col-form-label">No_Hp</label>
        <div class="col-sm-10">
          <input type="text" name="no_hp" class= "form-control" id="no_hp" />
        </div>
      </div>
      <div class="mb-3 row">
        <label for="foto_profil" class="col-sm-2 col-form-label"
          >Foto_Profil</label >
        <div class="col-sm-10">
          <input class="form-control" name="foto_profil" type="file" id="foto_profil"  accept="image/*"/>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="Email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input
            type="email"
            class="form-control"
            id="Email"
            name="email"
            placeholder="@email.com"
          />
        </div>
        <div class="mb-3 row mt-4">
          <div class="col text-center">
            <?php
            if(isset($_GET['ubah'])){
            ?>
            <button type="submit" name="aksi" value="edit" class="btn btn-primary offset md-2">
              <i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan perubahan
            </button>
            <?php
            }  else {
              ?>
            <button type="submit" name="aksi" value="add" class="btn btn-primary offset md-2">
              <i class="fa fa-floppy-o" aria-hidden="true"></i> Tambahkan
            </button>
            <?php
            } 
            ?>
            <a href="indeks.php" type="button" class="btn btn-danger">
              <i class="fa fa-reply" aria-hidden="true"></i> Kembali
            </a>
          
          </div>
        </div>
      </div>
        </form>
    </div>
  </body>
</html>
