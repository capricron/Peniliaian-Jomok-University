<?php

include 'database.php'; // Include koneksi database

if ($_POST) {

    // ambil semua variabel
   

    // nilai akhir berbobot tugas 30% uts 30% uas 40%

    // jika nilai akhir diatas atau sama dengan 75  maka statusnya lulus

    // buat query sql


    // jika  query berhasil maka redirect ke index.php

}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <h3>Tambah Data Mahasiswa</h3>
                <p class="blue-text">Masukkan data mahasiswa di bawah ini</p>
                <div class="card p-3">
                    <h5 class="text-center mb-4">Data Mahasiswa</h5>
                    <form class="form-card" action="" method="POST">
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">Nama<span class="text-danger"> *</span></label>
                                <input type="text" name="nama" placeholder="Masukkan nama" required>
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">NIM<span class="text-danger"> *</span></label>
                                <input type="number" name="nim" placeholder="Masukkan NIM" required>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-4 flex-column d-flex">
                                <label class="form-control-label px-3">Nilai Tugas<span class="text-danger"> *</span></label>
                                <input type="number" name="tugas" min="0" max="100" placeholder="0-100" required>
                            </div>
                            <div class="form-group col-sm-4 flex-column d-flex">
                                <label class="form-control-label px-3">Nilai UTS<span class="text-danger"> *</span></label>
                                <input type="number" name="uts" min="0" max="100" placeholder="0-100" required>
                            </div>
                            <div class="form-group col-sm-4 flex-column d-flex">
                                <label class="form-control-label px-3">Nilai UAS<span class="text-danger"> *</span></label>
                                <input type="number" name="uas" min="0" max="100" placeholder="0-100" required>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="form-group col-sm-4">
                                <button type="submit" class="btn btn-primary btn-block">Tambah Mahasiswa</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>