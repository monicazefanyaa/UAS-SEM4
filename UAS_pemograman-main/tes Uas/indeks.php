<?php
  include 'connect.php';
  $query = "SELECT * FROM tb_siswa;";
  $sql = mysqli_query($conn, $query);
  //(untuk menampilkan info query) = var_dump($sql)
  $no = '';
?>

<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <script src="js/bootstrap.bundle.min.js"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css" />

  <title>Data Pelanggan</title>
</head>
<body>
  <nav class="navbar navbar-light bg-light mb-4">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"> </a>
    </div>
  </nav>

  <div class="container">
    <figure>
      <h1 class="mt-4">Data Pelanggan</h1>
      <blockquote class="blockquote">
        <p>Berisi data yang telah disimpan di database</p>
      </blockquote>
      <figcaption class="blockquote-footer">
        CRUD <cite title="Source Title">Create Update and Delete</cite>
      </figcaption>
    </figure>
    <a href="kelola.php" type="button" class="btn btn-primary mb-3">
      <i class="fa fa-plus"></i> Tambah data
    </a>
    <div class="table-responsive">
      <table class="table align-middle table-bordered table-hover">
        <thead>
          <tr>
            <th><center>No</center></th>
            <th><center>Id Pelanggan</center></th>
            <th><center>Username</center></th>
            <th><center>Foto Profil</center></th>
            <th><center>No Hp</center></th>
            <th><center>Email</center></th>
            <th><center>Aksi</center></th>
          </tr>
        </thead>
        <tbody>
          <?php while ($result = mysqli_fetch_assoc($sql)) { ?> 
            <tr>
              <td><center><?php echo ++$no; ?></center></td>
              <td><center><?php echo $result['id_pelanggan']; ?></center></td>
              <td><?php echo $result['username']; ?></td>
              <td><img src="img/<?php echo $result['foto_profil']; ?>" style="width: 120px"></td>
              <td><?php echo $result['no_hp']; ?></td>
              <td><?php echo $result['email']; ?></td>
              <td>
              <a href="proses.php?hapus=<?php echo $result['id_pelanggan']; ?>" class="btn btn-danger btn-sm" onclick="return confirm ('apakah anda yakin ingin menghapus data')">
                  <i class="fa fa-trash-o" aria-hidden="true"></i> Hapus
                </a>
                <a href="kelola.php?ubah=<?php echo $result['id_pelanggan']; ?>" type="button" class="btn btn-success btn-sm">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                </a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div> 
  </div>
</body>
</html>
