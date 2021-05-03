<?php
include"actions/connection.php";
include('header.php');
if (!isset($_SESSION["aid"]))
    {
        echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
        
    }
    $session_aid=$_SESSION['aid']; 
    $get_id = $_GET['id'];      
?>

<?php
$admin_query=mysqli_query($db,"select * from admin where aid='$session_aid'")or die(mysqli_error());
$admin_row = mysqli_fetch_array($admin_query);

$course_query = mysqli_query($db,"select * from class where aid='$session_aid' and class_id='$get_id'") or die(mysqli_error());
$course_row = mysqli_fetch_array($course_query);
$course_id = $course_row['course_id'];
?>
<?php
$query_class = mysqli_query($db,"select * from class where aid='$session_aid' and class_id='$get_id'") or die(mysqli_error());
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
            <li><a href="students.php"><i class="fas fa-users"></i>&nbsp;&nbsp;Students</a></li>
          </ul>
        </div>
        <div class="col-lg-9" id="col2">
          <div class="alert alert-info" id="pop">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong><i class="fas fa-user-circle"></i>&nbsp;Welcome</strong>&nbsp;<?php echo $admin_row['aname'];?>
          </div>
                <a href="" class="btn btn-success btn-sm" id="close"><i class="fas fa-clipboard"></i>&nbsp;<?php echo $course_row['course_id']; ?></a>
                <a href="teacher_class.php" class="btn btn-success btn-sm" id="close" style="float: right;"><i class="fas fa-arrow-circle-left"></i>&nbsp;Back</a>
                <br><br>
                <div class="alert alert-success" id="pop"> 
                    <strong>Subject:&nbsp;<?php echo $course_row['subject_name']; ?></strong>
                </div>

                    <div class="alert alert-info" id="pop">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong><i class="fas fa-users"></i>&nbsp;Students</strong>
                    </div>

                    <div class="row-fluid">
                        <div class="span7">

                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                <a href="add_student.php<?php echo '?id=' . $id_class; ?>" class="btn btn-info btn-sm" id="close"><i class="fas fa-plus"></i>&nbsp;Add Student</a>
                                <br><br>
                                <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = mysqli_query($db,"select * from sws where cys = '$course_id' and class_id='$get_id'") or die(mysqli_error());
                                    while ($row = mysqli_fetch_array($query)) {
                                        $id = $row['sws_id'];
                                        $sid = $row['sid'];
                                        $student_query = mysqli_query($db,"select * from student where sid = '$sid'") or die(mysqli_error());
                                        $student_row = mysqli_fetch_array($student_query);
                                        ?>
                                        <tr>
                                            
                                    <td width="50"><img class="img-rounded" src="<?php echo $student_row['location']; ?>" height="50" width="50"></td>
                                    <td><a href="">&nbsp;<i class="fas fa-user"></i>&nbsp;<?php echo $student_row['sid']; ?></a></td>
                                    <td><?php echo $student_row['sname']; ?></td> 


                                    <td width="50">
                                        <a rel="tooltip"  title="Delete Student" id="d<?php echo $sid; ?>" href="#delete<?php echo $sid; ?>" role="button"  data-toggle="modal" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                    <!-- delete file modal -->
                                    <div id="delete<?php echo $sid; ?>" class="modal" tabindex="-1" role="dialog">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                    <h5 class="modal-title">Delete Permanently</h5>
                                      </div>
                                    <div class="modal-body">
                                        <div class="alert alert-danger">Are you Sure you Want to <strong>Delete</strong>&nbsp; this Student?</div>
                                    </div>
                                    <div class="modal-footer">
                                        <form method="post" action="delete_student1.php">
                                                <input type="hidden" name="id" value="<?php echo $id; ?>">

                                                <input type="hidden" name="class_id" value="<?php echo $id_class; ?>">
                                      <button type="button" class="btn btn-dafault" id="close" data-dismiss="modal" id="close">Close</button>
                                       <button class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</button>
                                        </form>
                                    </div>
                                    </div>
                                    <!-- end delete modal -->




                                    <!-- end delete modal -->

                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div>


                            <a href="upload.php<?php echo '?id=' . $id_class; ?>" class="btn btn-primary btn-sm" id="close"><i class="fas fa-upload"></i>&nbsp;Upload A File</a>
                            <br><br>
                            <div class="alert alert-info" id="pop"><i class="fas fa-upload"></i>&nbsp;Uploaded Files</div>
                            <table class="table table-bordered">

                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $file_query = mysqli_query($db,"select * from files where class_id ='$id_class'") or die(mysqli_error());
                                    while ($file_row = mysqli_fetch_array($file_query)) {
                                        $file_id = $file_row['file_id'];
                                        ?>


                                    <tr>
                                        <td><?php echo $file_row['fname']; ?>&nbsp;<i class="icon-file"></i></td>
                                        <td width="90">
                                            <a rel="tooltip"  title="Delete File" id="<?php echo $file_id; ?>" href="#delete<?php echo $file_id; ?>" role="button"  data-toggle="modal"class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                            <a rel="tooltip"  title="Download File" id="<?php echo $file_id; ?>" href="<?php echo $file_row['floc']; ?>" role="button"  data-toggle="modal"class="btn btn-info"><i class="icon-trash icon-upload-alt"></i></a>
                                        </td>
                                    </tr>
                                    <!-- delete file modal -->
                                    <div id="delete<?php echo $file_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-header">
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-danger">Are you Sure you Want to <strong>Delete</strong>&nbsp;This File?</div>
                                        </div>
                                        <div class="modal-footer">

                                            <form method="post" action="delete_file.php">
                                                <input type="hidden" name="file_id" value="<?php echo $file_id; ?>">
                                                <input type="hidden" name="class_id" value="<?php echo $id_class; ?>">
                                                <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>

                                                <button class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- end delete modal -->
                                <?php } ?>
                                </tbody>
                            </table>
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



