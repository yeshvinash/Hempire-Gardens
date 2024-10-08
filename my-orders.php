<!DOCTYPE html>
<html lang="en">
<?php 
  $title = "Hempire Gardens | Sign up";
  include_once("./includes/head.php")
?>

<body>
    <!-- HEADER START -->
    <?php include_once("./includes/header.php") ?>
    <!-- HEADER END -->

    <!-- my orders hero section start  -->

    <section class="my-orders-hero-bg hempire-hero space-top-lg space-bottom-lg">
        <div class="container">
            <div class="our-shop-title text-center">
                <h2 class="big mb-0 text-white fw-semibold">My Orders</h2>
            </div>
        </div>
    </section>

    <!-- my orders hero section end  -->



    <!--my orders header start-->
    <div class="container">
        <div class="d-flex pb-2 space-top-md ">
            <div class="d-flex me-5">
                <div class="unlock-wrap flex-center">
                    <i class="flex-center" data-icon="myOrderIcon"></i>
                </div>
            </div>
            <div>
                <h3 class="text-blue-gray fw-semibold">Order #005</h3>
                <h5 class="fw-normal">Place on April 12, 2023 | 05:50 PM</h5>
            </div>

        </div>
        <!--my orders header end-->

        <!-- table section start  -->
        <section class="mt-5 pt-4">
            <div class="row">
                <div class="col-lg-8">
                    <div class="table-wrapper">
                        <table class="table order-history-table">
                            <tr>
                                <th>
                                    <h6>Product Name</h6>
                                </th>
                                <th>
                                    <h6>Price</h6>
                                </th>
                                <th>
                                    <h6>Quantity</h6>
                                </th>
                                <th>
                                    <h6>Total</h6>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <h6>75% HHC Crumble Blueberry...</h6>
                                </td>
                                <td>
                                    <h6>&#x20AC; 99.99</h6>
                                </td>
                                <td>
                                    <h6>03</h6>
                                </td>
                                <td>
                                    <h6>&#x20AC; 299.97</h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>Amnesia Haze CBD Flower</h6>
                                </td>
                                <td>
                                    <h6>&#x20AC; 249.00</h6>
                                </td>
                                <td>
                                    <h6>01</h6>
                                </td>
                                <td>
                                    <h6>&#x20AC; 249.00</h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>Blueberry</h6>
                                </td>
                                <td>
                                    <h6>&#x20AC; 59.99</h6>
                                </td>
                                <td>
                                    <h6>03</h6>
                                </td>
                                <td>
                                    <h6>&#x20AC; 179.97</h6>
                                </td>
                            </tr>
                            <tr class="bordered-row">
                                <td colspan="3">
                                    <h6>Sub Total</h6>
                                </td>
                                <td>
                                    <h6>&#x20AC; 728.94</h6>
                                </td>
                            </tr>
                            <tr class="bordered-row">
                                <td colspan="3">
                                    <h6>Shipping Charge (International Package)</h6>
                                </td>
                                <td>
                                    <h6>&#x20AC; 728.94</h6>
                                </td>
                            </tr>
                            <tr class="bordered-row">
                                <td colspan="3">
                                    <h6 class="fw-semibold text-blue-gray">Total</h6>
                                </td>
                                <td>
                                    <h6 class="fw-semibold text-blue-gray">&#x20AC; 778.93</h6>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="address-sidebar mt-5 mt-lg-0">
                        <div class="d-flex justify-content-between align-items-center order-sidebar-header">
                            <h6 class="m-0 fw-semibold text-blue-gray">Billing Address</h6>
                            <p class="font-16 m-0">Payment Status : Paid</p>
                        </div>
                        <div class="p-4 billing-content">
                            <div>
                                <h6>Name</h6>
                                <p>Selena Grande</p>
                            </div>
                            <div>
                                <h6>User Name</h6>
                                <p>Selena007</p>
                            </div>
                            <div class="content-row">
                                <h6>Address</h6>
                                <p>857 Formula Lane, Rockwall, Texas 75087</p>
                            </div>
                        </div>
                    </div>
                    <div class="address-sidebar mt-5">
                        <div class="d-flex justify-content-between align-items-center order-sidebar-header">
                            <h6 class="m-0 fw-semibold text-blue-gray">Shipping Address</h6>
                            <p class="font-16 m-0">Fulfillment Status : Unfulfilled</p>
                        </div>
                        <div class="p-4 billing-content">
                            <div>
                                <h6>Name</h6>
                                <p>Selena Grande</p>
                            </div>
                            <div>
                                <h6>User Name</h6>
                                <p>Selena007</p>
                            </div>
                            <div class="content-row">
                                <h6>Address</h6>
                                <p>1274 Byrd Lane, Albuquerque, New Mexico 87111</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </div>
    </section>

    <!-- table section end  -->

    </div>




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