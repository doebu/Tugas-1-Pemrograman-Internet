<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset = "UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
        <title>Nilai Mahasiswa pada Matakuliah Pemrograman Internet</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f0f0f0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }

            .container {
                background-color: #fff;
                padding: 40px;
                border-radius: 10px;
                box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
                max-width: 400px;
                width: 100%;
                text-align: center;
            }

            h2 {
                margin-top: 5px;
                margin-bottom: 30px;
                color: #333;
            }

            label {
                display: block;
                text-align: left;
                margin-bottom: 10px;
                font-weight: bold;
                color: #555;
            }

            input[type="text"] {
                width: calc(100% - 20px);
                padding: 10px;
                margin-bottom: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            input[type="number"] {
                width: calc(100% - 20px);
                padding: 10px;
                margin-bottom: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            input[type="submit"] {
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                width: 100%;
            }

            input[type="submit"]:hover {
                background-color: #45a049;
            }

            .result {
                margin-top: 20px;
                background-color: #e7ffe7;
                padding-top: 5px;
                padding-bottom: 20px;
                border-radius: 5px;
                border: 1px solid #4CAF50;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .result h3 {
                margin-bottom: 25px;
            }

            .result p {
                margin: 5px 0;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Nilai Mahasiswa pada Pemrograman Internet</h2>

            <form action="nilai_matakuliah.php" method="POST">
                <label for="nama"> Nama: </label>
                <input type="text" id="nama" name="nama" required pattern="[A-Za-z\s]+" title="Hanya boleh huruf" /> <br> <br>

                <label for="nim"> NIM: </label>
                <input type="text" id="nim" name="nim" required pattern="\d+" title="Hanya boleh angka" /> <br> <br>

                <label for="nilai"> Nilai: </label>
                <input type="number" id="nilai" name="nilai" required min="0" max="100" step="any" /> <br> <br>

                <input type="submit" value="Submit">
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nama = $_POST['nama'];
                $nim = $_POST['nim'];
                $nilai = $_POST['nilai'];

                $nilai_awal = (float)$nilai;

                if ($nilai_awal >= 80 && $nilai_awal <= 100) {
                    $grade = "A";
                } elseif ($nilai_awal >= 71 && $nilai_awal < 80) {
                    $grade = "B+";
                } elseif ($nilai_awal >= 65 && $nilai_awal < 71) {
                    $grade = "B";
                } elseif ($nilai_awal >= 60 && $nilai_awal < 65) {
                    $grade = "C+";
                } elseif ($nilai_awal >= 55 && $nilai_awal < 60) {
                    $grade = "C";
                } elseif ($nilai_awal >= 50 && $nilai_awal < 55) {
                    $grade = "D+";
                } elseif ($nilai_awal >= 40 && $nilai_awal < 50) {
                    $grade = "D";
                } else {
                    $grade = "E";
                }

                $nilai_format = number_format((float)$nilai_awal, 2, '.', '');

                echo "<div class='result'>";
                echo "<h3>Nilai Mahasiswa dalam huruf</h3>";
                echo "<p>Nama: " . htmlspecialchars($nama) . "</p>";
                echo "<p>NIM: " . htmlspecialchars($nim) . "</p>";
                echo "<p>Nilai: " . htmlspecialchars($nilai_format) . " (Grade: $grade)</p>";
                echo "</div>";
            }
            ?>
        </div>
    </body>
</html>
