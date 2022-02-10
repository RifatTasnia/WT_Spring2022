<?php
$uname=$pass="";
if(isset($_GET["submit"]))
{
    $uname=$_GET["firstname"];
    if(empty($uname)||strlen($uname)<5)
    {
        echo "please enter a valid name";
    }
    else
    {
        echo "your name is ".$uname;
    }
    echo "<br>";


    $age=$_GET["age"];
    if(empty($age))
    {
        echo "please enter a valid age";
    }
    else
    {
        echo "your age is ".$age;
    }
    echo "<br>";

    if(isset($_GET["radio"]))
    {
        echo "you have selected ".$_GET["radio"];
    }
    else
    {
        echo "you have noe selected anything";
    }
    echo "<br>";


    if(isset($_GET["JAVA"])||isset($_GET["PHP"])||isset($_GET["C++"]))
    {
        echo "you have seleced ";
        if(isset($_GET["JAVA"]))
        {
            echo $_GET["JAVA"];
        }
        if(isset($_GET["PHP"]))
        {
            echo $_GET["PHP"];
        }
        if(isset($_GET["C++"]))
        {
            echo $_GET["C++"];
        }
    }
    else
    {
        echo "you have not selected the box";
    }
    echo "<br>";


    $uemail=$_GET["E-mail"];
    if(empty($uemail))
    {
        echo "please enter a valid email";
    }
    else
    {
        echo "your email is".$uemail;
    }
    echo "<br>";


    $upass=$_GET["Password"];
    if(empty($upass)||strlen($upass)<8)
    {
        echo "please enter a valid password";
    }
    else
    {
        echo "password accepted";
    }
    echo "<br>";

}
?>