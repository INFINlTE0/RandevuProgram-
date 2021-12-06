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
class kisi {
  public $isim;
  public $yas;

  function __construct($isim) {
    $this->isim = $isim; 
  }
  function get_isim() {
    return $this->isim;
  }
}

$kisi = new kisi("ahmet");
echo $kisi->get_isim();
?>






</body>

</html>