<?php
// Konfigurasi Database
$host = "localhost";
$user = "root";
$password = "";
$database ="curugcipeuteuy";

// Membuat koneksi
$conn = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
<?php

// Tangkap data dari form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_pemesanan = $_POST['nama_pemesanan'];
    $hp_pemesan = $_POST['hp_pemesan'];
    $waktu_wisata = $_POST['waktu_wisata'];
    $hari_wisata = $_POST['hari_wisata'];
    $paket_inap = isset($_POST['paket_inap']) ? 1 : 0;
    $paket_transport = isset($_POST['paket_transport']) ? 1 : 0;
    $paket_makan = isset($_POST['paket_makan']) ? 1 : 0;
    $jumlah_peserta = $_POST['jumlah_peserta'];
    $harga = $_POST['harga'];
    $total = $_POST['total'];

    // Query untuk menyimpan data
    $sql = "INSERT INTO pemesanan (nama_pemesanan, hp_pemesan, waktu_wisata, hari_wisata, paket_inap, paket_transport, paket_makan, jumlah_peserta, harga, total)
            VALUES ('$nama_pemesanan', '$hp_pemesan', '$waktu_wisata', $hari_wisata, $paket_inap, $paket_transport, $paket_makan, $jumlah_peserta, $harga, $total)";

    if (mysqli_query($conn, $sql)) {
        echo "Pemesanan berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Tutup koneksi
    mysqli_close($conn);
}
?>
