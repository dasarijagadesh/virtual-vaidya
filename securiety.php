<?php
include "includes/header.php";
?>
<section class="padding-conson">
    <div class="container mt-2 mb-2">
        <div class="row back-icon">
            <div class="col-12 d-flex pt-2">
                <a href="settings.php" class="d-flex">
                    <i class="fas fa-chevron-left"></i>
                    <p class="pl-2">Settings </p>
                </a>

            </div>
            <!-- <div class="col-12">
                <p class="help-isssue">General Queries</p>

            </div> -->
        </div>
        <div class="row justify-content-around">
            <div class="col-md-12">
                <h4>Password & Security</h4>
            </div>
            <div class="col-md-6">
                <div>
                    <div class="card card-logus">
                        <h5>Login Using</h5>
                        <form class="form">
                            <div class="inputGroupss">
                                <input id="radio1" name="radio" type="radio" />
                                <label for="radio1">OTP</label>
                            </div>
                            <div class="inputGroupss">
                                <input id="radio2" name="radio" type="radio" />
                                <label for="radio2">Password</label>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-around mt-4">
            <div class="col-md-6">
                <div class="card card-enter-otp">
                    <div class="d-flex justify-content-between">
                        <p>Please verify to Proceed</p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div>
                        <p class="p-gray">OTP</p>
                        <div class="d-flex settings-os">

                            <input type="text" placeholder="Enter OTP" class="pl-2">
                            <a href="" class="clr-ag">RESEND</a>
                        </div>
                        <p class="pt-2 mb-0 p-gray">OTP sent to 6304917977</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
<?php
include "includes/footer.php";
?>