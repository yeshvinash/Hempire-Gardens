<!DOCTYPE html>
<html lang="en">
<?php 
  $title = "Hempire Gardens | Product Collection";
  include_once("./includes/head.php")
?>

<body>

    <!-- HEADER START -->
    <?php include_once("./includes/header.php") ?>
    <!-- HEADER END -->

    <!-- Product Collection Hero Section Start -->
    <section class="product-collection-bg space-top-lg space-bottom-lg hempire-hero">
        <div class="container">
            <div class="our-shop-title text-center">
                <h2 class="big mb-0 text-white fw-semibold">Product Collection</h2>
            </div>
        </div>
    </section>
    <!--  Product Collection Hero Section End -->


    <!-- Product Collection Section Start -->
    <section class="space-top-lg product-collection-wrap">
        <div class="container">
            <div class="d-flex h-100 position-relative">
                <div class="categories-wrap d-lg-block d-none  product-collection-categories">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 text-blue-gray fw-semibold">Categories</h5>
                        <button type="button" class="d-lg-none removeBtn"><i data-icon="close"
                                class="flex-center"></i></button>
                    </div>
                    <div class="categories-links-wrap">
                        <div class="categories-links">
                            <a href="javascript:void(0)" class="text-gray font-18 text-decoration-none">Autos</a>
                        </div>
                        <div class="categories-links">
                            <a href="javascript:void(0)" class="text-gray font-18 text-decoration-none">CBD Flowers</a>
                        </div>
                        <div class="categories-links">
                            <a href="javascript:void(0)" class="text-gray font-18 text-decoration-none">CBD Isolate</a>
                        </div>
                        <div class="categories-links">
                            <a href="javascript:void(0)" class="text-gray font-18 text-decoration-none">CBD Oils</a>
                        </div>
                        <div class="categories-links">
                            <a href="javascript:void(0)" class="text-gray font-18 text-decoration-none">Delta 8 Flower </a>
                        </div>
                        <div class="categories-links">
                            <a href="javascript:void(0)" class="text-gray font-18 text-decoration-none">Delta 8 Products</a>
                        </div>
                        <div class="categories-links">
                            <a href="javascript:void(0)" class="text-gray font-18 text-decoration-none">Delta 8 Vaping</a>
                        </div>
                        <div class="categories-links">
                            <a href="javascript:void(0)" class="text-gray font-18 text-decoration-none">Delta 8 Shake</a>
                        </div>
                        <div class="categories-links">
                            <a href="javascript:void(0)" class="text-gray font-18 text-decoration-none">Delta 8 Edibles</a>
                        </div>
                        <div class="categories-links">
                            <a href="javascript:void(0)" class="text-gray font-18 text-decoration-none">Hash</a>
                        </div>
                        <div class="categories-links">
                            <a href="javascript:void(0)" class="text-gray font-18 text-decoration-none">HHC Concentrates</a>
                        </div>
                        <div class="categories-links">
                            <a href="javascript:void(0)" class="text-gray font-18 text-decoration-none">HHC Edibles</a>
                        </div>
                        <div class="categories-links">
                            <a href="javascript:void(0)" class="text-gray font-18 text-decoration-none">HHC Flower</a>
                        </div>
                        <div class="categories-links">
                            <a href="javascript:void(0)" class="text-gray font-18 text-decoration-none">HHC Hash</a>
                        </div>
                        <div class="categories-links">
                            <a href="javascript:void(0)" class="text-gray font-18 text-decoration-none">HHC Products</a>
                        </div>
                        <div class="categories-links">
                            <a href="javascript:void(0)" class="text-gray font-18 text-decoration-none">HHC Refills</a>
                        </div>
                        <div class="categories-links">
                            <a href="javascript:void(0)" class="text-gray font-18 text-decoration-none">HHC Shake/Trim</a>
                        </div>
                        <div class="categories-links">
                            <a href="javascript:void(0)" class="text-gray font-18 text-decoration-none">HHC Vaping</a>
                        </div>
                        <div class="categories-links">
                            <a href="javascript:void(0)" class="text-gray font-18 text-decoration-none">Kief</a>
                        </div>
                        <div class="categories-links">
                            <a href="javascript:void(0)" class="text-gray font-18 text-decoration-none">Natural Terpenes</a>
                        </div>
                        <div class="categories-links">
                            <a href="javascript:void(0)" class="text-gray font-18 text-decoration-none">Seed CBD</a>
                        </div>
                        <div class="categories-links">
                            <a href="javascript:void(0)" class="text-gray font-18 text-decoration-none">Seeds</a>
                        </div>
                        <div class="categories-links">
                            <a href="javascript:void(0)" class="text-gray font-18 text-decoration-none">Seeds - Classics</a>
                        </div>
                        <div class="categories-links">
                            <a href="javascript:void(0)" class="text-gray font-18 text-decoration-none">Seeds - USA</a>
                        </div>
                        <div class="categories-links">
                            <a href="javascript:void(0)" class="text-gray font-18 text-decoration-none">Shake</a>
                        </div>
                        <div class="categories-links">
                            <a href="javascript:void(0)" class="text-gray font-18 text-decoration-none">Small CBD Buds</a>
                        </div>
                        <div class="categories-links">
                            <a href="javascript:void(0)" class="text-gray font-18 text-decoration-none">Tinctures</a>
                        </div>
                    </div>
                </div>
                <div class="shop-products-wrap">
                    <div class="d-flex shop-products-inner  flex-wrap flex-md-nowrap">
                        <div
                            class="w-100 d-flex products-results-wrap  align-items-center justify-content-between product-card-bg">
                            <span class="d-block text-blue-gray fw-semibold h6 mb-0">Showing
                                8
                                Results</span>
                            <button type="button" class="custom-btn btn-bright-green d-lg-none drawer-btn"><i
                                    data-icon="category" class="flex-center"></i></button>
                        </div>
                        <div class="shop-products-select flex-shrink-0">
                            <select class="form-select font-18 product-card-bg" aria-label="Default select example">
                                <option selected>All Products</option>
                                <option value="1">Products1</option>
                                <option value="2">Products2</option>
                                <option value="3">Products3</option>
                            </select>
                        </div>
                        <div class="shop-products-select flex-shrink-0">
                            <select class="form-select font-18 product-card-bg" aria-label="Default select example">
                                <option selected>Featured</option>
                                <option value="1">Featured1</option>
                                <option value="2">Featured2</option>
                                <option value="3">Featured3</option>
                            </select>
                        </div>
                    </div>
                    <div class="products-cards-wrap">
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
                                    class="text-blue-gray fw-semibold mb-3 card-title-wrap text-break d-inline-block">Amnesia Haza</span>
                                <div class="d-flex align-flex-start justify-content-between">
                                    <h5 class="h5 mb-0 text-jungle-green">€79.99</h5>
                                    <span class="products-icon"><i data-icon="category" class="flex-center"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="products-items product-card-bg text-decoration-none">
                            <a href="javascript:void(0)" class="product-cards-img">
                                <img src="./assets/images/cover/our-shop/product-2.png" alt="products-items"
                                    class="img-contain">
                            </a>
                            <div class="products-items-card-body mt-auto">
                                <span
                                    class="text-blue-gray fw-semibold mb-3 card-title-wrap text-break d-inline-block">Blueberry Cookies</span>
                                <div class="d-flex align-flex-start justify-content-between">
                                    <h5 class="h5 mb-0 text-jungle-green">€79.99</h5>
                                    <span class="products-icon"><i data-icon="category" class="flex-center"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="products-items product-card-bg text-decoration-none">
                            <a href="javascript:void(0)" class="product-cards-img">
                                <img src="./assets/images/cover/our-shop/product-2.png" alt="products-items"
                                    class="img-contain">
                            </a>
                            <div class="products-items-card-body mt-auto">
                                <span
                                    class="text-blue-gray fw-semibold mb-3 card-title-wrap text-break d-inline-block">Forbidden Fruit</span>
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
                                    class="text-blue-gray fw-semibold mb-3 card-title-wrap text-break d-inline-block">GMO</span>
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
                                    class="text-blue-gray fw-semibold mb-3 card-title-wrap text-break d-inline-block">Jack Herer</span>
                                <div class="d-flex align-flex-start justify-content-between">
                                    <h5 class="h5 mb-0 text-jungle-green">€79.99</h5>
                                    <span class="products-icon"><i data-icon="category" class="flex-center"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="products-items product-card-bg text-decoration-none">
                            <a href="javascript:void(0)" class="product-cards-img">
                                <img src="./assets/images/cover/our-shop/product-2.png" alt="products-items"
                                    class="img-contain">
                            </a>
                            <div class="products-items-card-body mt-auto">
                                <span
                                    class="text-blue-gray fw-semibold mb-3 card-title-wrap text-break d-inline-block">OG Kush</span>
                                <div class="d-flex align-flex-start justify-content-between">
                                    <h5 class="h5 mb-0 text-jungle-green">€79.99</h5>
                                    <span class="products-icon"><i data-icon="category" class="flex-center"></i></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="products-items product-card-bg text-decoration-none">
                            <a href="javascript:void(0)" class="product-cards-img">
                                <img src="./assets/images/cover/our-shop/product-2.png" alt="products-items"
                                    class="img-contain">
                            </a>
                            <div class="products-items-card-body mt-auto">
                                <span
                                    class="text-blue-gray fw-semibold mb-3 card-title-wrap text-break d-inline-block">RNTZ</span>
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
                                    class="text-blue-gray fw-semibold mb-3 card-title-wrap text-break d-inline-block">Skunk</span>
                                <div class="d-flex align-flex-start justify-content-between">
                                    <h5 class="h5 mb-0 text-jungle-green">€79.99</h5>
                                    <span class="products-icon"><i data-icon="category" class="flex-center"></i></span>
                                </div>
                            </div>
                        </div>
                        </div> 
                    <div class="pagination-wrap">
                        <div class="d-flex align-items-center justify-content-lg-end justify-content-center">
                            <button type="button"
                                class="pagination-btn product-card-bg d-flex align-items-center justify-content-center">
                                <i data-icon="leftArrow" class="flex-center"></i>
                            </button>
                            <button type="button"
                                class="pagination-btn product-card-bg d-flex align-items-center justify-content-center font-18">
                                <span class="d-inline-block">1</span>
                            </button>
                            <button type="button"
                                class="pagination-btn product-card-bg d-flex align-items-center justify-content-center font-18">
                                <span class="d-inline-block">2</span>
                            </button>
                            <button type="button"
                                class="pagination-btn product-card-bg d-flex align-items-center justify-content-center font-18">
                                <span class="d-inline-block">3</span>
                            </button>
                            <button type="button"
                                class="pagination-btn product-card-bg d-flex align-items-center justify-content-center">
                                <i data-icon="rightArrow" class="flex-center arrow-icon-wrap"></i>
                            </button>
                        </div>
                    </div>   
                </div>
            </div>
        <!-- </div> -->
            
        </div>
    </section>
    <!-- Product Collection Section end -->





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