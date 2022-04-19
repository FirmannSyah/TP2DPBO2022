<?php

include("includes/DB.php");
include("includes/Pengurus.class.php");

$pengurus = new Pengurus;

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
                <a class="nav-link text-white fw-bold lead" href="TambahPengurus.php">Tambah Pengurus</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white lead" href="DaftarDivisi.php">Daftar Divisi</a>
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
            <div class="row">
                <h3>Tambah Pengurus</h3>
            </div>
            <div class="row">
                <div class="px-5">
                    <div class="p-5">
                        <form action="TambahPengurus.php" method="post">
                            <div class="mb-3">
                                <label for="nim" class="form-label">Nim</label>
                                <input type="text" class="form-control" id="nim" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="semester" class="form-label">Semester</label>
                                <input type="number" min="1" max="18" class="form-control" id="semester" required>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">foto</label>
                                <input class="form-control" type="file" id="formFile" required>
                            </div>
                            <div class="mb-3">
                            <label for="bidangDivisi" class="form-label">Bidang Divisi</label>
                                <select class="form-select" aria-label="Bidang Divisi" id="bidangDivisi" name="bidangDivisi" required>
                                    <option selected disabled>Open this select menu</option>
                                    DATA_BIDANG_DIVISI
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>