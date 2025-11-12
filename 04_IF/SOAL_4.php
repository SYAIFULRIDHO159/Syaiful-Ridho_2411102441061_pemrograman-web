<!DOCTYPE html>
<html>
<head>
    <title>Soal 4 - Jumlah Hari dalam Bulan Ini</title>
</head>
<body>
    <h2>Jumlah Hari dalam Bulan Ini</h2>

    <?php
    $bulan = date('n'); // 1-12
    $tahun = date('Y'); // Tahun sekarang

    switch ($bulan) {
        case 1: case 3: case 5: case 7: case 8: case 10: case 12:
            $jumlah_hari = 31;
            break;
        case 4: case 6: case 9: case 11:
            $jumlah_hari = 30;
            break;
        case 2:
            // Cek tahun kabisat
            if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
                $jumlah_hari = 29;
            } else {
                $jumlah_hari = 28;
            }
            break;
        default:
            $jumlah_hari = 0;
            break;
    }

    $nama_bulan = date('F', mktime(0, 0, 0, $bulan, 10)); // Mendapatkan nama bulan

    echo "<p>Bulan: $nama_bulan $tahun</p>";
    echo "<p>Jumlah hari: $jumlah_hari</p>";
    ?>
</body>
</html>