<?php
include "includes/header.php";
?>
<section class="padding-conson">
    <div class="container-fluid">
        <div class="row back-icon">
            <div class="col-3 d-flex pt-2">
                <a href="time-slot.php" class="d-flex">
                    <i class="fas fa-chevron-left"></i>

                </a>
            </div>
            <div class="col-9 d-flex pt-2">
                <p>Appointment Details</p>
            </div>
        </div>
        <div class="row pt-2 row-bg pb-2">
            <div class="col-md-6">
                <div class="d-flex">
                    <img src="assets/images copy/gyna.jpg" alt="" class="select-slot">
                    <div class="pl-2">
                        <h6>Dr. Madhu Priya</h6>
                        <p class="fs-designation">General Physician</p>
                        <div class=" d-flex justify-icon-even">
                            <p><i class="fas fa-thumbs-up pl-2 okay-icon"></i> 100%</p>
                            <p><i class="fas fa-comment-alt pl-2 okay-icon"></i> 10 Patient Stories</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6  mt-2 mb-2">
                <div class="d-flex in-time">
                    <i class="fas fa-house-user pr-2"></i>
                    <p class="mb-2 apppintment-c">In-Clinic appointment time</p>
                </div>
                <div class="d-flex time-day">
                    <h6>Today, 1:30 PM</h6>
                    <p>in 1 hour 46 minutes</p>
                </div>
                <p class="doctor-address">Amar Jyothi Nursing Home And PMP Medical Center,indiranagar</p>

            </div>

            <div class="col-md-6 p-feed">
                <h6 class="pb-2 clr-black " id="bill-details">Bill Detais</h6>
                <div class="d-flex justify-content-between">
                    <p class="clr-fsa">Consulation Fee</p>
                    <p class="fs-13">&#8377; 600</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p class="clr-fsa">Booking Fee</p>
                    <div class="d-flex"><del class="pr-2 fs-13"> &#8377; 50</del>
                        <p class="free-clr"> FREE</p>
                    </div>
                </div>
                <p class="we-ca">We care for you & Provide a free booking</p>
                <div class="d-flex justify-content-between pt-2">
                    <h6>Total Payble</h6>
                    <p class="fs-13">&#8377; 600</p>
                </div>
                <div class="border-offer mt-2 mb-2">
                    <p> You have saved &#8377; 50 on this appointment</p>
                </div>

            </div>
            <div class="col-md-6 mt-2 mb-2">
                <h6>Choose a mode of payment</h6>
                <div class="d-flex justify-content-between mt-2">
                    <div class="d-flex">
                        <input type="radio" name="pay" class="pr-4">
                        <p class="mb-0  pl-4 doctor-address">Pay Online</p>
                    </div>
                    <p class="fs-13 mb-0">&#8377; 600</p>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="d-flex">
                        <input type="radio" name="pay" class="">
                        <p class="mb-0 pl-4 doctor-address">Pay At Clinic</p>
                    </div>
                    <p class="fs-13 mb-0 ">&#8377; 600</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="border-peel">
                    <div class="d-flex name-assure">
                        <i class="fas fa-check-circle pr-2"></i>
                        <h6>Virtual Vaidya Promise</h6>
                    </div>
                    <div class="padding-15-point">
                        <div class="d-flex">
                            <i class="fas fa-check pr-2 pt-2"></i>
                            <p class="doctor-address">Appointment confirmed instantly with the doctor</p>
                        </div>
                        <div class="d-flex">
                            <i class="fas fa-check pr-2  pt-2"></i>
                            <p class="doctor-address">We assure web will Connect you to the doctors.If your
                                consultation
                                does not happen for unforseen reasons ,We will give you 100% money back. </p>

                        </div>
                        <div class="d-flex">
                            <i class="fas fa-check pr-2  pt-2"></i>
                            <p class="doctor-address">24/7 live chat support to address all your Queries</p>
                        </div>



                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-between mt-4 mb-2">
                <div>
                    <p class="mb-0"> 600
                    </p>
                    <a href="payment-appointment.php/#bill-details">View Bill</a>
                </div>

                <button class="confirm-button"> Confirm Appointment</button>
            </div>
        </div>

    </div>

</section>
<?php
include "includes/footer.php";
?>