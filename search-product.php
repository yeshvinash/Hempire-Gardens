<!DOCTYPE html>
<html lang="en">
<?php 
  $title = "Hempire Gardens | Home";
  include_once("./includes/head.php")
?>

<body>

  <!-- HEADER START -->
  <?php include_once("./includes/header.php") ?>
  <!-- HEADER END -->

  <section class="space-top-sm search-page">
    <div class="container">
      <h5 class="big text-uppercase text-center text-blue-gray fw-semibold search-page-title">Search for Products
        on Our Site</h5>
      <form class="searchbar-form d-flex align-flex-center justify-content-between">
        <div class="position-relative w-100">
          <span class="position-absolute input-icon email-icon">
            <i data-icon="search" class="flex-center"></i>
          </span>
          <input type="search" name="search" class="search-input font-18" placeholder="Search">
        </div>
        <button class="custom-btn btn-bright-green">Search</button>
      </form>
      <div>
        <div class="container-fluid">
          <div class="row gy-5">
            <div class="col-lg-6 col-12">
              <div class="search-page-product-card">
                <div class="cart-item d-flex align-items-center">
                  <div>
                    <div class="img-wrapper d-flex justify-content-center align-items-center">
                      <div class="img-container">
                        <img src="./assets/images/cart-items/cart-item.png" class="img-fluid">
                      </div>
                    </div>
                  </div>
                  <div class="flex-grow-1 content">
                    <div class="d-flex justify-content-between">
                      <div>
                        <h6 class="fw-semibold text-blue-gray mb-0">Jack Herer-CBD Flower | Qty : 25g
                        </h6>
                        <h6 class="fw-normal mt-3 pt-1 description mb-0">11-12% CBD Hand manicured to
                          perfection No
                          small buds, seeds or leafy material...</h6>
                        <h5 class="text-jungle-green fw-semibold product-prize mb-0">€249.99</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-12">
              <div class="search-page-product-card">
                <div class="cart-item d-flex align-items-center">
                  <div>
                    <div class="img-wrapper d-flex justify-content-center align-items-center">
                      <div class="img-container">
                        <img src="./assets/images/cart-items/cart-item.png" class="img-fluid">
                      </div>
                    </div>
                  </div>
                  <div class="flex-grow-1 content">
                    <div class="d-flex justify-content-between">
                      <div>
                        <h6 class="fw-semibold text-blue-gray mb-0">Jack Herer-CBD Flower | Qty : 25g
                        </h6>
                        <h6 class="fw-normal mt-3 pt-1 description mb-0">11-12% CBD Hand manicured to
                          perfection No
                          small buds, seeds or leafy material...</h6>
                        <h5 class="text-jungle-green fw-semibold product-prize mb-0">€249.99</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-12">
              <div class="search-page-product-card">
                <div class="cart-item d-flex align-items-center">
                  <div>
                    <div class="img-wrapper d-flex justify-content-center align-items-center">
                      <div class="img-container">
                        <img src="./assets/images/cart-items/cart-item.png" class="img-fluid">
                      </div>
                    </div>
                  </div>
                  <div class="flex-grow-1 content">
                    <div class="d-flex justify-content-between">
                      <div>
                        <h6 class="fw-semibold text-blue-gray mb-0">Jack Herer-CBD Flower | Qty : 25g
                        </h6>
                        <h6 class="fw-normal mt-3 pt-1 description mb-0">11-12% CBD Hand manicured to
                          perfection No
                          small buds, seeds or leafy material...</h6>
                        <h5 class="text-jungle-green fw-semibold product-prize mb-0">€249.99</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-12">
              <div class="search-page-product-card">
                <div class="cart-item d-flex align-items-center">
                  <div>
                    <div class="img-wrapper d-flex justify-content-center align-items-center">
                      <div class="img-container">
                        <img src="./assets/images/cart-items/cart-item.png" class="img-fluid">
                      </div>
                    </div>
                  </div>
                  <div class="flex-grow-1 content">
                    <div class="d-flex justify-content-between">
                      <div>
                        <h6 class="fw-semibold text-blue-gray mb-0">Jack Herer-CBD Flower | Qty : 25g
                        </h6>
                        <h6 class="fw-normal mt-3 pt-1 description mb-0">11-12% CBD Hand manicured to
                          perfection No
                          small buds, seeds or leafy material...</h6>
                        <h5 class="text-jungle-green fw-semibold product-prize mb-0">€249.99</h5>
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
  </section>

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