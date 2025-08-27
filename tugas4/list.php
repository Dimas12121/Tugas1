<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "db_enervita");

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Jika ada request hapus data
if (isset($_GET['hapus'])) {
    $id = intval($_GET['hapus']);
    $sql_hapus = "DELETE FROM contact_messages WHERE id=$id";
    if (mysqli_query($koneksi, $sql_hapus)) {
        echo "<script>alert('Pesan berhasil dihapus!'); window.location='list.php';</script>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}

// Ambil data dari tabel
$sql = "SELECT * FROM contact_messages ORDER BY created_at DESC";
$result = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Pesan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
