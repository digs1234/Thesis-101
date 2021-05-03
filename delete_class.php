<?php
include('actions/connection.php');
$get_id = $_GET['id'];

mysqli_query($db,"delete from class where class_id='$get_id'")or die(mysqli_error());
header('location:teacher_class.php');

?>