<!DOCTYPE html>
<html lang="en">
<?php 
  $title = "Hempire Gardens | Product Collection";
  include_once("./includes/head.php")
?>

<body>



    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#searchOffCanvas"
        aria-controls="offcanvasRight">Search</button>

    <div class="offcanvas offcanvas-end product-offcanvas product-search-offcanvas" tabindex="-1" id="searchOffCanvas"
        aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <button type="button" class="btn-close text-reset product-offcanvas-close-btn" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="mb-5 pb-1">
                <h3 class="fw-semibold text-blue-gray mb-4 pb-3">Search for Products on Our Site</h3>
                <form class="searchbar-form d-flex align-flex-center justify-content-between">
                    <div class="position-relative w-100">
                        <span class="position-absolute input-icon email-icon">
                            <i data-icon="search" class="flex-center"></i>
                        </span>
                        <input type="search" name="search" class="search-input font-18" placeholder="Search">
                    </div>
                    <button class="custom-btn btn-bright-green">Search</button>
                </form>
                <span class="d-block form-label-text-wrap font-18">Your search for "cbd" revealed the following :</span>
            </div>
            <div class="">
                <h5 class="big mb-4 pb-3 text-blue-gray fw-semibold">CBD Products</h5>
                <div class="cbd-products-container">
                    <div class="products-items product-card-bg text-decoration-none">
                        <div class="position-absolute label-wrap">
                            <span class="text-uppercase sold-out-label">Sold Out</span>
                        </div>
                        <a href="javascript:void(0)" class="product-cards-img">
                            <img src="./assets/images/cover/our-shop/product-1.png" alt="products-items"
                                class="img-contain">
                        </a>
                        <div class="products-items-card-body mt-auto">
                            <span class="text-blue-gray fw-semibold mb-3 card-title-wrap text-break d-inline-block">75%
                                HHC Crumble Blue-
                                berry Cookies</span>
                            <div class="d-flex align-flex-start justify-content-between">
                                <h5 class="h5 mb-0 text-jungle-green">€79.99</h5>
                                <span class="products-icon"><i data-icon="category" class="flex-center"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="products-items product-card-bg text-decoration-none">
                        <div class="position-absolute label-wrap">
                            <span class="text-uppercase sold-out-label">Sold Out</span>
                        </div>
                        <a href="javascript:void(0)" class="product-cards-img">
                            <img src="./assets/images/cover/our-shop/product-2.png" alt="products-items"
                                class="img-contain">
                        </a>
                        <div class="products-items-card-body mt-auto">
                            <span
                                class="text-blue-gray fw-semibold mb-3 card-title-wrap text-break d-inline-block">Amnesia Haze CBD
                                Flower</span>
                            <div class="d-flex align-flex-start justify-content-between">
                                <h5 class="h5 mb-0 text-jungle-green">€79.99</h5>
                                <span class="products-icon"><i data-icon="category" class="flex-center"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="products-items product-card-bg text-decoration-none">
                        <div class="position-absolute label-wrap">
                            <span class="text-uppercase sold-out-label">Sold Out</span>
                        </div>
                        <a href="javascript:void(0)" class="product-cards-img">
                            <img src="./assets/images/cover/our-shop/product-1.png" alt="products-items"
                                class="img-contain">
                        </a>
                        <div class="products-items-card-body mt-auto">
                            <span
                                class="text-blue-gray fw-semibold mb-3 card-title-wrap text-break d-inline-block">75% HHC Crumble Blue-
                                berry Cookies</span>
                            <div class="d-flex align-flex-start justify-content-between">
                                <h5 class="h5 mb-0 text-jungle-green">€79.99</h5>
                                <span class="products-icon"><i data-icon="category" class="flex-center"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="products-items product-card-bg text-decoration-none">
                        <div class="position-absolute label-wrap">
                            <span class="text-uppercase sold-out-label">Sold Out</span>
                        </div>
                        <a href="javascript:void(0)" class="product-cards-img">
                            <img src="./assets/images/cover/our-shop/product-2.png" alt="products-items"
                                class="img-contain">
                        </a>
                        <div class="products-items-card-body mt-auto">
                            <span
                                class="text-blue-gray fw-semibold mb-3 card-title-wrap text-break d-inline-block">Amnesia Haze CBD
                                Flower</span>
                            <div class="d-flex align-flex-start justify-content-between">
                                <h5 class="h5 mb-0 text-jungle-green">€79.99</h5>
                                <span class="products-icon"><i data-icon="category" class="flex-center"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="products-items product-card-bg text-decoration-none">
                        <div class="position-absolute label-wrap">
                            <span class="text-uppercase sold-out-label">Sold Out</span>
                        </div>
                        <a href="javascript:void(0)" class="product-cards-img">
                            <img src="./assets/images/cover/our-shop/product-1.png" alt="products-items"
                                class="img-contain">
                        </a>
                        <div class="products-items-card-body mt-auto">
                            <span
                                class="text-blue-gray fw-semibold mb-3 card-title-wrap text-break d-inline-block">75% HHC Crumble Blue-
                                berry Cookies</span>
                            <div class="d-flex align-flex-start justify-content-between">
                                <h5 class="h5 mb-0 text-jungle-green">€79.99</h5>
                                <span class="products-icon"><i data-icon="category" class="flex-center"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="products-items product-card-bg text-decoration-none">
                        <div class="position-absolute label-wrap">
                            <span class="text-uppercase sold-out-label">Sold Out</span>
                        </div>
                        <a href="javascript:void(0)" class="product-cards-img">
                            <img src="./assets/images/cover/our-shop/product-2.png" alt="products-items"
                                class="img-contain">
                        </a>
                        <div class="products-items-card-body mt-auto">
                            <span
                                class="text-blue-gray fw-semibold mb-3 card-title-wrap text-break d-inline-block">Amnesia Haze CBD
                                Flower</span>
                            <div class="d-flex align-flex-start justify-content-between">
                                <h5 class="h5 mb-0 text-jungle-green">€79.99</h5>
                                <span class="products-icon"><i data-icon="category" class="flex-center"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- SCRIPTS START -->
    <?php include_once("./includes/script.php") ?>
    <!-- SCRIPTS END -->

</body>

</html>