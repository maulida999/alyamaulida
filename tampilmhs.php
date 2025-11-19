<!DOCTYPE html>
<html>

<head>
    <title>Data Siswa</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #F5F5DC;
        margin: 20px;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    .back-button {
        display: inline-block;
        padding: 10px 15px;
        background-color: #4CAF50;
        color: white;
        text-decoration: none;
        border-radius: 4px;
    }

    .back-button:hover {
        background-color: #45a049;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2>DATA SISWA</h2>

        <?php
        // Fungsi untuk membersihkan input
        function bersihkan($data) {
            if (!empty($data)) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
            }
            return $data;
        }

        // Ambil dan bersihkan data
        $nama = isset($_POST['nama']) ? bersihkan($_POST['nama']) : '';
        $alamat = isset($_POST['alamat']) ? bersihkan($_POST['alamat']) : '';
        $jeniskel = isset($_POST['jeniskel']) ? bersihkan($_POST['jeniskel']) : '';
        $pekerjaan = isset($_POST['pekerjaan']) ? bersihkan($_POST['pekerjaan']) : '';
        
        // PERBAIKAN PENTING: Handle array hobi dengan benar
        $hobi_text = 'Tidak ada hobi yang dipilih';
        
        if (isset($_POST['hobi']) && is_array($_POST['hobi'])) {
            $hobi_terpilih = [];
            foreach ($_POST['hobi'] as $hobi) {
                $hobi_terpilih[] = bersihkan($hobi);
            }
            if (!empty($hobi_terpilih)) {
                $hobi_text = implode(', ', $hobi_terpilih);
            }
        }
        ?>

        <table>
            <tr>
                <th colspan="2">INFORMASI SISWA</th>
            </tr>
            <tr>
                <td width="30%"><strong>Nama</strong></td>
                <td><?php echo $nama; ?></td>
            </tr>
            <tr>
                <td><strong>Alamat</strong></td>
                <td><?php echo $alamat; ?></td>
            </tr>
            <tr>
                <td><strong>Jenis Kelamin</strong></td>
                <td><?php echo $jeniskel; ?></td>
            </tr>
            <tr>
                <td><strong>Pekerjaan</strong></td>
                <td><?php echo $pekerjaan; ?></td>
            </tr>
            <tr>
                <td><strong>Hobi</strong></td>
                <td><?php echo $hobi_text; ?></td>
            </tr>
        </table>

        <a href="forminputmhs.php" class="back-button">INPUT DATA LAGI</a>
    </div>
</body>

</html>