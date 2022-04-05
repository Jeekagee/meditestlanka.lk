<!doctype html>
<html class="no-js" lang="en">
 <?php include 'config.php';?>

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>MediTest</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    
    <!--====== PRELOADER PART START ======-->

   

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== NAVBAR TWO PART START ======-->

    <section class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">

                        <a class="navbar-brand" href="#">
                            <img src="assets/images/logo.png" alt="Logo" width="100px">
                            <span>MediTestLank</span>
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item active"><a class="page-scroll" href="#home">hom</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#aboutus">About</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#services">Services</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#team">Team</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#portfolio">Gallery</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#contact">Contact</a></li>

                            </ul>
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== NAVBAR TWO PART ENDS ======-->

    <!--====== SLIDER PART START ======-->

    <section id="home" class="slider_area">
        <div id="carouselThree" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselThree" data-slide-to="0" class="active"></li>
                <li data-target="#carouselThree" data-slide-to="1"></li>
                <li data-target="#carouselThree" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active" style="background-image: url('assets/images/slider/cde.jpg')">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content" style="color:black;">
                                    <h1 class="title" >Automated laboratory services</h1>
                                    <p class="text">We stand for quality, safety and excellence</p>
                                    <ul class="slider-btn rounded-buttons">
                                        <li><a class="main-btn rounded-two" href="#aboutus">Learn More</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->

                </div> <!-- carousel-item -->

                <div class="carousel-item" style="background-image: url('assets/images/slider/efg.jpg')">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title"> Free Doctor Consultation</h1>
                                    <p class="text">Only for the Health Packages</p>
                                    <li><a class="main-btn rounded-two" href="#services">Learn More</a></li>

                                </div> <!-- slider-content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div> <!-- carousel-item -->

                <div class="carousel-item" style="background-image: url('assets/images/slider/lmn.jpg')">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h3 class="title">We care for our senior citizens & Pensioners</h3>
                                    <p class="text">Upto 30% off (Terms & Conditions Apply)</p>

                                </div> <!-- slider-content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div> <!-- carousel-item -->
            </div>

            <a class="carousel-control-prev" href="#carouselThree" role="button" data-slide="prev">
                <i class="lni lni-arrow-left"></i>
            </a>
            <a class="carousel-control-next" href="#carouselThree" role="button" data-slide="next">
                <i class="lni lni-arrow-right"></i>
            </a>
        </div>
    </section>

    <style type="text/css">
        .hover-box{

            padding-top: 25px;
            padding-bottom: 25px;
            font-size: 25px;
            position: relative;
        }
        .overlay {
        padding-top: 25px;
            padding-bottom: 25px;
          position: absolute;
          top: 0;
          bottom: 0;
          left: 0;
          right: 0;
          height: 100%;
          width: 100%;
          opacity: 0;
          transition: .5s ease;
          background-color: #3f3f44;
        }

        .hover-box:hover .overlay {
          opacity: 1;
        }
    </style>

    <section>
        <div class="row text-center" style="color: white;">
            <div class="col-md-4 hover-box" style="background-color: #1996D7;">
                Full range of laboratory services
                <div class="overlay">
                </div>
            </div>
            <div class="col-md-4 hover-box" style="background-color: #7CBA4A;">
                Home visit
                <div class="overlay">
                </div>
            </div>
            <div class="col-md-4 hover-box" style="background-color: #FF0000;">
                Cooperate packages
                <div class="overlay">
                </div>
            </div>
        </div>
    </section>

    <!--====== SLIDER PART ENDS ======-->

    <!--====== FEATRES TWO PART START ======-->

    <section id="aboutus" class="features-area">
        <div class="container">
            <div class="row justify-content-center mb-30">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">About Us</h3>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->

            <div class="row justify-content-center">
                <style type="text/css">
                    .shadow-box{
                        padding: 25px 20px 25px 20px;
                        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                    }
                </style>
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="section-title text-center pb-10 ">
                            <h3>Mission</h3>
                            <p class="text text-cente" style="font-size: 18px;">We provide equal testing services through an exceptional patient-centered system</p>
                        </div> <!-- row -->
                    </div>
                    <style type="text/css">
                        .hexagon {
                          position: relative;
                          width: 300px;
                          height: 173.21px;
                          margin: 86.60px 0;
                          box-shadow: 0 0 20px rgba(0,0,0,0.3);
                        }

                        .hexagon:before,
                        .hexagon:after {
                          content: "";
                          position: absolute;
                          z-index: 1;
                          width: 212.13px;
                          height: 212.13px;
                          -webkit-transform: scaleY(0.5774) rotate(-45deg);
                          -ms-transform: scaleY(0.5774) rotate(-45deg);
                          transform: scaleY(0.5774) rotate(-45deg);
                          background-color: inherit;
                          left: 43.9340px;
                          box-shadow: 0 0 20px rgba(0,0,0,0.3);
                        }

                        .hexagon:before {
                          top: -106.0660px;
                        }

                        .hexagon:after {
                          bottom: -106.0660px;
                        }

                        /*cover up extra shadows*/
                        .hexagon span {
                          display: block;
                          position: absolute;
                          top:0px;
                          left: 0;
                          width:300px;
                          height:173.2051px;
                          z-index: 2;
                          background: inherit;
                        }
                        .hex-title:hover{
                            color:white;
                        }
                    </style>
                    <div class="row">
                        <div class="col-md-4" align="center">
                            <div class="hexagon" style="background-color: #1996D7;">
                                <span class="text-center" style="padding: 10px;">
                                    <h3 class="hex-title">Quality</h3>
                                    <p>
                                        We maintain high level  of accuracy and proficiency for each step of the laboratory process, ranging from specimen handling to the instrument perfomance validation
                                    </p>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4" align="center">
                            <div class="hexagon" style="background-color: #7CBA4A;">
                                <span class="text-center" style="padding: 10px;">
                                    <h3 class="hex-title">Safety</h3>
                                    <p>
                                        We ensure that your personal information is highly secured and is treated confidentially
                                    </p>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4" align="center">
                            <div class="hexagon" style="background-color: #FF0000;">
                                <span class="text-center" style="padding: 10px;">
                                    <h3 class="hex-title">Excellence</h3>
                                    <p>
                                        We value our customers We strive to provide excellent customer service and to sustain high quality employee performance
                                    </p>
                                </span>
                            </div>
                    </div>
                    <div class="col-md-12 mt-10">
                        <div class="section-title text-center pb-10">
                            <h3>Vision</h3>
                            <p style="font-size: 18px;" class="text text-center">Our envision is to provide high-quality laboratory and health care services with a dedicated laboratory information management system with faster results throughout the island to transform the country's health care landscape to everyone</p>
                        </div> <!-- row -->
                    </div>
                </div>

                <div class="col-md-12 shadow-box mt-30">
                    <div class="section-title text-left pb-10">
                        <h2 style="text-transform: uppercase;">We are for you... And we are responsible.</h2>
                        <p style="font-size: 18px;" class="text" style="text-align: justify;">
                            At <span style="text-transform: uppercase;">medi test Lanka</span> we are going to create awareness of a healthy lifestyle and early detection of diseases through advanced checkups with the help of our high-class machinery and expert medical panel
                        </p>
                        <p style="font-size: 18px;" class="text" style="text-align: justify;">
                        We are privileged to be the perfect partner for the health checkups of every individual in this country with a patient-centered system
                        </p>
                        <p style="font-size: 18px;" class="text" style="text-align: justify;">
                        <span style="text-transform: uppercase;">medi test Lanka</span> created an easily accessible online system with high technology, which can be handled by anyone. You can check your health status, collect your online reports andbook your tests. Don’t worry about the samples, we can collect them at your doorstep with a single call.
                        </p>
                        <p style="font-size: 18px;" class="text" style="text-align: justify;">
                        Meditestlanka.lk assists you throughout your checkups. Right from booking your tests to receiving your reports
                        </p>
                        <p style="font-size: 18px;" class="text" style="text-align: justify;">
                        Modern Lifestyle taking a toll on your health. Lifestyle diseases such as diabetes, High cholesterol, and hypertension are injecting their rays towards younger people. these diseases can be prevented and treated more effectively by regular checkups and testing. <span style="text-transform: uppercase;">medi test Lanka</span> stands is glad to assist you with advanced technology and to offer you the best in diagnostics. Most importantly for afforadble prices
                        </p>
                        <p style="font-size: 18px;" class="text text-center">
                            MEDI TEST LANKA believes <br>
                            * Quality laboratory service is essential for quality health care <br>
                            * Everyone deserves an effective and efficient health care<br>
                            * Advancing the laboratory services will advances health care
                        </p>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>




    <section id="services" class="features-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">Our Services</h3>
                        <p class="text">Ring us to make your reservations or just visit us for the excellent service!</p>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->


            <style type="text/css">
                .checck{
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                }

                .image-box img {
                    max-width: 100%;
                    transition: all 0.3s;
                    display: block;
                    width: 100%;
                    height: auto;
                    transform: scale(1);
                }

                .image-box:hover img {
                    transform: scale(1.1);
                }
            </style>

            <?php
            include 'config.php';
            function services(){
                global $con;
                $sql = "SELECT * FROM service";
                $result = $con->query($sql);

                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="col-lg-4 col-md-7 col-sm-9">
                        <a href="services.php?id=<?php echo $row['service_id']; ?>">
                            <div class="mt-40 checck">
                                <div class="image-box">
                                    <img src="<?php echo $row['image']; ?>">
                                </div>
                                <div style=" height:120px; padding: 25px 20px 25px 20px; font-size: 25px;">
                                    <?php echo $row['title']; ?>
                                </div>
                            </div> <!-- single features -->
                        </a>
                    </div>
                    <?php
                }
            }
            ?>

            <div class="row justify-content-center">
                <?php services(); ?>

                <div class="mt-30 text-right col-md-12" style="font-size:25px; width: 100%; ">
                    <a style="text-decoration: none; color: black;" href="timeframe.php" target="_blank">
                        <div style="padding: 25px 20px 25px 20px; background-color:#00af91;">
                        What are the tests Available > > >
                        </div>
                    </a>
                </div>
            </div> <!-- row -->

        </div> <!-- container -->
    </section>


    <section id="team" class="team-area pt-120 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-30">
                        <h3 class="title">Meet The Team</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="team-style-eleven text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="team-image">
                            <img src="assets/images/t2.jpeg" alt="Team">
                        </div>
                        <div class="team-content">
                            <div class="team-social">
                                <!--<ul class="social">
                                    <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                                    <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                                </ul>-->
                            </div>
                            <h4 class="team-name"><a href="#">Mr.A.S.M.Muhfees</a></h4>
                            <span class="sub-title">Bsc(Hons) in MLSc (UOJ)</span>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="team-style-eleven text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="team-image">
                            <img src="assets/images/t1.jpg" alt="Team">
                        </div>
                        <div class="team-content">
                            <div class="team-social">
                               <!-- <ul class="social">
                                    <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                                    <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                                </ul>-->
                            </div>
                            <h4 class="team-name"><a href="#">Mr.K.Sivapirasanth</a></h4>
                            <span class="sub-title">Bsc in MLS(UOJ) MLT-Microbiology</span>
                        </div>
                    </div> <!-- single team -->
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="team-style-eleven text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="team-image">
                            <img src="assets/images/t4.jpg" alt="Team">
                        </div>
                        <div class="team-content">
                            <div class="team-social">
                                <!--<ul class="social">
                                    <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                                    <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                                </ul>-->
                            </div>
                            <h4 class="team-name"><a href="#">Mr M.Faiz</a></h4>
                            <span class="sub-title">Chief MLT (MLS)</span>
                        </div>
                    </div> <!-- single team -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TEAM  ENDS ======-->

    <!--====== PORTFOLIO PART START ======-->

    <section id="portfolio" class="portfolio-area portfolio-four pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">Our Gallery</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="portfolio-menu text-center mt-50">
                        <ul>
                            <li data-filter="*" class="active">ALL</li>
                           <!-- <li data-filter=".Labotary">laboratory</li>-->
                        </ul>
                    </div> <!-- portfolio menu -->
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="row no-gutters grid mt-50">

                        <?php
                        function gallery(){
                            global $con;
                            $sql = "SELECT * FROM gallery";
                            $result = $con->query($sql);

                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <div class="col-lg-4 col-sm-6 <?php echo $row['catogery']; ?>">
                                    <div class="single-portfolio">
                                        <div class="portfolio-image">
                                            <img src="assets/images/portfolio/<?php echo $row['image']; ?>" alt="">
                                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                                <div class="portfolio-content">
                                                    <div class="portfolio-icon">
                                                        <a class="image-popup" href="assets/images/portfolio/<?php echo $row['image']; ?>"><i class="lni lni-zoom-in"></i></a>
                                                        <img src="assets/images/portfolio/shape.svg" alt="shape" class="shape">
                                                    </div>
                                                    <div class="portfolio-icon">
                                                        <a href="#"><i class="lni lni-link"></i></a>
                                                        <img src="assets/images/portfolio/shape.svg" alt="shape" class="shape">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- single portfolio -->
                                </div>
                                <?php
                            }
                        }
                        ?>
                        <?php gallery(); ?>

                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PORTFOLIO PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-30">
                        <h3 class="title">Contact Us</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
			
			<form id="contact-form" action="assets/contact.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-input mt-25">
                                        <label>Name</label>
                                        <div class="input-items default">
                                            <input name="name" type="text" placeholder="Name">
                                            <i class="lni lni-user"></i>
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-input mt-25">
                                        <label>Email</label>
                                        <div class="input-items default">
                                            <input type="email" name="email" placeholder="Email">
                                            <i class="lni lni-envelope"></i>
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                                <div class="col-md-12">
                                    <div class="form-input mt-25">
                                        <label>Message</label>
                                        <div class="input-items default">
                                            <textarea name="message" placeholder="Message"></textarea>
                                            <i class="lni lni-pencil-alt"></i>
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="form-input light-rounded-buttons mt-30">
                                        <button class="main-btn light-rounded-two">Send Message</button>
                                    </div> <!-- form input -->
                                </div>
                            </div> <!-- row -->
                        </form>
			
			
			
            <div class="row">
                <div class="col-lg-12">
                    <div class="mt-30" style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=119,%20Sea%20View%20Road%20Trincomale+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
                </div>
            </div> <!-- row -->
            
    </section>

    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <section class="footer-area footer-dark" style="height: 499px;">
	
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
				
				
                    <ul class="social text-center mt-60">
                        <li><a href="https://www.facebook.com/meditestlanka"><i class="lni lni-facebook-filled"></i></a></li>
                        <!--<li><a href=""><i class="lni lni-twitter-original"></i></a></li>
                        <li><a href=""><i class="lni lni-instagram-original"></i></a></li>
                        <li><a href=""><i class="lni lni-linkedin-original"></i></a></li>-->
                    </ul> <!-- social -->

                </div>
            </div> <!-- row -->
        </div> 
		<!-- container -->
		   <div class="contact-info pt-30">
                <div class="row"style=" margin-left: 45px;">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-3 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-map-marker" ></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text" style="color:white;"> 119, Sea View Road Trincomalee</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-2 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-envelope"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text" style="color:white;">info@meditestlanka.lk(for business enquiries)</p>
                                <p class="text" style="color:white;">support@meditestlanka.lk</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="">
                        <div class="single-contact-info contact-color-3 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-phone"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text" style="color:white;">+9426 222 8216</p>
                                <p class="text" style="color:white;">+9474 197 4477</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                </div> <!-- row -->
            </div> <!-- contact info -->
			<p style="color:white; margin-left: 531px; margin-top: 156px;">copy-rights-2020 || Design By<a href="http://azeit.lk/" rel="nofollow" target="_blank">AZE IT CONSULTANCY</a> 
		
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrapper form-style-two pt-115">
                       <!-- <h4 class="contact-title pb-10"><i class="lni lni-envelope"></i>Message<span>Us</span></h4>-->

                      
                    </div> <!-- contact wrapper form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
		
    </section>
    </section>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">

                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Ajax Contact js ======-->
    <script src="assets/js/ajax-contact.js"></script>

    <!--====== Isotope js ======-->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

</body>

</html>
