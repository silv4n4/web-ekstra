<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <style>
        /* Mengatur ukuran dan margin form */
        form {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #7fb3d5;
            border-radius: 8px;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #566573;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"], input[type="date"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #2471a3;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #85929e;
        }
</style>
</head>
<body>

    <form action="" method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" required>

        <label>Kelas:</label>
        <input type="text" name="kelas" required>

        <label>Jurusan:</label>
        <input type="text" name="jurusan" required>

        <label>Tanggal:</label>
        <input type="date" name="tanggal" required>

        <label>Ekstrakurikuler:</label>
        <select name="ekstra_id" required>
            <option value=""></option>
            <option value="1">Band</option>
            <option value="2">Basket</option>
            <option value="3">Bola Voly</option>
            <option value="4">Bulutangkis</option>
            <option value="5">English Club</option>
            <option value="6">Hadroh</option>
            <option value="7">Karawitan</option>
            <option value="8">Paduan Suara</option>
            <option value="9">Pencinta Alam</option>
            <option value="10">Tonti</option>
            <option value="11">PMR</option>
            <option value="12">Marching Band</option>
            <option value="13">Pramuka</option>
            <option value="14">Bela Diri</option>
            <option value="15">Renang</option>
</select>

<button type="submit" name="submit">Daftar</button>
</form>

<?php
// Menghubungkan ke database

// Menghubungkan ke database
include('../includes/db.php');

if (isset($_POST['submit'])) {
    // Mengambil data dari form
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $tanggal = $_POST['tanggal'];
    $ekstra_id = $_POST['ekstra_id'];  // Mengambil ID ekstra

    // Cek apakah ekstra_id ada di tabel ekstra
    $check_stmt = $conn->prepare("SELECT id FROM ekstra WHERE id = ?");
    $check_stmt->bind_param("i", $ekstra_id);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_rows > 0) {
        // Jika ekstra_id valid, lanjutkan dengan insert
        $stmt = $conn->prepare("INSERT INTO pendaftaran (nama, kelas, jurusan, tanggal, `pilihan ekstra`) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssi", $nama, $kelas, $jurusan, $tanggal, $ekstra_id);

        if ($stmt->execute()) {
            header("Location: thank_you.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        // Menutup koneksi
        $stmt->close();
    } else {
     
    }

    // Menutup koneksi untuk pengecekan
    $check_stmt->close();
}

$conn->close();
?>
</body>
</html>
