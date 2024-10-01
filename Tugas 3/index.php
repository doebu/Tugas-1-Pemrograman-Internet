<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistem Kerja AC</title>
        <style>
            body {
                font-family: 'Roboto', sans-serif;
                background-color: #2d2d2d;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                color: #fff;
            }

            .container {
                background-color: #333;
                padding: 30px;
                border-radius: 15px;
                box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
                max-width: 500px;
                width: 100%;
                text-align: center;
            }

            h2 {
                margin-bottom: 20px;
                color: #00bfff;
            }

            label {
                display: block;
                text-align: left;
                margin-bottom: 8px;
                font-weight: bold;
                color: #00bfff;
            }

            input[type="number"] {
                width: calc(100% - 20px);
                padding: 10px;
                margin-bottom: 20px;
                border: 1px solid #444;
                border-radius: 5px;
                background-color: #555;
                color: #fff;
            }

            input[type="submit"] {
                background-color: #00bfff;
                color: black;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                width: 100%;
                font-size: 16px;
            }

            input[type="submit"]:hover {
                background-color: #0099cc;
            }

            .result {
                margin-top: 20px;
                background-color: #444;
                padding-top: 5px;
                padding-bottom: 20px;
                border-radius: 10px;
                border: 1px solid #00bfff;
                text-align: center;
            }

            .result h3 {
                color: #00bfff;
                margin-bottom: 15px;
            }

            .result p {
                margin: 15px 0;
                font-size: 16px;
            }

            .status-highlight {
                background-color: #00bfff;
                color: #000;
                padding: 5px 7px 5px;
                border-radius: 5px;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Sistem Kerja AC Berdasarkan Suhu & Kelembaban</h2>

            <form action="index.php" method="POST">
                <label for="suhu">Suhu (°C):</label>
                <input type="number" id="suhu" name="suhu" required min="0" max="50" step="any" /> <br>

                <label for="kelembaban">Kelembaban (%):</label>
                <input type="number" id="kelembaban" name="kelembaban" required min="0" max="100" step="any" /> <br>

                <input type="submit" value="Submit">
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $suhu = $_POST['suhu'];
                $kelembaban = $_POST['kelembaban'];

                $suhu_tinggi = 30;
                $kelembaban_tinggi = 70;

                if ($suhu >= $suhu_tinggi && $kelembaban >= $kelembaban_tinggi) {
                    $status_ac = "AC Menyala Berat";
                } elseif ($suhu >= $suhu_tinggi || $kelembaban >= $kelembaban_tinggi) {
                    $status_ac = "AC Menyala Sedang";
                } elseif ($suhu >= 20 && $kelembaban >= 50) {
                    $status_ac = "AC Menyala Rendah";
                } else {
                    $status_ac = "AC Mati";
                }

                echo "<div class='result'>";
                echo "<h3>Status Kerja AC</h3>";
                echo "<p>Suhu: " . htmlspecialchars($suhu) . "°C</p>";
                echo "<p>Kelembaban: " . htmlspecialchars($kelembaban) . "%</p>";
                echo "<p>Status AC: <span class='status-highlight'>" . htmlspecialchars($status_ac) . "</span></p>";
                echo "</div>";
            }
            ?>
        </div>
    </body>
</html>
