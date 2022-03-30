<?php
include ("../model/model.php");
$uname=$pass="";
if(isset($_POST["submit"]))
{
    $fname=$_POST["fname"];
    if(empty($fname)||strlen($fname)<5)
    {
        echo "please enter a valid name";
    }
    else
    {
        echo "your first name is ".$fname;
    }
    echo "<br>";

    $lname=$_POST["lname"];
    if(empty($lname)||strlen($lname)<5)
    {
        echo "please enter a valid name";
    }
    else
    {
        echo "your last name is ".$lname;
    }
    echo "<br>";


    $age=$_POST["age"];
    if(empty($age))
    {
        echo "please enter a valid age";
    }
    else
    {
        echo "your age is ".$age;
    }
    echo "<br>";

    
    if(isset($_POST["radio"]))
    {
        echo "you have selected ".$_POST["radio"];
    }
    else
    {
        echo "you have not selected anything";
    }
    echo "<br>";


    if(isset($_POST["JAVA"])||isset($_POST["PHP"])||isset($_POST["C++"]))
    {
        echo "you have seleced ";
        if(isset($_POST["JAVA"]))
        {
            echo $_POST["JAVA"];
        }
        if(isset($_POST["PHP"]))
        {
            echo $_POST["PHP"];
        }
        if(isset($_POST["C++"]))
        {
            echo $_POST["C++"];
        }
    }
    else
    {
        echo "you have not selected the box";
    }
    echo "<br>";


    $email=$_POST["E-mail"];
    if(empty($email))
    {
        echo "please enter a valid email";
    }
    else
    {
        echo "your email is ".$email;
    }
    echo "<br>";


    $password=$_POST["Password"];
    if(empty($password)||strlen($password)<8)
    {
        echo "please enter a valid password";
    }
    else
    {
        echo "password accepted";
    }
    echo "<br>";

    if(empty($fname) || empty($lname) || empty($age) || empty($designation) || empty($preferredlanguage) || empty($email) || empty($password))
    {
        echo "Please insert all field";
    }
    else{
        $mydb=new DB();
        $conobj=$mydb->opencon();
        $mydb->InsertData($fname,$lname,$age,$designation,$preferredlanguage,$email,"person",$conobj);
        $mydb->closecon($conobj);
    }

}
?>