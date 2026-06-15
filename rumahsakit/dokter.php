<?php
// Menyertakan file database.php untuk menggunakan class Database
require_once 'database.php';

// Penerapan Inheritance: Class Dokter mewarisi properti dan method dari Class Database
class Dokter extends Database {
    
    // Method untuk mengambil seluruh data dari tabel dokter
    public function ambilSemuaDokter() {
        $sql = "SELECT * FROM dokter";
        
        // $this->conn diwarisi langsung dari parent class (Database)
        $result = $this->conn->query($sql);
        
        return $result;
    }
}

// Instansiasi objek dari class Dokter
$dokterBaru = new Dokter();
$daftarDokter = $dokterBaru->ambilSemuaDokter();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dokter Rumah Sakit</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f6f9;
        }
        h2 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #dbdbdb;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #28a745; /* Warna hijau untuk membedakan dengan halaman pasien */
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

    <h2>Daftar Seluruh Dokter</h2>

    <table>
        <thead>
            <tr>
                <th>ID Dokter</th>
                <th>Nama Dokter</th>
                <th>Spesialis</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            // Memeriksa apakah data berhasil diambil dan ada isinya
            if ($daftarDokter && $daftarDokter->num_rows > 0) {
                // Looping data dokter menggunakan fetch_assoc()
                while ($row = $daftarDokter->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['id_dokter']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['spesialis']) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3' style='text-align: center;'>Data dokter tidak ditemukan atau kosong.</td></tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>