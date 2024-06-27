<?php
include 'connect.php';

if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "add") {
        $username = $_POST['username'];
        $no_hp = $_POST['no_hp'];
        $foto_profil = $_FILES['foto_profil']['name']; // Mengambil nama file foto
        $email = $_POST['email'];
        
        $dir = "img/";
        $tmpfile = $_FILES['foto_profil']['tmp_name']; // Mengambil file sementara

        move_uploaded_file($tmpfile, $dir.$foto_profil); // Pindahkan file ke direktori img/

        $query = "INSERT INTO tb_siswa (id_pelanggan, username, no_hp, foto_profil, email) 
                  VALUES (null, '$username', '$no_hp', '$foto_profil', '$email')";
        $sql = mysqli_query($conn, $query);
        
        if ($sql) {
            header("location: indeks.php");
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }

    } else if ($_POST['aksi'] == "edit") {
        echo "Edit Data<a href='indeks.php'>[Home]</a>";
    }
}

if (isset($_GET['hapus'])) {
    $id_pelanggan = $_GET['hapus'];
    $query = "DELETE FROM tb_siswa WHERE id_pelanggan = '$id_pelanggan'";
    $sql = mysqli_query($conn, $query);
    
    if ($sql) {
        header("location: indeks.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>
