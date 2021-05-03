<?php
include('actions/connection.php');
$get_id = $_GET['id'];

mysqli_query($db,"DELETE FROM `teacher_student` WHERE sid = '$get_id'")or die(mysqli_error());
header('location:students.php');

?>