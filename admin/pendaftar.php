<?php include('../includes/db.php');

// Mengaktifkan error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Query untuk mengambil data dari tabel pendaftaran
$sql = "SELECT * FROM pendaftaran";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<style>
            table {
                width: 100%;
                border-collapse: collapse;
                margin: 20px 0;
                font-size: 18px;
                text-align: left;
            }
            th, td {
                padding: 12px;
                border-bottom: 1px solid #ddd;
            }
            th {
                background-color: #508C9B;
                color: #333;
            }
            tr:hover {
                background-color: #97b4c6;
            }
          </style>";
    echo "<table>";
    echo "<tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Tanggal</th>
            <th>Pilihan Ekstra</th>
          </tr>";
    
    // Menampilkan setiap baris data di dalam tabel
    while($row = $result->fetch_assoc()) {
    echo "<tr>

                <td>" . $row["nama"] . "</td>
                <td>" . $row["kelas"] . "</td>
                <td>" . $row["jurusan"] . "</td>
                <td>" . $row["tanggal"] . "</td>
                <td>" . $row["pilihan ekstra"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
