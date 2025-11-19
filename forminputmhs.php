<!DOCTYPE html>
<html>

<head>
    <title>Input Siswa</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #F5F5DC;
        margin: 20px;
        line-height: 1.6;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        color: #333;
        border-bottom: 2px solid #4CAF50;
        padding-bottom: 10px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: inline-block;
        width: 120px;
        font-weight: bold;
        vertical-align: top;
    }

    input[type="text"],
    select {
        width: 250px;
        padding: 5px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    .radio-group,
    .checkbox-group {
        display: inline-block;
        margin-left: 10px;
    }

    .radio-group label,
    .checkbox-group label {
        width: auto;
        font-weight: normal;
        margin-right: 15px;
    }

    .button-group {
        margin-top: 20px;
        text-align: center;
    }

    input[type="submit"],
    input[type="reset"] {
        background-color: #4CAF50;
        color: white;
        padding: 8px 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin: 0 5px;
    }

    input[type="reset"] {
        background-color: #f44336;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    input[type="reset"]:hover {
        background-color: #da190b;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2>PENGELOLAAN DATA SISWA</h2>

        <form action="tampilmhs.php" method="post">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" size="25" maxlength="50" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" size="25" maxlength="50">
            </div>

            <div class="form-group">
                <label>Jenis Kelamin:</label>
                <div class="radio-group">
                    <input type="radio" id="laki" name="jeniskel" value="Laki-Laki" required>
                    <label for="laki">Laki-Laki</label>

                    <input type="radio" id="perempuan" name="jeniskel" value="Perempuan">
                    <label for="perempuan">Perempuan</label>
                </div>
            </div>

            <div class="form-group">
                <label for="pekerjaan">Pekerjaan:</label>
                <select id="pekerjaan" name="pekerjaan" required>
                    <option value="">- Pilih -</option>
                    <option value="Pelajar">Pelajar</option>
                    <option value="Karyawan">Karyawan</option>
                    <option value="Wirausaha">Wirausaha</option>
                    <option value="Lain-Lain">Lain-Lain</option>
                </select>
            </div>

            <div class="form-group">
                <label>Hobi:</label>
                <div class="checkbox-group">
                    <!-- PERUBAHAN PENTING: Gunakan array untuk hobi -->
                    <input type="checkbox" id="hobi1" name="hobi[]" value="Olahraga">
                    <label for="hobi1">Olahraga</label>

                    <input type="checkbox" id="hobi2" name="hobi[]" value="Music">
                    <label for="hobi2">Music</label>

                    <input type="checkbox" id="hobi3" name="hobi[]" value="Membaca">
                    <label for="hobi3">Membaca</label>
                </div>
            </div>

            <div class="button-group">
                <input type="submit" value="Kirim">
                <input type="reset" value="Batal">
            </div>
        </form>
    </div>
</body>

</html>