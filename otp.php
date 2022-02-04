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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body class="overflow">
    <div class="container mt-4 mb-4">



        <div class="row">
            <div class="col">
                <div class="otp-a d-flex">
                    <a href="login.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>

                    <div class="d-flex help-i">
                        <i class="fa fa-question-circle mt-2 pr-2" aria-hidden="true"></i>
                        <p>Help</p>
                    </div>
                </div>
            </div>

        </div>
        <section>
            <div class="row mt-4">
                <div class="col">
                    <h5>Enter the 6-digit OTP Sent to</h5>
                    <h4>+91 6304917977</h4>
                </div>
            </div>
            <div class="row mt-2 d-flex">
                <div class="col box-otp d-flex">
                    <input type="number" placeholder="*" class="focus">

                    <input type="number" placeholder="*" class="focus">

                    <input type="number" placeholder="*" class="focus">

                    <input type="number" placeholder="*" class="focus">

                    <input type="number" placeholder="*" class="focus">

                    <input type="number" placeholder="*" class="focus">
                </div>

            </div>
            <div class="row">
                <div class=" col mt-4 d-flex time-otp">
                    <div>
                        <h6>
                            Didn't receive the code ?
                        </h6>
                        <a href="login.html">Resend</a>
                    </div>
                    <p>5:30</p>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <button class="otp-continue"> <a href="index.php"> Continue</a>
                    </button>

                </div>

            </div>
        </section>

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
            autoplayTimeout: 2000,
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