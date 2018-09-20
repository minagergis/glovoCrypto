<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>products</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Site Style -->
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>

<!-- ==============Start Header section ============== -->

<header class="header" id="sticky-header">


    <!-- Start bottom header -->
    <div class="bottom-hdr">
        <div class="container">
            <div class="row">

                <div class="col-lg-5">
                    <a href="/" class="logo">
                        <img src="assets/images/logo.png" alt="" class="img-fluid">
                    </a>
                </div>

                <div class="col-lg-7">
                    <form class="search-bar">
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search.....">

                            <div class="input-group-prepend">
                                <div class="input-group-text btn-radius">
                                    <button type="submit" class="btn btn-primary">search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </div>


    </div>


</header>

<!-- ==============End Header section ============== -->


<!-- ==============Start Main section ============== -->


<!-- Start page title -->
<div class="page-title text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Tikers</h1>
                <ul class="d-flex justify-content-center">
                    <li><a href="/">home</a></li>
                    <li>|</li>
                    <li>Tickers</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- Start product area -->
<div class="product-area section-padding">
    <!-- Start Filter area -->
    <div class="container">
        <div class="filter-area">
            <div class="row">

                <div class="col-lg-2">
                    <div class="filter">
                        <i class="fa fa-btc"></i>
                        Tickers
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <?php foreach ($commonProducts as $commonProduct) {
                ?>


                <div class="col-lg-6 col-12">
                    <div class="single-product single-product-list">
                        <div class="img">
                            <img src="assets/images/product/00.jpg" alt="" class="img-fluid">

                        </div>
                        <div class="info" id="<?php echo  $commonProduct; ?>">
                            <h5><a href="#"><?php echo  $commonProduct; ?></a></h5>
                            <div id="exchanges">
                            <p class="price"><b>BTX : </b> <span id="BTX-<?php echo  $commonProduct; ?>">---</span></p>
                            <p class="price"><b>BNB : </b> <span id="BNB-<?php echo  $commonProduct; ?>">---</span></p>
                            <p class="price"><b>BFX : </b> <span id="BFX-<?php echo  $commonProduct; ?>">---</span></p>
                            </div>
                            <div style="display: none" class="price-loader">
                                <img  src="assets/images/loader/loader.gif">
                            </div>
                            <div class="product-cart">
                                <ul>
                                    <li class="add-cart show-price" data-id="<?php echo  $commonProduct; ?>"><a href="#"><i class="fa fa-line-chart"></i>Price Now</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-share"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</div>


<!-- ==============End Main section ============== -->


<!-- ==============Start Footer section ============== -->
<footer class="footer">


    <div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p>&copy; all right reserved. Mina A. Gergis</p>
                    <ul class="social">
                        <li><a href="https://www.facebook.com/MinaAtif"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://github.com/codemessenger"><i class="fa fa-github"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/minaatif/"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="https://medium.com/@minaagergis"><i class="fa fa-medium"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- ==============End Footer section ============== -->


<!-- Jquery plugins -->
<script src="assets/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Ui js -->
<script src="assets/js/jquery-ui.min.js"></script>



<!-- main js -->
<script src="assets/js/main.js"></script>
</body>


</html>