<!DOCTYPE html>
<html lang="en">
<?php 
  $title = "Stylesheet";
  include_once("./includes/head.php")
?>

<body>

  <?php include_once("./includes/header.php") ?>
  <div class="container">
    <br>
    <button class="custom-btn btn-bright-green">Discover Us</button>
    <br>
    <button class="custom-btn btn-gray">View Products</button>
    <br>
    <button class="custom-btn btn-dark-green">
      <i class="btn-icon d-flex align-items-center" data-icon="bag"></i> Buy Now
    </button>
    <br>
    <h2 class="fw-semibold text-blue-gray title">Our Story</h2>

    <label class="custom-label big">label</label>
    <input type="text" class="form-control custom-input big-input" placeholder="big input">
    
    <br>

    <label class="custom-label small">label</label>
    <input type="text" class="form-control custom-input small-input" placeholder="small input">

    <br>

  </div>
  <?php include_once("./includes/footer.php") ?>

  <?php include_once("./includes/script.php") ?>

</body>

</html>