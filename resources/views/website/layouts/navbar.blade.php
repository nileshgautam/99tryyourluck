<ul class="transition">
    <li></li>
</ul>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-gradient shadow py-1 sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="assets/img/logo.png" alt="logo" width="50" height="50">
        </a>
        <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbar"
            aria-controls="navbar">
            <span class="navbar-toggler-icon text-black"></span>
        </button>

        <div class="offcanvas offcanvas-end sidebar-color" id="navbar">
            <div class="offcanvas-header">
                <a class="offcanvas-title" href="index.php">
                    <img src="assets/img/logo.png" alt="logo" width="50" height="50">
                </a>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav mx-auto">
                    <!-- <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('daily-games') }}">Daily Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('weekly-games') }}">Weekly Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('bi-monthly-games') }}">Bi-Monthly Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('monthly-games')}}">Monthly Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('play-game')}}">Winning Entries</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Promotions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('contact')}}">Contact Us</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <button class="btn btn-warning me-3 mb-2" type="button" data-bs-toggle="modal"
                            data-bs-target="#loginModal">Login</button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-secondary mb-2" type="button" data-bs-toggle="modal"
                            data-bs-target="#signUpModal">Signup</button>
                    </li>
                    <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle d-inline-flex align-items-center " href="#" id="profile-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="assets/img/avatar.png" alt="avatar" class="d-block nav-avatar">
            <span>Rahul Rawat</span>
        </a>
        <ul class="dropdown-menu" aria-labelledby="profile-dropdown">
          <li><a class="dropdown-item" href="profile.php">My Profile</a></li>
          <li><a class="dropdown-item" href="#">Logout</a></li>
        </ul>
      </li> -->
                </ul>
            </div>
        </div>
    </div>
</nav>

<!--Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content LoginImg text-dark p-3 rounded-3">
            <div class="modal-header">
                <h5 class="modal-title text-white z-index" id="loginModalLabel">Login</h5>
                <button type="button" class="btn-close bg-light z-index " data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" id="loginForm" method="POST">
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label text-white">Email</label>
                        <input type="email" name="email" class="form-control text-white" id="loginEmail">
                    </div>
                    <div class="mb-3">
                        <label for="loginPass" class="form-label text-white">Password</label>
                        <input type="password" name="password" class="form-control text-white" id="loginPass">
                    </div>
                    <div class="mb-3 d-flex align-items-center justify-content-between">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="loginRemember">
                            <label class="custom-control-label text-white" for="loginRemember">Remember me</label>
                        </div>
                        <div class="text-right">
                            <a href="forgot-password.php" class="text-warning ">Forgot password?</a>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </div>
                </form>

                <!-- <form action="#" method="POST" class="p-3" id="loginForm" novalidate="novalidate">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                <label for="email" class="text-white">Email</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="password" maxlength="6">
                <label for="password" class="text-white">Password</label>
              </div>
              <div class="mb-3 d-flex align-items-center justify-content-between">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="loginRemember">
              <label class="custom-control-label text-white" for="loginRemember">Remember me</label>
            </div>
            <div class="text-right">
              <a href="forgot-password.php" class="text-warning text-decoration-none">Forgot password?</a>
            </div>
          </div>
              <div class="form-group">
                <button type="login" class="btn btn-primary w-100">Login</button>
              </div>
        </form> -->

            </div>
        </div>
    </div>
</div>
<!--Login Modal -->
<div class="modal fade" id="signUpModal" tabindex="-1" aria-labelledby="signUpModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-dark p-3 LoginImg rounded-3">
            <div class="modal-header">
                <h5 class="modal-title text-white z-index" id="signUpModalLabel">Signup</h5>
                <button type="button" class="btn-close bg-light z-index" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" id="signUpForm" method="POST">
                    <div class="mb-3">
                        <label for="signupName" class="form-label text-white">Name</label>
                        <input type="text" name="name" class="form-control text-white" id="signupName">
                    </div>
                    <div class="mb-3">
                        <label for="signupEmail" class="form-label text-white">Email</label>
                        <input type="email" name="email" class="form-control text-white" id="signupEmail">
                    </div>
                    <div class="mb-3">
                        <label for="signupPhone" class="form-label text-white">Phone</label>
                        <input type="text" name="phone" class="form-control text-white" id="signupPhone" maxlength="10">
                    </div>
                    <div class="mb-3">
                        <label for="signUpPass" class="form-label text-white">Password</label>
                        <input type="password" name="password text-white" class="form-control" id="signUpPass">
                    </div>
                    <div class="mb-3">
                        <label for="signUpPassConfirm" class="form-label text-white">Confirm Password</label>
                        <input type="password" name="confirmPassword" class="form-control text-white"
                            id="signUpPassConfirm">
                    </div>
                    <div class="mb-3 d-flex align-items-center justify-content-between">
                        <div class="text-right">
                            <a href="#" class="text-warning">Already have an account?</a>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary w-100 mb-2">Sign Up</button>
                        <small class="text-white">By clicking Sign up, you agree to the terms of use.</small>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--
<script>
    $(document).ready(function() {
        $('#emailOne').removeClass('error').addClass('is-invalid');
    });
</script> -->
