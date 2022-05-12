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
                        <h1>Contact Us</h1>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- address area -->
        <section class="contact-address-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="address-media">
                            <div class="icon-styled">
                                <img src="assets/images/icons/icon1.png" alt="">
                            </div>
                            <div class="address-body">
                                <h5>Address</h5>
                                <p>Au Revoir Resort, <br>
                                    Malampuzha Dam Ring Road,<br>
                                    South Malampuzha Palakkad, Kerala, India</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="address-media">
                            <div class="icon-styled">
                                <img src="assets/images/icons/icon3.png" alt="">
                            </div>
                            <div class="address-body">
                                <h5>Email Address</h5>
                                <p><a href="mailto:info@aurevoir.co.in">info@aurevoir.co.in</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="address-media">
                            <div class="icon-styled">
                                <img src="assets/images/icons/icon4.png" alt="">
                            </div>
                            <div class="address-body">
                                <h5>Phone</h5>
                                <p><a href="tel: +919778412247"> +91 97784 12247</a></p>
                                <p><a href="tel: +919778412236"> +91 97784 12236</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- map area -->
        <section class="map-contact">
            <div class="container-fluid">
                <div class="row align-items-center d-flex d-block-991">
                    <div class="col-lg-6 col-md-6">
                        <div class="page_map">
                            <div class="map-area">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125393.69758228856!2d76.62024713700691!3d10.845475738681383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba86f6cc343be99%3A0x126384f16875d260!2sAuRevoir%20Malampuzha!5e0!3m2!1sen!2sin!4v1625220860581!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="contact-area">
                            <div class="contact-area-header">
                                <h1>Contact Us</h1>
                                <p>Have You any Questions? Ask Us!</p>
                            </div>
                            <div class="contact-area-form">
                                <form method="post" id="contact-form" name="form2" action="email.php">
                                    <div>
                                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                                    </div>
                                    <div>
                                        <input class="form-control" name="phone" placeholder="Phone" required type="tel" pattern="[0-9]{10}" maxlength="10" oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')" onchange="this.setCustomValidity('')">
                                    </div>
                                    <div>
                                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                                    </div>
                                    <div>
                                        <input type="text" class="form-control" name="address" placeholder="Address" required>
                                    </div>
                                    <div>
                                        <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="submit-area">
                                        <button type="submit" class="theme-btn submit-btn" name="send" value="send">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

        
        
        <?php
        include('resone.php');
        include('footer.php');
        ?>
</body>

</html>