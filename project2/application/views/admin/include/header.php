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
                    <a href="<?php echo base_url(); ?>">
                    <div class="col-12 d-block d-sm-block d-md-block d-lg-none d-xl-none header-left mobi_header">
                        <div class="custom">
                            <p id="logo"><a title="visit homepage" href="<?php echo base_url(); ?>"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/logo2.png" alt="Blackstone Law Associates"></a></p>
                        </div>
                    </div>
                    </a>
                    <div class="col-md-12 col-lg-8 d-none d-sm-none d-md-none d-lg-block d-xl-block header-right">
                        <div class="custom">
                            <ul class="feature_buttons">
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i></li>
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
                <li id='cssmenu'><a class="<?php echo $this->uri->segment(2);if ($this->uri->segment(1) == " ") {echo "active";} ?>" href='<?php echo base_url();?>immigration_services'>Immigration services</a>
                    <ul>
                        <li class=""><a href="">UK Work Visas</a>
                            <ul class="">
                                <li class=""><a href="#">Innovator visa UK</a></li>
                                <li class=""><a href="#">Start-up visa UK</a></li>
                                <li class=""><a href="#">Tier 1 (Exceptional Talent) visa</a></li>
                                <li class=""><a href="#">Tier 1 (Investor) visa</a></li>
                                <li class=""><a href="#">Sole Representative of an Overseas Business visa</a></li>
                                <li class=""><a href="#">Tier 2 (General) visa</a></li>
                                <li class=""><a href="#">Tier 2 (Intra-company Transfer) visa</a></li>
                                <li class=""><a href="#">Tier 2 (Minister of Religion) visa</a></li>
                                <li class=""><a href="#">Tier 2 (Sportsperson) visa</a></li>
                                <li class=""><a href="#">Tier 5 (Temporary Worker - Charity Worker) visa</a></li>
                                <li class=""><a href="#">Tier 5 (Temporary Worker - Creative and sporting) visa</a></li>
                                <li class=""><a href="#">Tier 5 (Temporary Worker - Government Authorised Exchange) visa </a></li>
                                <li class=""><a href="#">Tier 5 (Temporary Worker - International Agreement) visa</a></li>
                                <li class=""><a href="#">Tier 5 (Temporary Worker - Religious Worker) visa</a></li>
                                <li class=""><a href="#">Tier 5 (Youth Mobility Scheme) visa</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="#">UK Family Visas</a>
                            <ul class="">
                                <li class=""><a href="#">UK Fiance Visa</a></li>
                                <li class=""><a href="#">UK Spouse Visa</a></li>
                                <li class=""><a href="#">Civil Partner Visa</a></li>
                                <li class=""><a href="#">Unmarried Partner Visa</a></li>
                                <li class=""><a href="#">Same Sex Partner Visa</a></li>
                                <li class=""><a href="#">ILR as Victim of Domestic Violence</a></li>
                                <li class=""><a href="#">ILR as a Bereaved Partner</a></li>
                                <li class=""><a href="#">Children Visa UK</a></li>
                                <li class=""><a href="#">Access Rights to a Child in the UK</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="#">EU Law Applications</a>
                            <ul class="">
                                <li class=""><a href="#">EEA Family Permit</a></li>
                                <li class=""><a href="#">Registration Certificate as an EEA National</a></li>
                                <li class=""><a href="#">Permanent Residence Card</a></li>
                                <li class=""><a href="#">EEA Derivative Residence Card</a></li>
                                <li class=""><a href="#">Retaining Right of Residence</a></li>
                                <li class=""><a href="#">Extended Family Members of EEA Nationals</a></li>
                                <li class=""><a href="#">Brexit EU Citizen Act Now</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="">UK Visitor Visas</a>
                            <ul class="">
                                <li class=""><a href="">Standard Visitor Visa</a></li>
                                <li class=""><a href="">Marriage Visitor Visa</a></li>
                                <li class=""><a href="">Family Visitor Visa</a></li>
                                <li class=""><a href="">Business Visitor Visa</a></li>
                                <li class=""><a href="">Private Medical Treatment Visitor Visa</a></li>
                                <li class=""><a href="">Short Term Study Visa</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="">Student Visas (Tier 4)</a>
                            <ul class="">
                                <li class=""><a href="">Tier 4 (General) Student Visa</a></li>
                                <li class=""><a href="">Renewal of Student Visa</a></li>
                                <li class=""><a href="">Switching into Student Visa</a></li>
                                <li class=""><a href="">Dependants of Tier 4 (General) Student</a></li>
                                <li class=""><a href="">Tier 4 (Child) Student Visa</a></li>
                                <li class=""><a href="">Short Term Study Visa</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="">Settle in the UK ( ILR )</a>
                            <ul class="">
                                <li class=""><a href="">Indefinite Leave to Remain (ILR)</a></li>
                                <li class=""><a href="">ILR Under Long Residence</a></li>
                                <li class=""><a href="">EEA Permanent Residence</a></li>
                                <li class=""><a href="">ILR Under Refugee or Humanitarian Protection</a></li>
                                <li class=""><a href="">ILR After Discretionary Leave to Remain</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="">British Citizenship</a>
                            <ul class="">
                                <li class=""><a href="">Naturalisation</a></li>
                                <li class=""><a href="">Stateless Child Born in the UK by Indian Parents</a></li>
                                <li class=""><a href="">Register as a British Citizen</a></li>
                                <li class=""><a href="">Register Child as a British Citizen</a></li>
                                <li class=""><a href="">Born in the UK After 1983 </a></li>
                                <li class=""><a href="">Children Born Outside the UK</a></li>
                                <li class=""><a href="">Stateless People</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="">Asylum &amp; Humanitarian Protection</a>
                            <ul class="">
                                <li class=""><a href="">Asylum Claim</a></li>
                                <li class=""><a href="">Fresh Claim</a></li>
                                <li class=""><a href="">Family Reunion</a></li>
                                <li class=""><a href="">Discretionary Leave</a></li>
                                <li class=""><a href="">Humanitarian Protection</a></li>
                                <li class=""><a href="">Further Submission</a></li>
                                <li class=""><a href="">Kuwaiti Bidoon</a></li>
                                <li class=""><a href="">Stateless Person</a></li>
                                <li class=""><a href="">Asylum Claims for LGBT</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="">Family and Private Life</a>
                            <ul class="">
                                <li class=""><a href="">20 Years Long Residence</a></li>
                                <li class=""><a href="">10 Years Long Residence</a></li>
                                <li class=""><a href="">7 Years Children Rule</a></li>
                                <li class=""><a href="">Spent Half of Life in the UK</a></li>
                                <li class=""><a href="">Extension of Stay on the Basis of Private Life</a></li>
                            </ul>
                        </li>
                        <li class=" "><a href="">Passport, BRP &amp; Travel Documents</a>
                            <ul class="">
                                <li class=""><a href="">NTL Application</a></li>
                                <li class=""><a href="">TOC Application</a></li>
                                <li class=""><a href="">BRP Replacement Application</a></li>
                                <li class=""><a href="">Right of Abode</a></li>
                                <li class=""><a href="">Returning Resident Visa</a></li>
                                <li class=""><a href="">Application for British Passport</a></li>
                                <li class=""><a href="">Refugee Travel Document</a></li>
                                <li class=""><a href="">Certificate of Travel</a></li>
                                <li class=""><a href="">Stateless Person Travel Document</a></li>
                                <li class=""><a href="">One Way Travel Document</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="">Business &amp; Corporate</a>
                            <ul class="">
                                <li class=""><a href="">Sponsorship Licence</a></li>
                                <li class=""><a href="">Sponsor Licence Suspension</a></li>
                                <li class=""><a href="">Sponsor Licence Revocation</a></li>
                                <li class=""><a href="">Illegal Workers</a></li>
                                <li class=""><a href="">Civil Penalty</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="">Appeals and Judicial Reviews</a>
                            <ul class="">
                                <li class=""><a href="">Administrative Review (AR)</a></li>
                                <li class=""><a href="">Judicial Review (JR)</a></li>
                                <li class=""><a href="">Appeals to First Tier Tribunal</a></li>
                                <li class=""><a href="">Appeal to the Upper Tribunal</a></li>
                                <li class=""><a href="">Appeal to the Court of Appeal</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="">Deportation, Removal and Bail Applications</a>
                            <ul class="">
                                <li class=""><a href="#">Immigration Detention Bail</a></li>
                                <li class=""><a href="#">Revocation of Deportation Order</a></li>
                                <li class=""><a href="#">Bail from the First-tier Tribunal</a></li>
                                <li class=""><a href="#">Deportation Orders &amp; Removal Orders</a></li>
                                <li class=""><a href="#">Appeal Against Deportation</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="">HM Armed Forces</a>
                            <ul class="">
                                <li class=""><a href="">Application on Discharge</a></li>
                                <li class=""><a href="">Exempt from Immigration Control</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="">Turkish Citizens</a>
                            <ul class="">
                                <li class="item-261"><a href="">Turkish Businessperson Visa</a></li>
                                <li class="item-262"><a href="">Turkish Worker Visa</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="">UK Ancestry Visa</a>
                            <ul class="">
                                <li class=""><a href="">Entry Clearance</a></li>
                                <li class=""><a href="">UK Ancestry Visa Extension</a></li>
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
        function allbody() {
            $('#add_class').toggleClass("col-12");
            $('.w_add_class').toggleClass("w-100");
            $('#remove1').toggleClass("d-none-i");
            $('#remove2').toggleClass("d-none-i");
        }
    </script>