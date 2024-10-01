<?php
    $siswa = [
        ["nama" => "Andi", "matematika" => 85, "bahasa_inggris" => 70, "ipa" => 80],
        ["nama" => "Budi", "matematika" => 60, "bahasa_inggris" => 50, "ipa" => 65],
        ["nama" => "Cici", "matematika" => 75, "bahasa_inggris" => 80, "ipa" => 70],
        ["nama" => "Dodi", "matematika" => 95, "bahasa_inggris" => 85, "ipa" => 90],
        ["nama" => "Eka", "matematika" => 50, "bahasa_inggris" => 60, "ipa" => 55],
    ];

    function hitung_rata_rata($nilai) {
        $nilai_rata_rata = array_sum($nilai) / count($nilai);
        $nilai_format = number_format($nilai_rata_rata, 2, '.', '');
        return $nilai_format;
    }

    function data_kelulusan($siswa, &$jumlah_lulus, &$jumlah_tidak_lulus) {
        $hasil = [];
        $jumlah_lulus = 0;
        $jumlah_tidak_lulus = 0;

        foreach ($siswa as $data) {
            $nilai = [$data['matematika'], $data['bahasa_inggris'], $data['ipa']];
            $rata_rata = hitung_rata_rata($nilai);
            $status = $rata_rata >= 75 ? "Lulus" : "Tidak Lulus";

            if ($status == "Lulus") {
                $jumlah_lulus++;
            } else {
                $jumlah_tidak_lulus++;
            }

            $perbaikan_mata_pelajaran = null;
            if ($status == "Tidak Lulus") {
                $nilai_terendah = min($nilai);
                if ($nilai_terendah == $data['matematika']) {
                    $perbaikan_mata_pelajaran = "Matematika";
                } elseif ($nilai_terendah == $data['bahasa_inggris']) {
                    $perbaikan_mata_pelajaran = "Bahasa Inggris";
                } else {
                    $perbaikan_mata_pelajaran = "IPA";
                }
            }

            $hasil[] = [
                'nama' => $data['nama'],
                'rata_rata' => $rata_rata,
                'status' => $status,
                'perbaikan' => $perbaikan_mata_pelajaran
            ];
        }
        return $hasil;
    }
    $hasil_siswa = data_kelulusan($siswa, $jumlah_lulus, $jumlah_tidak_lulus);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelulusan Siswa/i</title>
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
            max-width: 800px;
            width: 100%;
        }
        
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            margin-top: 5px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 30px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px 15px;
            text-align: center;
        }

        th {
            background-color: #a0cac8;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }

        .highlight {
            font-weight: bold;
            color: red;
        }
    </style>
</head>

<body>
    <div class = "container">
        <h1>Daftar Kelulusan Siswa/i</h1>

        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Rata-rata</th>
                    <th>Status Kelulusan</th>
                    <th>Mata Pelajaran yang Harus Diperbaiki</th>
                </tr>
            </thead>
            
            <tbody>
                <?php foreach ($hasil_siswa as $data): ?>

                <tr>
                    <td><?= $data['nama']; ?></td>
                    <td><?= $data['rata_rata']; ?></td>
                    <td><?= $data['status']; ?></td>
                    <td><?= $data['status'] == "Tidak Lulus" ? $data['perbaikan'] : "-"; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <table>
            <thead>
                <tr>
                    <th>Siswa/i Lulus</th>
                    <th>Siswa/i Tidak Lulus</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><?= $jumlah_lulus; ?> Orang</td>
                    <td><?= $jumlah_tidak_lulus; ?> Orang</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>