<?php
class employee
{
    public $Name;
    public $Age;
    public $Salary;
    function __construct($N,$A,$S)
    {
        $this->Name =$N;
        $this->Age =$A;
        $this->Salary =$S;
    }
    function info()
    {
        echo "<h1>Employe Profile</h1>";
        echo"Employee Name:" . $this->Name . "<br>";
        echo"Employee Age:" . $this->Age . "<br>";
        echo"Employee Salary:" . $this->Salary . "<br>";

    }
}//aro kta class toiri korbo inherite korar jonno

class manager extends employee
{
    public $ta =1000;
    public $phone =700;
    public $totalsalary;

    function info()
    {
        $this->totalsalary =$this->Salary + $this->ta +$this->phone;

        echo "<h1>Manager Profile</h1>";
        echo"Employee Name:" . $this->Name . "<br>";
        echo"Employee Age:" . $this->Age . "<br>";
        echo"Employee Salary:" . $this->totalsalary . "<br>";

    }

}
$E1 = new manager("Md.Mehadi",20, 19000);
$E2 = new employee("Md.Rabby",19,1500);

$E1->info();
$E2->info();
?>