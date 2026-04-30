<?php
trait habar{
public function msg1(){
    echo "salom oquvchila";
}

}

trait habar2{
    public function msg2(){
        echo "salom ustoz";
    }
}
class Ustoz {
    use habar,habar2;
}
$ustoz = new Ustoz();
$ustoz->msg1();
$ustoz->msg2();
