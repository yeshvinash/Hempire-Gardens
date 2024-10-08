<!DOCTYPE html>
<html lang="en">
<?php 
  $title = "Hempire Gardens | Reset Password";
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
            <i class="flex-center" data-icon="pwdCheck"></i>
          </div>
          <h4 class="text-blue-gray fw-semibold lh-1 text-center auth-title">Reset Password</h4>
          <h6 class="fw-normal text-center forgot-tagline">Your New Password must be different form Previous
            used Password.</h6>
          <form class="auth-form">
            <div class="auth-input-wrap">
              <div class="auth-input-group">
                <label for="newPassword" class="custom-label small">New Password</label>
                <div class="position-relative">
                  <span class="input-icon auth-icon auth-left-icon position-absolute">
                    <i class="flex-center" data-icon="key"></i>
                  </span>
                  <input type="password" id="newPassword" name="newPassword"
                    class="form-control custom-input small-input left-icon-input" placeholder="Enter a New Password">
                </div>
              </div>
              <div class="auth-input-group">
                <label for="confirmPassword" class="custom-label small">Confirm New Password</label>
                <div class="position-relative">
                  <span class="input-icon auth-icon auth-left-icon position-absolute">
                    <i class="flex-center" data-icon="key"></i>
                  </span>
                  <span class="input-icon auth-icon flex-center auth-right-icon position-absolute">
                    <button class="bg-transparent border-0 p-0 m-0">
                      <i class="flex-center" data-icon="eyeClose"></i>
                    </button>
                  </span>
                  <input type="password" id="confirmPassword" name="confirmPassword"
                    class="form-control custom-input small-input left-icon-input right-icon-input"
                    placeholder="Confirm New Password">
                </div>
              </div>
            </div>
            <button class="custom-btn btn-bright-green w-100">Reset Password</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- SCRIPTS START -->
  <?php include_once("./includes/script.php") ?>
  <!-- SCRIPTS END -->

</body>

</html>