<?php
    include"actions/connection.php";
    include"home/header.php";
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
          <a class="dropdown-item" href="change_pass.php?id=<?php echo $student_row['sid']?>" id="<?php echo $id; ?>"><i class="fas fa-key"></i>&nbsp;&nbsp;Change Password</a>
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
            <strong><i class="fas fa-user-circle"></i>&nbsp;Welcome</strong>&nbsp;<?php echo $student_row['sname'];?>
          </div>
          <div id="myCarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
              <!-- Carousel indicators -->
              <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
              <!-- Wrapper for carousel items -->
              <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img src="assets/img/digs.jpg" alt="First Slide">
                      <div class="carousel-caption d-none d-md-block">
                          <h5>Main Programmer</h5>
                          <p>Paul Albert Dignum</p>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <img src="assets/img/rics.jpg" alt="Second Slide">
                      <div class="carousel-caption d-none d-md-block">
                          <h5>Assistant Programmer</h5>
                          <p>Ricolou V. Villagracia</p>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <img src="assets/img/jhei.jpg" alt="Third Slide">
                      <div class="carousel-caption d-none d-md-block">
                          <h5>Documentations</h5>
                          <p>Rogelio Lescano Jr.</p>
                      </div>
                  </div>
              </div>
              <!-- Carousel controls -->
              <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
              </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
        <!--sidebar-->

 <?php
  include "home/footer.php"; 
 ?>