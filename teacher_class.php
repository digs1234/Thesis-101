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
                <a href="teacher_add_class.php" class="btn btn-success btn-sm" id="close"><i class="fas fa-plus-circle"></i>&nbsp;Add Class</a>
                <br></br>
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-hover" id="example">
                        <div class="alert alert-info" id="pop">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i class="fas fa-users"></i>&nbsp;Class Table</strong>
                        </div>
                        <thead>
                            <tr>
                                <th>Class</th>
                                <th>Subject</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = mysqli_query($db,"select * from class where aid = '$session_aid'") or die(mysqli_error());
                            while ($row = mysqli_fetch_array($query)) {
                                $class_id = $row['class_id'];
                                ?>
                                <tr>

                            <td><a rel="tooltip"  title="View Class" id="<?php echo $class_id; ?>"  href="class.php<?php echo '?id='.$class_id; ?>" class="btn btn-info btn-sm">&nbsp;<i class="fas fa-users"></i>&nbsp;<?php echo $row['course_id']; ?></a></td>
                            <td><?php echo $row['subject_name']; ?></td> 

                            <td width="60" style="display: flex;">
                                <a title="Update Subject" id="<?php echo $class_id; ?>" href="#class_id<?php echo $class_id; ?>" role="button" data-toggle="modal" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></a>
                               &nbsp;&nbsp;<br>
                               
                                <a title="Delete Class" id="<?php echo $class_id; ?>" href="#course_id<?php echo $class_id; ?>" role="button"  data-toggle="modal" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
                            </td>
                             <!-- user update modal -->
                            <div id="class_id<?php echo $class_id; ?>" class="modal" tabindex="-1" role="dialog">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                <h5 class="modal-title">Edit Permanently</h5>
                                  </div>
                                 <div class="modal-body">
                                  <div class="alert alert-info">
                                  <form method="POST" action="edit_class.php">
                                  <label for="name"></label>Course ID:&nbsp;<i class="fas fa-users"></i>&nbsp;&nbsp;&nbsp;
                                  <input type="name" name="course_id" value="<?php echo $row['course_id']; ?>"><br><br>
                                  <label for="name"></label>Subject Name:&nbsp;<i class="fas fa-book"></i>
                                  <input type="name" name="subject_name" value="<?php echo $row['subject_name']; ?>">
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <input type="submit" name="Upate" id="close" class="btn btn-warning btn-sm" value="Update"/>
                                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal" id="close">Close</button>
                                </div>
                                  </form>
                              </div>
                            </div>
                          </div>
                            <!-- end update modal -->
                            <!-- user delete modal -->
                            <div id="course_id<?php echo $class_id; ?>" class="modal" tabindex="-1" role="dialog">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                <h5 class="modal-title">Delete Permanently</h5>
                                  </div>
                                <div class="modal-body">
                                    <div class="alert alert-danger">Are you Sure you Want to <strong>Delete</strong>&nbsp; this Class?</div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-dafault btn-sm" id="close" data-dismiss="modal">Close</button>&nbsp;
                                    <a href="delete_class.php<?php echo '?id=' . $class_id; ?>" class="btn btn-danger btn-sm" id="close"><i class="far fa-trash-alt"></i>&nbsp;Delete</a>
                                </div>
                               </div>
                              </div>
                            </div>
                            <!-- end delete modal -->
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>


    <?php
    include "footer.php";
 ?>