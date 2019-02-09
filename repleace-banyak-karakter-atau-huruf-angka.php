<?php
$penamaan = First Sec0nd 4nd with you;
$penamaanhapus = array('0', '4'); // masukan kata atau karakter yang ingin dihapus
$penamaanhapus2 = array("o", "a"); // Mengubahnya menjadi karakter berikut, tiap kata harus bersesuaian misal 0 cocok dengan o, dan seterusnya.
$penamaanhapus3 = str_replace($penamaanhapus, $penamaanhapus2,$penamaan);
echo $penamaanhapus3;
?
