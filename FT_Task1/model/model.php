<?php
class DB
{
    function opencon()
    {
        $DBHostname="localhost";
        $DBUsername="root";
        $DBpass="";
        $DBName="testdb1";

        $conn=new mysqli($DBHostname,$DBUsername,$DBpass,$DBName);
        if($conn->connect_error)
        {
            echo "Can'tt create connection object".$conn->connect_error;
        }
        return $conn;
    }

    function InsertData($fname,$lname,$age,$designation,$preferredlanguage,$email,$tablename,$conn)
    {
        $sqlstr="INSERT INTO $tablename (fname,lname,age,designation,preferredlanguage,email,) VALUES ('$fname','$lname','$age','$designation','$preferredlanguage','$email')";
        if ($conn->query($sqlstr)===TRUE)
        {
            echo "Data inserted";
        }
        else
        {
            echo "Can't insert".$conn->error;
        }
    }

    function closecon($conn)
    {
        $conn->close();
    }
}
?>