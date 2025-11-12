<!DOCTYPE html>
<html>
<head>
    <title>Soal 2 - Hitung Upah Karyawan</title>
</head>
<body>
    <h2>Hitung Upah Karyawan</h2>
    <form method="post">
        <label for="jam_kerja">Jumlah Jam Kerja (dalam seminggu):</label>
        <input type="number" id="jam_kerja" name="jam_kerja" step="0.1" min="0" required>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jam_kerja = $_POST['jam_kerja'];
        $upah_per_jam = 2000;
        $upah_lembur_per_jam = 3000;
        $jam_normal = 48;
        $total_upah = 0;

        if ($jam_kerja <= $jam_normal) {
            $total_upah = $jam_kerja * $upah_per_jam;
        } else {
            $jam_lembur = $jam_kerja - $jam_normal;
            $total_upah = ($jam_normal * $upah_per_jam) + ($jam_lembur * $upah_lembur_per_jam);
        }

        echo "<p>Jumlah jam kerja: $jam_kerja jam</p>";
        echo "<p>Total upah: Rp. " . number_format($total_upah, 0, ',', '.') . "</p>";
    }
    ?>
</body>
</html>