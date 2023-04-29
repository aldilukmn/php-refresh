<?php

$array = ["a", "l", "d", "i", "l", "u", "k", "m", "a", "n"];


function nama($array)
{
    $total = 0;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] === "a") {
            $total++;
        }
    }
    return $total;
}

// var_dump(nama($array));


function penjumlahan($x, $y)
{
    return $x + $y;
}

function pengurangan($x, $y)
{
    return $x - $y;
}

function pembagian($x, $y)
{
    return $x / $y;
}

function perkalian($x, $y)
{
    return $x * $y;
}

function name($nD, $nB)
{
    return $nD . " " . $nB;
}

echo penjumlahan(1, 42);
echo "<br>";
echo pengurangan(49, 129);
echo "<br>";
echo pembagian(20, 2);
echo "<br>";
echo perkalian(20, 20);
echo "<br>";
echo name("Aldi Lukman", "Maulana Latief");
var_dump(name("Aldi Lukman", "Maulana Latief"));

echo "<hr>";

function conds($num)
{
    if ($num >= 90 && $num <= 100) {
        echo "A / Sangat Baik";
    } elseif ($num < 90 && $num >= 75) {
        echo "B / Baik";
    } elseif ($num < 75 && $num >= 50) {
        echo "C / Cukup";
    } elseif ($num < 50 && $num >= 25) {
        echo "D / Kurang";
    } else {
        echo "E / Coba lagi!";
    }
};

echo "Nilai anda adalah ";

echo "<hr>";

$countries = ["Indonesia", "Malaysia", "Thailand", "Singapura", "Filipina"];
sort($countries);

$i = 1;

foreach ($countries as $countrie) {
    echo $i . ". " . $countrie . "<br>";
    $i++;
}

echo "<hr>";

echo date("l, d-M-Y", time() + (100 * 24 * 60 * 60));

echo "<br>";

function dayBirth($m, $d, $y)
{
    return date('l', mktime(0, 0, 0, $m, $d, $y));
}

echo dayBirth(5, 19, 1999);

echo "<br>";

if (isset($_POST['submit'])) {
    $date = $_POST['date'];
    $mount = $_POST['mount'];
    $year = $_POST['year'];
    echo date("l", mktime(0, 0, 0, $mount, $date, $year));
}

echo "<br>";

$name = "aldi lukman maulana latief";
$arr_name = str_split($name);

function an($an)
{
    $i = 0;
    foreach ($an as $n) {
        if ($n === "m") {
            $i++;
        }
    }
    return $i;
}

echo an($arr_name);

?>

<html>

<head>
    <title>PHP Native</title>
</head>

<body>
    <h1>
        <?php
        echo "jumlah a dalam array tersebut adalah $array[0]";
        ?>
    </h1>
    <table border="1" cellspacing="0" cellpadding="20">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <tr>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td <?php echo $i % 2 === 0 ? 'style="background-color: red; color: white;"' : '' ?>><?php echo "$i, $j" ?></td>
                <?php endfor ?>
            </tr>
        <?php endfor ?>
    </table>
    <hr>
    <form method="POST">
        <label for="date">Tanggal : </label>
        <input type="text" id="date" name="date">
        <br>
        <label for="mount">Bulan : </label>
        <input type="text" id="mount" name="mount">
        <br>
        <label for="year">Tahun : </label>
        <input type="text" id="year" name="year">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>