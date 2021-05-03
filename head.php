<header class="header">
  <div class="container-fluid mt-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-10">
          <a class="navbar-brand" href="#">
           <img src="assets/img/logo3.png" alt="Logo" class="rounded-circle" style="width: 200px;"></a>
            <h3 class="text-left" style="margin-top: -80px; margin-left: 220px; color: white;">FOR NEW MODE OF LEARNING</h3>
        </div>
            <div class="col-lg-2">
              <div class="dropdown">
                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;Login
                  </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu1" id="shome">
                      <a class="dropdown-item" data-toggle="modal" data-target="#modal1"><i class="fas fa-user"></i>&nbsp;&nbsp;Student</a>
                      <a class="dropdown-item"  data-toggle="modal" data-target="#modal2"><i class="fas fa-user-tie"></i>&nbsp;&nbsp;Teacher</a>
                    </div>
              </div>
              <!--Modal code -->
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
                </div>
            </div>
      </div>
    </div>
  </div>
</header>