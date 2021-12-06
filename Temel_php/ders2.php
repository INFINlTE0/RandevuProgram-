<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // Değişken Oluşturma
    $sayi1;
    $metin1;
    
    
    // Değişken oluşturup Değer Atama İşlemi
    $sayi2=0;
    $metin2="ADÜ";
    // Değişken İçeriği Ekrana Yazdırma,
    echo $sayi2 . "<Br>"; //--> echo"$sayi2";
    echo "$sayi2 - Bu bir sayıdır. <Br> "; // --> echo $sayi . " - Bu Bir Sayidir.";
    echo $sayi2 ."<br>";
    
    // Dizi Tanımlama
    $dizi =[];
    $dizi = Array ();
    
    //diziye eleman eklemek:
    $dizi[0]= "ahmet";
    $dizi[1]= "Mehmet";
    
    array_push($dizi,"Ali");
    
    
    array_push($dizi,"Bilge");

    
    $dizi [4]="emir";

    // Dizinin İçeriğini Ekrana Yazdırmak İstendiğinde:
    echo "<pre>"  ;
  
 print_r($dizi);
    
    echo "</pre>";

    $dizi2=$dizi;
    array_push($dizi2,"Nur");
    echo "<pre>"  ;
  
 print_r($dizi2);
    
    echo "</pre>" . "<br>";

    array_push($dizi2,rand(10,20) );
   

    

// Foreach
foreach ($dizi2 as $key => $value) {
 //   echo $dizi [$key] . "<br>";
 echo "$key - $value <br>";
    }


$sayilar =[1,3,5,7,9,11,13,15,17,19];
echo "$sayilar[2]. ". ($sayilar [2]*$sayilar[2]);
echo "<br>";

foreach ($sayilar as $key => $value) {
 //   echo $dizi [$key] . "<br>";
  // echo $key - $value . ($sayilar[$key]*$sayilar[$key]."<br>");


  echo "$value  - " .($value*$value)."<br>";
    }


// KOŞUL İFADELERİ :
//DAKİKA 34:21 DE KALDIN EVE GELİCNE DEVAM ET .



    
    ?>




</body>

</html>