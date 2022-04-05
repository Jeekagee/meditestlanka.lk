<!doctype html>
<html class="no-js" lang="en">

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
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
 
    
    <!--====== NAVBAR TWO PART START ======-->

    <section class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                       
                        <a class="navbar-brand" href="#">
                            <img src="assets/images/logo.png" alt="Logo" width="100px">
                            <span>MediTestLanka</span>
                        </a>
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item active"><a class="page-scroll" href="index.php">home</a></li>
                                <li class="nav-item"><a class="page-scroll" href="index.php">About</a></li>
                                <li class="nav-item"><a class="page-scroll" href="index.php">Services</a></li>
                                <li class="nav-item"><a class="page-scroll" href="index.php">Team</a></li>
                                <li class="nav-item"><a class="page-scroll" href="index.php">Gallery</a></li>
                                <li class="nav-item"><a class="page-scroll" href="index.php">Contact</a></li>
                                
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

    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    else{
        header("Location:index.php");
    }
    include 'config.php';
    function services($id){
        global $con;
        $sql = "SELECT * FROM services WHERE service_id = '$id'";
        $result = $con->query($sql);
        $i = 1;

        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
              <th scope="row"><?php echo $i; ?></th>
              <td><?php echo $row['service']; ?></td>
            </tr>
            <?php
            $i++;
        }
    }
    ?>

    <section class="mt-30">

        <div style="width: 80%; margin: auto;">
            <table class="table table-hover table-dark">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Services</th>
                </tr>
              </thead>
              <tbody>
                <?php services($id); ?>
              </tbody>
            </table>
        </div>
    </section>
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