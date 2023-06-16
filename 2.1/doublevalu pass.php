<?php
/*class students//class
{
    public $Name;//properties
    public $Address;

    function Studentsdeteails()//Method
    {
        echo $this->Name . "-" . $this->Address;
    }
}
$obj = new students();//create object
$obj->Name ="Md.Mehadi Hassan Rabby";
$obj->Address ="Boikelli,Khulna.";
$obj->Studentsdeteails();//return ba echo <korlam></korlam>
*/

////Deafult value
/*class students//class
{
    public $Name ="No Name";//properties
    public $Address= "Unknown";//Deafult valu ar jonno properties a man declier kore dete hoi
    function Studentsdeteails()//Method
    {
        echo $this->Name . "-" . $this->Address;
    }
}
$obj = new students();//create object
$obj->Name ="Md.Mehadi Hassan Rabby";
//$obj->Address ="Boikaly,Khulna.";
$obj->Studentsdeteails();//return ba echo <korlam></korlam>*/

//Construct ar babhohar

/*class Students
{
    public $Name = "No Name";
    public $Address = "Unknown";

    function __construct($Name,$Address)
{
    $this->Name = $Name;
    $this->Address = $Address;

}

    function detailes()
    {
       echo $this->Name . "-" . $this->Address;
    }

}
$obj = new Students("Md.Mehadi"," Boikaly,Khulna");
$obj-> detailes();*/

//Construct babhohar kore akhadick obj create

class Students
{
    public $Name;
    public $Address;

    function __construct($Name="No Name",$Address="Unknown")
{
    $this->Name = $Name;
    $this->Address = $Address;

}

    function detailes()
    {
       echo $this->Name . "-" . $this->Address ."<br>";
    }

}
$obj = new Students();
$obj2= new Students("Md.Mehadi Hassan","Boikaly");
$obj3= new Students("Rabby");
//$obj4= new Students( "" ,"Boikaly");

$obj-> detailes();
$obj2-> detailes();
$obj3-> detailes();
//$obj4-> detailes();
?>