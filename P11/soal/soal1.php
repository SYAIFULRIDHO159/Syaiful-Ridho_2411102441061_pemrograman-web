<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Saldo Bank</title>
</head>
<body>
    <h2>Kalkulator Saldo Bank</h2>
    
    <form method="POST">
        <p>
            Saldo Awal (Rp): 
            <input type="number" name="saldo_awal" value="1000000" required>
        </p>
        
        <p>
            Biaya Admin per Bulan (Rp): 
            <input type="number" name="biaya_admin" value="9000" required>
        </p>
        
        <p>
            Jumlah Bulan (N): 
            <input type="number" name="jumlah_bulan" min="1" value="12" required>
        </p>
        
        <button type="submit">Hitung Saldo</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $saldo_awal = $_POST['saldo_awal'];
        $biaya_admin = $_POST['biaya_admin'];
        $n = $_POST['jumlah_bulan'];
        
        $saldo = $saldo_awal;
        
        echo "<hr>";
        echo "<h3>Hasil Perhitungan</h3>";
        echo "<p>Saldo Awal: Rp " . number_format($saldo_awal, 0, ',', '.') . "</p>";
        echo "<p>Periode: " . $n . " bulan</p>";
        echo "<hr>";
        
        echo "<h4>Rincian per Bulan:</h4>";
        echo "<table border='1' cellpadding='5'>";
        echo "<tr>
                <th>Bulan</th>
                <th>Saldo Awal</th>
                <th>Bunga (%)</th>
                <th>Bunga (Rp)</th>
                <th>Admin (Rp)</th>
                <th>Saldo Akhir</th>
              </tr>";
        
        for ($bulan = 1; $bulan <= $n; $bulan++) {
            $saldo_sebelum = $saldo;
            
            // Tentukan bunga
            if ($saldo < 1100000) {
                $bunga_persen = 3;
            } else {
                $bunga_persen = 4;
            }
            
            // Hitung bunga
            $bunga = ($bunga_persen / 100) * $saldo;
            
            // Tambah bunga
            $saldo += $bunga;
            
            // Kurangi admin
            $saldo -= $biaya_admin;
            
            echo "<tr>";
            echo "<td>" . $bulan . "</td>";
            echo "<td>Rp " . number_format($saldo_sebelum, 0, ',', '.') . "</td>";
            echo "<td>" . $bunga_persen . "%</td>";
            echo "<td>Rp " . number_format($bunga, 0, ',', '.') . "</td>";
            echo "<td>Rp " . number_format($biaya_admin, 0, ',', '.') . "</td>";
            echo "<td>Rp " . number_format($saldo, 0, ',', '.') . "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
        echo "<hr>";
        echo "<h3>Saldo Akhir Setelah " . $n . " Bulan: Rp " . number_format($saldo, 0, ',', '.') . "</h3>";
    }
    ?>
</body>
</html>