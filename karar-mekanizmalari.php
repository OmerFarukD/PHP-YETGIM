<?php
$age = 8;

if ($age >= 18){
   echo "Reşitsiniz."."<br>";
}else{
    echo "Reşit değilsiniz."."<br>";
}
echo "<hr>";

$number = -25;

if ($number>0){
    echo "Sayı Pozitiftir."."<br>";
}else if ($number==0){
    echo "Sayı 0 dır."."<br>";
}else{
    echo "Sayı Negatiftir."."<br>";
}

$number1 = 25;
$number2 = 35;
$operator = "*";

$toplam = $number1 + $number2;
$fark = $number1 - $number2;
$carpim = $number1 * $number2;
$bolme  = $number1 / $number2;
$mod = $number1 % $number2;


if ($operator == "+"){
    echo $number1." + ".$number2." = ".$toplam."<br>";
}else if ($operator == "-"){
    echo $number1." - ".$number2." = ".$fark."<br>";
}else if ($operator == "*"){
    echo $number1." * ".$number2." = ".$carpim."<br>";
}else if ($operator == "/"){
    echo $number1." / ".$number2." = ".$bolme."<br>";
}else if ($operator == "%"){
    echo $number1." % ".$number2." = ".$mod."<br>";
}else{
    echo "Yanlış karakter girdiniz."."<br>";
}



// müşteriden ürün adı, fiyatı ve kaç adet ürün satın almak istediğini alınız.
//ve toplam sepet ücreti 10000- 15000 tl arasında ise %25 indirim yapıılsın.
//15000 tl den fazla ise %35 indirim yapılsın.
// not : Toplam sepet tutarı hesaplanırken %20 lik kdv oranı da eklenmelidir.


const product_name = "Monster Pusat klavye";
const product_price = 500;
const quantity = 30;
$indirim_orani = 0;
$son_tutar = 0;
const total_sepet = product_price * quantity;

if (total_sepet >= 10000 && total_sepet<=15000){
    $indirimli_tutar = total_sepet *0.75;
    $son_tutar= $indirimli_tutar*1.20;
    $indirim_orani = 25;
}
else if (total_sepet>15000){
    $indirimli_tutar = total_sepet *0.65;
    $son_tutar= $indirimli_tutar*1.20;
    $indirim_orani = 35;
}else{
    $son_tutar = total_sepet*1.20;
}

echo "<hr>";

echo "<strong> Ürün adı: </strong>".product_name."<br>";
echo "<strong> Ürün Sayısı: </strong>".quantity."<br>";
echo "<strong> İNDİRİMSİZ TUTAR: </strong>".total_sepet*1.20."₺ <br>";

echo "<strong> SON TUTAR (KDV Lİ): </strong>".$son_tutar."₺ <br>";
echo "<strong> İNDİRİM ORANI: </strong>".$indirim_orani."%"." <br>";


if ($indirim_orani >0){
    echo  "<strong> İndirimli fiyat farkı: </strong>".(total_sepet*1.20)-$indirimli_tutar."₺ <br>";
    echo "<strong> İndirimli Tutar (KDV SİZ): </strong>".$indirimli_tutar."<br>";
}


// ternary operatör ?
// kullanıcının yaşı 18 den küçük ise Ehliyet alamaz büyük ise ehliyet alabilir.

$yas = 19;
$durum =  ($yas > 18) ? "Ehliyet alabilirsiniz." : "Ehliyet alamazsınız";

echo $durum."<br>";


?>