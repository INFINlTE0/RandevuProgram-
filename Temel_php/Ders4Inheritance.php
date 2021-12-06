<?php

use Account as GlobalAccount;

class Account {

    private $id;
    private $name;
    private $balance;
    public function __construct($id,$name,$balance)
    {
     
     
         $this ->id =$id;
         $this ->name =$name;
         $this ->balance=$balance;
    }
    public function getId(){

      return   $this -> id;
        
    }

   public function getName(){

      return  $this -> name;
        
    }
    public function getBalance(){

     return   $this -> balance;
        
    }
}

$Account1 = new  Account (1,"bilge",3000);

echo "account1 İD bilgisi :" . $Account1 -> getId () . "<br>";
echo "account1 NAME Bilgisi :" . $Account1 -> getName() ."<br>";
echo  "account1 BALANCE bilgisiz :" . $Account1 -> getBalance() . "<br>";

  echo     "<hr> " ;

// extends işleminde bir önceki class'dan bilgileri miras alarak kullanma işlemini yapıyoruz.
class SpecialClass extends Account {


private $interest;

public function __construct($id,$name,$balance,$interest)
{

  // parent classın construct metodunu  kullanılacağı belirtildi.
  parent :: __construct ($id,$name,$balance);
  $this ->interest=$interest;
}

 public function getInterest(){
   return $this->interest;
 }
 public function setInterest($newInterest){
   return $this ->interest = $newInterest;
 }

  
}

 $ozelHesap = new SpecialClass("","ali",5000, 1000);
 

 echo $ozelHesap -> getId() ;

$ozelHesap ->setInterest(5000);
echo "<br> Özel hesabın yeni bakiyesi". $ozelHesap->getInterest();
 


?>