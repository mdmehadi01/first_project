<?php

    /*
    * Teachers class
    */
    class Students{
        public $Connection;

        function __construct()
        {
            $Host = 'localhost';
            $Name = 'root';
            $Pass = '';
            $Db   = 'sms';

            $Connection = new mysqli($Host, $Name, $Pass, $Db);
        }

        function addTeachers($Data)
        {
            $Name    = $Data['name'];
            $Email    = $Data['email'];
            $Subject = $Data['subject'];
            $Address = $Data['address'];

            $Query  = "INSERT INTO teachers(name, email, subject, address)";
            $Query .= "VALUES($Name, $Email, $Subject, $Address)";

            $Result = $this->Connection->execute_query($Query);
            return $Result;

        }
        function deleteTeachers($TeachersId)
        {
            $Query = "DELETE FROM teachers WHERE id = $TeachersId";
            $Result = $this->Connection->execute_query($Query);
            return $Result;
        }
        function editTeachers($Data, $TeachersId)
        {

        }
        function getStudent($TeachersId){
            $Query = "SELECT * FROM teachers WHERE id = $TeachersId";
            $Result =$this->Connection->execute_query($Query);
            return $Result;
        }
        function getStudents($TeachersId)
        {
            $Query = "SELECT * FROM teachers";
            $Result = $this->Connection->execute_query($Query);
            return $Result;
        }
    }


?>