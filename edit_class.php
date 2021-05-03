<?php
include('actions/connection.php');

if(isset($_POST['Update'])) {
  $class_id = $_GET['class_id'];
  $course_id = $_POST['course_id'];
  $subject_name = $_POST['subject_name'];
  mysqli_query($db, "UPDATE `class` 
  SET `course_id`='$course_id',
  `subject_name`='$subject_name' WHERE class_id = $class_id");

  header('location: teacher_class.php');
}
