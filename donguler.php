<?php

// ekran çıktısı olarak 1 den 5 e kadar tüm sayıları ekranda gösteriniz.

for ($i=1; $i <=5 ; $i++){
    echo  $i . "<br>";
}

echo  " <h2> 0 den 100 e kadar 5er 5er artacak şekilde yazınız. </h2> <hr>";
echo  "<ol style='background-color: red; color: yellow; text-align: center' type='A'>";
for ($i = 0; $i <=100; $i+=5){
    echo "<li>".$i."</li>";
}
echo  "</ol>";

echo  "<hr>";

for ($i=100; $i >=50 ; $i--){

    echo  $i . "<br>";

}
?>


