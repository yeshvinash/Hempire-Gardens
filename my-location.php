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

    <!-- Our Location hero section start  -->

    <section class="my-location-hero-bg hempire-hero space-top-lg space-bottom-lg">
        <div class="container">
            <div class="our-shop-title text-center">
                <h2 class="big mb-0 text-white fw-semibold">Our Location</h2>
            </div>
        </div>
    </section>

    <!-- Our Location hero section end  -->

    <div class="container">

        <!--my location header start-->
        <div
            class="d-flex pb-2 space-top-md align-items-start align-sm-items-center  justify-content-between flex-column flex-sm-row gap-5 gap-sm-0">
            <div class="d-flex ">
                <div class="d-flex me-5">
                    <div class="unlock-wrap flex-center">
                        <i class="flex-center" data-icon="locationGreen"></i>
                    </div>
                </div>
                <div>
                    <h3 class="text-blue-gray fw-semibold">Address</h3>
                    <h5 class="fw-normal">You can easily edit or delete your address</h5>
                </div>
            </div>
            <button data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                class="custom-btn btn-gray">+ Add a New Address</button>
        </div>
        <!--my location header end-->
        <section class="mt-5 p-4">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="location-card">
                        <div class="d-flex justify-content-between location-card-header align-items-center">
                            <h6 class="text-blue-gray fw-semibold">Default Address</h6>
                            <div class="d-flex gap-4">
                                <button class="plain-btn"><span data-icon="editBtn"></span></button>
                                <button class="plain-btn"><span data-icon="deleteButtonIcon"></span></button>
                            </div>
                        </div>
                        <div class="location-card-content">
                            <div>
                                <h6>Name</h6>
                                <p>Selena Grande</p>
                            </div>
                            <div>
                                <h6>User Name</h6>
                                <p>Selena007</p>
                            </div>
                            <div>
                                <h6>Address</h6>
                                <p>857 Formula Lane, Rockwall, Texas <br />
                                    75087</p>
                            </div>
                            <div>
                                <h6>Country</h6>
                                <p>New Maxico</p>
                            </div>
                            <div>
                                <h6>City</h6>
                                <p>Rockwall</p>
                            </div>
                            <div>
                                <h6>Contact No.</h6>
                                <p>469-267-8701</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="location-card">
                        <div class="d-flex justify-content-between location-card-header align-items-center">
                            <h6 class="text-blue-gray fw-semibold">Default Address</h6>
                            <div class="d-flex gap-4">
                                <button class="plain-btn"><span data-icon="editBtn"></span></button>
                                <button class="plain-btn"><span data-icon="deleteButtonIcon"></span></button>
                            </div>
                        </div>
                        <div class="location-card-content">
                            <div>
                                <h6>Name</h6>
                                <p>Selena Grande</p>
                            </div>
                            <div>
                                <h6>User Name</h6>
                                <p>Selena007</p>
                            </div>
                            <div>
                                <h6>Address</h6>
                                <p>1274 Byrd Lane, Albuquerque, New Mexico
                                    87111</p>
                            </div>
                            <div>
                                <h6>Country</h6>
                                <p>New Maxico</p>
                            </div>
                            <div>
                                <h6>City</h6>
                                <p>Albuquerque</p>
                            </div>
                            <div>
                                <h6>Contact No.</h6>
                                <p>505-218-8902</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl address-modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title text-blue-gray fw-semibold" id="staticBackdropLabel">Add a New Address</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="address-form">
                        <div class="address-input-group">
                            <div>
                                <label for="firstName" class="custom-label small">First Name</label>
                                <div class="position-relative">
                                    <span class="input-icon auth-icon auth-left-icon position-absolute">
                                        <i class="flex-center" data-icon="profile"></i>
                                    </span>
                                    <input type="text" id="firstName" name="firstName"
                                        class="form-control custom-input small-input left-icon-input"
                                        placeholder="Enter Name">
                                </div>
                            </div>
                            <div>
                                <label for="lastName" class="custom-label small">Last Name</label>
                                <div class="position-relative">
                                    <span class="input-icon auth-icon auth-left-icon position-absolute">
                                        <i class="flex-center" data-icon="profile"></i>
                                    </span>
                                    <input type="text" id="lastName" name="lastName"
                                        class="form-control custom-input small-input left-icon-input"
                                        placeholder="Enter Name">
                                </div>
                            </div>
                            <div>
                                <label for="companyName" class="custom-label small">Company Name</label>
                                <div class="position-relative">
                                    <span class="input-icon auth-icon auth-left-icon position-absolute">
                                        <i class="flex-center" data-icon="building"></i>
                                    </span>
                                    <input type="text" id="companyName" name="companyName"
                                        class="form-control custom-input small-input left-icon-input"
                                        placeholder="Enter Company Name">
                                </div>
                            </div>
                            <div>
                                <label for="mobileNo" class="custom-label small">Mobile Number</label>
                                <div class="position-relative">
                                    <span class="input-icon auth-icon auth-left-icon position-absolute">
                                        <i class="flex-center" data-icon="mobile"></i>
                                    </span>
                                    <input type="text" id="mobileNo" name="mobileNo"
                                        class="form-control custom-input small-input left-icon-input"
                                        placeholder="Enter Mobile Number">
                                </div>
                            </div>
                            <div>
                                <label for="defaultAdd" class="custom-label small">Default Address</label>
                                <div class="position-relative">
                                    <span class="textarea-icon auth-icon auth-left-icon position-absolute">
                                        <i class="flex-center" data-icon="map"></i>
                                    </span>
                                    <textarea name="defaultAdd" id="defaultAdd" cols="30" rows="10"
                                        class="form-control custom-input small-input left-icon-input"
                                        placeholder="Enter Address"></textarea>
                                </div>
                            </div>
                            <div>
                                <label for="secondaryAdd" class="custom-label small">Secondary Address</label>
                                <div class="position-relative">
                                    <span class="textarea-icon auth-icon auth-left-icon position-absolute">
                                        <i class="flex-center" data-icon="map"></i>
                                    </span>
                                    <textarea name="secondaryAdd" id="secondaryAdd" cols="30" rows="10"
                                        class="form-control custom-input small-input left-icon-input"
                                        placeholder="Enter Address"></textarea>
                                </div>
                            </div>
                            <div>
                                <label for="firstName" class="custom-label small">First Name</label>
                                <div class="position-relative">
                                    <span class="input-icon auth-icon auth-left-icon position-absolute">
                                        <i class="flex-center" data-icon="profile"></i>
                                    </span>
                                    <input type="text" id="firstName" name="firstName"
                                        class="form-control custom-input small-input left-icon-input"
                                        placeholder="Enter Name">
                                </div>
                            </div>
                            <div>
                                <label for="lastName" class="custom-label small">Last Name</label>
                                <div class="position-relative">
                                    <span class="input-icon auth-icon auth-left-icon position-absolute">
                                        <i class="flex-center" data-icon="profile"></i>
                                    </span>
                                    <input type="text" id="lastName" name="lastName"
                                        class="form-control custom-input small-input left-icon-input"
                                        placeholder="Enter Name">
                                </div>
                            </div>
                            <div>
                                <label for="companyName" class="custom-label small">Company Name</label>
                                <div class="position-relative">
                                    <span class="input-icon auth-icon auth-left-icon position-absolute">
                                        <i class="flex-center" data-icon="building"></i>
                                    </span>
                                    <input type="text" id="companyName" name="companyName"
                                        class="form-control custom-input small-input left-icon-input"
                                        placeholder="Enter Company Name">
                                </div>
                            </div>
                            <div>
                                <label for="mobileNo" class="custom-label small">Mobile Number</label>
                                <div class="position-relative">
                                    <span class="input-icon auth-icon auth-left-icon position-absolute">
                                        <i class="flex-center" data-icon="mobile"></i>
                                    </span>
                                    <input type="text" id="mobileNo" name="mobileNo"
                                        class="form-control custom-input small-input left-icon-input"
                                        placeholder="Enter Mobile Number">
                                </div>
                            </div>
                        </div>
                        <div class="custom-checkbox-wrap position-relative d-inline-flex align-items-center">
                            <input id="defaultAddress" type="checkbox" class="checkbox-input" value="">
                            <div class="custom-checkbox flex-center">
                                <i class="flex-center" data-icon="tick"></i>
                            </div>
                            <label for="defaultAddress" class="checkbox-label ">Set as default address</label>
                        </div>
                        <button class="custom-btn btn-bright-green mx-auto">Add</button>
                    </form>
                </div>
            </div>
        </div>
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