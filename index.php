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

echo "Kucing <br>";
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

echo "Anjing <br>";
echo "Nama : $anjing->Nama <br>";
echo "Jumlah_Kaki : $anjing->Jumlah_Kaki <br>";
echo "Bisa_Terbang : $anjing->Bisa_Terbang <br>";
echo "Suara : $anjing->Suara <br>";
echo "<hr>";

class Elang{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}

$elang = new Elang;
$elang->Nama = "Gala";
$elang->Jumlah_Kaki = "2";
$elang->Bisa_Terbang ="Ya";
$elang->Suara = "miiippp";

echo "Elang <br>";
echo "Nama : $elang->Nama <br>";
echo "Jumlah_kaki : $elang->Jumlah_Kaki <br>";
echo "Bisa_Terbang : $elang->Bisa_Terbang <br>";
echo "Suara : $elang->Suara <br>";
echo "<hr>";