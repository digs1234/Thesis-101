<?php
    include"actions/connection.php";
    include"home/header.php";
    if (!isset($_SESSION["aid"]))
    {
        echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
        
    }
    $session_aid = $_SESSION['aid'];      
?>
 <!--Navbar -->
  <?php 
    $admin_query = mysqli_query($db,"select * from admin where aid='$session_aid'")or die(mysqli_error());
    $admin_row =  mysqli_fetch_array($admin_query);
    ?>
                                    
<nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><i class="far fa-hand-spock"></i>&nbsp;&nbsp;WELCOME!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#home"
    aria-controls="home" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="home">
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="shome" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false"><?php echo $admin_row['aname'] . " " . $admin_row['aid']; ?>
          <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right"
          aria-labelledby="home" id="shome">
          <a class="dropdown-item" href="#"><i class="fas fa-key"></i>&nbsp;&nbsp;Change Password</a>
          <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Logout</a>
        </div>
      </li>
    </ul>
P</nav>
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
                        <a href="course.php" class="btn btn-success btn-sm"><i class="fas fa-arrow-circle-left"></i>&nbsp;Back</a>
                        <br>
                        <br>

                        <div class="alert alert-info" id="pop">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i class="fas fa-plus-circle"></i>&nbsp;Add Class</strong>
                        </div>
                        <div class="span10">
                        <div class="hero-unit-3">
                                        <div class="alert alert-info"><i class="icon-plus-sign-alt icon-large"></i>&nbsp;Add Course Entry</div>
                                        <?php 
                                        if(isset($_GET['id'])){
                                            $course = mysqli_query($db, "SELECT * FROM course where course_id = {$_GET['id']}");
                                            foreach(mysqli_fetch_array($course) as $k => $v){
                                                $$k = $v;
                                            }
                                        }
                                        ?>
                                        <form class="form-horizontal" method="POST">

                                            <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>">
                                            <div class="control-group">
                                                <label class="control-label" for="inputPassword">Course Year And Section:</label>
                                                <div class="controls">
                                                    <input type="text" name="cc" id="inputPassword" value = "<?php echo isset($cys) ? $cys : '' ?>" placeholder="Course Year And Section" required>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="inputPassword">Department:</label>
                                                <div class="controls">
            
                                                    <select name="cd" required>
                                                        <option><?php echo isset($department) ? $department : '' ?></option>
                                                        <?php 
                                                        $query=mysqli_query($db,"select * from department");
                                                        while($row=mysqli_fetch_array($query)){
                                                            ?>
                                                        <option><?php echo $row['department']; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="inputPassword">Major:</label>
                                                <div class="controls">
                                                    <input type="text" name="major" id="inputPassword" value = "<?php echo isset($major) ? $major : '' ?>" placeholder="Major">
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <div class="controls">
                                                    <br>
                                                    <button type="submit" name="save" class="btn btn-info btn-sm"><i class="far fa-save"></i>&nbsp;Save Course</button>
                                                </div>
                                            </div>
                                        </form>

                                        <?php
                                        if (isset($_POST['save'])) {


                                            $cc = $_POST['cc'];
                                            $cd = $_POST['cd'];
                                            $major = $_POST['major'];


                                            if(empty($_POST['id']))
                                            mysqli_query($db,"insert into course (cys,department,major) values ('$cc','$cd','$major')") or die(mysqli_error());
                                            else
                                            mysqli_query($db,"UPDATE course set cys = '$cc',department ='$cd' ,major = '$major' where course_id = {$_POST['id']}") or die(mysqli_error());
                                            echo('<script>location.href = "course.php"</script>');
                                        }
                                        ?>

                                    </div>
                               </div>

                            </div>

                        </div>

                    </div>
                </div>

                <?php include('footer.php'); ?>
            </div>
        </div>
    </div>
