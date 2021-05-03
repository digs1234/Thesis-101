<?php
  include "home/header.php"
?>

  <?php
    include "home/nav.php"
  ?>
  <!--Header-->
  <?php 
    include "home/head.php"
  ?>
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
            <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="contact.php"><i class="fas fa-phone-square"></i> Contact</a></li>
            <li><a href="sitemap.php"><i class="fas fa-sitemap"></i> Site Map</a></li>
            <li><p class="text-muted" style="margin: 10px;"> About Us</p></a></li>
            <li><a href="#" data-toggle="modal" data-target="#modal5"><i class="fab fa-medium"></i> Mission</a></li>
            <li><a href="#" data-toggle="modal" data-target="#modal6"><i class="far fa-eye"></i> Vission</a></li>
            <li><a href="#" data-toggle="modal" data-target="#modal7"><i class="fas fa-bullseye"></i> Goal</a></li>
          </ul>
        </div>
            <!--Modal code -->
          <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="modal1-label">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title"><i class="fab fa-medium"></i> Mission</h4>
                </div>
                <div class="modal-body">
                  <p>The main objective of creating/developing this project is to give help for teachers and students whose struggling in the new mode of learning.</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="modal1-label">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title"><i class="far fa-eye"></i> Vission</h4>
                </div>
                <div class="modal-body">
                  <p>The project was created to become a user friendly. It is composed of basics icons and features that are mostly needed in an online platform.</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="modal1-label">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title"><i class="fas fa-bullseye"></i> Goal</h4>
                </div>
                <div class="modal-body">
                  <p>The main Goal of the team  is to develop a user friendly platform that will give help to those teachers and students whose struggling with the new mode of learning. Next to it is for thesis compliance of the team in order to graduate.</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        <div class="col-lg-6" id="col2">
           <div class="alert alert-info" id="pop" style="margin-top: -50px; width: 100%;">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong><i class="fas fa-phone-square"></i>&nbsp;Contacts!</strong>&nbsp;
          </div>
            <div>
              <ul>
                <li class="nav-item">
                  <a class="nav-link" href="facebook.com"><i class="fab fa-facebook-square"></i> Facebook: batman16@facebook.com</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="gmail.com"><i class="far fa-envelope"></i> Gmail: dignum16@gmail.com</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Instagram.com"><i class="fab fa-instagram"></i> Instagram: N/A</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="twitter.com"><i class="fab fa-twitter-square"></i> Twitter: N/A</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fas fa-phone-square"></i> Phone No: 09503746690</a>
                </li>
              </ul>
            </div>
        </div>
        <div class="col-lg-3" id="col3">
            <h3 class="text-muted" id="h3"><strong>Create Account As:</strong></h3>
              <ul class="col4">
               <li><a href="#" data-toggle="modal" data-target="#modal3"><i class="fas fa-user"></i> Student</a></li><br>
                <li><a href="#" data-toggle="modal" data-target="#modal4"><i class="fas fa-user-tie"></i> Teacher</a></li>
              </ul>
          </div>
            <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal1-label">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                      <div class="register">
                        <h1>Student Registration</h1>
                      <form method="post" action="student_register.php" enctype="multipart/form-data">
                        <label for="username"><i class="fas fa-user"></i></label>
                          <input type="text" name="sname" placeholder="Username" required>
                        <label for="password"><i class="fas fa-lock"></i></label>
                          <input type="password" name="spass" placeholder="Password" required>
                        <label for="mobile"><i class="fas fa-mobile-alt"></i></label>
                          <input type="text" pattern="[0-9]*" name="smobile" placeholder="Contact No."/>
                        <label for="email"><i class="fas fa-envelope"></i></label>
                          <input type="email" name="semail" placeholder="Email" required>
                          <h4> Gender:</h4>
                            Male<input type="radio" name="sgender" value="m"/>
                            Female<input type="radio" name="sgender" value="f"/>
                          Address:<textarea name="saddr"></textarea>
                          <input type="submit" value="Register">
                          <input type="reset" value="Reset"/>
                          <a href="#" data-toggle="modal" data-target="#modal1">Already have an Account?</a>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="modal1-label">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    <div class="register">
                      <h1>Teacher Registration</h1>
                    <form method="post" action="student_register.php" enctype="multipart/form-data">
                      <label for="username"><i class="fas fa-user"></i></label>
                        <input type="text" name="aname" placeholder="Username" required>
                      <label for="password"><i class="fas fa-lock"></i></label>
                        <input type="password" name="apass" placeholder="Password" required>
                      <label for="mobile"><i class="fas fa-mobile-alt"></i></label>
                        <input type="text" pattern="[0-9]*" name="amobile" placeholder="Contact No."/>
                      <label for="email"><i class="fas fa-envelope"></i></label>
                        <input type="email" name="aemail" placeholder="Email" required>
                        <h4> Gender:</h4>
                          Male<input type="radio" name="agender" value="m"/>
                          Female<input type="radio" name="agender" value="f"/>
                        Address:<textarea name="aaddr"></textarea>
                        <input type="submit" value="Register">
                        <input type="reset" value="Reset"/>
                        <a href="#" data-toggle="modal" data-target="#modal2">Already have an Account?</a>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
        <!--sidebar-->
  <?php
  include "home/footer.php"
?>