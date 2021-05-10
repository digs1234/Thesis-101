<?php
include"actions/connection.php";
$get_id = $_GET['id']; 
include('home/header.php');
if (!isset($_SESSION["aid"]))
    {
        echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
        
    }
    $session_aid=$_SESSION['aid']; 
?>     
<?php
$admin_query=mysqli_query($db,"select * from admin where aid='$session_aid'")or die(mysqli_error());
$admin_row = mysqli_fetch_array($admin_query);

$course_query = mysqli_query($db,"select * from class where aid='$session_aid'") or die(mysqli_error());
$course_row = mysqli_fetch_array($course_query);
$course_id = $course_row['subject_name'];
?>
<?php
$query_class = mysqli_query($db,"select * from class where aid='$session_aid'") or die(mysqli_error());
$row_class = mysqli_fetch_array($query_class);
$id_class = $row_class['class_id'];
?>

    <nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="shome" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false"><?php echo $admin_row['aname'] . " " . $admin_row['aid']; ?>
          <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right"
          aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="#">Change Password</a>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->
<header class="header">
  <div class="container-fluid mt-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-10">
          <a class="navbar-brand" href="#">
           <img src="assets/img/logo3.png" alt="Logo" class="rounded-circle" style="width: 200px;"></a>
            <h3 class="text-left" style="margin-top: -80px; margin-left: 220px; color: white;">FOR NEW MODE OF LEARNING</h3>
        </div>
      </div>
    </div>
  </div>
</header>
<!--sidebar-->
<div class="sidebar">
   <div class="container-fluid mt-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3">
          <div class="alert-index alert-success" id="alert">
                        <i class="far fa-calendar-alt" id="calendar">
                        <?php
                        $Today = date('y-m-d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?></i>
          </div>
          <ul class="col1">
            <li><a href="teacher_home.php"><i class="fas fa-home"></i>&nbsp;&nbsp;Home</a></li>
            <li><a href="teacher_class.php"><i class="fas fa-clipboard"></i>&nbsp;&nbsp;Class</a></li>
            <li><a href="teacher_subject.php"><i class="fas fa-book"></i>&nbsp;&nbsp;Subject</a></li>
            <li><a href="course.php"><i class="fas fa-bookmark"></i>&nbsp;&nbsp;Course</a></li>
            <li><a href="teacher_student.php"><i class="fas fa-users"></i>&nbsp;&nbsp;Students</a></li>
          </ul>
        </div>
        <div class="col-lg-9" id="col2">
          <div class="alert alert-info" id="pop">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong><i class="fas fa-user-circle"></i>&nbsp;Welcome</strong>&nbsp;<?php echo $admin_row['aname'];?>
          </div>
                <a href="" class="btn btn-success btn-sm"><i class="icon-group icon-large"></i>&nbsp;<?php echo $course_row['course_id']; ?></a>
                <br><br>
                <div class="alert alert-success" id="pop"> 
                    <strong>Subject:&nbsp;<?php echo $course_row['subject_name']; ?></strong>
                </div>

                    <div class="alert alert-info" id="pop">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong><i class="icon-user icon-large"></i>&nbsp;Students</strong>
                    </div>

                    <div class="alert alert-info" id="pop">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong><i class="icon-user icon-large"></i>&nbsp;Add Students</strong>
                    </div>

                    <div class="row-fluid">
                        <div class="span9">
                            <form class="form-horizontal" method="POST">
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Student</label>
                                    <div class="controls">

                                        <select name="student" class="span6" required>
                                            <option>
                                            <?php
                                            $query = mysqli_query($db,"select * from teacher_student where aid = '$session_aid'") or die(mysqli_error());
                                            while ($row = mysqli_fetch_array($query)) {
                                               $sid = $row['sid'];

                                              $student_query = mysqli_query($db,"select * from student where sid='$sid'") or die(mysqli_error());
                                              $student_row = mysqli_fetch_array($student_query);
                                              ?>
                                                </option>

                                                <option value="<?php echo $sid; ?>"><?php echo $student_row['sid'] . " " . $student_row['sname']; ?></option>
                                            <?php } ?>

                                            <input type="hidden" name="aid" value="<?php echo $session_aid; ?>">
                                            <input type="hidden" name="sid" value="<?php echo $get_id['sid']; ?>">
                                            <input type="hidden" name="cys" value="<?php echo $course_row['course_id']; ?>">
                                            <input type="hidden" name="subject" value="<?php echo $course_row['subject_name']; ?>">

                                        </select>
                                        <br><br>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" name="save_subject" class="btn btn-success btn-sm"><i class="fas fa-plus"></i>&nbsp;Add Students</button>
                                    </div>
                                </div>
                            </form>

                            <?php
                            if (isset($_POST['save_subject'])) {
                                $subject=$_POST['subject'];
                                $cys = $_POST['cys'];
                                $sid = $_POST['sid'];

                                $aid = $_POST['aid'];

                                mysqli_query($db,"insert into sws (aid,sid,cys,subject_name,class_id) values('$aid','$get_id','$cys','$subject','$get_id')") or die(mysqli_error());
                                ?>
                                <script type="text/javascript">
                                    window.location="class.php<?php echo '?id=' . $id_class; ?>";                          
                                </script>
                                <?php
                            }
                            ?>


                        </div>

                    </div>


                    <!-- end slider -->
                </div>
            </div>

        </div>
        <?php include('footer.php'); ?>
    </div>
</div>
</div>






</body>
</html>


