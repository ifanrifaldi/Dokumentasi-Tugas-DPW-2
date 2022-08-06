<?php

echo "Animal<br>";
echo "<hr>";

class Kucing{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}

$kucing = new Kucing;
$kucing->nama = "Dara";
$kucing->jumlah_kaki = "4";
$kucing->bisa_terbang = "Tidak";
$kucing->suara = "Meong";

echo "kucing <br>";
echo "Nama : $kucing->nama <br>";
echo "Jumlah_Kaki : $kucing->jumlah_kaki <br>";
echo "Bisa_Terbang : $kucing->bisa_terbang <br>";
echo "Suara : $kucing->suara <br>";
echo "<hr>"; 

class Anjing{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}

$anjing = new anjing;
$anjing->Nama = "Marco";
$anjing->Jumlah_Kaki = "4";
$anjing->Bisa_Terbang ="tidak";
$anjing->Suara = "Guk-guk";

echo "anjing <br>";
echo "Nama : $anjing->Nama <br>";
echo "jumlah_kaki : $anjing->Jumlah_Kaki <br>";
echo "bisa_terbang : $anjing->Bisa_Terbang <br>";
echo "suara : $anjing->Suara <br>";
echo "<hr>";