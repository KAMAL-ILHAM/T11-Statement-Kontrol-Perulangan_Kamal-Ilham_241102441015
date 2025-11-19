<!DOCTYPE html>
<html>
<head>
    <title>Soal 1: Hitung Saldo Akhir</title>
</head>
<body>
    <h3>Hitung Saldo Akhir Nasabah</h3>
    <form method="post" action="">
        Saldo Awal (Rp): <input type="number" name="saldo_awal" value="1000000" required><br><br>
        Jangka Waktu (Bulan): <input type="number" name="bulan" value="1" required><br><br>
        <input type="submit" name="hitung" value="Hitung">
    </form>
    <hr>

    <?php
    if (isset($_POST['hitung'])) {
        $saldo = $_POST['saldo_awal'];
        $jangka_waktu = $_POST['bulan'];
        $biaya_admin = 9000;

        echo "Saldo Awal: Rp " . number_format($saldo, 0, ',', '.') . "<br>";
        echo "Jangka Waktu: $jangka_waktu bulan<br><br>";
        echo "<strong>Rincian Perbulan:</strong><br>";

        for ($i = 1; $i <= $jangka_waktu; $i++) {
            if ($saldo < 1100000) {
                $bunga_pa = 0.03;
            } else {
                $bunga_pa = 0.04; 
            }

            $bunga_bulanan = ($saldo * $bunga_pa) / 12;

            $saldo = $saldo + $bunga_bulanan;

            // 4.  biaya administrasi
            $saldo = $saldo - $biaya_admin;

            echo "Bulan ke-$i: Rp " . number_format($saldo, 2, ',', '.') . "<br>";
        }

        echo "<hr><h3>Total Saldo Akhir: Rp " . number_format($saldo, 2, ',', '.') . "</h3>";
    }
    ?>
</body>
</html>