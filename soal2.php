<?php
echo "<h3>Mencari Pasangan x, y, z untuk persamaan x + y + z = 25</h3>";
echo "Syarat: x, y, z adalah bilangan asli (dimulai dari 1)<br><br>";

$jumlah_kombinasi = 0;
$target = 25;

for ($x = 1; $x <= $target; $x++) 
{
    for ($y = 1; $y <= $target; $y++) 
    {
        for ($z = 1; $z <= $target; $z++) 
        {
            if (($x + $y + $z) == $target) 
            {
                echo "x = $x, y = $y, z = $z <br>";
                $jumlah_kombinasi++; 
            }
        }
    }
}

echo "<br><strong>Banyaknya pasangan yang memenuhi persamaan tersebut adalah: $jumlah_kombinasi pasang.</strong>";
?>