<?php
// panggil data semua mahasiswa

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

    <div class="contaner text-center my-4">
        <h1>Selamat datang di Jomok University</h1>
    </div>

    <div class="container my-4">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Daftar Mahasiswa</h2>
            <a href="create.php" class="btn btn-primary">Tambah Mahasiswa</a>
        </div>

        <div class="card">
            <div class="card-header bg-dark text-white">
                <h4 class="mb-0">Data Mahasiswa</h4>
            </div>
            <div class="card-body">
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Nilai Akhir</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- buat looping untuk  menampilkan data mahasiswa -->

                            <tr>
                                <td>
                                    <!-- isi nomor urut -->
                                </td>
                                <td>
                                    <p class="fw-bold mb-1">
                                        <!-- isi nama -->

                                    </p>
                                </td>
                                <td>
                                    <p class="text-muted mb-0">
                                        <!-- isi  nim di sini -->

                                    </p>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">
                                        <!-- isi dengan  nilai akhir mahasiswa -->

                                    </p>
                                </td>
                                <td>
                                    <!-- isi status disini -->
     
                                </td>
                                <td>
                                    <a href="" class="btn btn-link btn-sm btn-rounded">Edit</a>
                                    <a href="" class="btn btn-link btn-sm btn-rounded text-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                                </td>
                            </tr>
                    </tbody>
                </table>
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