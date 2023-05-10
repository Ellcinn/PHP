<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>php</title>
</head>

<body>
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
        array(
            "id" => 2,
            "adi" => "Ayşe",
            "soyadi" => "Korkmaz",
            "gsm" => "054856518654",
            "cinsiyet" => "kadın",
            "yas" => "42",
            "Dersler" => array(
                "WEB  Programcılığı", 
                "Veritabanı", 
                "Mobil Uygulama")
        ),
        array(
            "id" => 3,
            "adi" => "Ersin",
            "soyadi" => "Gorgulu",
            "gsm" => "0566999454",
            "cinsiyet" => "erkek",
            "yas" => "25",
            "Dersler" => array(
                "WEB  Programcılığı", 
                "Veritabanı", 
                "Mobil Uygulama")
        )
    )

    ?>
    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-md-12 mt-5">

                <table class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>adi</th>
                            <th>soyadi</th>
                            <th>gsm</th>
                            <th>Cinsiyet</th>
                            <th>Yas</th>
                            <th>Dersler</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($ogrenci_bilgi as $ogrenci) :?>
                                 <tr>
                                <td><?php echo $ogrenci['id'] ?></tb>
                                <td><?php echo $ogrenci['adi'] ?></td>
                                <td><?php echo $ogrenci['soyadi'] ?></td>
                                <td><?php echo $ogrenci['gsm'] ?></td>
                                <td><?php echo $ogrenci['cinsiyet'] ?></td>
                                <td><?php echo $ogrenci['yas'] ?></td>
                                <td><?php echo $ogrenci['Dersler'] ?></td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>