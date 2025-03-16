<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include("navbar.php"); // Menyertakan navbar ?>

    <div class="container mt-5">
        <h2 class="text-center">Tambah Buku</h2>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="create.php" method="POST">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul" required>
                                <label for="judul">Judul</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="penulis" id="penulis" placeholder="Masukkan Penulis" required>
                                <label for="penulis">Penulis</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="tahun_terbit" id="tahun_terbit" placeholder="Masukkan Tahun Terbit" required>
                                <label for="tahun_terbit">Tahun Terbit</label>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary w-100">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
