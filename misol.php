<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Kitob{

    public$name;
    public$beti;
    public$rangi;
    
     function __construct($name,$beti,$rangi){
     $this->name=$name;
     $this->beti=$beti;
     $this->rangi=$rangi;
    
     }
    function mirzobek(){
        echo "yangi kitobni nomi"." ".$this->$name."beti"." ".$this->$beti." "."rangi"." ".$this->$rangi."<br>" ;
    }
  

    }
      $alisher= new Kitob("Alisher","100","oq");
     echo $alisher->mirzobek();
    ?>
</body>
</html>