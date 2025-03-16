<?php
include 'connect.php';

// ==================1==================
// Periksa apakah koneksi berhasil
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Definisikan query untuk mengambil semua data buku
$query = "SELECT * FROM tb_buku";
$result = mysqli_query($conn, $query);

// Periksa apakah query berhasil
if (!$result) {
    die("Query gagal: " . mysqli_error($conn));
}

$bukus = [];
while ($row = mysqli_fetch_assoc($result)) {
    $bukus[] = $row;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container mt-5">
        <h1>Katalog Buku</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($bukus)) : ?>
                    <tr>
                        <td colspan="5" class="text-center">TIDAK ADA DATA DALAM KATALOG</td>
                    </tr>
                <?php else : ?>
                    <?php $no = 1; ?>
                    <?php foreach ($bukus as $buku) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= htmlspecialchars($buku['judul']); ?></td>
                            <td><?= htmlspecialchars($buku['penulis']); ?></td>
                            <td><?= htmlspecialchars($buku['tahun']); ?></td>
                            <td>
                                <a href="edit_buku.php?id=<?= $buku['id'] ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?id=<?= $buku['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
