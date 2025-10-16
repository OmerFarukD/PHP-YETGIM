
<?php
// plaka ve ilgili şehrin bilgisini tutan verileri yazınız.


$sehir_bilgileri = array(
    "34"=> "İstanbul",
    "44"=> "Malatya",
    "02" => "Adıyaman",
    "35"=> "İzmir",
    "06" => "Ankara"
);

foreach ($sehir_bilgileri as $plaka=> $sehir){
    echo  $sehir." Şehrinin plakası ".$plaka."<br>";
}





