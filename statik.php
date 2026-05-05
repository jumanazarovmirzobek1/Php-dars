<?php
class salom{
 static function salom(){
    return "salom bolla";
 }
}

class volakum {
    static function volakum(){
     return salom::salom();   
    }
}
echo salom::salom();    