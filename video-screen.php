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
    <!-- video section start -->
    <div class="video-section-wrapper ">
        <div class="video-player">
            <video width="100%" controls id="CBD-affiliated-video">
                <source src="https://cdn.shopify.com/s/files/1/0273/1127/6110/files/affiliate_video_final.mp4"
                    type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="bg-blur">
        </div>
        <div class="video-section">
             <h3 class="text-center text-white fw-semibold lh-base mb-3">Understanding our new CBD affiliated
                    programme
                </h3>
                <button data-video="CBD-affiliated-video-play-button" class="custom-btn btn-bright-green mx-auto mt-5 ">Play Video</button>

        </div>
    </div>

    <!-- video section end -->

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