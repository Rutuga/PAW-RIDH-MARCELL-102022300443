<?php
include("koneksi.php"); // Pastikan koneksi database ada

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = isset($_POST['judul']) ? $_POST['judul'] : "";
    $penulis = isset($_POST['penulis']) ? $_POST['penulis'] : "";
    $tahun_terbit = isset($_POST['tahun_terbit']) ? $_POST['tahun_terbit'] : "";

    // Debugging: Cek apakah data terkirim
    echo "Judul: " . $judul . "<br>";
    echo "Penulis: " . $penulis . "<br>";
    echo "Tahun Terbit: " . $tahun_terbit . "<br>";

    // Pastikan tidak ada field yang kosong
    if (!empty($judul) && !empty($penulis) && !empty($tahun_terbit)) {
        $query = "INSERT INTO buku (judul, penulis, tahun_terbit) VALUES ('$judul', '$penulis', '$tahun_terbit')";

        if (mysqli_query($conn, $query)) {
            echo "Buku berhasil ditambahkan!";
            header("Location: katalog.php"); // Redirect ke katalog
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Data tidak boleh kosong!";
    }
}
?>
