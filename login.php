<!DOCTYPE html>
<html lang="en">
<?php 
  $title = "Hempire Gardens | Login";
  include_once("./includes/head.php")
?>

<body>

  <section class="ath-section">
    <div class="auth-wrap">
      <div class="auth-left">
        <div class="auth-img-wrap">
          <div class="auth-img position-relative">
            <img src="assets/images/cover/auth/auth-left.png" alt="auth-img" class="img img-cover">
          </div>
        </div>
        <h2 class="fw-semibold mb-0"><span class="text-white">Hempire</span> <span class="text-green">Gardens</span>
        </h2>
      </div>
      <div class="auth-right">
        <div class="auth-content-wrap">
          <div class="unlock-wrap unlock-auth mx-auto flex-center">
            <i class="flex-center" data-icon="unLock"></i>
          </div>
          <h4 class="text-blue-gray fw-semibold lh-1 text-center auth-title">Welcome Back!</h4>
          <div class="login-option-wrap">
            <button class="login-option-btn with-google">
              <span class="login-btn-icon flex-center">
                <i data-icon="google" class="flex-center"></i>
              </span>
              Login with Google
            </button>
            <button class="login-option-btn with-apple">
              <span class="login-btn-icon flex-center">
                <i data-icon="appleIcon" class="flex-center"></i>
              </span>
              Login with Apple
            </button>
          </div>
          <h6 class="option-text text-center d-block fw-normal text-capitalize">or</h6>
          <form class="auth-form">
            <div class="auth-input-wrap">
              <div class="auth-input-group">
                <label for="email" class="custom-label small">Email Address</label>
                <div class="position-relative">
                  <span class="input-icon auth-icon auth-left-icon position-absolute">
                    <i class="flex-center" data-icon="email"></i>
                  </span>
                  <input type="email" id="email" name="email"
                    class="form-control custom-input small-input left-icon-input" placeholder="Enter your email">
                </div>
              </div>
              <div class="auth-input-group">
                <label for="password" class="custom-label small">Password</label>
                <div class="position-relative">
                  <span class="input-icon auth-icon auth-left-icon position-absolute">
                    <i class="flex-center" data-icon="key"></i>
                  </span>
                  <span class="input-icon auth-icon flex-center auth-right-icon position-absolute">
                    <button class="bg-transparent border-0 p-0 m-0">
                      <i class="flex-center" data-icon="eyeClose"></i>
                    </button>
                  </span>
                  <input type="password" id="password" name="password"
                    class="form-control custom-input small-input left-icon-input right-icon-input"
                    placeholder="Enter Password">
                </div>
              </div>
            </div>
            <button class="custom-btn btn-bright-green w-100">Log In</button>
          </form>
          <a href="javascript:void(0)"
            class="forgot-password-link text-center d-block fw-medium text-decoration-none">Forgot Password?</a>
          <span class="mt-xl-auto mt-5 fw-normal switch-option text-center">Don’t have an account? <a href="javascript:void(0)"
              class="fw-medium">Sign Up</a></span>
        </div>
      </div>
    </div>
  </section>

  <!-- SCRIPTS START -->
  <?php include_once("./includes/script.php") ?>
  <!-- SCRIPTS END -->

</body>

</html>