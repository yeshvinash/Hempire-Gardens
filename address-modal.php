<!DOCTYPE html>
<html lang="en">
<?php 
  $title = "Hempire Gardens | Video Screen";
  include_once("./includes/head.php")
?>

<body>

  <!-- HEADER START -->
  <?php include_once("./includes/header.php") ?>
  <!-- HEADER END -->

  <!-- Add a New Address MODAL START -->
  <button data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add a New Address</button>

  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl address-modal">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title text-blue-gray fw-semibold" id="staticBackdropLabel">Add a New Address</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="address-form">
            <div class="address-input-group">
              <div>
                <label for="firstName" class="custom-label small">First Name</label>
                <div class="position-relative">
                  <span class="input-icon auth-icon auth-left-icon position-absolute">
                    <i class="flex-center" data-icon="profile"></i>
                  </span>
                  <input type="text" id="firstName" name="firstName"
                    class="form-control custom-input small-input left-icon-input" placeholder="Enter Name">
                </div>
              </div>
              <div>
                <label for="lastName" class="custom-label small">Last Name</label>
                <div class="position-relative">
                  <span class="input-icon auth-icon auth-left-icon position-absolute">
                    <i class="flex-center" data-icon="profile"></i>
                  </span>
                  <input type="text" id="lastName" name="lastName"
                    class="form-control custom-input small-input left-icon-input" placeholder="Enter Name">
                </div>
              </div>
              <div>
                <label for="companyName" class="custom-label small">Company Name</label>
                <div class="position-relative">
                  <span class="input-icon auth-icon auth-left-icon position-absolute">
                    <i class="flex-center" data-icon="building"></i>
                  </span>
                  <input type="text" id="companyName" name="companyName"
                    class="form-control custom-input small-input left-icon-input" placeholder="Enter Company Name">
                </div>
              </div>
              <div>
                <label for="mobileNo" class="custom-label small">Mobile Number</label>
                <div class="position-relative">
                  <span class="input-icon auth-icon auth-left-icon position-absolute">
                    <i class="flex-center" data-icon="mobile"></i>
                  </span>
                  <input type="text" id="mobileNo" name="mobileNo"
                    class="form-control custom-input small-input left-icon-input" placeholder="Enter Mobile Number">
                </div>
              </div>
              <div>
                <label for="defaultAdd" class="custom-label small">Default Address</label>
                <div class="position-relative">
                  <span class="textarea-icon auth-icon auth-left-icon position-absolute">
                    <i class="flex-center" data-icon="map"></i>
                  </span>
                  <textarea name="defaultAdd" id="defaultAdd" cols="30" rows="10"
                    class="form-control custom-input small-input left-icon-input"
                    placeholder="Enter Address"></textarea>
                </div>
              </div>
              <div>
                <label for="secondaryAdd" class="custom-label small">Secondary Address</label>
                <div class="position-relative">
                  <span class="textarea-icon auth-icon auth-left-icon position-absolute">
                    <i class="flex-center" data-icon="map"></i>
                  </span>
                  <textarea name="secondaryAdd" id="secondaryAdd" cols="30" rows="10"
                    class="form-control custom-input small-input left-icon-input"
                    placeholder="Enter Address"></textarea>
                </div>
              </div>
              <div>
                <label for="firstName" class="custom-label small">First Name</label>
                <div class="position-relative">
                  <span class="input-icon auth-icon auth-left-icon position-absolute">
                    <i class="flex-center" data-icon="profile"></i>
                  </span>
                  <input type="text" id="firstName" name="firstName"
                    class="form-control custom-input small-input left-icon-input" placeholder="Enter Name">
                </div>
              </div>
              <div>
                <label for="lastName" class="custom-label small">Last Name</label>
                <div class="position-relative">
                  <span class="input-icon auth-icon auth-left-icon position-absolute">
                    <i class="flex-center" data-icon="profile"></i>
                  </span>
                  <input type="text" id="lastName" name="lastName"
                    class="form-control custom-input small-input left-icon-input" placeholder="Enter Name">
                </div>
              </div>
              <div>
                <label for="companyName" class="custom-label small">Company Name</label>
                <div class="position-relative">
                  <span class="input-icon auth-icon auth-left-icon position-absolute">
                    <i class="flex-center" data-icon="building"></i>
                  </span>
                  <input type="text" id="companyName" name="companyName"
                    class="form-control custom-input small-input left-icon-input" placeholder="Enter Company Name">
                </div>
              </div>
              <div>
                <label for="mobileNo" class="custom-label small">Mobile Number</label>
                <div class="position-relative">
                  <span class="input-icon auth-icon auth-left-icon position-absolute">
                    <i class="flex-center" data-icon="mobile"></i>
                  </span>
                  <input type="text" id="mobileNo" name="mobileNo"
                    class="form-control custom-input small-input left-icon-input" placeholder="Enter Mobile Number">
                </div>
              </div>
            </div>
            <div class="custom-checkbox-wrap position-relative d-inline-flex align-items-center">
              <input id="defaultAddress" type="checkbox" class="checkbox-input" value="">
              <div class="custom-checkbox flex-center">
                <i class="flex-center" data-icon="tick"></i>
              </div>
              <label for="defaultAddress" class="checkbox-label ">Set as default address</label>
            </div>
            <button class="custom-btn btn-bright-green mx-auto">Add</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Add a New Address MODAL END -->

  <!-- JOIN MAIL START -->
  <?php include_once("./includes/join-mail.php") ?>
  <!-- JOIN MAIL END -->

  <!-- FOOTER START -->
  <?php include_once("./includes/footer.php") ?>
  <!-- FOOTER END -->

  <!-- SCRIPTS START -->
  <?php include_once("./includes/script.php") ?>
  <!-- SCRIPTS END -->

</body>

</html>