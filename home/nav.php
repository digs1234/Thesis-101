<body>
<nav class="navbar sticky-top navbar-expand-lg bg-dark-custom_home">
    <div class="row width_hundred_home">
      <div class="col col-lg-8">
      <a class="navbar-brand logo_home" href="#">Logo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      </div>
      <div class="collapse navbar-collapse col col-lg-4" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto w-100 justify-content-end">
          <li class="nav-item col-lg-4 justify-content-end">
            <a class="nav-link link_formatter text_white" href="home/announcements-events.php">ANOUNCEMENT</a>
          </li>
          <li class="nav-item col-lg-4 justify-content-end">
            <a class="nav-link link_formatter text_white" href="home/about_us.php">ABOUT US</a>
          </li>
          <li class="nav-item col-lg-4 justify-content-end">
            <div class="dropdown">
            <a class="nav-link link_formatter text_white dropdown-toggle" data-toggle="dropdown">LOGIN</a>
              <!-- old button -->
                <!-- <button type="link" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;Login
                  </button> -->
                    <!-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenu1" id="shome">
                      <a class="dropdown-item" data-toggle="modal" data-target="#modal1"><i class="fas fa-user"></i>&nbsp;&nbsp;Student</a>
                      <a class="dropdown-item"  data-toggle="modal" data-target="#modal2"><i class="fas fa-user-tie"></i>&nbsp;&nbsp;Teacher</a>
                    </div> -->
                    <ul class="dropdown-menu dropdown-menu-lg-end"  id="shome">
                      <li><button class="dropdown-item" type="button" data-toggle="modal" data-target="#modal1"><i class="fas fa-user"></i>&nbsp;&nbsp;Student</button></li>
                      <li><button class="dropdown-item" type="button" data-toggle="modal" data-target="#modal2"><i class="fas fa-user-tie"></i>&nbsp;&nbsp;Teacher</button></li>
                    </ul>
                </ul>
              </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- modals -->
  <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1-label">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" id="close">Close</button>
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
  <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal1-label">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" id="close">Close</button>
              <div class="login">
              <h1>Login</h1>
              <form action="teacher_login.php" method="post">
                <label for="username">
                  <i class="fas fa-user"></i>
                </label>
                <input type="text" name="aname" placeholder="Username" required>
                <label for="password">
                  <i class="fas fa-lock"></i>
                </label>
                <input type="password" name="apass" placeholder="Password" required>
                <input type="submit" name="login">
                <a href="#">Forgot Password?</a>  
              </form>
            </div>
          </div>
        </div>
      </div>
  </div>
