<?php
 require'Calculaion.php';
class AnotherCalculation extends Calculation{

}
class AnotherCalculation extends AnotherCalculation{
    
}
$Object = new AnotherCalculation();
$Object->calculateSum();