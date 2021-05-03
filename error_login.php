<?php
  include "header.php"
?>

  <?php
    include "nav.php"
  ?>
  <!--Header-->
  <?php 
    include "head.php"
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
        <div class="col-lg-9" id="col2">
           <div class="alert alert-info" style="margin-top: -50px; width: 90%;">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong><i class="fas fa-exclamation-triangle" id="error"></i>&nbsp;Error Logging In! Please Try Again</strong>&nbsp;
          </div>
            <div>
               <div class="login">
                <h1>Login</h1>
                <form action="student_login.php" method="post">
                  <label for="username">
                    <i class="fas fa-user"></i>
                  </label>
                  <input type="text" name="sname" placeholder="Username" required>
                  <label for="password">
                    <i class="fas fa-lock"></i>
                  </label>
                  <input type="password" name="spass" placeholder="Password" required>
                  <input type="submit" name="login">
                  <a href="#">Forgot Password?</a>
                </form>             
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
        <!--sidebar-->
  <?php
  include "footer.php"
?>