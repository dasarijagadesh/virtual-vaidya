<?php
include "includes/header.php";
?>
<section class="padding-conson">
    <div class="container-fluid mt-2 mb-2">
        <div class="row back-icon">
            <div class="col-12 d-flex pt-2">
                <a href="index.php" class="d-flex">
                    <i class="fas fa-chevron-left"></i>
                    <p class="pl-2">Online Consultation</p>
                </a>

            </div>
            <!-- <div class="col-12">
                <p class="help-isssue">General Queries</p>

            </div> -->
        </div>

        <div class="row">
            <div class="col-md-12">
                <h4>Find Your Specilist Here</h4>
                <div class="d-flex main-search mt-2 mb-2">
                    <i class="fas fa-search pl-2"></i>
                    <input type="text" placeholder="Find Your Specilist Here" class="pl-2">
                </div>
                <!-- <h4>Top Doctors</h4> -->
            </div>
            <div class="col-md-6 col-xs-6 col-sm-6">
                <div class="card card-consultations mt-2 ">
                    <div class="d-flex fever-case">
                        <h6>General practitioner</h6>
                        <p class="pending-completed">Online</p>
                    </div>
                    <div class="d-flex img-ng ">
                        <img class="fever-img" src="assets/images copy/gyna.jpg." alt="">
                        <div class="total-p">
                            <div class="d-flex justify-space-between name-time">
                                <p>Dr. Madhu Priya</p>
                            </div>

                            <p class="specilization"><i class="fas fa-clock pr-2 i-card"></i>9:00AM -
                                6:30PM
                            </p>
                            <div class="online-consulat">
                                <button><a href="time-slot.php"> Get Appointment</a></button>
                            </div>
                        </div>
                        <div>
                            <p class="time-clr-f">34min</p>
                        </div>
                    </div>


                </div>

            </div>
            <div class="col-md-6 col-xs-6 col-sm-6">
                <div class="card card-consultations mt-2 ">
                    <div class="d-flex fever-case">
                        <h6>Gynecologist</h6>
                        <p class="pending-incompleted">Ofline</p>
                    </div>
                    <div class="d-flex img-ng ">
                        <img class="fever-img" src="assets/images copy/doctor7.jpg." alt="">
                        <div class="total-p">
                            <div class="d-flex justify-space-between name-time">
                                <p>Dr. Sravani Kumari</p>
                            </div>

                            <p class="specilization"><i class="fas fa-clock pr-2 i-card"></i>9:00AM -
                                6:30PM
                            </p>
                            <div class="online-consulat">
                                <button><a href="time-slot.php"> Get Appointment</a></button>
                            </div>
                        </div>
                        <div>
                            <p class="time-clr-f">34min</p>
                        </div>
                    </div>


                </div>

            </div>
            <div class="col-md-6 col-xs-6 col-sm-6">
                <div class="card card-consultations mt-2 ">
                    <div class="d-flex fever-case">
                        <h6> Dermatologist</h6>
                        <p class="pending-completed">Online</p>
                    </div>
                    <div class="d-flex img-ng ">
                        <img class="fever-img" src="assets/images copy/doctor-3.jpg." alt="">
                        <div class="total-p">
                            <div class="d-flex justify-space-between name-time">
                                <p>Dr. Indu</p>
                            </div>

                            <p class="specilization"><i class="fas fa-clock pr-2 i-card"></i>9:00AM -
                                6:30PM
                            </p>
                            <div class="online-consulat">
                                <button><a href="time-slot.php"> Get Appointment</a></button>
                            </div>
                        </div>
                        <div>
                            <p class="time-clr-f">34min</p>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
</section>
<?php
include "includes/footer.php";
?>