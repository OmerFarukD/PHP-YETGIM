<?php

$name = "Umut Can";
$surname = "Karahisar";
$age = 27;

//double : Ondalıklı sayılara karşılık gelen veri tipidir.
$salary = 125000.50;

// integer : Tam sayılara karşılık gelen veri tipidir.
$sayi1 = 25;
$sayi2 = 55;


// string : metinsel ifadelere karşılık gelen veri tipidir.
$sayi3 = "65";
$sayi4 = "-25";

//boolean : true veya false değeri alır. Doğruluk veri tipidir.
$calisiyorMu = true;


echo $name . "<br>";
echo $surname . "<br>";
echo $age . "<br>";
echo $salary . "<br>";
echo $sayi1 + $sayi2 . "<br>";
echo $sayi3 - $sayi4 . "<br>";

echo gettype($sayi3) . "<br>";
echo gettype($sayi1) . "<br>";
echo gettype($salary) . "<br>";
echo gettype($calisiyorMu) . "<br>";

// 55 ile 25 arasında 4 işlem yapan ve ekran çıktısı olarak gösteren kodu yazınız.
$num1 = 88;
$num2 = 12;


$toplam = $num1 + $num2;
$fark = $num1 - $num2;
$carpim = $num1 * $num2;
$bolum = $num1 / $num2;



echo $toplam . "<br>";
echo $fark . "<br>";
echo $bolum . "<br>";
echo $carpim . "<br>";

echo  $sayi3.$sayi4."<br>";
echo  "<hr>";

$full_name = "Ömer Faruk Doğan";

echo $full_name . "<br>";

$full_name = "Buse Doğan";

echo $full_name . "<br>";


const programlama_dili = "PHP";
echo programlama_dili . "<br>";




// ctrl + alt + shift + L

?>
