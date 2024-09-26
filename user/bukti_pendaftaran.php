<?php
require('../fpdf/fpdf.php');
include('../includes/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $tanggal = $_POST['tanggal'];
    $ekstra_id = $_POST['ekstra_id'];
    $nama_ekstra = $_POST['nama_ekstra'];

    $sql = "SELECT nama_ekstra FROM ekstra WHERE id='$ekstra_id'";
    $result = $conn->query($sql);
    $ekstra = $result->fetch_assoc()['nama_ekstra'];

    // Insert ke database
    $sql = "INSERT INTO pendaftaran (nama, kelas, jurusan, tanggal, ekstra_id, nama_ekstra) VALUES ('$nama', '$kelas', '$jurusan', '$tanggal', '$ekstra_id', '$nama_ekstra')";
    $conn->query($sql);

    // Buat PDF
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(40,10,'Bukti Pendaftaran Ekstrakurikuler');
    $pdf->Ln(10);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(40,10,'Nama: ' . $nama);
    $pdf->Ln(10);
    $pdf->Cell(40,10,'Kelas: ' . $kelas);
    $pdf->Ln(10);
    $pdf->Cell(40,10,'Jurusan: ' . $jurusan);
    $pdf->Ln(10);
    $pdf->Cell(40,10,'Tanggal: ' . $tanggal);
    $pdf->Ln(10);
    $pdf->Cell(40,10,'Ekstrakurikuler: ' . $ekstra);
    $pdf->Output();
    exit; // Exit to prevent further output
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], input[type="date"], select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
    </style>
    </head>
    <body>

    <div class="container">
    <h1>Pendaftaran Ekstrakurikuler</h1>
    <form method="POST">
        <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        </div>
        <div class="form-group">
        <label for="kelas">Kelas:</label>
        <input type="text" id="kelas" name="kelas" required>
        </div>
        <div class="form-group">
        <label for="jurusan">Jurusan:</label>
        <input type="text" id="jurusan" name="jurusan" required>
        </div>
        <div class="form-group">
        <label for="tanggal">Tanggal:</label>
        <input type="date" id="tanggal" name="tanggal" required>
        </div>
        <div class="form-group">
        <label for="nama_ekstra">Ekstrakurikuler:</label>
        <select id="nama_ekstra" name="nama_ekstra" required>
                <?php
                $ekstra_sql = "SELECT id, nama_ekstra FROM ekstra";
                $ekstra_result = $conn->query($ekstra_sql);
                while ($row = $ekstra_result->fetch_assoc()) {
                    echo "<option value='{$row['id']}'>{$row['nama_ekstra']}</option>";
                }
                ?>
</select>
</div>
<input type="submit" value="Daftar">
</form>
</div>
</body>
</html>
