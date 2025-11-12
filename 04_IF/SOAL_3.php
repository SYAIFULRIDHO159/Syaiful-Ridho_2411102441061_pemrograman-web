<!DOCTYPE html>
<html>
<head>
    <title>Soal 3 - Hitung Upah Karyawan Berdasarkan Golongan</title>
</head>
<body>
    <h2>Hitung Upah Karyawan Berdasarkan Golongan</h2>
    <form method="post">
        <label for="jam_kerja">Jumlah Jam Kerja (dalam seminggu):</label>
        <input type="number" id="jam_kerja" name="jam_kerja" step="0.1" min="0" required>
        <br><br>
        <label for="golongan">Golongan:</label>
        <select id="golongan" name="golongan" required>
            <option value="">Pilih Golongan</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
        </select>
        <br><br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jam_kerja = $_POST['jam_kerja'];
        $golongan = $_POST['golongan'];
        $upah_lembur_per_jam = 3000;
        $jam_normal = 48;

        // Tentukan upah per jam berdasarkan golongan
        switch ($golongan) {
            case 'A':
                $upah_per_jam = 4000;
                break;
            case 'B':
                $upah_per_jam = 5000;
                break;
            case 'C':
                $upah_per_jam = 6000;
                break;
            case 'D':
                $upah_per_jam = 7500;
                break;
            default:
                $upah_per_jam = 0;
                break;
        }

        if ($jam_kerja <= $jam_normal) {
            $total_upah = $jam_kerja * $upah_per_jam;
        } else {
            $jam_lembur = $jam_kerja - $jam_normal;
            $total_upah = ($jam_normal * $upah_per_jam) + ($jam_lembur * $upah_lembur_per_jam);
        }

        echo "<p>Jumlah jam kerja: $jam_kerja jam</p>";
        echo "<p>Golongan: $golongan</p>";
        echo "<p>Total upah: Rp. " . number_format($total_upah, 0, ',', '.') . "</p>";
    }
    ?>
</body>
</html>