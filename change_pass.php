<?php
    include"actions/connection.php";
    if (!isset($_SESSION["sid"]))
    {
        echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
        
    } 
     $session_sid=$_SESSION['sid'];      
?>
<!--Navbar -->
<?php 
    $student_query=mysqli_query($db,"select * from student where sid='$session_sid'")or die(mysqli_error());
    $student_row=  mysqli_fetch_array($student_query);
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
          aria-haspopup="true" aria-expanded="false"><?php echo $student_row['sname'] . " " . $student_row['sid']; ?>
          <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right"
          aria-labelledby="home" id="shome">
          <a class="dropdown-item" href="change_pass.php?id=<?php echo $row['sid']?>" id="<?php echo $sid; ?>"><i class="fas fa-key"></i>&nbsp;&nbsp;Change Password</a>
          <a class="dropdown-item" href="#logout" data-toggle="modal" data-target="#logout"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Logout</a>
        </div>
         <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="modal1-label">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title"><i class="fas fa-sign-out-alt"></i> Logout</h4>
                </div>
                <div class="modal-body">
                  <div class="alert alert-info">Are you sure you want to <strong>Logout</strong>?</div>
                </div>
                <div class="modal-footer">
                  <a href="logout.php" class="btn btn-danger btn-sm"><i class="icon-check icon-large"></i>&nbsp;Yes</a>
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal" id="close">Close</button>
                </div>
              </div>
            </div>
          </div>
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
            <li><a href="student_home.php"><i class="fas fa-home"></i>&nbsp;&nbsp;Home</a></li>
            <li><a href="student_class.php"><i class="fas fa-clipboard"></i>&nbsp;&nbsp;Class</a></li>
          </ul>
        </div>
                    <div class="col-lg-9" id="col2">
                        <div class="alert alert-info" id="pop">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i class="fas fa-plus-circle"></i>&nbsp;Update Password</strong>
                        </div>
                        <div class="span10">
                        <div class="hero-unit-3">
                                        <?php 
                                        if(isset($_GET['id'])){
                                            $student = mysqli_query($db, "SELECT * FROM student where sid = {$_GET['id']}");
                                            foreach(mysqli_fetch_array($student) as $k => $v){
                                                $$k = $v;
                                            }
                                        }
                                        ?>
                                        <form class="form-horizontal" method="POST">

                                            <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>">
                                            <div class="control-group">
                                                <label class="control-label" for="inputPassword">Password:</label>
                                                <div class="controls">
                                                    <input type="text" name="cc" id="inputPassword" value = "<?php echo isset($spass) ? $spass : '' ?>" placeholder="Password" required>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="inputPassword">New Password:</label>
                                                <div class="controls">
                                                     <input type="text" name="cd" id="inputPassword" placeholder="New Pass" required>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="inputPassword">Re Enter:</label>
                                                <div class="controls">
                                                     <input type="text" name="ce" id="inputPassword" placeholder="Re-type" required>
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
                                            $category = $_POST['ce'];

                                            mysqli_query($db,"UPDATE subject set subject_code = '$cc',subject_name ='$cd' ,category = '$ce' where subject_id = {$_POST['id']}") or die(mysqli_error());
                                            echo('<script>location.href = "index.php"</script>');
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