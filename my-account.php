<!DOCTYPE html>
<html lang="en">
<?php
$title = "Hempire Gardens | Legislation";
include_once("./includes/head.php")
    ?>

<body>
    <!-- HEADER START -->
    <?php include_once("./includes/header.php") ?>
    <!-- HEADER END -->

    <!-- my account hero section start  -->

    <section class="my-account-hero-bg hempire-hero space-top-lg space-bottom-lg">
        <div class="container">
            <div class="our-shop-title text-center">
                <h2 class="big mb-0 text-white fw-semibold">My Account</h2>
            </div>
        </div>
    </section>

    <!-- my account hero section end  -->


    <!--my account header start-->
    <div class="container">
        <div class="d-flex pb-2 space-top-md ">
            <div class="d-flex me-5">
                <div class="p-5 rounded-circle history-icon-wrapper">
                    <span data-icon="historyIcon"></span>
                </div>
            </div>
            <div>
                <h3 class="text-blue-gray fw-semibold">Order History</h3>
                <h5 class="fw-normal">You haven't placed any orders yet.</h5>
            </div>
        </div>
    </div>
    <!--my account header end-->
    <!--my account table section start-->
    <div class="mt-5 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <!-- order history table start -->
                    <section>
                        <div class="table-wrapper">
                            <table class="table order-history-table">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <h6>Order</h6>
                                        </th>
                                        <th scope="col">
                                            <h6>Date</h6>
                                        </th>
                                        <th scope="col">
                                            <h6>Payment Status</h6>
                                        </th>
                                        <th scope="col">
                                            <h6>Fullfillment Status</h6>
                                        </th>
                                        <th scope="col">
                                            <h6>Total</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">
                                            <h6>#001</h6>
                                        </td>
                                        <td>
                                            <h6>April 01, 2023</h6>
                                        </td>
                                        <td>
                                            <h6>paid</h6>
                                        </td>
                                        <td>
                                            <h6>Unfulfilled</h6>
                                        </td>
                                        <td>
                                            <h6>&#x20AC; 99.99</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">
                                            <h6>#002</h6>
                                        </td>
                                        <td>
                                            <h6>April 02, 2023</h6>
                                        </td>
                                        <td>
                                            <h6>paid</h6>
                                        </td>
                                        <td>
                                            <h6>Unfulfilled</h6>
                                        </td>
                                        <td>
                                            <h6>&#x20AC; 249.00</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">
                                            <h6>#003</h6>
                                        </td>
                                        <td>
                                            <h6>April 07, 2023</h6>
                                        </td>
                                        <td>
                                            <h6>unpaid</h6>
                                        </td>
                                        <td>
                                            <h6>Unfulfilled</h6>
                                        </td>
                                        <td>
                                            <h6>&#x20AC; 59.99</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">
                                            <h6>#004</h6>
                                        </td>
                                        <td>
                                            <h6>April 12, 2023</h6>
                                        </td>
                                        <td>
                                            <h6>paid</h6>
                                        </td>
                                        <td>
                                            <h6>Unfulfilled</h6>
                                        </td>
                                        <td>
                                            <h6>&#x20AC; 149.99</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">
                                            <h6>#005</h6>
                                        </td>
                                        <td>
                                            <h6>April 16, 2023</h6>
                                        </td>
                                        <td>
                                            <h6>unpaid</h6>
                                        </td>
                                        <td>
                                            <h6>Unfulfilled</h6>
                                        </td>
                                        <td>
                                            <h6>&#x20AC; 275.00</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">
                                            <h6>#006</h6>
                                        </td>
                                        <td>
                                            <h6>April 18, 2023</h6>
                                        </td>
                                        <td>
                                            <h6>paid</h6>
                                        </td>
                                        <td>
                                            <h6>Unfulfilled</h6>
                                        </td>
                                        <td>
                                            <h6>&#x20AC; 249.99</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">
                                            <h6>#007</h6>
                                        </td>
                                        <td>
                                            <h6>April 21, 2023</h6>
                                        </td>
                                        <td>
                                            <h6>unpaid</h6>
                                        </td>
                                        <td>
                                            <h6>Unfulfilled</h6>
                                        </td>
                                        <td>
                                            <h6>&#x20AC; 249.99</h6>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section />
                    <!-- order history table end -->
                </div>
                <div class="col-lg-3 mt-5 mt-lg-0 ">
                    <!-- account detail sidebar start -->
                    <aside>
                        <div class="order-sidebar d-flex flex-column">
                            <div class="order-sidebar-header">
                                <h6 class="text-blue-gray fw-semibold">Account Details</h6>
                            </div>
                            <div class="order-sidebar-content d-flex flex-column">
                                <ul>
                                    <li>
                                        <h6>NAME</h6>
                                        <p>Selena Grande</p>
                                    </li>
                                    <li>
                                        <h6>USER NAME</h6>
                                        <p>Selena007</p>
                                    </li>
                                    <li>
                                        <h6>ADDRESS</h6>
                                        <p>4140 Parker Rd. Allentown, New Mexico
                                            31134.</p>
                                    </li>
                                </ul>
                            </div>
                            <button class="custom-btn btn-gray view-address-btn ">View Address</button>


                        </div>
                    </aside>
                    <!-- account detail sidebar end -->
                </div>
            </div>
        </div>
    </div>
    <!--my account table section end-->

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