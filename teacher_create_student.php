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
    $admin_query=mysqli_query($db,"select * from admin where aid='$session_aid'")or die(mysqli_error());
    $admin_row=  mysqli_fetch_array($admin_query);
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
                <a href="students.php" class="btn btn-success btn-sm" id="close"><i class="fas fa-arrow-circle-left"></i>&nbsp;Back</a>
                <br>
                <br>
                      <?php 
                        if(isset($_GET['id'])){
                            $subject = mysqli_query($db, "SELECT * FROM student where student_id = {$_GET['id']}");
                            foreach(mysqli_fetch_array($subject) as $k => $v){
                                $$k = $v;
                            }
                        }
                        ?>
                        <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>">
                            <div class="control-group">
                                <label class="control-label" for="inputEmail">Username</label>
                                <div class="controls">
                                    <input type="text" name="un" id="inputEmail" placeholder="Username" required value="<?php echo isset($sname) ? $sname : "" ?>">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Password</label>
                                <div class="controls">
                                    <input type="password" name="p" id="inputPassword" placeholder="Password" <?php echo (isset($spass)) ? "" : 'required' ?>>
                                    <?php echo (isset($spass)) ? "<i>Leave this blank if you dont want to change your password.</i>" : '' ?>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputEmail">Email</label>
                                <div class="controls">
                                    <input type="text" name="em" id="inputEmail" placeholder="Email" required  value="<?php echo isset($semail) ? $semail : "" ?>">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputEmail">Mobile</label>
                                <div class="controls">
                                    <input type="text" name="mo" id="inputEmail" placeholder="Mobile No." value="<?php echo isset($smobile) ? $smobile : "" ?>" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputEmail">Address</label>
                                <div class="controls">
                                    <input type="text" name="ad" id="inputEmail" placeholder="Address" value="<?php echo isset($saddr) ? $saddr : "" ?>" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputEmail">Gender</label>
                                <div class="controls">
                                    Male <input type="radio" name="gn" id="inputEmail" value="m<?php echo isset($sgender) ? $sgender : "" ?>" required>
                                    Female <input type="radio" name="gn" id="inputEmail" value="f<?php echo isset($sgender) ? $sgender : "" ?>" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="input01">Image:</label>
                                <div class="controls">
                                    <input type="file" name="image" class="font" <?php echo (isset($location)) ? "" : 'required' ?>> 
                                </div>
                            </div>
                            <img src="<?php echo isset($location) && is_file($location) ? $location : '' ?>" alt="">
                            <div class="control-group">
                                <div class="controls">

                                    <button type="submit" name="submit" class="btn btn-info btn-sm" id="close"><i class="icon-save icon-large"></i>&nbsp;Save</button>
                                </div>
                            </div>
                        </form>

                        <?php
                        if (isset($_POST['submit'])) {
                            $un = $_POST['un'];
                            $p = $_POST['p'];
                            $em = $_POST['em'];
                            $mo = $_POST['mo'];
                            $ad = $_POST['ad'];
                            $gn = $_POST['gn'];

                            
                            if(!empty($_FILES["image"]["tmp_name"])){
                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);
                                move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
                                $location = "uploads/" . $_FILES["image"]["name"];
                            }
                            
                            if(empty($_POST['id']))
                            mysqli_query($db,"insert into student (sname,spass,semail,smobile,saddr,sgender,location)
                                values ('$un','$p','$em','$mo','$ad','$gn','$location')                                    
                                ") or die(mysqli_error());
                            else{
                                if(!empty($p)){
                                    $pw = " , password='$p' ";
                                }else{
                                    $pw = '';
                                }
                                if(isset($location)){
                                    $loc = " , location='$location' ";
                                }else{
                                    $loc = '';
                                }
                                mysqli_query($db,"UPDATE student set
                                    sname='$un',
                                    spass = '$p',
                                    semail = '$em',
                                    smobile = '$mo',
                                    sddrr = '$ad',
                                    sgender = '$gn'
                                    $loc
                                    $pw where student_id = {$_POST['id']}                                    
                                    ") or die(mysqli_error());
                            }

                            echo('<script>location.href = "students.php"</script>');
                        }
                        ?>


                    </div>

                </div>
            </div>
<?php include('footer.php'); ?>
        </div>
    </div>
</div>