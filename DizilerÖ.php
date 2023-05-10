<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>diziler1</title>
</head>
<body>

<?php
$ogrenci_bilgi = array(
    array(
        "adi" => "Havvanur",
        "soyadi" => "Yıldız",
        "Yas" => "20",
        "memleketi" => "İzmir",
        "Bolumu" => "Bilgisayar Programcılığı",
        "Sınıf" => "2.Sınıf",
        "Dersler" => array(
        "WEB  Programcılığı", 
        "Veritabanı", 
        "Mobil Uygulama")

 ) )
?>
 <div class="container d-flex justify-content-center">
     <div class="row">
         <div class="col-md-12 mt-5">

             <table class="table">
                 <thead>
                     <tr>
                         <th>adi</th>
                         <th>soyadi</th>
                         <th>Yas</th>
                         <th>memleketi</th>
                         <th>Bolumu</th>
                         <th>Sinif</th>
                         <th>Dersler</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php
                     foreach ($ogrenci_bilgi as $ogrenci) :?>
                             <td><?php echo $ogrenci['adi'] ?></td>
                             <td><?php echo $ogrenci['soyadi'] ?></td>
                             <td><?php echo $ogrenci['Yas'] ?></td>
                             <td><?php echo $ogrenci['memleketi'] ?></td>
                             <td><?php echo $ogrenci['Bölümü'] ?></td>
                             <td><?php echo $ogrenci['Dersler'] ?></td>
                             <td><?php echo $ogrenci['Sinif'] ?></tb>
                         </tr>
                    
                   <?php endforeach; ?>
                 </tbody>
             </table>
            
echo .count

             echo "[isim] $ogrenci_bilgi[sayisim] isimli öğrenci echo $ogrenci_bilgi[bolum] bölümünde
             okumaktadır. Öğreninin ".                      $ogrenci_bilgi["dersler"][0]. " " .
             $ogrenci_bilgi["dersler"][1]. " " .
             $ogrenci_bilgi["dersler"][2]. "dersleri bulunmaktadır. " .

         </div>
     </div>
 </div>
</body>
</html>