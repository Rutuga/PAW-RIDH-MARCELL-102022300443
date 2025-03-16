<!-- BUAT FUNGSI EDIT DATA ( ketika data berhasil di tambahkan maka akan dialihkan ke halaman katalog buku) -->
 <!-- BUAT FUNGSI EDIT DATA ( ketika data berhasil di tambahkan maka akan dialihkan ke halaman katalog buku) -->

<?php
include 'connect.php';

// ==================1==================
// If statement untuk mengecek apakah form telah dikirim dengan metode POST
if (isset($_POST['update'])) {
    // Tangkap data yang dikirim dari form
    $id = $_GET['id'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun_terbit = $_POST['tahun_terbit'];

    // ==================2==================
    // Definisikan $query untuk mengupdate data buku berdasarkan id
    $query = "UPDATE tb_buku SET judul='$judul', penulis='$penulis', tahun_terbit='$tahun_terbit' WHERE id='$id'";

    // ==================3==================
    // Eksekusi query
    mysqli_query($conn, $query);

    // Jika query berhasil dijalankan, redirect ke katalog_buku.php
    if (mysqli_affected_rows($conn) > 0) {
        header("location: katalog_buku.php");
    } else {
        echo "<script>alert('Data gagal diperbarui');</script>";
    }
}
?>
