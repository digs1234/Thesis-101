<?php
    include"actions/connection.php";
    include"header.php";
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
                <a href="teacher_subject.php" class="btn btn-success btn-sm"><i class="fas fa-arrow-circle-left"></i>&nbsp;Back</a>
                <br>
                <br>
                  <div>
                      <div class="hero-unit-3">
                          <ul class="thumbnails">
                              <li class="span7">
                                  <div class="thumbnail">
                                      <div class="alert alert-info" id="pop"><i class="icon-plus-sign-alt icon-large"></i>&nbsp;Add Subject Entry</div>
                                      <?php 
                                      if(isset($_GET['id'])){
                                          $subject = mysqli_query($db, "SELECT * FROM subject where subject_id = {$_GET['id']}");
                                          foreach(mysqli_fetch_array($subject) as $k => $v){
                                              $$k = $v;
                                          }
                                      }
                                      ?>
                                      <form class="form-horizontal" method="POST">

                                          <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>">
                                          <div class="control-group">
                                              <label class="control-label" for="inputPassword">Subject Code:</label>
                                              <div class="controls">
                                                  <input type="text" name="sc" id="inputPassword" placeholder="Subject Code" required value="<?php echo isset($subject_code) ? $subject_code : "" ?>">
                                              </div>
                                          </div>
                                          <div class="control-group">
                                              <label class="control-label" for="inputPassword">Subject Title:</label>
                                              <div class="controls">
                                                  <input type="text" name="st" id="inputPassword" placeholder="Subject Title" required value="<?php echo isset($subject_title) ? $subject_title : "" ?>">
                                              </div>
                                          </div>
                                          <div class="control-group">
                                              <label class="control-label" for="inputPassword">Cateogry:</label>
                                              <div class="controls">
                                               
                                                  <select name="c" required>
                                                      <option></option>
                                                      <option <?php echo isset($category) && $category == "Major" ? 'selected' : ''  ?>>Major</option>
                                                      <option <?php echo isset($category) && $category == "Minor" ? 'selected' : ''  ?>>Minor</option>
                                                  </select>
                                              </div>
                                          </div>
                                            <br><br>
                                          <div class="control-group">
                                              <div class="controls">

                                                  <button type="submit" name="save" class="btn btn-info btn-sm"><i class="icon-save icon-large"></i>&nbsp;Save Subject</button>
                                              </div>
                                          </div>
                                      </form>

                                      <?php
                                      if (isset($_POST['save'])) {


                                          $sc = $_POST['sc'];
                                          $st = $_POST['st'];
                                          $category = $_POST['c'];


                                          if(empty($_POST['id']))
                                          mysqli_query($db,"insert into subject (subject_code,subject_name,category) values ('$sc','$st','$category')") or die(mysqli_error());
                                          else
                                          mysqli_query($db,"UPDATE subject set subject_code = '$sc',subject_title ='$st' ,category = '$category' where subject_id = {$_POST['id']}") or die(mysqli_error());

                                          echo('<script>location.href = "teacher_subject.php"</script>');
                                      }
                                      ?>

                                  </div>
                              </li>

                          </ul>
                      </div>


                  </div>
              </div>

              <?php include('footer.php'); ?>
          </div>
      </div>
    </div>