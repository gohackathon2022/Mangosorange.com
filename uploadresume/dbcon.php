<?php
$servername='localhost';
$username="ehardco1_mangos";
$password="Mangos@#123";
 
try
{
    $con=new PDO("mysql:host=$servername;dbname=ehardco1_mangosorangedb",$username,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo 'connected';
}
catch(PDOException $e)
{
    echo '<br>'.$e->getMessage();
}
     
?>