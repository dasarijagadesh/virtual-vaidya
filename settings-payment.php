<?php
include "includes/header.php";
?>
<section class="padding-conson">
    <div class="container mt-2 mb-2">
        <div class="row back-icon">
            <div class="col-12 d-flex pt-2">
                <a href="index.php" class="d-flex">
                    <i class="fas fa-chevron-left"></i>
                    <p class="pl-2">Settings </p>
                </a>

            </div>
            <!-- <div class="col-12">
                <p class="help-isssue">General Queries</p>

            </div> -->
        </div>
        <div class="row">
            <div class="col-md-6">
                <h4 class="mt-2 mb-2">Payments</h4>
                <div class="card settings-prefered">
                    <div class="d-flex justify-content-between">
                        <img src="assets/images copy/patyam1.png" alt="" class="img-paty">

                        <a href="" data-toggle="modal" data-target="#exampleModal" class="link-ac">Link Account</a>
                    </div>

                </div>
                <!-- //////////////////// -->
                <!-- Modal -->
                <div class="modal fade modal-dialog modal-dialog-centered" id="exampleModal" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header header-noneb">
                                <img src="assets/images copy/patyam1.png" alt="" class="img-paty">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <p>Proceed to link patyTm wallet with this number
                                <p>
                                <h4>+91 6304917977</h4>
                            </div>
                            <div class="modal-footer header-noneb">
                                <button type="button" class="button-cancel" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="button-proceed">Proceed</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //////////////////// -->

            </div>
        </div>

    </div>

</section>
<?php
include "includes/footer.php";
?>