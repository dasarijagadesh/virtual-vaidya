<!DOCTYPE html>
<html lang="en" style="overflow: hidden;">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Virtual vaidhya</title>
    <link rel="stylesheet" href="Assets/css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="stylesheet" href="./Assets/owl-carousal/owl.carousel.min.css">
    <link rel="stylesheet" href="./Assets/owl-carousal/owl.theme.default.min.css">


</head>

<body class="overflow">
    <!-- ////////slider/////////////// -->
    <div class="owl-carousel">
        <div>
            <img src="./Assets/images copy/doctor1.jpg" alt="">
            <!-- <img src="assets/images copy/logo.png" alt="" class="logo"> -->

        </div>
        <div>
            <img src="assets/images copy/doctor5.jpg" alt="">
            <!-- <img src="assets/images copy/logo.png" alt="" class="logo"> -->
        </div>
        <div>
            <img src="./Assets/images copy/doctor1.jpg" alt="">
            <!-- <img src="assets/images copy/logo.png" alt="" class="logo"> -->
        </div>
        <div>
            <img src="assets/images copy/doctor4.webp" alt="">
            <!-- <img src="assets/images copy/logo.png" alt="" class="logo"> -->
        </div>
    </div>

    <!-- END OF SLIDER -->

    <!-- /////////////////////////////// -->
    <div class="container mt-6 mb-4">
        <div class="row justfy-row ">
            <div class="col-md-10 ">
                <div class="card card-sign">
                    <h4 class="login mt-2 mb-2">Sign-Up</h4>
                    <form action="">
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <input type="text" class="form-control" placeholder="Enter your name">
                            </div>
                            <div class="col-md-6 mt-2">
                                <input type="text" class="form-control" placeholder="Enter your mail">
                            </div>
                            <div class="col-md-6 mt-2">
                                <label for="">Date of birth</label>
                                <input type="date" class="form-control input-dob" placeholder="Enter YOur DOB">
                            </div>

                            <div class=" col-md-6 mt-2 select-phno">
                                <select name="" id="" class="border-n">
                                    <option value="+91">+91</option>
                                    <option value="+91">+92</option>
                                    <option value="+91">+93</option>
                                    <option value="+91">+94</option>
                                    <option value="+91">+95</option>
                                    <option value="+91">+96</option>
                                    <option value="+91">+97</option>
                                    <input type="number" name="" id="" placeholder=" mobile number" class="focus">
                                </select>
                            </div>

                            <div class="col-md-6">
                                <a href="log-in.php">
                                    <button class="button-continue button-log"><a href="otp.php">Continue</a></button>
                                </a>

                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>

    <footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script src="jquery.min.js"></script>
        <script src="./Assets/owl-carousal/owl.carousel.min.js"></script>
        <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel();
        });


        $('.owl-carousel').owlCarousel({
            loop: true,
            loop: true,
            autoplay: true,
            autoplayHoverPause: true,
            margin: 10,
            dots: true,

            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                    dots: true
                },
                600: {
                    items: 1,
                    nav: false,
                    dots: true
                },
                1000: {
                    items: 1,
                    nav: false,
                    loop: false,
                    dots: true
                }
            }
        })
        </script>




    </footer>
</body>

</html>