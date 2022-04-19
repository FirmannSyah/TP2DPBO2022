<?php

include("includes/DB.php");
include("includes/Divisi.class.php");

$divisi = new Divisi;
$divisi->open();
$result = $divisi->getDivisi();

if (isset($_POST['btn-add'])) {
    //memanggil add
    $divisi->addDivisi($_POST);
    header("location:DaftarDivisi.php");
}

if (isset($_GET['id_hapus'])) {
    //menghapus
    $divisi->delete($_GET['id_hapus']);
    header("location:DaftarDivisi.php");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>TP 2 DPBO</title>
  </head>
  <body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
            <img src="assets/bikinibottm1.png" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link text-white  lead" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white lead" href="TambahPengurus.php">Tambah Pengurus</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white fw-bold lead" href="DaftarDivisi.php">Daftar Divisi</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white lead" href="DaftarBidangDivisi.php">Daftar Bidang Divisi</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    </header>
    <div class="container mt-5 py-3">
        <div class="row mt-3" id="pengurus">
            <div class="col-md-8">
                <div class="row">
                    <h3>Daftar Divisi</h3>
                    <section id="tabel-divisi">
                        <?php
                            echo "<table class='table'>
                                    <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>ID Divisi</td>
                                        <td>Nama Divisi</td>
                                        <td>Action</td>
                                    </tr>
                                    </thead>";

                            $i = 1;
                            $id = 0;
                            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

                                echo "<tr>";
                                echo "<td> $i </td>";
                                echo "<td> {$row['id_divisi']} </td>";
                                echo "<td> {$row['nama_divisi']} </td>";
                                echo "<td>
                                    <a href='DaftarDivisi.php?id_edit= {$row['id_divisi']}' class='btn btn-warning''>Edit</a>
                                    <a href='DaftarDivisi.php?id_hapus= {$row['id_divisi']}' class='btn btn-danger''>Hapus</a>
                                    </td>";
                                echo "</tr>";
                                $i++;
                            }
                            echo "</table>";
                            $divisi->close();

                            ?>
                    </section>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="px-5">
                        <div class="p-5">
                            <form action="DaftarDivisi.php" method="post">
                                <div class="mb-3">
                                    <label for="nama_divisi" class="form-label">Nama Divisi</label>
                                    <input type="text" class="form-control" name="nama_divisi" id="nama_divisi" required>
                                </div>
                                <button type="submit" class="btn btn-primary" name="btn-add" id="btn-add">Add</button>
                                <button type="reset" class="btn btn-secondary" name="btn-reset" id="btn-reset">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>