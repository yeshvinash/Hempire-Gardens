<!DOCTYPE html>
<html lang="en">
<?php 
  $title = "Hempire Gardens | Forgot Password";
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
            <i class="flex-center" data-icon="lockDot"></i>
          </div>
          <h4 class="text-blue-gray fw-semibold lh-1 text-center auth-title">Forgot Password</h4>
          <h6 class="fw-normal text-center forgot-tagline">To Forgot your Password, enter the Email Address
            you use to Log In to Hempire Gardens.</h6>
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
            </div>
            <button class="custom-btn btn-bright-green w-100">Send Link</button>
          </form>
          <span class="mt-xl-auto mt-5 fw-normal switch-option text-center"><a
              href="javascript:void(0)" class="fw-medium">Go back and try One more time</a></span>
        </div>
      </div>
    </div>
  </section>

  <!-- SCRIPTS START -->
  <?php include_once("./includes/script.php") ?>
  <!-- SCRIPTS END -->

</body>

</html>