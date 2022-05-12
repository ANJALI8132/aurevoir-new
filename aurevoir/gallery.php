<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AuRevoir Resort, Palakkad</title>
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/swiper.min.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css">
    <link href="assets/css/style.css" rel="stylesheet">
    
</head>

<body>
    <!-- start page-wrapper -->
    <div class="page-wrapper">
        
        
        <!-- start preloader -->
        <!-- <div class="preloader">
            <div class="loader"></div>
        </div> -->

        <!-- Scroll To Top -->
        <div id="scrollUp" title="Scroll To Top">
            <i class="fa fa-arrow-circle-o-up"></i>
        </div>


        <?php
       include('header.php');
       ?>

        <!-- breadcrumb area -->
        <section class="breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="breadcrumb-box">
                        <h1>Gallery</h1>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">Gallery</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- gallery area -->
        <section class="gallery-area">
            <div class="container">
                <div class="row">


                    <?php
                    include("configuration/dbconnect.php");
                    $findsql = mysqli_query($connect, "SELECT * FROM `gallery` ORDER BY `gallery_id` ASC");
                    while($row = mysqli_fetch_array($findsql)){
                    ?>


                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="gallery-block">
                            <div class="inner-box">
                                <div class="gallery-img">
                                    <img src="globalpannel/public/images/<?php echo $row['gallery_cover'];?>" alt="">
                                    <div class="gallery-overlay">
                                        <div class="gallery-overlay-inner">
                                            <div class="overlay-content">
                                                <h3><?php echo $row['gallery_name'];?></h3>
                                                <a href="globalpannel/public/images/<?php echo $row['gallery_cover'];?>" data-fancybox="images" class="plus"><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    }
                    ?>

                    <!--<div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="gallery-block">
                            <div class="inner-box">
                                <div class="gallery-img">
                                    <img src="assets/images/gallery/rimin-small.jpg" alt="">
                                    <div class="gallery-overlay">
                                        <div class="gallery-overlay-inner">
                                            <div class="overlay-content">
                                                <h3>Rimini</h3>
                                                <a href="assets/images/gallery/large/rimin-large.jpg" data-fancybox="images" class="plus"><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="gallery-block">
                            <div class="inner-box">
                                <div class="gallery-img">
                                    <img src="assets/images/gallery/lespring-small.jpg" alt="">
                                    <div class="gallery-overlay">
                                        <div class="gallery-overlay-inner">
                                            <div class="overlay-content">
                                                <h3>Le Spring</h3>
                                                <a href="assets/images/gallery/large/lespring-large.jpg" data-fancybox="images" class="plus"><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="gallery-block">
                            <div class="inner-box">
                                <div class="gallery-img">
                                    <img src="assets/images/gallery/vaidhyam.jpg" alt="">
                                    <div class="gallery-overlay">
                                        <div class="gallery-overlay-inner">
                                            <div class="overlay-content">
                                                <h3>Vaidyam</h3>
                                                <a href="assets/images/gallery/large/vaidhyam.jpg" data-fancybox="images" class="plus"><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="gallery-block">
                            <div class="inner-box">
                                <div class="gallery-img">
                                    <img src="assets/images/gallery/labrasserie-small.jpg" alt="">
                                    <div class="gallery-overlay">
                                        <div class="gallery-overlay-inner">
                                            <div class="overlay-content">
                                                <h3>The Coffee Shop</h3>
                                                <a href="assets/images/gallery/large/labrasserie-large.jpg" data-fancybox="images" class="plus"><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="gallery-block">
                            <div class="inner-box">
                                <div class="gallery-img">
                                    <img src="assets/images/gallery/yoga2.jpg" alt="">
                                    <div class="gallery-overlay">
                                        <div class="gallery-overlay-inner">
                                            <div class="overlay-content">
                                                <h3>Yoga</h3>
                                                <a href="assets/images/gallery/large/yoga2.jpg" data-fancybox="images" class="plus"><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="gallery-block">
                            <div class="inner-box">
                                <div class="gallery-img">
                                    <img src="assets/images/gallery/delux-room.jpg" alt="">
                                    <div class="gallery-overlay">
                                        <div class="gallery-overlay-inner">
                                            <div class="overlay-content">
                                                <h3>Deluxe Room</h3>
                                                <a href="assets/images/gallery/large/delux.jpg" data-fancybox="images" class="plus"><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="gallery-block">
                            <div class="inner-box">
                                <div class="gallery-img">
                                    <img src="assets/images/gallery/villa.jpg" alt="">
                                    <div class="gallery-overlay">
                                        <div class="gallery-overlay-inner">
                                            <div class="overlay-content">
                                                <h3>Honeymoon Villa</h3>
                                                <a href="assets/images/gallery/large/banner-01.jpg" data-fancybox="images" class="plus"><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="gallery-block">
                            <div class="inner-box">
                                <div class="gallery-img">
                                    <img src="assets/images/gallery/delux2.jpg" alt="">
                                    <div class="gallery-overlay">
                                        <div class="gallery-overlay-inner">
                                            <div class="overlay-content">
                                                <h3>Deluxe Room</h3>
                                                <a href="assets/images/gallery/large/bed3.jpg" data-fancybox="images" class="plus"><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                -->
                </div>
            </div>
        </section>
        
        <?php
        include('footer.php');
        ?>
</body>

</html>