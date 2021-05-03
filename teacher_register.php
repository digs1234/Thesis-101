<?php

$db = mysqli_connect('localhost','root','','users');

if(!$db)
{
	die('Connection failed!'.mysqli_error($db));
}

$aname = $_POST['aname'];
$apass = $_POST['apass'];
$amobile = $_POST['amobile'];
$aemail = $_POST['aemail'];
$agender = $_POST['agender'];
$aaddr = $_POST['aaddr'];

$sql = "INSERT INTO admin  (aname, apass, amobile, aemail, agender, aaddr) VALUES('$aname', '$apass' , '$amobile', '$aemail', '$agender', '$aaddr')";

if(mysqli_query($db,$sql))
{
    
    header('location:/16/success.php');
}
else
{
	echo mysqli_error($db);
}

?>