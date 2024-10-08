<!DOCTYPE html>
<html lang="en">
<?php 
  $title = "Hempire Gardens | Contact";
  include_once("./includes/head.php")
?>

<body>

  <!-- HEADER START -->
  <?php include_once("./includes/header.php") ?>
  <!-- HEADER END -->

  <!-- HERO START -->
  <section class="hempire-hero contact-hero space-top-lg space-bottom-lg">
    <div class="container">
      <div class="our-shop-title text-center">
        <h2 class="big mb-0 text-white fw-semibold">Contact</h2>
        <p class="fw-normal mb-0 mt-3 pt-1 lh-lg h5 text-gray">Please fill in your details and we will Please fill in
          your details
          and we will contact you within 48 hours.</p>
      </div>
    </div>
  </section>
  <!-- HERO END -->

  <!-- FORM START -->
  <section class="space-top-md">
    <div class="container">
      <form class="contact-form">
        <div class="form-category-wrap">
          <h5 class="text-blue-gray fw-semibold mb-5 big">Full Name</h5>
          <div class="contact-input-group">
            <label for="userName" class="custom-label big">Enter Your Name</label>
            <input type="text" id="userName" name="userName" class="form-control custom-input big-input"
              placeholder="Type here...">
          </div>
        </div>
        <div class="form-category-wrap">
          <h5 class="text-blue-gray fw-semibold mb-5 big">Company Details</h5>
          <div class="contact-input-group">
            <label for="companyName" class="custom-label big">Enter Company Name</label>
            <input type="text" id="companyName" name="companyName" class="form-control custom-input big-input"
              placeholder="Type here...">
          </div>
          <div class="contact-input-group">
            <label for="companyAddress" class="custom-label big">Address</label>
            <input type="text" id="companyAddress" name="companyAddress" class="form-control custom-input big-input"
              placeholder="Type here...">
          </div>
          <div class="contact-input-group">
            <div class="city-detail-wrap">
              <div>
                <label for="countryName" class="custom-label big">country</label>
                <input type="text" id="countryName" name="countryName" class="form-control custom-input big-input"
                  placeholder="Type here...">
              </div>
              <div>
                <label for="cityName" class="custom-label big">city</label>
                <input type="text" id="cityName" name="cityName" class="form-control custom-input big-input"
                  placeholder="Type here...">
              </div>
              <div>
                <label for="pinCode" class="custom-label big">pincode</label>
                <input type="text" id="pinCode" name="pinCode" class="form-control custom-input big-input"
                  placeholder="Type here...">
              </div>
            </div>
          </div>
        </div>
        <div class="form-category-wrap">
          <h5 class="text-blue-gray fw-semibold mb-5 big">Contact Information</h5>
          <div class="contact-input-group">
            <div class="contact-detail-wrap">
              <div>
                <label for="contactEmail" class="custom-label big">email</label>
                <input type="email" id="contactEmail" name="contactEmail" class="form-control custom-input big-input"
                  placeholder="Enter your email">
              </div>
              <div>
                <label for="contactNo" class="custom-label big">phone</label>
                <input type="text" id="contactNo" name="contactNo" class="form-control custom-input big-input"
                  placeholder="Type here...">
              </div>
            </div>
          </div>
        </div>
        <div class="form-category-wrap">
          <h5 class="text-blue-gray fw-semibold mb-5 big">Other Information</h5>
          <div class="contact-input-group">
            <div class="other-info-wrap">
              <div>
                <div class="contact-input-group">
                  <label for="subject" class="custom-label big">Select Subject</label>
                  <select name="subject" id="subject" class="form-select custom-input big-input"
                    placeholder="Samples Order">
                    <option selected>Samples Order</option>
                    <option value="subject 1">subject 1</option>
                    <option value="subject 2">subject 2</option>
                    <option value="subject 3">subject 3</option>
                    <option value="subject 4">subject 4</option>
                  </select>
                </div>
              </div>
              <div>
                <div class="contact-input-group">
                  <label for="wayConnect" class="custom-label big">How Would You Like us to Contact You</label>
                  <select name="wayConnect" id="wayConnect" class="form-select custom-input big-input"
                    placeholder="Samples Order">
                    <option selected>Email</option>
                    <option value="Call">Call</option>
                    <option value="Message">Message</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="form-category-wrap">
          <h5 class="text-blue-gray fw-semibold mb-5 big">Message</h5>
          <div class="contact-input-group">
            <label for="message" class="custom-label big">Write Your Message</label>
            <textarea name="message id=" message" cols="30" rows="10" class="form-control custom-input big-input"
              placeholder="Type here..."></textarea>
          </div>
        </div>
          <button class="mx-auto custom-btn btn-bright-green">Submit</button>
      </form>
    </div>
  </section>
  <!-- FORM END -->

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