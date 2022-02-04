<?php
include "includes/header.php";
?>
<section class="padding-conson">
    <div class="container">
        <div class="row back-icon">
            <div class="col-12 d-flex pt-2 d-flex justify-content-between medical-pii">
                <a href="records.php" class="d-flex">
                    <i class="fas fa-chevron-left"></i>
                </a>
                <p>Medical Records</p>
                <i class="fas fa-plus plus-medical plus-mhp"></i>
            </div>

        </div>


        <!-- //////////////Drop-section///////////////////// -->
        <div class="row medical-row">

            <div class="col">

                <div class="medical-tab">
                    <div class="tab">
                        <input type="radio" id="rd1" name="rd" class="in-put-tab">
                        <label class="tab-label" for="rd1">Smoke and Alcohol</label>
                        <div class="tab-content">
                            <div class="d-flex justify-content-between round-pcls">

                                <a href="">Smoker</a>
                                <a href="">SPeed Smoker</a>

                            </div>
                            <div class="d-flex  justify-content-between round-pcls mt-2">
                                <a href="">Tobacco User</a>
                                <a href="">Drinks Alchohol</a>

                            </div>

                        </div>
                    </div>
                    <div class="tab">
                        <input type="radio" id="rd2" name="rd" class="in-put-tab">
                        <label class="tab-label" for="rd2">Allergies</label>
                        <div class="tab-content">
                            <div class="d-flex justify-content-between round-pcls">

                                <a href="">Food Allergy</a>
                                <a href="">Drug Allergy</a>

                            </div>
                            <div class="d-flex  justify-content-between round-pcls mt-2">
                                <a href="">Dust Allergy</a>
                                <a href="">No Alchohol</a>

                            </div>
                        </div>
                    </div>
                    <div class="tab">
                        <input type="radio" id="rd3" name="rd" class="in-put-tab">
                        <label class="tab-label" for="rd3">Medication and Other Illness</label>
                        <div class="tab-content">
                            <div class="d-flex justify-content-between round-pcls">

                                <a href="">No Chronic disease</a>
                                <a href="">No Comborbidites</a>

                            </div>
                            <div class="d-flex  justify-content-between round-pcls mt-2">
                                <a href="">Diabetes Mellitus</a>
                                <a href="">Hypothyrodism</a>

                            </div>
                            <div class="d-flex  justify-content-between round-pcls mt-2">
                                <a href="">Hypertension</a>
                                <a href="">Epilepsy</a>

                            </div>
                            <div class="d-flex  justify-content-between round-pcls mt-2">
                                <a href="">Under Medication</a>
                                <a href="">Had madication in past</a>

                            </div>
                        </div>
                    </div>
                    <div class="tab">
                        <input type="radio" id="rd4" name="rd" class="in-put-tab">
                        <label class="tab-label" for="rd4">Sexual History</label>
                        <div class="tab-content">
                            <div class="d-flex justify-content-between round-pcls">

                                <a href="">Sexual Orientation</a>


                            </div>

                        </div>
                    </div>
                    <div class="tab">
                        <input type="radio" id="rd5" name="rd" class="in-put-tab">
                        <label class="tab-label" for="rd5">Food and Water Intake</label>
                        <div class="tab-content">
                            <div class="d-flex justify-content-between round-pcls">

                                <a href="">Food Preference</a>
                                <a href="">Cuisine</a>

                            </div>
                            <div class="d-flex  justify-content-between round-pcls mt-2">
                                <a href="">Water Intake</a>
                                <a href="">Breakfast</a>

                            </div>
                            <div class="d-flex  justify-content-between round-pcls mt-2">
                                <a href="">Lunch</a>
                                <a href="">Dinner</a>

                            </div>
                            <div class="d-flex  justify-content-between round-pcls mt-2">
                                <a href="">Food Dislikes</a>
                                <a href="">Skip Meals</a>

                            </div>
                            <div class="d-flex  justify-content-between round-pcls mt-2">
                                <a href="">Food appetite</a>
                                <a href="">Eat out Often</a>

                            </div>
                        </div>
                    </div>
                    <div class="tab">
                        <input type="radio" id="rd6" name="rd" class="in-put-tab">
                        <label class="tab-label" for="rd6">Chronic Findings</label>
                        <div class="tab-content">
                            <div class="d-flex justify-content-between round-pcls">

                                <a href="">Tubericulosis</a>
                                <a href="">Branchial Asthma</a>

                            </div>
                            <div class="d-flex  justify-content-between round-pcls mt-2">
                                <a href="">Coronary Artery Disease</a>
                                <a href="">Cholesterol</a>

                            </div>
                            <div class="d-flex  justify-content-between round-pcls mt-2">
                                <a href="">Diabetes mellitus</a>
                                <a href="">Hypothyrodism</a>

                            </div>
                            <div class="d-flex  justify-content-between round-pcls mt-2">
                                <a href="">Hypertension</a>
                                <a href="">Epilepsy</a>

                            </div>
                        </div>
                    </div>
                    <div class="tab">
                        <input type="radio" id="rd7" name="rd" class="in-put-tab">
                        <label class="tab-label" for="rd7">Products Usage</label>
                        <div class="tab-content">
                            <div class="d-flex justify-content-between round-pcls">

                                <a href="">Skin Care Product</a>
                                <a href="">Hair Care Product</a>

                            </div>
                            <div class="d-flex  justify-content-between round-pcls mt-2">
                                <a href="">Cosmetic Product</a>


                            </div>
                        </div>
                    </div>
                    <div class="tab">
                        <input type="radio" id="rd8" name="rd" class="in-put-tab">
                        <label class="tab-label" for="rd8">Others</label>
                        <div class="tab-content">
                            <div class="d-flex justify-content-between round-pcls">

                                <a href="">Stres</a>
                                <a href="">Physical Activity</a>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /////////////////////////////////////////////// -->
        <div class="row dummy-medical">
            <div class="col-12">
                <p>Add information about your lifestyle ,Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem
                    sit dicta laudantium amet distinctio, voluptatem tempora praesentium corporis nulla culpa illo
                    possimus quis, beatae aspernatur repellat veritatis quo totam at.
                </p>
            </div>
        </div>
        <div class="row">
            <dic class="col-md-6 ">
                <div class="card mt-4 card-history">
                    <div>
                        <h6>has Food Allergy,From Yes</h6>
                        <p>37 Minites ago</p>
                    </div>
                    <div>
                        <h6>has Food Allergy,From Yes</h6>
                        <p>37 Minites ago</p>
                    </div>
                    <div>
                        <h6>has Food Allergy,From Yes</h6>
                        <p>37 Minites ago</p>
                    </div>

                </div>
            </dic>
        </div>



    </div>

</section>
<?php
include "includes/footer.php";
?>