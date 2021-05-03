<?php
    include"actions/connection.php";
    include"home/header.php";
    if (!isset($_SESSION["sid"]))
    {
        echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
        
    } 
     $session_sid = $_SESSION['sid'];
     $get_id = $_GET['id'];      
?>
<?php
$student_query = mysqli_query($db,"select * from student where sid='$session_sid'") or die(mysqli_error());
$student_row = mysqli_fetch_array($student_query);
?>

<?php
$query_class = mysqli_query($db,"select * from class where class_id='$get_id'") or die(mysqli_error());
$row_class = mysqli_fetch_array($query_class);
$aid = $row_class['aid'];

$admin_query = mysqli_query($db,"select *from admin where aid='$aid'")or die(mysqli_error());
$admin_row=  mysqli_fetch_array($admin_query);
?>
<!--Navbar -->
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
            <li><a href="student_home.php"><i class="fas fa-home"></i>&nbsp;&nbsp;Home</a></li>
            <li><a href="student_class.php"><i class="fas fa-clipboard"></i>&nbsp;&nbsp;Class</a></li>
          </ul>
        </div>
        <div class="col-lg-9" id="col2">
           <a href="student_class.php" class="btn btn-success btn-sm"><i class="fas fa-arrow-circle-left"></i>&nbsp;Back</a>
          <div class="alert alert-info" id="pop">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong><i class="fas fa-user-circle"></i>&nbsp;Welcome</strong>&nbsp;<?php echo $student_row['sname'];?>
          </div>

         <div class="alert">Class:<a href="" >&nbsp;<strong><?php echo $row_class['course_id']; ?></strong></a>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    Subject:<a href="">&nbsp;<strong><?php echo $row_class['subject_id']; ?></strong></a>
                    &nbsp;
                    Teacher:<a href="">&nbsp;<strong><?php echo $admin_row['aname']; ?></strong></a>
                </div>
                <div>
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <div class="alert alert-info" id="pop">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i class="icon-user icon-large"></i>&nbsp;Files</strong>
                        </div>
                        <thead>
                            <tr>

                                <th>File Name</th>
                                <th>Description</th>
                                <th>Date Uploaded</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = mysqli_query($db,"select * from files where class_id = '$get_id'") or die(mysqli_error());
                            while ($row = mysqli_fetch_array($query)) {
                                $file_id = $row['file_id'];
                                ?>
                                <tr>

                            <td><?php echo $row['fname'] ?></td>
                            <td><?php echo $row['fdesc']; ?></td> 
                            <td><?php echo $row['fdatein']; ?></td>
                            <td width="50">
                                <a href="<?php echo $row['floc']; ?>" rel="tooltip"  title="Download File" id="d<?php echo $file_id; ?>"  role="button"  data-toggle="modal" class="btn btn-info"><i class="icon-download-alt icon-large"></i></a>

                            </td>


                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    <!-- end slider -->
                </div>
            </div>

        </div>
        <?php include('footer.php'); ?>
    </div>
</div>
</div>