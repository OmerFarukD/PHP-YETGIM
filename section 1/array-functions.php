<?php

$students = array(
  "114" => "Buse Doğan",
  "115" => "Uzay Doğan",
  "116" => "Sanal Doğan",
  "117" => "Evren Doğan",
  "118" => "Ömer Doğan"
);

$colors = array("Kırmızı","Sarı","Yeşil","Lacivert");

print_r($students);
echo "<br>";

// array_flip : anahtarı değer , değer kısmını da anahtar yapar
print_r(array_flip($students));

// eleman sona ekleme
echo "<br>";

array_push($colors, "Siyah","Pembe","Turuncu");
$colors[]= "Beyaz";
print_r($colors);

// eleman başa ekleme
array_unshift($colors,"Gri");
echo "<br>";
print_r($colors);
echo "<hr>";

// associative array için ekleme operasyonları
$students["250"] = "Emin Dündar";
// çoklu ekleme
$students += [
    "121" => "Mehmet Doğan",
    "119" => "Selim Doğan",
    "120" =>  "Özge Şahin"];

print_r($students);

echo  "<hr>";
// baştan silme
array_shift($students);

array_shift($colors);

print_r($colors);
echo "<br>";
print_r($students);

echo "<hr>";
// sondan silme
array_pop($students);
array_pop($colors);
echo "<br>";
print_r($colors);
echo "<br>";
print_r($students);

// filtreli silme

unset($colors[5]);
print_r($colors);

print_r($students["121"]);
