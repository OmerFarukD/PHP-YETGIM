<?php

// değer üreten
// değer üretmeyen
//parametre alan, parametre almayan


// Değer üretmeyen - parametre almayan

//tanımlama
function sayHello(){
    echo "
<h2>Hello World!</h2>
<p>Lorem ipsum dolor sit.</p>
<ol>
<li>Lorem ipsum dolor.</li>
<li>Debitis, itaque voluptatem.</li>
<li>Ad, molestiae, saepe?</li>
</ol>
";
}

function getProgrammerInfo(string $name, string $surname, array $languages){
    echo  " <h2>Kişisel Bilgiler</h2>
 <p><strong>Kişi adı : {$name}</strong></p>
 <p><strong>Kişi Soyadı : {$surname}</strong></p>
 <br>
 <h3>Bildiği programlama dilleri</h3>
 <ol> 
 ";
    foreach ($languages as $language){
        echo "<li>{$language}</li>";
    }
    echo "</ol> 
<hr> 
";



}


// değer üretmeyen - parametre alan
function info($name){
    echo "Merhaba ".$name."<br>";
}

function getUserInfo(string $name, string $surname, int $age)
{
    echo "Ad : {$name} , Soyad : {$surname} , Yaş : {$age}<br>";
}


// değer üreten fonksiyonlar.


// 1 , 3, 5
function topla(array $sayilar)
{
    $toplam = 0;
    foreach ($sayilar as $sayi){
        $toplam += $sayi;
    }
    return $toplam;
}


function ortalama(array $numbers)
{
    $toplam = topla($numbers);
    $elemanSayisi = count($numbers);
    $average = $toplam / $elemanSayisi;
    return $average;
}

function carpma(...$sayilar)
{
    $carp = 1;

    foreach ($sayilar as $sayi){
        $carp *=$sayi;
    }

    return $carp;
}


function deneme(string $mesaj="Bu bir bilgilendirme mesajıdır.")
{
    echo "Mesajınız:  {$mesaj} <br>";

}


// kullanma
/*for ($i = 0 ; $i<10; $i++){
    sayHello();
}*/

info("Ömer");
info("Umut");
info("Sedanur");
info("Özge");
info(250);
info(true);
echo  "<hr>";

getUserInfo("Ömer","Doğan",45);
getUserInfo("Victor","Osimhen",25);
getUserInfo(age:29,name:"Emmanuel",surname:"Icardi");
getProgrammerInfo("Umut Can",
    "Karahisar",
    array("C#","PHP","Python"));
getProgrammerInfo("Yüsra","Turğut",array("C#","Java","PHP"));


$bilgiler = getProgrammerInfo("Yüsra","Turğut",array("C#","Java","PHP"));
echo $bilgiler;

echo "<hr>";
$sonuc =  topla(array(1,3,5));
echo $sonuc;

echo "<hr>";
echo ortalama(array(1,3,5));

echo carpma(1,2,3,5,98,140);
echo "<hr>";
deneme("Ben parametre girdim.");
