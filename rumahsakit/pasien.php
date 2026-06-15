<?php
// Menyertakan file database.php yang sudah dibuat sebelumnya
require_once 'database.php';

// Penerapan Inheritance: Class Pasien mewarisi seluruh properti dan method dari Class Database
class Pasien extends Database {
    
    // Method untuk mengambil semua data dari tabel pasien
    public function ambilSemuaPasien() {
        $sql = "SELECT * FROM pasien";
        
        // $this->conn diperoleh langsung dari class Database karena propertinya bersifat public/inherited
        $result = $this->conn->query($sql);
        
        return $result;
    }
}

// Membuat objek (instansiasi) dari class Pasien
$pasienBaru = new Pasien();
$daftarPasien = $pasienBaru->ambilSemuaPasien();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien Rumah Sakit</title>
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
            background-color: #007bff;
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

    <h2>Daftar Seluruh Pasien</h2>

    <table>
        <thead>
            <tr>
                <th>No. RM</th>
                <th>Nama Pasien</th>
                <th>Alamat</th>
                <th>No. HP</th>
                <th>Jenis Kelamin</th>
                <th>Jenis Layanan</th>
                <th>Tanggal Lahir</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            // Memeriksa apakah data berhasil diambil dan jumlahnya lebih dari 0
            if ($daftarPasien && $daftarPasien->num_rows > 0) {
                // Looping data menggunakan fetch_assoc()
                while ($row = $daftarPasien->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['no_rm']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['alamat']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['nohp']) . "</td>";
                    // Mengubah inisial L/P menjadi teks yang lebih informatif
                    echo "<td>" . ($row['jeniskel'] == 'L' ? 'Laki-laki' : 'Perempuan') . "</td>";
                    echo "<td>" . htmlspecialchars($row['jenis_layanan']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['tgl_lahir']) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7' style='text-align: center;'>Data tidak ditemukan atau kosong.</td></tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>