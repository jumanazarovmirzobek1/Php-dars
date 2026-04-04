<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Avtomobil{
    public$name;
    public$color;
    public$year;
    public$model;

  function __construct($name,$color,$year,$model){
    $this->name = $name;
    $this->color = $color;
    $this->year = $year;
    $this->model = $model;
}
    function mirzobek(){
        echo "yangi avtomobil nomi"."".$this->name."rang "." ".$this->color." "."ishlab chiqargan yili"." ".$this->year." ".$this->model."<br>";
    }

  

  }
  $bmw= new Avtomobil("bmw","qora",2020,"m5");
  $bmw-> mirzobek();
    
   $bmw= new Avtomobil("merd","kok",2021,"g94");
 $bmw-> mirzobek();

   $bmw= new Avtomobil("chevrolet","qora",2024,"molibu");
 $bmw-> mirzobek();

    ?>
</body>
</html>

