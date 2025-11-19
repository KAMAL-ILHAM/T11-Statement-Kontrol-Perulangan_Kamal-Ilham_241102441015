<!DOCTYPE html>
<html>
<head>
    <title>Soal 1</title>
</head>
<body>
    <h2>Hitung Saldo Akhir Nasabah</h2>
    
    <form method="post" action=""> 
        Saldo Awal (Rp): <input type="number" name="saldo_awal" required><br><br>
        Jangka Waktu (Bulan): <input type="number" name="bulan" required><br><br>
        <input type="submit" name="hitung" value="Hitung Saldo Akhir">
    </form>
    
    <hr>

    <?php
    if (isset($_POST['hitung'])) {
        $saldo = (float)$_POST['saldo_awal'];
        $jangka_waktu = (int)$_POST['bulan'];
        $biaya_admin = 9000;

        echo "Saldo Awal: Rp " . number_format($saldo, 0, ',', '.') . "<br>";
        echo "Jangka Waktu: $jangka_waktu bulan<br><br>";
        echo "<strong>Rincian Perbulan:</strong><br>";

        for ($i = 1; $i <= $jangka_waktu; $i++) {
            $bunga_pa = ($saldo < 1100000) ? 0.03 : 0.04;
            
            $bunga_bulanan = ($saldo * $bunga_pa) / 12;

            $saldo = $saldo + $bunga_bulanan - $biaya_admin;

            echo "Bulan ke-$i: Rp " . number_format($saldo, 2, ',', '.') . "<br>";
        }

        echo "<hr><h3>Total Saldo Akhir: Rp " . number_format($saldo, 2, ',', '.') . "</h3>";
    }
    ?>
</body>
</html>