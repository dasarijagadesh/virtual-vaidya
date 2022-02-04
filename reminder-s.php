<?php
include "includes/header.php";
?>
<section class="padding-conson">
    <div class="container">
        <div class="row back-icon">
            <div class="col-3 d-flex pt-2">
                <a href="index.php" class="d-flex">
                    <i class="fas fa-chevron-left"></i>

                </a>
            </div>
            <div class="col-9 d-flex pt-2">
                <p> Medicine Reminder</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-2 mb-2">
                <div class="d-flex justify-content-between">
                    <h5 class=" set-marginr">Set Routine</h5>

                    <button class="reminder-set"> <a href="">Set Reminder</a></button>
                </div>
            </div>
            <div class="col-md-6 card-reminder ">

                <div class="card">
                    <input type="time">
                    <p class="lunch-14"> Wake up </p>
                    <p class="in-11">in <span>3hrs 34min</span></p>

                </div>
                <div class="card">
                    <input type="time">
                    <p class="lunch-14"> Lunch </p>
                    <p class="in-11">in <span>3hrs 34min</span></p>

                </div>
                <div class="card">
                    <input type="time">
                    <p class="lunch-14"> Dinner</p>
                    <p class="in-11">in <span>3hrs 34min</span></p>

                </div>


            </div>
            <div class="col-md-6 card-reminder ">

                <div class="card">
                    <input type="time">
                    <p class="lunch-14">Meet </p>
                    <p class="in-11">in <span>3hrs 34min</span></p>

                </div>
                <div class="card">
                    <input type="time">
                    <p class="lunch-14"> Yoga </p>
                    <p class="in-11">in <span>3hrs 34min</span></p>

                </div>
                <div class="card">
                    <input type="time">
                    <p class="lunch-14"> Birthday </p>
                    <p class="in-11">in <span>3hrs 34min</span></p>

                </div>


            </div>

        </div>

</section>
<?php
include "includes/footer.php";
?>