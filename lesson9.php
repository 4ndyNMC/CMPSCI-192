<!DOCTYPE html>
<html>
    <body>
        <div>
            <?php
            class baseCalc{
                private $n1 = 420;
                private $n2 = 69;
                
                function __construct($n1,$n2){
                    $this->n1=$n1;
                    $this->n2=$n2;
                }

                function calculate(){
                    echo $this->n1.", ".$this->n2."<br>";
                }
            }
            class addCalc extends baseCalc{
                function __construct($n1,$n2){
                    $this->n1=$n1;
                    $this->n2=$n2;
                }
                
                function calculate(){
                    echo $this->n1+$this->n2."<br>";
                }
            }
            class minusCalc extends baseCalc{
                function __construct($n1,$n2){
                    $this->n1=$n1;
                    $this->n2=$n2;
                }

                function calculate(){
                    echo $this->n1-$this->n2."<br>";
                }
            }
            
            $calc = new baseCalc(420,69);
            $calc->calculate();
            $addcalc = new addCalc(420,69);
            $addcalc->calculate();
            $mincalc = new minusCalc(420,69);
            $mincalc->calculate();
            ?>
        </div>
    </body>
</html>