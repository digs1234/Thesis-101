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
            <li><a href="index.php"><i class="fas fa-home"></i>&nbsp;&nbsp;Home</a></li>
            <li><a href="contact.php"><i class="fas fa-phone-square"></i>&nbsp;&nbsp;Contact</a></li>
            <li><a href="sitemap.php"><i class="fas fa-sitemap"></i>&nbsp;&nbsp;Site Map</a></li><hr>
            <li><a href="#" data-toggle="modal" data-target="#modal5"><i class="far fa-eye"></i>&nbsp;&nbsp;Vission</a></li>
            <li><a href="#" data-toggle="modal" data-target="#modal6"><i class="fab fa-medium"></i>&nbsp;&nbsp;Mission</a></li>
            <li><a href="#" data-toggle="modal" data-target="#modal7"><i class="fas fa-bullseye"></i>&nbsp;&nbsp;General Objectives</a></li>
          </ul>
        </div>
            <!--Modal code -->
          <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="modal1-label">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title"><i class="far fa-eye"></i>&nbsp;&nbsp;</i>Vission</h4>
                </div>
                <div class="modal-body">
                  <p>The <strong>College of Science</strong> aspires to be recognized as a center of excellence for learning where human talents and skills are honed to their fullest potentials in an environment that promotes highest academic standards and cultural values.</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" id="close">Close</button>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="modal1-label">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title"><i class="fab fa-medium"></i>&nbsp;&nbsp;Mission</h4>
                </div>
                <div class="modal-body">
                  <p>The <strong>College of Science</strong> will devote its human and material resources to improve knowledge, develop skills, cultivate values, conduct research studies, and facilitate extension promotive of the goals of nation-building and lofty human aspirations in the fields of sciences and mathematics.</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" id="close">Close</button>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="modal1-label">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title"><i class="fas fa-bullseye"></i>&nbsp;&nbsp;General Objectives</h4>
                </div>
                <div class="modal-body">
                  <ul>
                    <li><p>Promote the holistic development of the students by providing them with opportunities to grow in wisdom and competence in their chosen vocation.</p></li><br>

                    <li><p>Equip the students with the potential to transform knowledge and acquired skills into marketable capabilities that would effectively facilitate their successful integration to the work force and become productive, creative, and self-actualized individuals.</p></li><br>

                    <li><p>Effectively impart the requisites to the development of proper perspectives, outlook, and dispositions that would contribute towards a meaningful and fulfilling existence as a member of humane society.</p></li>
                  </ul>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" id="close">Close</button>
                </div>
              </div>
            </div>
          </div>
        <div class="col-lg-6" id="col2">
          <div class="alert alert-info" id="pop" style="margin-top: -50px; width: 100%;">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong><i class="fas fa-home"></i>&nbsp;Home!</strong>&nbsp;
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
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" id="close">Close</button>
                      <div class="register">
                        <h1>Student Registration</h1>
                      <form method="post" action="student_register.php" enctype="multipart/form-data">
                        <label for="name"><i class="fas fa-user"></i></label>
                          <input type="text" name="fsname" placeholder="First Name" required>
                        <label for="name"><i class="fas fa-user"></i></label>
                          <input type="text" name="lsname" placeholder="Last Name" required>
                        <label for="name"><i class="fas fa-user"></i></label>
                          <input type="text" name="msname" placeholder="Middle Name" required>
                        <label for="username"><i class="fas fa-user"></i></label>
                          <input type="text" name="sname" placeholder="Username" required>
                        <label for="password"><i class="fas fa-lock"></i></label>
                          <input type="password" name="spass" placeholder="Password" required>
                        <label for="mobile"><i class="fas fa-mobile-alt"></i></label>
                          <input type="text" pattern="[0-9]*" name="smobile" placeholder="Contact No."/>
                        <label for="email"><i class="fas fa-envelope"></i></label>
                          <input type="email" name="semail" placeholder="Email" required>
                        <label for="saddr"><i class="fas fa-map-marker-alt"></i></label>&nbsp;
                          <textarea name="saddr" rows="1" cols="36"></textarea>
                        <label for="gender" style="margin: 10px 180px 0 0;"><i class="fas fa-venus-mars"></i></label>
                        <label for="radiomale" style="margin-top: 10px;">Male</label>
                           <input type="radio" id="radiomale" name="sgender" value="m" style="margin-top: 30px;">
                        <label for="radiofemale" style="margin-top: 10px;">Female</label>
                          <input type="radio" id="radiofemale" name="sgender" value="f" style="margin-top: 30px;">
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
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" id="close">Close</button>
                    <div class="register">
                      <h1>Teacher Registration</h1>
                    <form method="post" action="teacher_register.php" enctype="multipart/form-data">
                       <label for="name"><i class="fas fa-user"></i></label>
                          <input type="text" name="faname" placeholder="First Name" required>
                        <label for="name"><i class="fas fa-user"></i></label>
                          <input type="text" name="laname" placeholder="Last Name" required>
                        <label for="name"><i class="fas fa-user"></i></label>
                          <input type="text" name="maname" placeholder="Middle Name" required>
                      <label for="username"><i class="fas fa-user"></i></label>
                        <input type="text" name="aname" placeholder="Username" required>
                      <label for="password"><i class="fas fa-lock"></i></label>
                        <input type="password" name="apass" placeholder="Password" required>
                      <label for="mobile"><i class="fas fa-mobile-alt"></i></label>
                        <input type="text" pattern="[0-9]*" name="amobile" placeholder="Contact No."/>
                      <label for="email"><i class="fas fa-envelope"></i></label>
                        <input type="email" name="aemail" placeholder="Email" required>
                        <label for="saddr"><i class="fas fa-map-marker-alt"></i></label>&nbsp;
                          <textarea name="aaddr" rows="1" cols="36"></textarea>
                        <label for="gender" style="margin: 10px 180px 0 0;"><i class="fas fa-venus-mars"></i></label>
                        <label for="radiomale" style="margin-top: 10px;">Male</label>
                           <input type="radio" id="radiomale" name="agender" value="m" style="margin-top: 30px;">
                        <label for="radiofemale" style="margin-top: 10px;">Female</label>
                          <input type="radio" id="radiofemale" name="agender" value="f" style="margin-top: 30px;">
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