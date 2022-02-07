<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Inland Logistics Handlers | About Us</title>
    <?php include('includes/meta.php') ?>
</head>

<body>
    <!--  Header  -->
    <header class="background-white">
        <div class="header-output">
            <div class="header-output">
                <div class="header-in">
                    <?php include('includes/menu.php') ?>
                </div>
            </div>
        </div>
    </header>
    <!-- // Header  -->

    <!-- Search  -->
    <!-- <div id="search">
    		<button type="button" class="close">×</button>
    		<form class="clearfix d-block">
    			<input type="search" value="" placeholder="Search for . . . ." />
    			<button type="submit" class="btn btn-primary">Search</button>
    		</form>
    	</div> -->
    <!-- // Search  -->

    <!-- Get A Quote  -->
    <div class="modal contact-modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content margin-top-150px background-main-color">
                <div class="row no-gutters">
                    <div class="col-lg-5">
                        <img src="assets/img/contact-img.jpg" alt="" />
                    </div>
                    <div class="col-lg-7">
                        <div class="padding-30px">
                            <h3 class="padding-bottom-15px">Get A Free Quote</h3>
                            <?php include('includes/form.php') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // Get A Quote  -->

    <div class="page-title">
        <div class="container">
            <div class="padding-tb-120px">
                <h1>About Us</h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">About Us</li>
                </ol>
            </div>
        </div>
    </div>

    <!--============= About Us =============-->
    <div class="nile-about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 sm-mb-45px">

                    <div class="section-title-right text-main-color clearfix">
                        <div class="icon"><img src="assets/icons/title-icon-1.png" alt=""></div>
                        <h2 class="title-text">Who We Are ?</h2>
                    </div>
                    <div class="about-text margin-tb-25px">
                        <h4>10 years of experience in logistics services</h4>
                        Our policy is simply to provide Reputable total logistics to all our customers.
                        We are specialize in Cargo transportation, Sea & Air freight, Packaging, Transport & Logistics, Warehousing & Customs Clearance.
                        <br>
                        With Reliability our dedicated and experienced professionals always provide you with tailor-made logistics solutions, customized to your particular needs.
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="assets/img/about-1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--============= //About Us =============-->

    <?php include('includes/action.php') ?>

    <div class="nile-about-section">
        <div class="container">
            <!-- Title -->
            <div class="section-title margin-bottom-40px">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="icon text-main-color"><i class="fa fa-truck"></i></div>
                        <div class="h2">Our Service</div>
                        <div class="des">We have all this service available for our customers.</div>
                    </div>
                </div>
            </div>
            <!-- // End Title -->

            <div class="row">

                <div class="col-lg-4">
                    <div class="service-icon-box">
                        <div class="icon"><img src="assets/icons/service-dark-1.png" alt=""></div>
                        <a href="#" class="title h2">Cargo Transportation</a>
                        <div class="des">Contact us for road freight.</div>
                    </div>
                    <div class="service-icon-box">
                        <div class="icon"><img src="assets/icons/service-dark-2.png" alt=""></div>
                        <a href="#" class="title h2">Air Freight</a>
                        <div class="des">Contact us for Air freight.</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center sm-mb-45px">
                        <img src="assets/img/about-2.jpg" alt="" class="border-radius-500">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-icon-box">
                        <div class="icon"><img src="assets/icons/service-dark-3.png" alt=""></div>
                        <a href="#" class="title h2">Ocean Freight</a>
                        <div class="des">Contact us for Ocean freight.</div>
                    </div>
                    <div class="service-icon-box">
                        <div class="icon"><img src="assets/icons/service-dark-4.png" alt=""></div>
                        <a href="#" class="title h2">Packaging & Storage</a>
                        <div class="des">Contact us for Packaging & Storage</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="layout-dark">
        <?php include('includes/footer.php') ?>
    </footer>
    <?php include('includes/scripts.php') ?>
</body>

</html>
