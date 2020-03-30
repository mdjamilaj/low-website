<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu-6</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/index.css">
</head>

<body>
    <header>

        <div id="mobile-menu-logo" class="clearfix d-block d-sm-block d-md-block d-lg-none d-xl-none">
            <div class="custom">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-3" id="add_class">
                            <nav id='cssmenu' class="container w_add_class">
                                 <div id="head-mobile"></div>
                                <div class="button" onclick="allbody()"></div>
                                <ul id="inner_show" style="overflow: scroll;">  
                                </ul>
                            </nav>

                        </div>
                        <!-- <div class="col-3"><a href="#" data-toggle="modal" data-target=".mobi-menu"><span class="fa fa-bars" aria-hidden="true"></span> &nbsp;</a></div> -->
                        <div id="remove1" class="col-6 mobi_logo text-center"><img src="/images/mobile-logo.png"></div>
                        <div id="remove2" class="col-3"><a class="text-right  mobi_call_btn" href="tel: +442070961515">CALL<br>NOW</a></div>
                    </div>
                </div>
            </div>


        </div>

        <div class="header1 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-4 d-none d-sm-none d-md-none d-lg-block d-xl-block header-left">
                        <div class="custom">
                            <p id="logo"><a title="visit homepage" href="<?php base_url(); ?>"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/logo.png" alt="Blackstone Law Associates"></a></p>
                        </div>
                    </div>
                    <div class="col-12 d-block d-sm-block d-md-block d-lg-none d-xl-none header-left mobi_header">
                        <div class="custom">
                            <p id="logo"><a title="visit homepage" href="<?php base_url(); ?>"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/logo2.png" alt="Blackstone Law Associates"></a></p>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-8 d-none d-sm-none d-md-none d-lg-block d-xl-block header-right">
                        <div class="custom">
                            <ul class="feature_buttons">
                                <li><i class="fa fa-map-marker"  aria-hidden="true"></i></li>
                                <li>29 High Street, Wealdstone<br>Harrow HA3 5BY</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i></li>
                                <li><strong>0207 096 1515</strong><br>info@blackstonelaw.co.uk</li>
                                <li class="contact-btn"><a class="btn btn1" href="/contact.html">Request a callback</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav id='cssmenu' class="container d-none-i-10000 p-relative-nav">
            <!-- <div class="logo"><a href="index.html">Responsive </a></div> -->
            <div id="head-mobile"></div>
            <div class="button"></div>
            <ul id="inner_cut" style="line-height: 2 !important;">
                <li id='cssmenu'><a href='#'>PRODUCTS</a>
                    <ul>
                        <li><a href='#'>Product Lorem, ipsum dolor.</a>
                        <li><a href='sadasdas'>Product 1</a>
                        <li><a href='#'>Product 1</a>
                        <li><a href='#'>Product 1</a>
                        <li><a href='#'>Product 1</a>
                        <li><a href='#'>Product 1</a>
                        <li><a href='#'>Product 1</a>
                        <li><a href='#'>Product 1</a>
                            <ul>
                                <li><a href='#'>Sub Product</a></li>
                                <li><a href='#'>Sub Product</a></li>
                                <li><a href='#'>Sub Product</a></li>
                                <li><a href='#'>Sub Product</a></li>
                                <li><a href='#'>Sub Product</a></li>
                                <li><a href='#'>Sub Product</a></li>
                            </ul>
                        </li>
                        <li><a href='#'>Product 2</a>
                            <ul>
                                <li><a href='#'>Sub Product</a></li>
                                <li><a href='#'>Sub Product</a>
                                    <ul>
                                        <li><a href='#'>Sub Product</a></li>
                                        <li><a href='#'>Sub Product</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href='#'>ABOUT</a></li>
                <li id='cssmenu'><a href='#'>PRODUCTS</a>
                    <ul>
                        <li><a href='#'>Product 1</a>
                            <ul>
                                <li><a href='#'>Sub Product</a></li>
                                <li><a href='#'>Sub Product</a></li>
                            </ul>
                        </li>
                        <li><a href='#'>Product 2</a>
                            <ul>
                                <li><a href='#'>Sub Product</a></li>
                                <li><a href='#'>Sub Product</a>
                                    <ul>
                                        <li><a href='#'>Sub Product</a></li>
                                        <li><a href='#'>Sub Product</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href='#'>BIO</a></li>
                <li><a href='#'>VIDEO</a></li>
                <li><a href='#'>GALLERY</a></li>
                <li><a href='#'>CONTACT</a></li>
            </ul>
        </nav>
    </header>

    <script>
        function allbody(){
            $('#add_class').toggleClass("col-12");
            $('.w_add_class').toggleClass("w-100");
            $('#remove1').toggleClass("d-none-i");
            $('#remove2').toggleClass("d-none-i");
        }
    </script>