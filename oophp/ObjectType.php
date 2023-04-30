<?php

class Buku{
    public $judul,
            $penulis,
            $tahun,
            $harga;

    public function __construct($judul, $penulis, $tahun, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahun = $tahun;
        $this->harga = $harga;
    }

    public function rincian() 
    {
        return "Judul Buku : $this->judul || Penulis : $this->penulis || Tahun : $this->tahun";
    }
}

class infoBuku{
    public function info(Buku $buku) {
        return "Buku ini ditulis oleh <b>$buku->penulis</b> terbit pada tahun $buku->tahun berjudul $buku->judul dan dijual dengan harga : <b>$buku->harga</b>.";
    }
}

$buku1 = new Buku("Filosofi Teras", "Henry Manampiring", 2018, "Rp80,000");
$buku2 = new Buku("Menjadi Manusia Menjadi Hamba", "Fahruddin Faiz", 2020, "Rp75,000");
$infoBuku1 = new infoBuku();

// echo $buku1->rincian();
// echo '<br>';
// echo $buku2->rincian();
// echo '<br>';
// echo $infoBuku1->info($buku1);
// echo '<br>';
// echo $infoBuku1->info($buku2);

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
            <li><?php echo $infoBuku1->info($buku1) ?></li>
            <li><?php echo $infoBuku1->info($buku2) ?></li>
        </ol>
    </body>
</html>