<?php

function selamlama($isim="Misafir", $mesaj="iyi günler") {
    return "$mesaj $isim";
}

$sonuc = selamlama("ahmet","merhaba");
$sonuc = selamlama("ahmet");
$sonuc = selamlama();

function kareAl($taban, $us=2) {
    return $taban ** $us;
}

$sonuc = kareAl(2, 3);
$sonuc = kareAl(2);
$sonuc = kareAl(2, 5);
$sonuc = selamlama("sadık","merhaba");

echo $sonuc;



function toplam(...$sayilar) {
    $toplam = 0;
    foreach($sayilar as $sayi) {
        $toplam += $sayi;
    }
    return $toplam;
}


echo toplam(10, 20, 30);
echo toplam(10, 20, 30, 40);

?>