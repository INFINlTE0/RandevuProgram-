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
 
    echo "<h4>1 den 10 a kadar olan sayıları ekrana yazdırma</h4>";
for($sayi1=1;$sayi1<=10;$sayi1++)
{
    echo $sayi1."<br>";
}



?>
    <hr>
    <?php
echo "<h4>1 ile 10 arasındaki tek sayıları ekrana yazdırma</h4>";
for($sayi1=1;$sayi1<=10; $sayi1++){
   
   $tek = $sayi1 % 2;
	 
   if($tek!=0){
	 
   echo $sayi1; 
   echo "<br>";
	 
  }
}

?>
    <hr>
    <?php
echo "<h4>1 ile 10 arasındaki çift olan sayıları ekrana yazdırma</h4>";
for($sayi1=1;$sayi1<=10; $sayi1++){
   
   $tek = $sayi1 % 2;
	 
   if($tek!=1){
	 
   echo $sayi1;
   echo "<br>";
	 
  }
}

?>
    <hr>
    <?php
echo "<h4>1 den 10 a kadar olan çift sayıların karesini alma</h4>";
for($sayi1=1;$sayi1<=10; $sayi1++){
   
   $tek = $sayi1 % 2;
	 
   if($tek!=1){
	 
   echo $sayi1 = $sayi1*$sayi1;
   echo "<br>";
	 
  }
}

?>
    <hr>
    <?php
echo "<h4>1 den 10 a kadar olan tek sayıların iki katını alma</h4>";
for($sayi1=1;$sayi1<=10; $sayi1++){
   
   $tek = $sayi1 % 3;
	 
   if($tek!=0){
	 
  echo $sayi1 ." *2 = " .$sayi1*3;
   echo "<br>";
	 
  }
}

?>

    <br><br><br><br>

</body>

</html>