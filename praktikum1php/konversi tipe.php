<html>
    <head>
        <title>Konversi Tipe</title>
    </head>
    <body>
    <?php
    //inisialisasi variabel a//
    $a = 300.4;
    echo $a;
    echo "<br>";
    //konversi tipe data//
    echo "tipe Double : ", doubleval($a), "<br>";
    echo "tipe Integer : ", intval($a), "<br>";
    echo "tipe String : ", strval($a);
    ?>
    </body>
</html>