<?php

class Buku
{
    public $judul,
        $penulis,
        $tahun,
        $harga,
        $jumlahHalaman;


    public function __construct($judul, $penulis, $tahun, $harga, $jumlahHalaman)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahun = $tahun;
        $this->harga = $harga;
        $this->jumlahHalaman = $jumlahHalaman;
    }

    public function rincian()
    {
        return "Judul Buku : $this->judul || Penulis : $this->penulis || Tahun : $this->tahun || Harga : $this->harga";
    }
}

class SelfImprovement extends Buku
{
    private $tipe = "Self Improvement";

    public function getInfo($asal)
    {
        return parent::rincian() . " || $this->tipe || $asal";
    }
}

class Komik extends Buku
{
    private $tipe = "Manga Fiksi";

    public function getInfo($asal)
    {
        return parent::rincian() . " || $this->tipe || $asal";
    }
}

$buku1 = new SelfImprovement("Filosofi Teras", "Henry Manampiring", 2018, "Rp80,000", 230);
$buku2 = new SelfImprovement("Menjadi Manusia Menjadi Hamba", "Fahruddin Faiz", 2020, "Rp75,000", 220);
$buku3 = new Komik("Naruto Shippuuden II", "Masashi Kishimoto", 2008, "Rp50,000", 200);

echo $buku1->getInfo("Indonesia");
echo "<br>";
echo $buku2->getInfo("Indonesia");
echo "<br>";
echo $buku3->getInfo("Jepang");



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Type</title>
</head>

<body>
    <h1>Buku Indonesia</h1>
    <ol>
    </ol>
</body>

</html>