<footer>
    <section>
        <div class="container-fluid">
            <div class="row text-center footer-rows">
                <!-- <div class="col padding-footer">
                    <a href="help.php">
                        <i class="fas fa-phone"></i>
                        <p>Help</p>

                    </a>
                </div> -->
                <!-- <div class="col  padding-footer">
                    <a href="bookings.php">
                        <i class="fas fa-shopping-cart"></i>
                        <p>Cart</p>

                    </a>
                </div> -->
                <div class="col  padding-footer">
                    <a href="index.php">
                        <i class="fas fa-house-user"></i>
                        <p>Home</p>
                    </a>
                </div>
                <div class="col  padding-footer">
                    <a href="consult-now.php">
                        <i class="far fa-comment-dots"></i>
                        <p>Consult Now</p>

                    </a>
                </div>
                <div class="col  padding-footer">
                    <a href="records.php">
                        <i class="far fa-folder-open"></i>
                        <p>Records</p>

                    </a>
                </div>


            </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="jquery.min.js"></script>
    <script src="./Assets/owl-carousal/owl.carousel.min.js"></script>
    <script src="./Assets/owl-carousal/upload.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="
https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"></script>
    <script>
    < script src = "https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" >
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>

    <script>
    $(document).ready(function() {
        $(".time").owlCarousel();
    });


    $('.time').owlCarousel({
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
    <script>
    $(document).ready(function() {
        $(".background-carosel").owlCarousel();
    });


    $('.background-carosel').owlCarousel({
        loop: true,
        loop: true,
        autoplay: true,
        autoplayHoverPause: true,
        margin: 10,
        dots: false,

        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false,
                dots: false
            },
            600: {
                items: 1,
                nav: false,
                dots: false
            },
            1000: {
                items: 1,
                nav: false,
                loop: false,
                dots: false
            }
        }
    })
    </script>

    <script>
    $(function() {
        $('.accordian li').on('click', function() {
            if ($(this).find('ul').hasClass('open')) {
                $('ul.open').slideToggle().removeClass('open');
                $('.accordian h3 span').removeClass('closed');
                $('.accordian h3').removeClass('closed');
            } else {
                $('ul.open').slideToggle().removeClass('open');
                $(this).find('ul').slideToggle().addClass('open');
                $('.accordian h3, .accordian h3 span').removeClass('closed');
                $(this).find('h3, h3 span').addClass('closed')
            }
        });
        // Active class starts one open
        $('.accordian li.active ul').slideDown().addClass('open');
    });
    </script>


    <script>
    $(document).ready(function() {

        $("#owl-demo").owlCarousel({
            navigation: true,
            items: 1,
            loop: true,
            nav: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
        });

    });
    </script>
    <script>
    $(document).ready(function() {

        $(".background-carosel").owlCarousel({
            navigation: true,
            items: 1,
            loop: true,
            nav: true,
            dots: false,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
        });

    });
    </script>
    <script>
    $(document).ready(function() {
        $("#testimonial-slider").owlCarousel({
            items: 1,
            itemsDesktop: [1000, 1],
            itemsDesktopSmall: [990, 1],
            itemsTablet: [768, 1],
            pagination: true,
            navigation: false,
            navigationText: ["", ""],
            slideSpeed: 1000,
            autoPlay: true,
            dots: false


        });
    });
    </script>
    <script>
    $(document).ready(function() {

        $("#owl-covid").owlCarousel({
            navigation: false,
            items: 1,
            dots: false,
            loop: true,
            nav: false,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
        });

    });
    </script>
</footer>
</body>

</html>