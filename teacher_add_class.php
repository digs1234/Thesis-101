<?php
    include"actions/connection.php";
    include"header.php";
    if (!isset($_SESSION["aid"]))
    {
        echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
        
    } 
    $session_aid=$_SESSION['aid'];      
?>
 <!--Navbar -->
 <?php 
    $admin_query=mysqli_query($db,"select * from admin where aid='$session_aid'")or die(mysqli_error());
    $admin_row=  mysqli_fetch_array($admin_query);
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
            <li><a href="students.php"><i class="fas fa-users"></i>&nbsp;&nbsp;Students</a></li>
          </ul>
        </div>
            <div class="col-lg-9" id="col2">
            <a href="teacher_class.php" class="btn btn-success btn-sm"><i class="fas fa-arrow-circle-left"></i>&nbsp;Back</a>
                <br>
                <br>

                <div class="alert alert-info" id="pop">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong><i class="fas fa-plus-circle"></i>&nbsp;Add Class</strong>
                </div>
                  <div>
                    <form class="form-horizontal" method="POST">
                        <div class="control-group">
                            <label class="control-label" for="inputEmail">Class</label>
                            <div class="controls">

                                <select name="cys" class="span5" required>
                                    <option></option>
                                    <?php
                                    $query = mysqli_query($db,"select * from course") or die(mysqli_error());
                                    while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                        <option><?php echo $row['cys']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="inputEmail">Subject</label>
                            <div class="controls">

                                <select name="subject" class="span6" required>
                                    <option></option>
                                    <?php
                                    $teacher_subject_query = mysqli_query($db,"select * from teacher_subject") or die(mysqli_error());
                                    $teacher_row = mysqli_fetch_array($teacher_subject_query);
                                    $subject_id = $teacher_row['subject_id'];

                                    $query = mysqli_query($db,"select * from subject where subject_id in (select subject_id from teacher_subject)") or die(mysqli_error());
                                    while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                        <option><?php echo $row['subject_name']; ?></option>
                                    <?php } ?>
                                    <input type="hidden" name="aid" value="<?php echo $session_aid; ?>">
                                </select>
                            </div>
                        </div>

                     


                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" name="save_class" class="btn btn-success btn-sm"><i class="fas fa-plus-circle"></i>&nbsp;Add Class</button>
                            </div>
                            <?php
                            if (isset($_POST['save_class'])) {
                               
                                $subject = $_POST['subject'];
                                $cys = $_POST['cys'];
                                $aid = $_POST['aid'];

                                mysqli_query($db,"insert into class (subject_id,course_id,aid) values('$subject','$cys','$aid')") or die(mysqli_error());
                                echo('<script>location.href = "teacher_class.php"</script>');
                            }
                            ?>
                        </div>
                    </form>
                </div>

<?php
    include "footer.php";
 ?>