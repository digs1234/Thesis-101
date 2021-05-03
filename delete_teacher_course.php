<?php
include('actions/connection.php');
$get_id = $_GET['id'];

mysqli_query($db,"DELETE FROM `subject` WHERE subject_id = '$get_id'")or die(mysqli_error());
header('location:teacher_subject.php');

?>