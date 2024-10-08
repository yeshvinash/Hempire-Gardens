<!DOCTYPE html>
<html lang="en">
<?php 
  $title = "Hempire Gardens | Our Shop";
  include_once("./includes/head.php")
?>

<body>

  <!-- HEADER START -->
  <?php include_once("./includes/header.php") ?>
  <!-- HEADER END -->

  <!-- Our Shop Hero Section Start -->
  <section class="our-shop-bg space-top-lg space-bottom-lg hempire-hero">
    <div class="container">
      <div class="our-shop-title text-center">
        <h2 class="big mb-0 text-white fw-semibold">Our Shop</h2>
        <p class="fw-normal mb-0 mt-3 pt-1 lh-lg h5">One of the Largest European Distributors of Premium Quality
          Hemp Derived Products.</p>
      </div>
    </div>
  </section>
  <!--  Our Shop Hero Section End -->


  <!-- Our Shop Products Section Start -->
  <section class="space-top-lg">
    <div class="container">
      <div class="d-flex h-100">
        <div class="categories-wrap d-lg-block d-none">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="mb-0 text-blue-gray fw-semibold">Categories</h5>
            <button type="button" class="d-lg-none removeBtn"><i data-icon="close" class="flex-center"></i></button>
          </div>
          <div class="accordion categories-accordion accordion-flush" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button justify-content-between" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  <span class="d-flex align-items-center justify-content-center">
                    <span class="categories-list-icon-wrap align-items-center">
                      <img src="./assets/images/cover/our-shop/categories-list-1.png" alt="categories"></span>
                    <span class="ms-4 ps-1 font-18 fw-semibold text-blue-gray me-3">CBD</span>
                  </span>
                  <span class="d-inline-block accordion-icon"></span>
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul class="categories-list-items text-gray font-18 fw-medium mb-0">
                    <li>CBD Flowers</li>
                    <li>CBD Flowers (Small)</li>
                    <li>CBD Shake/Trim</li>
                    <li>CBD Hash</li>
                    <li>CBD Kief</li>
                    <li>CBD Isolate</li>
                    <li>CBD Tinctures</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed justify-content-between" type="button"
                  data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                  aria-controls="collapseTwo">
                  <span class="d-flex align-items-center justify-content-center">
                    <span class="categories-list-icon-wrap align-items-end">
                      <img src="./assets/images/cover/our-shop/categories-list-2.png" alt="categories"></span>
                    <span class="ms-4 ps-1 font-18 fw-semibold text-blue-gray me-3">Delta
                      Products</span>
                  </span>
                  <span class="d-inline-block accordion-icon"></span>
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul class="categories-list-items text-gray font-18 fw-medium mb-0">
                    <li>CBD Shake/Trim</li>
                    <li>CBD Hash</li>
                    <li>CBD Kief</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed justify-content-between" type="button"
                  data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                  aria-controls="collapseThree">
                  <span class="d-flex align-items-center justify-content-center">
                    <span class="categories-list-icon-wrap align-items-end">
                      <img src="./assets/images/cover/our-shop/categories-list-3.png" alt="categories"></span>
                    <span class="ms-4 ps-1 font-18 fw-semibold text-blue-gray me-3">HHC
                      Products</span>
                  </span>
                  <span class="d-inline-block accordion-icon"></span>
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul class="categories-list-items text-gray font-18 fw-medium mb-0">
                    <li>CBD Shake/Trim</li>
                    <li>CBD Hash</li>
                    <li>CBD Kief</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed justify-content-between" type="button"
                  data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                  aria-controls="collapseFour">
                  <span class="d-flex align-items-center justify-content-center">
                    <span class="categories-list-icon-wrap align-items-end">
                      <img src="./assets/images/cover/our-shop/categories-list-4.png" alt="categories"></span>
                    <span class="ms-4 ps-1 font-18 fw-semibold text-blue-gray me-3">Natural Terpenes
                      Products</span>
                  </span>
                  <span class="d-inline-block accordion-icon"></span>
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul class="categories-list-items text-gray font-18 fw-medium mb-0">
                    <li>CBD Shake/Trim</li>
                    <li>CBD Hash</li>
                    <li>CBD Kief</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="shop-products-wrap">
          <div class="d-flex shop-products-inner  flex-wrap flex-md-nowrap">
            <div class="w-100 d-flex products-results-wrap  align-items-center justify-content-between product-card-bg">
              <span class="d-block text-blue-gray fw-semibold h6 mb-0">Showing
                8
                Results</span>
              <button type="button" class="custom-btn btn-bright-green d-lg-none drawer-btn"><i data-icon="category"
                  class="flex-center"></i></button>
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
                <img src="./assets/images/cover/our-shop/product-1.png" alt="products-items" class="img-contain">
              </a>
              <div class="products-items-card-body mt-auto">
                <span class="text-blue-gray fw-semibold mb-3 card-title-wrap text-break d-inline-block">75%
                  HHC Crumble Blue-
                  berry Cookies</span>
                <div class="d-flex align-flex-start justify-content-between">
                  <h5 class="h5 mb-0 text-jungle-green">€99.99</h5>
                  <span class="products-icon"><i data-icon="category" class="flex-center"></i></span>
                </div>
              </div>
              <div class="products-cards-overlay">
                <a href="#ProductOffcanvas" class="custom-btn btn-bright-green" role="button" data-bs-toggle="offcanvas"
                  aria-controls="offcanvasRight">Quick View</a>
              </div>
            </div>
            <div class="products-items product-card-bg text-decoration-none">
              <a href="javascript:void(0)" class="product-cards-img">
                <img src="./assets/images/cover/our-shop/product-2.png" alt="products-items" class="img-contain">
              </a>
              <div class="products-items-card-body mt-auto">
                <span class="text-blue-gray fw-semibold mb-3 card-title-wrap text-break d-inline-block">75%
                  Amnesia Haze CBD Flower</span>
                <div class="d-flex align-flex-start justify-content-between">
                  <h5 class="h5 mb-0 text-jungle-green">€249.00</h5>
                  <span class="products-icon"><i data-icon="category" class="flex-center"></i></span>
                </div>
              </div>
              <div class="products-cards-overlay">
                <a href="#ProductOffcanvas" class="custom-btn btn-bright-green" role="button" data-bs-toggle="offcanvas"
                  aria-controls="offcanvasRight">Quick View</a>
              </div>
            </div>
            <div class="products-items product-card-bg text-decoration-none">
              <a href="javascript:void(0)" class="product-cards-img">
                <img src="./assets/images/cover/our-shop/product-3.png" alt="products-items" class="img-contain">
              </a>
              <div class="products-items-card-body mt-auto">
                <span class="text-blue-gray fw-semibold mb-3 card-title-wrap text-break d-inline-block">Blueberry</span>
                <div class="d-flex align-flex-start justify-content-between">
                  <h5 class="h5 mb-0 text-jungle-green">€59.99</h5>
                  <span class="products-icon"><i data-icon="category" class="flex-center"></i></span>
                </div>
              </div>
              <div class="products-cards-overlay">
                <a href="#ProductOffcanvas" class="custom-btn btn-bright-green" role="button" data-bs-toggle="offcanvas"
                  aria-controls="offcanvasRight">Quick View</a>
              </div>
            </div>
            <div class="products-items product-card-bg text-decoration-none">
              <div class="position-absolute label-wrap">
                <span class="text-uppercase sold-out-label">Sold Out</span>
              </div>
              <a href="javascript:void(0)" class="product-cards-img">
                <img src="./assets/images/cover/our-shop/product-4.png" alt="products-items" class="img-contain">
              </a>
              <div class="products-items-card-body mt-auto">
                <span class="text-blue-gray fw-semibold mb-3 card-title-wrap text-break d-inline-block">Afghan
                  Hash 35% HHC
                  (O.G KUSH)</span>
                <div class="d-flex align-flex-start justify-content-between">
                  <h5 class="h5 mb-0 text-jungle-green">€99.99</h5>
                  <span class="products-icon"><i data-icon="category" class="flex-center"></i></span>
                </div>
              </div>
              <div class="products-cards-overlay">
                <a href="#ProductOffcanvas" class="custom-btn btn-bright-green" role="button" data-bs-toggle="offcanvas"
                  aria-controls="offcanvasRight">Quick View</a>
              </div>
            </div>
            <div class="products-items product-card-bg text-decoration-none">
              <div class="position-absolute label-wrap">
                <span class="text-uppercase sold-out-label">Sold Out</span>
              </div>
              <a href="javascript:void(0)" class="product-cards-img">
                <img src="./assets/images/cover/our-shop/product-5.png" alt="products-items" class="img-contain">
              </a>
              <div class="products-items-card-body mt-auto">
                <span class="text-blue-gray fw-semibold mb-3 card-title-wrap text-break d-inline-block">Blueberry
                  Cookies
                  Terpenes</span>
                <div class="d-flex align-flex-start justify-content-between">
                  <h5 class="h5 mb-0 text-jungle-green">€275.00</h5>
                  <span class="products-icon"><i data-icon="category" class="flex-center"></i></span>
                </div>
              </div>
              <div class="products-cards-overlay">
                <a href="#ProductOffcanvas" class="custom-btn btn-bright-green" role="button" data-bs-toggle="offcanvas"
                  aria-controls="offcanvasRight">Quick View</a>
              </div>
            </div>
            <div class="products-items product-card-bg text-decoration-none">
              <a href="javascript:void(0)" class="product-cards-img">
                <img src="./assets/images/cover/our-shop/product-6.png" alt="products-items" class="img-contain">
              </a>
              <div class="products-items-card-body mt-auto">
                <span class="text-blue-gray fw-semibold mb-3 card-title-wrap text-break d-inline-block">Blueberry
                  Cookies
                  X Small</span>
                <div class="d-flex align-flex-start justify-content-between">
                  <h5 class="h5 mb-0 text-jungle-green">€99.99</h5>
                  <span class="products-icon"><i data-icon="category" class="flex-center"></i></span>
                </div>
              </div>
              <div class="products-cards-overlay">
                <a href="#ProductOffcanvas" class="custom-btn btn-bright-green" role="button" data-bs-toggle="offcanvas"
                  aria-controls="offcanvasRight">Quick View</a>
              </div>
            </div>
            <div class="products-items product-card-bg text-decoration-none">
              <div class="position-absolute label-wrap">
                <span class="text-uppercase sold-out-label">Sold Out</span>
              </div>
              <a href="javascript:void(0)" class="product-cards-img">
                <img src="./assets/images/cover/our-shop/product-7.png" alt="products-items" class="img-contain">
              </a>
              <div class="products-items-card-body mt-auto">
                <span class="text-blue-gray fw-semibold mb-3 card-title-wrap text-break d-inline-block">Blue
                  Gelato</span>
                <div class="d-flex align-flex-start justify-content-between">
                  <h5 class="h5 mb-0 text-jungle-green">€49.99</h5>
                  <span class="products-icon"><i data-icon="category" class="flex-center"></i></span>
                </div>
              </div>
              <div class="products-cards-overlay">
                <a href="#ProductOffcanvas" class="custom-btn btn-bright-green" role="button" data-bs-toggle="offcanvas"
                  aria-controls="offcanvasRight">Quick View</a>
              </div>
            </div>
            <div class="products-items product-card-bg text-decoration-none">
              <a href="javascript:void(0)" class="product-cards-img">
                <img src="./assets/images/cover/our-shop/product-8.png" alt="products-items" class="img-contain">
              </a>
              <div class="products-items-card-body mt-auto">
                <span class="text-blue-gray fw-semibold mb-3 card-title-wrap text-break d-inline-block">Blueberry
                  (Autos)</span>
                <div class="d-flex align-flex-start justify-content-between">
                  <h5 class="h5 mb-0 text-jungle-green">€49.99</h5>
                  <span class="products-icon"><i data-icon="category" class="flex-center"></i></span>
                </div>
              </div>
              <div class="products-cards-overlay">
                <a href="#ProductOffcanvas" class="custom-btn btn-bright-green" role="button" data-bs-toggle="offcanvas"
                  aria-controls="offcanvasRight">Quick View</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pagination-wrap">
        <div class="d-flex align-items-center justify-content-lg-end justify-content-center">
          <button type="button" class="pagination-btn product-card-bg d-flex align-items-center justify-content-center">
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
          <button type="button" class="pagination-btn product-card-bg d-flex align-items-center justify-content-center">
            <i data-icon="rightArrow" class="flex-center arrow-icon-wrap"></i>
          </button>
        </div>
      </div>
    </div>
  </section>
  <!-- Our Shop Products Section end -->


  <!-- offcanvas start -->
  <div class="product-offcanvas offcanvas offcanvas-end" tabindex="-1" id="ProductOffcanvas"
    aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <button type="button" class="btn-close text-reset product-offcanvas-close-btn" data-bs-dismiss="offcanvas"
        aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="offcanvas-product-slider-container">
        <div class="swiper offcanvas-product-detail-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="slider-img-container">
                <div class="slider-image-wrap">
                  <img src="./assets/images/cover/product-detail-cover/blueberry-cookies-lg.png" />
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slider-img-container">
                <div class="slider-image-wrap">
                  <img src="./assets/images/cover/product-detail-cover/blueberry-cookies-lg.png" />
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slider-img-container">
                <div class="slider-image-wrap">
                  <img src="./assets/images/cover/product-detail-cover/blueberry-cookies-lg.png" />
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slider-img-container">
                <div class="slider-image-wrap">
                  <img src="./assets/images/cover/product-detail-cover/blueberry-cookies-lg.png" />
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slider-img-container">
                <div class="slider-image-wrap">
                  <img src="./assets/images/cover/product-detail-cover/blueberry-cookies-lg.png" />
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slider-img-container">
                <div class="slider-image-wrap">
                  <img src="./assets/images/cover/product-detail-cover/blueberry-cookies-lg.png" />
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slider-img-container">
                <div class="slider-image-wrap">
                  <img src="./assets/images/cover/product-detail-cover/blueberry-cookies-lg.png" />
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slider-img-container">
                <div class="slider-image-wrap">
                  <img src="./assets/images/cover/product-detail-cover/blueberry-cookies-lg.png" />
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slider-img-container">
                <div class="slider-image-wrap">
                  <img src="./assets/images/cover/product-detail-cover/blueberry-cookies-lg.png" />
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slider-img-container">
                <div class="slider-image-wrap">
                  <img src="./assets/images/cover/product-detail-cover/blueberry-cookies-lg.png" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div thumbsSlider="" class="swiper offcanvas-product-detail-thumb-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="slider-thumb-img-container">
                <div class="slider-thumb-img-wrap">
                  <img src="./assets/images/cover/product-detail-cover/blueberry-cookies-xs-offcanvas.png"
                    alt="blueberry-cookies">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slider-thumb-img-container">
                <div class="slider-thumb-img-wrap">
                  <img src="./assets/images/cover/product-detail-cover/blueberry-cookies-xs-offcanvas.png"
                    alt="blueberry-cookies">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slider-thumb-img-container">
                <div class="slider-thumb-img-wrap">
                  <img src="./assets/images/cover/product-detail-cover/blueberry-cookies-xs-offcanvas.png"
                    alt="blueberry-cookies">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slider-thumb-img-container">
                <div class="slider-thumb-img-wrap">
                  <img src="./assets/images/cover/product-detail-cover/blueberry-cookies-xs-offcanvas.png"
                    alt="blueberry-cookies">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slider-thumb-img-container">
                <div class="slider-thumb-img-wrap">
                  <img src="./assets/images/cover/product-detail-cover/blueberry-cookies-xs-offcanvas.png"
                    alt="blueberry-cookies">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slider-thumb-img-container">
                <div class="slider-thumb-img-wrap">
                  <img src="./assets/images/cover/product-detail-cover/blueberry-cookies-xs-offcanvas.png"
                    alt="blueberry-cookies">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slider-thumb-img-container">
                <div class="slider-thumb-img-wrap">
                  <img src="./assets/images/cover/product-detail-cover/blueberry-cookies-xs-offcanvas.png"
                    alt="blueberry-cookies">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slider-thumb-img-container">
                <div class="slider-thumb-img-wrap">
                  <img src="./assets/images/cover/product-detail-cover/blueberry-cookies-xs-offcanvas.png"
                    alt="blueberry-cookies">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slider-thumb-img-container">
                <div class="slider-thumb-img-wrap">
                  <img src="./assets/images/cover/product-detail-cover/blueberry-cookies-xs-offcanvas.png"
                    alt="blueberry-cookies">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slider-thumb-img-container">
                <div class="slider-thumb-img-wrap">
                  <img src="./assets/images/cover/product-detail-cover/blueberry-cookies-xs-offcanvas.png"
                    alt="blueberry-cookies">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <h3 class="text-blue-gray fw-bold mb-0">HHC Concentrate Blueberry Cookies</h3>
        <p class="offcanvas-hhc-concentrate-caption font-22 text-blue-gray fw-medium">HHC: 75%   -   CBG:  20%   - 
           NATURAL
          TERPENES:  5%</p>
        <p class="hhc-concentrate-description font-16 fw-normal text-blue-gray">
          <strong> Buy Blueberry Cookies HHC Crumble in Europe and UK.</strong> Hempire Gardens's HHC Crumble is
          made with a unique
          blend of HHC and CBG Distillate in addition to 100% Natural OU Kosher Certified Terpenes.
        </p>
        <p class="font-16 fw-normal text-blue-gray mb-0">
          Crumble, sometimes called wax due to its tacky texture of falling apart, is a <strong> pure form of
            cannabis
            extract </strong>favored by experienced cannabis fanatics. HHC Crumble is typically used in the
          vaporizing and
          dabbing technique.
        </p>
        <div class="hhc-concentrate-quantity-select-wrapper">
          <div>
            <input type="radio" id="Offcanvas10g" name="Offcanvasquantity" class="offcanvas-quantity-btn" checked>
            <label for="Offcanvas10g" class="font-16 text-blue-gray offcanvas-quantity-label">10g</label>
          </div>
          <div>
            <input type="radio" id="Offcanvas25g" name="Offcanvasquantity" class="offcanvas-quantity-btn">
            <label for="Offcanvas25g" class="font-16 text-blue-gray offcanvas-quantity-label">25g</label>
          </div>
          <div>
            <input type="radio" id="Offcanvas50g" name="Offcanvasquantity" class="offcanvas-quantity-btn">
            <label for="Offcanvas50g" class="font-16 text-blue-gray offcanvas-quantity-label">50g</label>
          </div>
          <div>
            <input type="radio" id="Offcanvas100g" name="Offcanvasquantity" class="offcanvas-quantity-btn">
            <label for="Offcanvas100g" class="font-16 text-blue-gray offcanvas-quantity-label">100g</label>
          </div>
        </div>
        <div class="offcanvas-hhc-concentrate-quantity-wrapper">
          <h5 class="fw-semibold text-blue-gray">Quantity</h5>
          <div class="quantity-counter-calculated-price-wrap">
            <div class="quantity-counter-wrap">
              <button class="quantity-counter-btn decrease-counter">
                <i data-icon="minus"></i>
              </button>
              <h6 class="text-blue-gray fw-semibold quantity-counter-text">1</h6>
              <button class="quantity-counter-btn increase-counter">
                <i data-icon="plus"></i>
              </button>
            </div>
            <div>
              <h4 class="fw-semibold text-green">€99.99</h4>
              <p class="font-16 text-blue-gray fw-normal mb-0"><strong class="text-green fw-semibold">
                  Shipping</strong>
                calculated
                at checkout.</p>
            </div>
          </div>
          <button class="btn btn-bright-green sold-out-btn offcanvas-sold-out-btn">
            <h5 class="mb-0">Sold Out</h5>
          </button>
        </div>
        <h5 class="text-blue-gray fw-semibold">The main benefits of the Crumble experience:</h5>
        <div class="crumble-experience-benefits">
          <div class="benifit-wrapper">
            <i data-icon="TickCircle"></i>
            <p class="font-16 fw-medium text-blue-gray mb-0">The Purest form of Cannabis</p>
          </div>
          <div class="benifit-wrapper">
            <i data-icon="TickCircle"></i>
            <p class="font-16 fw-medium text-blue-gray mb-0">Highly concentrated, only small amounts required for
              desired
              effects</p>
          </div>
          <div class="benifit-wrapper">
            <i data-icon="TickCircle"></i>
            <p class="font-16 fw-medium text-blue-gray mb-0">Full-Spectrum, therefore the entourage effect can be
              achieved</p>
          </div>
          <div class="benifit-wrapper">
            <i data-icon="TickCircle"></i>
            <p class="font-16 fw-medium text-blue-gray mb-0">Easily Vaporized</p>
          </div>
        </div>
        <div class="checkout-wrap">
          <h5 class="text-blue-gray fw-semibold mb-0">Checkout securely with</h5>
          <div class="checkout-methods-wrap">
            <button class="checkout-method visa">
              <i data-icon="Visa"></i>
            </button>
            <button class="checkout-method mastercard">
              <i data-icon="Mastercard"></i>
            </button>
            <button class="checkout-method bitcoin">
              <i data-icon="Bitcoin"></i>
            </button>
          </div>
        </div>
        <div>
          <h5 class="text-blue-gray fw-semibold mb-0">Certifications</h5>
          <div class="certifications-wrap">
            <div class="d-flex align-items-center">
              <i class="flex-center" data-icon="coa"></i>
              <h6 class="fw-semibold text-blue-gray mb-0 ms-3">COA</h6>
            </div>
            <button class="custom-btn fw-bold text-white certificate-download-btn">Download</button>
          </div>
          <div class="certifications-wrap">
            <div class="d-flex align-items-center">
              <i class="flex-center" data-icon="safety"></i>
              <h6 class="fw-semibold text-blue-gray mb-0 ms-3">Safety Data Sheet</h6>
            </div>
            <button class="custom-btn fw-bold text-white certificate-download-btn">Download</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- offcanvas end -->



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