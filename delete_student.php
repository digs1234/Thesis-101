<?php
include('actions/connection.php');
$get_id=$_GET['id'];

mysqli_query($db,"delete from teacher_student where sid='$get_id'")or die(mysqli_error());
header('location:students.php');

?>