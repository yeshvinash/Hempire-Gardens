<!DOCTYPE html>
<html lang="en">
<?php
$title = "Hempire Gardens | Shopping Cart";
include_once("./includes/head.php")
    ?>

<body>
    <!-- HEADER START -->
    <?php include_once("./includes/header.php") ?>
    <!-- HEADER END -->

    <!-- Shopping Cart  Section-->
    <section>
        <div class="d-flex flex-column shopping-cart-wrapper">
            <div class="container">
                <div>
                    <div class="shopping-cart-header">
                        <h3 class="text-blue-gray fw-semibold mb-5 mt-4">Shopping Cart</h3>
                        <div class="d-md-flex shopping-cart-header-title d-none">
                            <div class="shopping-cart-product-title h6 mb-0 text-blue-gray fw-semibold">Product</div>
                            <div class="shopping-cart-price h6 mb-0 text-blue-gray text-center fw-semibold">Price</div>
                            <div class="shopping-cart-quantity h6 mb-0 text-blue-gray text-center fw-semibold">Quantity
                            </div>
                            <div class="shopping-cart-total h6 mb-0 text-blue-gray text-center fw-semibold">Total</div>
                        </div>
                    </div>
                    <div class="shopping-cart-inner">
                        <div class="d-flex align-items-center shopping-cart-wrap flex-wrap flex-md-nowrap">
                            <div class="cart-sidebar shopping-cart-product-title">
                                <div data-cart="cart-item" class="cart-item d-flex align-items-center">
                                    <div>
                                        <div class="img-wrapper d-flex justify-content-center align-items-center">
                                            <img src="./assets/images/cart-items/cart-item.png" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 content">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h6 class="fw-semibold text-blue-gray mb-3 pb-1">Jack Herer-CBD Flower |
                                                    Qty
                                                    : 25g
                                                </h6>
                                                <h6 class="fw-normal mb-0 description">11-12% CBD Hand manicured to
                                                    perfection No
                                                    small buds, seeds or leafy material...</h6>
                                            </div>
                                            <div class="d-block d-md-none ms-1">
                                                <div
                                                    class=" d-flex qty-btn-wrapper cart-btn-group justify-content-evenly align-items-center flex-grow-1">
                                                    <button class="plain-btn" data-cart="decrement">
                                                        <span data-icon="minusButtonIcon"></span>
                                                    </button>
                                                    <input type="text" class="cart-number-input" value="1" />
                                                    <button class="plain-btn" data-cart="increment">
                                                        <span data-icon="addButtonIcon"></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-md-center text-start shopping-cart-price">
                                <label class="d-inline-block fw-medium font-16  me-3 d-md-none">Price:</label>
                                <span class="h5 text-blue-gray fw-semibold">€249.99</span>
                            </div>
                            <div class="d-none d-md-block shopping-cart-quantity">
                                <div
                                    class="qty-btn-wrapper d-flex cart-btn-group justify-content-evenly align-items-center flex-grow-1">
                                    <button class="plain-btn" data-cart="decrement">
                                        <span data-icon="minusButtonIcon"></span>
                                    </button>
                                    <input type="text" class="cart-number-input" value="1" />
                                    <button class="plain-btn" data-cart="increment">
                                        <span data-icon="addButtonIcon"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="text-md-center text-end shopping-cart-total">
                                <label class="d-inline-block fw-medium font-16  me-3 d-md-none">Total:</label>
                                <span class="h5 text-blue-gray fw-semibold">€749.97</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center shopping-cart-wrap flex-wrap flex-md-nowrap">
                            <div class="cart-sidebar shopping-cart-product-title">
                                <div data-cart="cart-item" class="cart-item d-flex align-items-center">
                                    <div>
                                        <div class="img-wrapper d-flex justify-content-center align-items-center">
                                            <img src="./assets/images/cart-items/cart-item.png" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 content">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h6 class="fw-semibold text-blue-gray mb-3 pb-1">Amnesia Haze CBD Flower
                                                    | Qty : 50g
                                                </h6>
                                                <h6 class="fw-normal mb-0 description">11-12% CBD Hand manicured to
                                                    perfection No
                                                    small buds, seeds or leafy material...</h6>
                                            </div>
                                            <div class="d-block d-md-none ms-1">
                                                <div
                                                    class=" d-flex qty-btn-wrapper cart-btn-group justify-content-evenly align-items-center flex-grow-1">
                                                    <button class="plain-btn" data-cart="decrement">
                                                        <span data-icon="minusButtonIcon"></span>
                                                    </button>
                                                    <input type="text" class="cart-number-input" value="1" />
                                                    <button class="plain-btn" data-cart="increment">
                                                        <span data-icon="addButtonIcon"></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-md-center text-start shopping-cart-price">
                                <label class="d-inline-block fw-medium font-16  me-3 d-md-none">Price:</label>
                                <span class="h5 text-blue-gray fw-semibold">€249.99</span>
                            </div>
                            <div class="d-none d-md-block shopping-cart-quantity">
                                <div
                                    class="qty-btn-wrapper d-flex cart-btn-group justify-content-evenly align-items-center flex-grow-1">
                                    <button class="plain-btn" data-cart="decrement">
                                        <span data-icon="minusButtonIcon"></span>
                                    </button>
                                    <input type="text" class="cart-number-input" value="1" />
                                    <button class="plain-btn" data-cart="increment">
                                        <span data-icon="addButtonIcon"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="text-md-center text-end shopping-cart-total">
                                <label class="d-inline-block fw-medium font-16  me-3 d-md-none">Total:</label>
                                <span class="h5 text-blue-gray fw-semibold">€749.97</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center shopping-cart-wrap flex-wrap flex-md-nowrap">
                            <div class="cart-sidebar shopping-cart-product-title">
                                <div data-cart="cart-item" class="cart-item d-flex align-items-center">
                                    <div>
                                        <div class="img-wrapper d-flex justify-content-center align-items-center">
                                            <img src="./assets/images/cart-items/cart-item.png" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 content">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h6 class="fw-semibold text-blue-gray mb-3 pb-1">Jack Herer-CBD Flower |
                                                    Qty
                                                    : 25g
                                                </h6>
                                                <h6 class="fw-normal mb-0 description">11-12% CBD Hand manicured to
                                                    perfection No
                                                    small buds, seeds or leafy material...</h6>
                                            </div>
                                            <div class="d-block d-md-none ms-1">
                                                <div
                                                    class=" d-flex qty-btn-wrapper cart-btn-group justify-content-evenly align-items-center flex-grow-1">
                                                    <button class="plain-btn" data-cart="decrement">
                                                        <span data-icon="minusButtonIcon"></span>
                                                    </button>
                                                    <input type="text" class="cart-number-input" value="1" />
                                                    <button class="plain-btn" data-cart="increment">
                                                        <span data-icon="addButtonIcon"></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-md-center text-start shopping-cart-price">
                                <label class="d-inline-block fw-medium font-16  me-3 d-md-none">Price:</label>
                                <span class="h5 text-blue-gray fw-semibold">€249.99</span>
                            </div>
                            <div class="d-none d-md-block shopping-cart-quantity">
                                <div
                                    class="qty-btn-wrapper d-flex cart-btn-group justify-content-evenly align-items-center flex-grow-1">
                                    <button class="plain-btn" data-cart="decrement">
                                        <span data-icon="minusButtonIcon"></span>
                                    </button>
                                    <input type="text" class="cart-number-input" value="1" />
                                    <button class="plain-btn" data-cart="increment">
                                        <span data-icon="addButtonIcon"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="text-md-center text-end shopping-cart-total">
                                <label class="d-inline-block fw-medium font-16  me-3 d-md-none">Total:</label>
                                <span class="h5 text-blue-gray fw-semibold">€749.97</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center shopping-cart-wrap flex-wrap flex-md-nowrap">
                            <div class="cart-sidebar shopping-cart-product-title">
                                <div data-cart="cart-item" class="cart-item d-flex align-items-center">
                                    <div>
                                        <div class="img-wrapper d-flex justify-content-center align-items-center">
                                            <img src="./assets/images/cart-items/cart-item.png" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 content">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h6 class="fw-semibold text-blue-gray mb-3 pb-1">Jack Herer-CBD Flower |
                                                    Qty
                                                    : 25g
                                                </h6>
                                                <h6 class="fw-normal mb-0 description">11-12% CBD Hand manicured to
                                                    perfection No
                                                    small buds, seeds or leafy material...</h6>
                                            </div>
                                            <div class="d-block d-md-none ms-1">
                                                <div
                                                    class=" d-flex qty-btn-wrapper cart-btn-group justify-content-evenly align-items-center flex-grow-1">
                                                    <button class="plain-btn" data-cart="decrement">
                                                        <span data-icon="minusButtonIcon"></span>
                                                    </button>
                                                    <input type="text" class="cart-number-input" value="1" />
                                                    <button class="plain-btn" data-cart="increment">
                                                        <span data-icon="addButtonIcon"></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-md-center text-start shopping-cart-price">
                                <label class="d-inline-block fw-medium font-16  me-3 d-md-none">Price:</label>
                                <span class="h5 text-blue-gray fw-semibold">€249.99</span>
                            </div>
                            <div class="d-none d-md-block shopping-cart-quantity">
                                <div
                                    class="qty-btn-wrapper d-flex cart-btn-group justify-content-evenly align-items-center flex-grow-1">
                                    <button class="plain-btn" data-cart="decrement">
                                        <span data-icon="minusButtonIcon"></span>
                                    </button>
                                    <input type="text" class="cart-number-input" value="1" />
                                    <button class="plain-btn" data-cart="increment">
                                        <span data-icon="addButtonIcon"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="text-md-center text-end shopping-cart-total">
                                <label class="d-inline-block fw-medium font-16  me-3 d-md-none">Total:</label>
                                <span class="h5 text-blue-gray fw-semibold">€749.97</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center shopping-cart-wrap flex-wrap flex-md-nowrap">
                            <div class="cart-sidebar shopping-cart-product-title">
                                <div data-cart="cart-item" class="cart-item d-flex align-items-center">
                                    <div>
                                        <div class="img-wrapper d-flex justify-content-center align-items-center">
                                            <img src="./assets/images/cart-items/cart-item.png" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 content">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h6 class="fw-semibold text-blue-gray mb-3 pb-1">Jack Herer-CBD Flower |
                                                    Qty
                                                    : 25g
                                                </h6>
                                                <h6 class="fw-normal mb-0 description">11-12% CBD Hand manicured to
                                                    perfection No
                                                    small buds, seeds or leafy material...</h6>
                                            </div>
                                            <div class="d-block d-md-none ms-1">
                                                <div
                                                    class=" d-flex qty-btn-wrapper cart-btn-group justify-content-evenly align-items-center flex-grow-1">
                                                    <button class="plain-btn" data-cart="decrement">
                                                        <span data-icon="minusButtonIcon"></span>
                                                    </button>
                                                    <input type="text" class="cart-number-input" value="1" />
                                                    <button class="plain-btn" data-cart="increment">
                                                        <span data-icon="addButtonIcon"></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-md-center text-start shopping-cart-price">
                                <label class="d-inline-block fw-medium font-16  me-3 d-md-none">Price:</label>
                                <span class="h5 text-blue-gray fw-semibold">€249.99</span>
                            </div>
                            <div class="d-none d-md-block shopping-cart-quantity">
                                <div
                                    class="qty-btn-wrapper d-flex cart-btn-group justify-content-evenly align-items-center flex-grow-1">
                                    <button class="plain-btn" data-cart="decrement">
                                        <span data-icon="minusButtonIcon"></span>
                                    </button>
                                    <input type="text" class="cart-number-input" value="1" />
                                    <button class="plain-btn" data-cart="increment">
                                        <span data-icon="addButtonIcon"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="text-md-center text-end shopping-cart-total">
                                <label class="d-inline-block fw-medium font-16  me-3 d-md-none">Total:</label>
                                <span class="h5 text-blue-gray fw-semibold">€749.97</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center shopping-cart-wrap flex-wrap flex-md-nowrap">
                            <div class="cart-sidebar shopping-cart-product-title">
                                <div data-cart="cart-item" class="cart-item d-flex align-items-center">
                                    <div>
                                        <div class="img-wrapper d-flex justify-content-center align-items-center">
                                            <img src="./assets/images/cart-items/cart-item.png" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 content">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h6 class="fw-semibold text-blue-gray mb-3 pb-1">Jack Herer-CBD Flower |
                                                    Qty
                                                    : 25g
                                                </h6>
                                                <h6 class="fw-normal mb-0 description">11-12% CBD Hand manicured to
                                                    perfection No
                                                    small buds, seeds or leafy material...</h6>
                                            </div>
                                            <div class="d-block d-md-none ms-1">
                                                <div
                                                    class=" d-flex qty-btn-wrapper cart-btn-group justify-content-evenly align-items-center flex-grow-1">
                                                    <button class="plain-btn" data-cart="decrement">
                                                        <span data-icon="minusButtonIcon"></span>
                                                    </button>
                                                    <input type="text" class="cart-number-input" value="1" />
                                                    <button class="plain-btn" data-cart="increment">
                                                        <span data-icon="addButtonIcon"></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-md-center text-start shopping-cart-price">
                                <label class="d-inline-block fw-medium font-16  me-3 d-md-none">Price:</label>
                                <span class="h5 text-blue-gray fw-semibold">€249.99</span>
                            </div>
                            <div class="d-none d-md-block shopping-cart-quantity">
                                <div
                                    class="qty-btn-wrapper d-flex cart-btn-group justify-content-evenly align-items-center flex-grow-1">
                                    <button class="plain-btn" data-cart="decrement">
                                        <span data-icon="minusButtonIcon"></span>
                                    </button>
                                    <input type="text" class="cart-number-input" value="1" />
                                    <button class="plain-btn" data-cart="increment">
                                        <span data-icon="addButtonIcon"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="text-md-center text-end shopping-cart-total">
                                <label class="d-inline-block fw-medium font-16  me-3 d-md-none">Total:</label>
                                <span class="h5 text-blue-gray fw-semibold">€749.97</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shopping-cart-footer">
                <div class="container">
                    <div class="d-flex justify-content-md-between justify-content-center align-items-center flex-wrap shopping-cart-footer-inner">
                        <h6 class="font-18 mb-0 taxes-flag lh-1">Taxes and Shipping calculated at checkout</h6>
                        <div class="subtotal-wrap">
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="h6 fw-semibold text-blue-gray mb-0">Sub Total</span>
                                <span class="h5 big text-blue-gray fw-semibold m-0">€950.96</span>
                            </div>
                            <button class="custom-btn btn-bright-green w-100">Check Out</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Shopping Cart  Section-->


    <!-- SCRIPTS START -->
    <?php include_once("./includes/script.php") ?>
    <!-- SCRIPTS END -->
</body>

</html>