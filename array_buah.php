<?php
// cara penulisan array

// array indexing
$buah = ['alpukat','jeruk','mangga','pisang'];

// cara manggil array indexing
echo $buah[1];

// cetak jumlah buah
echo '<br/>Jumlah buah ' . count($buah);

// cetak seluruh buah
echo "<ol>";
foreach ($buah as $fruit){
    echo "<li> $fruit </li>";
}
echo "</ol>";

//=====================================================
// tambahkan buah baru
$buah[] = "durian";

//ubah buah index 1
$buah[1] = "apel";

// cetak seluruh buah
echo "<ol>";
foreach ($buah as $buas){
    echo "<li> $buas </li>";
}
echo "</ol>";
?>