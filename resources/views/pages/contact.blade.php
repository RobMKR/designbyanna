<!DOCTYPE html>
<html lang="zxx">

<head>
    <title> Designsbyanna | Contacts</title>

    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Designsbyanna" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!--// Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
    <link href="css/style6.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->
    <!--web font-->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i" rel="stylesheet">
    <!--//web font-->

</head>

<body>
<!-- banner -->
<section class="banner-inner" id="home">
    <!-- header -->
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <h1><a class="navbar-brand" href="/">
                        <span class="fab fa-osi"></span>  Designsbyanna
                    </a></h1>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item cool">
                            <a class="nav-link" href="/">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item cool">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item cool">
                            <a class="nav-link" href="/services">Services</a>
                        </li>
                        <li class="nav-item cool">
                            <a class="nav-link" href="/gallery">Gallery</a>
                        </li>

                        <li class="nav-item cool active">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                    </ul>


                </div>
            </nav>
        </div>
    </header>
    <!-- //header -->
    <!-- banner -->
    <div class="bs-slider-overlay-inner">
    </div>
</section>
<!-- //banner -->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="/">Home</a>
    </li>
    <li class="breadcrumb-item active">Contact</li>
</ol>
<!-- contact -->
<section class="banner-bottom-w3ls pt-lg-5 pt-md-3 pt-3">
    <div class="inner-sec-wthreelayouts pt-md-5 pt-md-3 pt-3">
        <h2 class="tittle text-center mb-md-5 mb-4">Get In Touch</h2>
        <div class="container">
            <div class="address row mb-5">
                <div class="col-lg-4 address-grid-w3l">
                    <div class="row address-info">
                        <div class="col-md-3 address-left text-center">
                            <i class="far fa-map"></i>
                        </div>
                        <div class="col-md-9 address-right text-left">
                            <h6 class="ad-info text-uppercase mb-2">Address</h6>
                            <p> 317 Delaware Rd Unit C, Burbank, CA.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 address-grid-w3l">
                    <div class="row address-info">
                        <div class="col-md-3 address-left text-center">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="col-md-9 address-right text-left">
                            <h6 class="ad-info text-uppercase mb-2">Email</h6>
                            <p>Email :
                                <a href="mailto:sales@designsbyanna.net"> sales@designsbyanna.net</a>
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 address-grid-w3l">
                    <div class="row address-info">
                        <div class="col-md-3 address-left text-center">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="col-md-9 address-right text-left">
                            <h6 class="ad-info text-uppercase mb-2">Phone</h6>
                            <p>+1 (818) 254-5810</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 main_grid_contact">
                    @if(\Illuminate\Support\Facades\Session::has('success'))
                        Thanks for your message! We will contact you as soon as possible.
                    @else
                        <div class="form">
                            <h4 class="mb-4 text-left">Send us a message</h4>
                            <form action="#" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="my-2">Name</label>
                                    <input class="form-control" type="text" name="Name" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" name="Email" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea id="textarea" placeholder=""></textarea>
                                </div>
                                <div class="input-group1">
                                    <input class="form-control" type="submit" value="Submit">
                                </div>
                            </form>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</section>
<!-- //contact -->
<!--/footer-->
<footer class="footer-main-w3layouts py-md-5 py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 footer-grid-w3ls">
                <h3 class="mb-4">About Us</h3>
                <p>Designsbyanna is USA’s high-end and full service interior design company. We develop relationship with our clients that last beyond a single project. Our team possess multi-talented professionals having broad and deep experience in variety of aspects of the architecture and interior design disciplines and significant design background. </p>

            </div>
            <div class="col-lg-4 footer-grid-w3ls">
                <h3 class="mb-4">Address</h3>
                <address class="mb-0">
                    <p class="mb-2"><i class="fas fa-map-marker-alt"></i> 317 Delaware Rd Unit C<br> Burbank, CA.</p>
                    <p><i class="fas mr-1 fa-phone"></i> +1 (818) 254-5810</p>
                    <p><i class="far mr-1 fa-envelope-open"></i> <a href="mailto:sales@designsbyanna.net">sales@designsbyanna.net</a></p>
                </address>

            </div>
            <div class="col-lg-4 footer-grid-w3ls">
                <h3 class="mb-4">We Offer</h3>
                <ul>
                    <li><i class="fas mr-1 fa-long-arrow-alt-right"></i> Interior Design.</li>
                    <li><i class="fas mr-1 fa-long-arrow-alt-right"></i> Furniture Design.</li>
                    <li><i class="fas mr-1 fa-long-arrow-alt-right"></i> Recommendations.</li>
                </ul>
                <h3 class="mt-4 mb-4">Newsletter</h3>
                <p class="mb-3">Subscribe to Our Newsletter to get News, Amazing Offers &amp; More</p>
                <form action="#" method="post">
                    <input type="email" name="Email" placeholder="Enter your email..." required="">
                    <button class="btn1"><i class="far fa-paper-plane"></i></button>
                    <div class="clearfix"> </div>
                </form>
            </div>
        </div>
    </div>
    <div class="copyright-w3layouts mt-md-5 mt-4 text-center">
        <p>© Designsbyanna . All Rights Reserved | Design by <a href="https://mgplabs.com" target="_blank">MGPLab</a></p>
    </div>
</footer>
<!-- //footer -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/search.js"></script>
<!-- /dropdown nav -->
<script>
    $(document).ready(function() {
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });

</script>
<!-- //dropdown nav -->
<!-- Smooth-Scrolling-JavaScript -->
<script src="js/easing.js"></script>
<script src="js/move-top.js"></script>
<script>
    jQuery(document).ready(function($) {
        $(".scroll, .navbar li a, .footer li a").click(function(event) {
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });

</script>
<!-- //Smooth-Scrolling-JavaScript -->
<script>
    $(document).ready(function() {
        /*
                                var defaults = {
                                      containerID: 'toTop', // fading element id
                                    containerHoverID: 'toTopHover', // fading element hover id
                                    scrollSpeed: 1200,
                                    easingType: 'linear'
                                 };
                                */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });

</script>

<!-- //Smooth-Scrolling-JavaScript -->
<!-- /js -->
<script src="js/bootstrap.js"></script>
<!-- //js -->
</body>

</html>
