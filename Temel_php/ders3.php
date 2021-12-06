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

class Account
{
private $id =1;
private $name = "ali";
private $balance = 3000;
function __construct($id,$name,$balance)
{
    $this ->id = $id;
    $this ->name = $name;
    $this ->balance = $balance;


}
function getName(){


    return $this -> name ;
    
}
function GetBalance (){


    return $this -> balance;
}
function setBalance($newBalance){

    return $this -> balance = $newBalance;
    
}



public function showInfo()
{
echo "<br> NESNENİN BİLGİLERİ <br> " ;
echo "  İd :" . $this ->id               .  "<br> " ;
echo "  Adı :" . $this ->name            .  "<br> " ;
echo "  Bakiyesi :" . $this ->balance    .  "<br> " ;
 
}

function GetId (){


    return $this -> id;
}
    
}
// NESNE ÜRETİMİ :
    $account1 = new Account(1,"ali",3000);
     
// ÖZELLİKLERE ERİŞİM:
echo "ACCOUNT1 NESNESİNİN :" . $account1 -> GetId( ). "<br>";
echo"ACCOUNT1 NESNESİNİN :" . $account1 -> getName( ). "<br>";
echo "ACCOUNT1 NESNESİNİN :  " . $account1 -> GetBalance ( ). "<br>";
 


// YENİ BİR DEĞER GİRMEK İÇİN KULLANILIR.
 $account1 -> setBalance(1000); 
echo "ACCOUNT1 NESNESİNİN YENİ BAKİYESİ :  " . $account1 -> GetBalance(). "<br>";

$account1 -> showInfo();
    
?>
</body>

</html>