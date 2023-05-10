<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>    While Döngüsü       </h3>
    <?php
    $basla=1;
    while ($basla <= 10) {
        echo "Tur:$basla <br>";
        if ($basla ==5) {
            echo "5 bulundu döngüden çıkılyor.";
            break;
        }
        $basla++;
    }
    ?>

<h3>    Do While Döngüsü       </h3>
<?php
do {
    echo "Tur:$basla <br>";
    if ($basla==5) {
        echo "5 bulundu döngüden çıkılyor. <br>";
        break;
    }
    $basla++;
} while ($basla <= 10);
echo "Başlanın değeri:$basla";
?>


<h3>    For Döngüsü      </h3>
<?php
for ($i = 1; $i<=10; $i++) { 
    echo"FOR tur:$i <br>";
    if ($i==5) {
        echo "5 bulundu döngüden çıkılyor.";
        break;
    }
}
?>

<h3>    foreach Döngüsü      </h3>
<?php
$renkler=["mavi","sarı","yeşil","mor","pembe"];
foreach ($renkler as $renk) {
    echo  "$renk <br>";
}
echo "<br>";
foreach ($renkler as $key => $renkler) {
    echo "$key > $renkler<br>";
}
?>

<h3>    Çok Boyutlu Foreach Döngüsü  </h3>
<?php
    $ogrenci_bilgi = array(
        array(
            "id" => 1,
            "adi" => "Ahmet",
            "soyadi" => "Yenilmez",
            "gsm" => "056546564",
            "cinsiyet" => "erkek",
            "yas" => "30",
            "Dersler" => array(
                "WEB  Programcılığı", 
                "Veritabanı", 
                "Mobil Uygulama")

            ),
        "numara" =>123
    );
    echo"<pre>";
    print_r($ogrenci_bilgi);
    echo"</pre>";

    echo(is_array($ogrenci_bilgi)==1)?"/$ogrenciBilgi bir dizidir":"\$ogreciBilgi.";

    foreach ($ogreciBilgi as $ogrencikey => $ogrecis) {
        if (is_array($ogreci)) {
         foreach ($ogre as $key => $value) {
         }
        }
    }
?>
<!--continue döngünün bir bölümünün atlanarak devam edilmesini sağlar-->


<h3>    While Döngüsü (continue)       </h3>
    <?php
    $basla=0;
    while ($basla <= 10) {
        $basla++;
        if ($basla>3 and $basla<8) {
            continue;
        }
        echo "WhileTur:$basla <br>";
    }
    echo"<br>Başla değşkeninin değeri:$basla";
    ?>


<h3>    For Döngüsü (continue)       </h3>
<?php
for ($i = 0; $i <= 5; ++$i) {
    if ($i == 2)
        continue;
   print "$i<br>" ;
}

?>
</body>
</html>