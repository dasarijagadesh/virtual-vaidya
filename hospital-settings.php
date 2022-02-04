<?php
include "includes/header.php";
?>
<section class="padding-conson">
    <div class="container mt-2 mb-2">
        <div class="row back-icon">
            <div class="col-12 d-flex pt-2">
                <a href="settings.php" class="d-flex">
                    <i class="fas fa-chevron-left"></i>
                    <p class="pl-2">Edit Profile</p>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h4 class="mt-2 mb-2">Hospital Settings</h4>
                <div class="card settings-prefered">
                    <div class="d-flex justify-content-between box-for">
                        <p>Switch on to view all hospitals and doctors available</p>

                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>

                    <p class="mt-2">Your preferred hospital</p>
                    <div class="d-flex justify-content-between">
                        <div class="d-flex settings-search">
                            <i class="fas fa-search pl-2"></i>
                            <input type="text" placeholder="Enter your preferred hospital" class="pl-2">
                        </div>
                        <button type="submit" class="button-save">Save</button>
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