<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Gogle Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <!-- Own CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Ubah | Data Siswa | CRUD PHP</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-uppercase">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CRUD | PHP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
        </div>
    </nav>
    <!-- Close Navbar -->

    <!-- Container -->
    <div class="container">
        <div class="row my-3">
            <div class="col-md">
                <h2><i class="bi bi-pencil-square"></i>&nbsp;Ubah Data Siswa</h2>
            </div>
            <hr>
        </div>
        <div class="row mb-3">
            <div class="col-md">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="nis" class="form-label">Nis</label>
                        <input type="number" class="form-control w-50" id="nama" name="nis" autocomplete="off" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control w-50" id="nama" name="nama" placeholder="Nama Lengkap" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="tmpt_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control w-50" id="tmpt_lahir" name="tmpt_lahir" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control w-50" id="tgl_lahir" name="tgl_lahir" required>
                    </div>
                    <div class="mb-3">
                        <label>Jenis Kelamin</label>
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="jekel" id="Laki - Laki">
                                <label class="form-check-label" for="Laki - Laki">Laki - Laki</label>
                        </div>
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="jekel" id="Perempuan">
                                <label class="form-check-label" for="Perempuan">Perempuan</label>
                        </div>
                    <div class="mb-3">
                        <label>Jurusan</label>
                        <select class="form-select w-50" required name="jurusan">
                            <option selected disabled>----------------------------------------Pilih Jurusan>----------------------------------------option>
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                            <option value="Teknik Logistik">Teknik Logistik</option>
                            <option value="Teknik Permesinan">Teknik Permesinan</option>
                            <option value="Teknik Listrik">Teknik Listrik</option>
                            <option value="Teknik Pengelasan/Welding">Teknik Pengelasan/Welding</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail </label>
                        <input type="email" class="form-control w-50" id="email" name="email" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input class="form-control form-control-sm w-50" id="gambar" type="file name="gambar">
                    </div>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat </label>
                        <textarea class="form-control w-50" id="alamat" rows="5" required name="alamat"></textarea>
                    </div>
                    <hr>
                    <a href="index.php" class="btn btn-secondary">Kembali</a>
                    <button type="submit" name="ubah" class="btn btn-warning">Ubah</button>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Close Container -->

    <!-- Footer -->
    <div class="container-fluid bg-dark text-white">
        <div class="row">
            <div class="col-md-6">
                <h4 class="text-uppercase fw-bold">About</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita maiores iure nemo excepturi unde nisi voluptatum quam quas similique harum! Inventore ab nam, atque veniam quas voluptas repudiandae explicabo omnis.</p>
            </div>
            <div class="col-md-6 text-center link">
                <h4 class="text-uppercase fw-bold">Link Account</h4>
                <a href="https://web.facebook.com/aaa.5/" target="_blank"><i class="bi bi-facebook fs-2"></i></a>
                <a href="https://github.com/aaa24" target="_blank"><i class="bi bi-github fs-2"></i></a>
                <a href="https://www.instagram.com/aaa_/" target="_blank"><i class="bi bi-instagram fs-2"></i></a>
                <a href="https://twitter.com/aaa_" target="_blank"><i class="bi bi-twitter fs-2"></i></a>
            </div>
        </div>

        <footer class="text-center style=padding: 5px;">
            <p>Created with <i class="bi bi-suit-heart-fill" style="color: red;"></i> by <u class="fw-bold">Salwa Aliyah Ramadhani</u></p>
        </footer>
    </div>

    <!-- Close Footer -->

    <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>