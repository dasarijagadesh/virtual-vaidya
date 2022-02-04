<?php
include "includes/header.php";
?>
<section class="padding-conson">
    <div class="container">
        <div class="row back-icon">
            <div class="col-3 d-flex pt-2">
                <a href="bookings.php" class="d-flex">
                    <i class="fas fa-chevron-left"></i>

                </a>
            </div>
            <div class="col-9 d-flex pt-2">
                <p>View Details</p>
            </div>
        </div>
        <div class="row card-doctor-a">

            <div class="col-5 ">
                <img src="assets/images copy/medicine.png" alt="" class="img-medicine">
            </div>
            <div class="col-7 font-mb-p">
                <h6> Dolo-150</h6>
                <p class="qualification-p">Fever,cold,Headache </p>
                <p class="qualification-p">(above 15Years)</p>
                <p class="font-pdoctor">Exp Date : 12/012022</p>

            </div>

            <div class="col-12 d-flex justify-icon-even">
                <p><i class="fas fa-thumbs-up pl-2 okay-icon"></i> 100%</p>
                <p><i class="fas fa-comment-alt pl-2 okay-icon"></i> 10 Patient Stories</p>
            </div>

        </div>
        <div class="row mt-2 mb-2">
            <div class="col-12">
                <h6 class="pb-4 pt-4">Highly Recommended For</h6>
                <div class="d-flex descrption-ph">
                    <i class="far fa-heart pr-2"></i>
                    <div>
                        <h6>Doctor Certified</h6>
                        <p>90% patients find the doctors friendly and approachable</p>
                    </div>
                </div>
                <div class="d-flex descrption-ph">
                    <i class="fas fa-info-circle pr-2"></i>
                    <div>
                        <h6>Detailed Medicine Explanation</h6>
                        <p>Dolo 650 Tablet is a common painkiller used to treat aches and pains. It works by blocking
                            chemical messengers in the brain that tell us we have pain.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-between">
                <button class="recomonded-detail"><i class="fas fa-share-alt pr-2 clr-detail"></i><a href="">
                        Recommend</a></button>
                <button class="consult-nowb">BUY NOW</button>
            </div>
        </div>

    </div>

</section>
<?php
include "includes/footer.php";
?>