<?php
include "includes/header.php";
?>
<section class="padding-conson">
    <div class="container-fluid mt-2 mb-2">
        <div class="row back-icon">
            <div class="col-12 d-flex pt-2">
                <a href="offer-sub.php" class="d-flex">
                    <i class="fas fa-chevron-left"></i>
                    <p class="pl-2">Book Lab Test</p>
                </a>

            </div>
            <!-- <div class="col-12">
                <p class="help-isssue">General Queries</p>

            </div> -->
            <div class="col-md-12">
                <h4 class="mt-2 mb-2">Add Patient Details</h4>
                <p class="genrate-r">Report will be genrate with this name</p>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-12">

                <div class="card form-bgr">
                    <form>
                        <div class="form-group">

                            <input type="text" class="form-control" id="inputAddress2" placeholder="Enter patient name">
                        </div>
                        <div class="form-group">

                            <input type="text" class="form-control" id="inputAddress2" placeholder="+91 6304917977">
                        </div>
                        <div class="form-group">

                            <input type="date" class="form-control contr" id="inputAddress2"
                                placeholder="Enter your DOB">
                        </div>

                        <div class="form-group">
                            <div class="form-check pl-0 space-even-pl">
                                <label for="">Gender</label>
                                <div class="d-flex">
                                    <input type="radio" id="html" name="fav_language" value="HTML">
                                      <label for="html">Male</label><br>
                                      <input type="radio" id="css" name="fav_language" value="CSS">
                                      <label for="css">Female</label><br>
                                      <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                                      <label for="javascript">Others</label>
                                </div>

                            </div>
                        </div>
                        <div class="form-group">

                            <input type="text" class="form-control" id="inputAddress2" placeholder="Enter your mail">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="continue-b">Continue</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
<?php
include "includes/footer.php";
?>