<?php

$db = mysqli_connect('localhost','root','','users');

if(!$db)
{
  die('Connection failed!'.mysqli_error($db));
}

$sname = $_POST['sname'];
$spass = $_POST['spass'];
$smobile = $_POST['smobile'];
$semail = $_POST['semail'];
$saddr = $_POST['saddr'];
$sgender = $_POST['sgender'];

$sql = "INSERT INTO student (sname, spass, smobile, semail, saddr, sgender) VALUES('$sname', '$spass' , '$smobile', '$semail', '$saddr', '$sgender')";

if(mysqli_query($db,$sql))
{
     
    header('location:/16/success.php');
}
else
{
  echo mysqli_error($db);
}

?>