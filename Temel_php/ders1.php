<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Ders 1</title>
    </title>
</head>

<body>
    <h4> Php de Değişken Özellikleri </h4>
    <ol>
        <li> 1.Değişken isimleri rakam ile başlamaz.</li>
        <li> Değişken isimlerinde türkçe karakter kullanılması önerilmez.</li>
        <li> Php'de değişken isimleri $ işareti ile başlar.</li>
        <li> Değişken isimlerinin içerisinde boşluk kullanılmaz</li>
        <li> Küçük büyük harf duyarlılığı vardır."(model != model)"</li>
    </ol>



    <ul>
        <li> 1 </li>
        <li> 2 </li>
        <li> 3 </li>
        <li> 4 </li>

    </ul>




    <hr>

    <?php 

//  Metin Açıklama Satırı
/* Metin Açıklama Satırı */

$metin ="Aydın Adnan Menderes Üniversitesi";
$sayi1 = 15;
$sayi2 = 20;
$sonuc;

echo " \$metin değişken içeriği :<i><b><u> $metin</b></i></u><br> " ;

echo $sayi1 ."<br>";
echo $sayi2 ."<br>" ;
echo $sayi1 + $sayi2  ."<br>";

if(($sayi1+$sayi2)>50 and $sayi2 <30)
{
    echo "Sonuç doğru";
   
}
else
echo "Sonuç yanlış";




    ?>

    <br> <br> <br>

    <input type="text" value="<?php echo $metin; ?>">

    <hr>
    <h5>Form İşlemleri</h5>

    <form action="ders1.php" method="get">
        <label for=""> sayi-1 <input type="text" name="sayi1" placeholder="sayı 1 değerini giriniz"></label>;
        <label for=""> sayi-2 <input type="text" name="sayi2" placeholder="sayı 2 değerini giriniz"></label>;
        <input type="submit" value="Formu Gönder">;

    </form>

    <?php
    
    $sayi1=$_GET["sayi1"];
    $sayi2=$_GET["sayi2"];
    echo "formdan gelen 1. sayı ve 2.sayı toplamı =  $sayi1+$sayi2 <br>"; 
    echo $sayi1 + $sayi2 ;
 

        
   
    
    ?>
</body>

</html>