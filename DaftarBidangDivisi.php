<?php

include("includes/DB.php");
include("includes/Divisi.class.php");
include("includes/Bidang_Divisi.class.php");

$Bdivisi = new Bidang_Divisi;
$Bdivisi->open();

$Divisi = new Divisi;
$Divisi->open();

$select = $Divisi->getDivisi();
$result = $Bdivisi->getBidang_Divisi();
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
                <a class="nav-link text-white  lead" href="DaftarDivisi.php">Daftar Divisi</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white fw-bold lead" href="DaftarBidangDivisi.php">Daftar Bidang Divisi</a>
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
                    <h3>Daftar Bidang Divisi</h3>
                </div>
                <section id="tabel-bidang-divisi">
                        <?php
                            echo "<table class='table'>
                                    <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>ID Bidang</td>
                                        <td>Jabatan</td>
                                        <td>ID Divisi</td>
                                    </tr>
                                    </thead>";

                            $i = 1;
                            $id = 0;
                            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

                                echo "<tr>";
                                echo "<td> $i </td>";
                                echo "<td> {$row['id_bidang']} </td>";
                                echo "<td> {$row['jabatan']} </td>";
                                echo "<td> {$row['id_divisi']} </td>";
                                echo "<td>
                                    <a href='DaftarDivisi.php?id_edit= {$row['id_bidang']}' class='btn btn-warning''>Edit</a>
                                    <a href='DaftarDivisi.php?id_hapus= {$row['id_bidang']}' class='btn btn-danger''>Hapus</a>
                                    </td>";
                                echo "</tr>";
                                $i++;
                            }
                            echo "</table>";
                            $Bdivisi->close();

                            ?>
                    </section>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="px-5">
                        <div class="p-5">
                            <form action="DaftarBidangDivisi.php" method="post">
                                <div class="mb-3">
                                    <label for="jabatan" class="form-label">Jabatan</label>
                                    <input type="text" class="form-control" name="jabatan"id="jabatan" required>
                                </div>
                                <div class='mb-3'>
                                    <label for='id_divisi' class='form-label'>Divisi</label>
                                    <select class='form-select' aria-label='Divisi' id='id_divisi' name='id_divisi' required>
                                        <section>
                                            <?php
                                                while($row = mysqli_fetch_array($select, MYSQLI_ASSOC)){
                                                    echo "<option value= ' {$row['id_divisi']} '> {$row['nama_divisi']} </option>";
                                                }
                                                $Divisi->close();
                                            ?> 
                                        </section>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary" name="btn-submit" id="btn-submit">Submit</button>
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