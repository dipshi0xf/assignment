<?php
$servername = 'localhost';
$username = 'root';
$password='onlyme>33';
$dbname= 'website';
$conn =new mysqli($servername,$username,$password,$dbname);
if(!$conn)
{
 
    die(mysqli_error($conn));
}
?>


