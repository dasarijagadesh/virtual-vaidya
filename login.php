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
                <div class="card card-log">
                    <h4 class="login">Log In</h4>
                    <h5 class="log-h5 mt-4">Lets get Started Enter Your Mobile Number</h5>

                    <div class="div-border select-login">
                        <select name="" id="" class="">
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
                    <div class="trouble-s">
                        <p>By Continuing , You agree to our</p>
                        <a href="">Terms & Conditions</a>
                    </div>
                    <button class="button-continue button-log"><a href="otp.php">Continue</a></button>
                    <div class="mt-2">
                        <a href="" class="trouble-sign">Trouble signing in ?</a>
                    </div>
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