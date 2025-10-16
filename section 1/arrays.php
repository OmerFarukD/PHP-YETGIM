<?php

// DRY -> Don t Repeat yourself
$sehirler = array("İstanbul","Ankara","İzmir","Tunceli","Elazığ","Malatya","Adıyaman","Eskişehir");
//                   0          1         2       3         4         5        6

echo  "Şehirler dizisi kaç elemanlıdır : ".count($sehirler)."<br>";
for ($i=0; $i <count($sehirler); $i++) {
    echo  ($i+1).". Şehir  ".$sehirler[$i]."<br>";
}

// foreach döngüsü

echo "<hr>";
foreach ($sehirler as $sehir) {
    echo  $sehir."<br>";
}

echo "<hr>";
foreach ($sehirler as $k=>$v) {
    echo  ($k+1).". Şehir  ".$v."<br>";
}


$numbers = array(1,2,3,10,52,36);




