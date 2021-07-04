<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>LIB | Writing Services</title>
    <meta name="author" content="tansh">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- FAVICON FILES -->
    <link href="assets/images/icons/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
    <link href="assets/images/icons/apple-touch-icon-120-precomposed.png" rel="apple-touch-icon" sizes="120x120">
    <link href="assets/images/icons/apple-touch-icon-76-precomposed.png" rel="apple-touch-icon" sizes="76x76">
    <link href="assets/images/fevicon.png" rel="shortcut icon">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/iconfonts.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/color-red.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/intlTelInput.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <style>
        h1 {
            font-size: 3rem;
            color: #000;
        }

        h3,
        h4,
        h5,
        h6 {
            color: #000;
        }

        h2,
        h2 a {
            font-size: 2.25em;
            line-height: 1.2em;
            color: #000;
        }


        .reach-us .form-group {
            margin-bottom: 5px !important;
        }

        input[type="text"],
        input[type="tel"],
        input[type="email"],
        input[type="password"],
        input[type="url"] {
            background-color: #f2f2f2;
            border: 1px solid #f2f2f2;
            padding: 20px;
        }

        .login-form input[type="text"]:focus,
        .login-form input[type="password"]:focus {
            outline: none !important;
        }

        .login-form input[type="text"],
        .login-form input[type="password"],
        .signup-form input[type="email"] {
            padding: 10px !important;
            margin-bottom: 15px;
        }

        input[type="tel"]:focus {
            border: 1px solid #6c62ff !important;
        }

        input:focus {
            border: 1px solid #6c62ff !important;
        }


        input[type="tel"] {
            border: none;
            outline: none;
        }

        input[type="tel"]:focus {
            border-color: #6c62ff !important;
        }

        /*Color Class*/
        .color-blue {
            color: #663399;
        }

        .bg-blue {
            background-color: #663399 !important;
        }

        .bg-light-blue {
            background-color: #fafbff !important;
        }

        .bg-dark-blue {
            background-color: #361857;
        }

        .benifit-info {
            padding: 10px;
            background: #f5ebff;
            border-radius: 10px;
            width: 200px;
            margin-right: 10px;
        }

        .benifit-info:last-child {
            margin-right: 0px !important;
        }

        .benifit-info p {
            padding: 10px 0px;
            font-size: 16px;
            font-weight: 300;
            line-height: 18px;
            margin-bottom: 0px !important;
        }

        .benifit-info {
            transition: all .3s ease;
        }

        .benifit-info:hover {
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
            transition: all .3s ease;
        }

        .how-it-works-content {
            width: 980px;
            margin: 0px auto;
        }

        .first::before {
            content: "1"
        }

        .second::before {
            content: "2"
        }

        .third::before {
            content: "3"
        }

        .four::before {
            content: "4"
        }

        .first::before,
        .second::before,
        .third::before,
        .four::before {
            font-size: 90px;
            font-weight: 600;
            position: absolute;
            z-index: 11;
            top: 0;
            right: 30px;
            color: #663399;
        }

        /*        modal*/
        body.modal-open {
            overflow: auto;
            overflow-x: hidden;
        }

        body.modal-open {
            padding-right: 0px !important;
        }

        .modal-backdrop {
            background-color: rgb(0, 0, 0, 0.5);
        }

        .modal-content {
            border: none;
            box-shadow: 0 11px 15px -7px rgb(0 0 0 / 20%), 0 24px 38px 3px rgb(0 0 0 / 14%), 0 9px 46px 8px rgb(0 0 0 / 12%);
        }

        .user-card {
            width: 450px;
            height: 550px;
            margin: 20px auto;
            position: relative;
            background: #fff;
            overflow: hidden;
        }



        .login-box,
        .signup-box,
        .otp-box{
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: calc(100% - 25px);
            background: #fff;
            border-radius: 5px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
        }

        .login-box {
            padding: 0px 40px;
            right: 0px;
        }

        .signup-box {
            padding: 40px;
            right: -450px;
        }
        .otp-box{
            padding: 40px;
            right: -450px;
        }



        .login:hover {
            opacity: 1
        }

        .or {
            display: block;
            width: 100%;
            height: 1px;
            border-bottom: 1px solid #000;
            position: relative;
            margin: 20px 0;
        }

        .or:before {
            content: 'OR';
            width: 40px;
            height: 18px;
            position: absolute;
            top: -5px;
            right: calc(50% - 20px);
            background-color: #fff;
            text-align: center;
            line-height: 10px;
            color: #000;
        }

        .login-with-fb,
        .login-with-google,
        .login-with-linkedin {
            width: 100%;
            height: 40px;
            display: block;
            margin: 15px 0;
            color: #fff;
            text-align: center;
            line-height: 40px;
            font-size: 14px;
            opacity: .95;
            border-radius: 3px;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
        }

        .login-with-fb:hover,
        .login-with-google:hover,
        .login-with-linkedin:hover {
            opacity: 1;
        }

        .login-with-fb {
            background: #527EBF
        }

        .login-with-google {
            background: #DB4A37;
        }

        .login-with-linkedin {
            background: #0077b5;
        }

        .login-with-fb .icon,
        .login-with-google .icon,
        .login-with-linkedin .icon {
            float: left;
            font-size: 21px;
            width: 50px;
            height: 26px;
            margin: 7px;
            padding: 2px;
            text-align: center;
            border-right: 1px solid #fff;
        }

        /**** footer *****/

        .user-card .footer {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 25px;
            text-align: center;
            color: #666;
            font-size: 13px;
            font-family: sans-serif;
        }

        .footer a {
            color: #03b3b5;
        }
        #phoneone-error {
    position: absolute;
    bottom: -30px;
}
        .why-us img{
            width: 44px;
        }
        .border-right{
            border-right: 1px solid #333;
        }
        .dtr-accordion .dtr-btn.accordion-btn-link {
    font-size: 18px !important;
}
    </style>
</head>

<body>
    <div id="dtr-wrapper" class="clearfix">

        <!-- preloader starts -->
        <div class="dtr-preloader">
            <div class="dtr-preloader-inner">
                <div class="dtr-preloader-img"></div>
            </div>
        </div>
        <!-- preloader ends -->

        <!-- Small Devices Header 
============================================= -->
        <div class="dtr-responsive-header fixed-top">
            <div class="container">

                <!-- small devices logo -->
                <a href="index.html"><img src="{{asset('assets/images/logo.png')}}" alt="logo"></a>
                <!-- small devices logo ends -->

                <!-- menu button -->
                <button id="dtr-menu-button" class="dtr-hamburger" type="button"><span class="dtr-hamburger-lines-wrapper"><span class="dtr-hamburger-lines"></span></span></button>
            </div>
            <div class="dtr-responsive-header-menu"></div>
        </div>
        <!-- Small Devices Header ends 
============================================= -->

        <!-- Header 
============================================= -->
        <header id="dtr-header-global" class="navbarone fixed-top" style="    box-shadow: 0 2px 15px 0 rgba(0, 0, 0, .03);">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">

                    <!-- header left starts -->
                    <div class="dtr-header-left">

                        <!-- logo -->
                        <a class="logo-default" href="index.html"><img src="{{asset('assets/images/new-logo.png')}}" alt="logo"></a>

                        <!-- logo on scroll -->
                        <a class="logo-alt" href="index.html"><img src="{{asset('assets/images/new-logo.png')}}" alt="logo"></a>
                        <!-- logo on scroll ends -->

                    </div>
                    <!-- header left ends -->

                    <!-- menu starts-->
                    <div class="main-navigation navbar navbar-expand-lg ml-auto">
                        <ul class="dtr-scrollspy navbar-nav dtr-nav dark-nav-on-load dark-nav-on-scroll">
                            <li class="nav-item"> <a class="nav-link" href="coding-services.html">Coding Services</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="writing-services.html">Writing Services</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="topic-based-learning.html">TBL</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="project-based-learning.html">PBL</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="coding-bootcamp.html">Bootcamp</a> </li>
                            <li class="nav-item"><a href="login.html" style="color: #fff" class="nav-link dtr-btn-flat dtr-scroll-link btn-red" data-toggle="modal" data-target="#loginModal" data-keyboard="false" data-backdrop="static">Sign In</a></li>
                        </ul>
                    </div>
                    <!-- menu ends-->



                </div>
            </div>
        </header>


        <!-- header ends
================================================== -->

        <!-- == main content area starts == -->
        <div id="dtr-main-content">

            <!-- hero section starts
================================================== -->

            <section id="home" class="project-hero dtr-section dtr-hero-section-padding ">
                <div class="container">
                    <!-- row 1 starts -->
                    <div class="row d-flex align-items-center justify-content-around dtr-py-30">

                        <!-- column 1 starts -->
                        <div class="col-12 col-md-6 col-lg-6 ">
                            <h1>Lorem Ipsum is simply <br>
                                Your <span class="color-blue">dummy text.</span></h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>

                            <!-- video button start-->
                            <div class="vdo-btn">
                                <a id="play-video" class="dtr-video-popup  video-play-button" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=kuceVNBTJio">
                                    <span></span>
                                </a>
                                <p class="color-blue">Watch Demo</p>
                            </div>


                        </div>
                        <!-- column 1 ends -->

                        <!-- column 2 starts -->
                        <div class="col-12 col-md-6 col-lg-6 wow fadeIn" data-wow-delay="0.2s" data-wow-duration="3s">

                            <img src="{{asset('assets/images/project-camp/right-img-purple.png')}}" />
                        </div>
                        <!-- column 2 ends -->

                    </div>
                    <!-- row 1 ends -->

                </div>
            </section>
            <!-- hero section End
================================================== -->
            <section class="dtr-section  dtr-py-30 dtr-section-with-bg  ">
                <div class="container">
                    <!-- heading here -->
                    <h2 class="dtr-my-20">Benefits of LearnInbox Project Camp</h2>

                    <div class="benifits d-flex dtr-my-30 text-center">
                        <div class="benifit-info">
                            <img src="{{asset('assets/images/project-camp/benifits/experience.svg')}}" width="84px" />
                            <p>Real-Time Work Experience</p>
                        </div>
                        <div class="benifit-info">
                            <img src="{{asset('assets/images/project-camp/benifits/knowledge.svg')}}" width="84px" />
                            <p>Domain Knowledge</p>
                        </div>
                        <div class="benifit-info">
                            <img src="{{asset('assets/images/project-camp/benifits/multiple.svg')}}" width="84px" />
                            <p>Get Work on Multiple platforms</p>
                        </div>
                        <div class="benifit-info">
                            <img src="{{asset('assets/images/project-camp/benifits/live.svg')}}" width="84px" />
                            <p>Live Code Development</p>
                        </div>
                        <div class="benifit-info">
                            <img src="{{asset('assets/images/project-camp/benifits/expert.svg')}}" width="84px" />
                            <p>Connect with Expert Mentors</p>
                        </div>
                        <div class="benifit-info">
                            <img src="{{asset('assets/images/project-camp/benifits/rating.svg')}}" width="84px" />
                            <p>100% Practical Learning</p>
                        </div>
                    </div>
                </div>
            </section>


            <section class="dtr-section  dtr-py-20 dtr-section-with-bg dtr-mb-40 ">
                <div class="container">
                    <h2>Project Camp</h2>
                    <pdtr-mb-20>Start your project development journey to excel your coding and domain knowledge to boost your career.</p>
                        <div class="horizontal-road-map">
                            <img src="{{asset('assets/images/project-camp/pro-graph.svg')}}" />
                        </div>
                </div>
            </section>


            <section id="blog" class="dtr-section dtr-py-30  ">
                <div class="container">
                    <h2 class="text-center">Project On Board </h2>

                    <!-- row starts -->
                    <div class="row dtr-mt-50">

                        <!-- column 1 starts -->
                        <div class="col-12 col-md-3">

                            <!-- blog item 1 starts -->
                            <div class="dtr-blog-item shadow" style="padding: 20px; border-radius: 20px">
                                <!-- image -->
                                <div class="dtr-post-img"> <img src="{{asset('assets/images/project-camp/onboard/select-project.jpg')}}" alt="image"> </div>

                                <h6 class="">Select Project</h6>
                                <p>Lorem Ipsum is simply dummy
                                    text of the printing and typesetting
                                    industry.</p>

                            </div>
                            <!-- blog item 1 ends -->

                        </div>
                        <!-- column 1 ends -->

                        <!-- column 2 starts -->
                        <div class="col-12 col-md-3">

                            <!-- blog item 2 starts -->
                            <div class="dtr-blog-item shadow" style="padding: 20px; border-radius: 20px">
                                <!-- image -->
                                <div class="dtr-post-img"> <img src="{{asset('assets/images/project-camp/onboard/book-team.jpg')}}" alt="image"> </div>

                                <h6 class="">Book Your Team Slot</h6>
                                <p>Lorem Ipsum is simply dummy
                                    text of the printing and typesetting
                                    industry.</p>

                            </div>
                            <!-- blog item 2 ends -->

                        </div>
                        <!-- column 2 ends -->

                        <!-- column 3 starts -->
                        <div class="col-12 col-md-3">

                            <!-- blog item 3 starts -->
                            <div class="dtr-blog-item shadow" style="padding: 20px; border-radius: 20px">
                                <!-- image -->
                                <div class="dtr-post-img"> <img src="{{asset('assets/images/project-camp/onboard/project-board.jpg')}}" alt="image"> </div>

                                <h6 class="">Project Board</h6>
                                <p>Lorem Ipsum is simply dummy
                                    text of the printing and typesetting
                                    industry.</p>

                            </div>
                            <!-- blog item 3 ends -->

                        </div>
                        <!-- column 3 ends -->

                        <!-- column 4 starts -->
                        <div class="col-12 col-md-3">

                            <!-- blog item 3 starts -->
                            <div class="dtr-blog-item shadow" style="padding: 20px; border-radius: 20px">
                                <!-- image -->
                                <div class="dtr-post-img"> <img src="{{asset('assets/images/project-camp/onboard/project-bridge.jpg')}}" alt="image"> </div>
                                <h6 class="">Project Bridge</h6>
                                <p>Lorem Ipsum is simply dummy
                                    text of the printing and typesetting
                                    industry.</p>
                            </div>
                            <!-- blog item 3 ends -->

                        </div>
                        <!-- column 4 ends -->
                    </div>
                    <!-- row starts -->

                </div>
            </section>
            <section class="project dtr-section dtr-boxed-section  dtr-py-60 dtr-my-30" id="customer" style="">
                <div class="container">

                    <!-- section intro row starts -->
                    <div class="row dtr-mb-40">
                        <div class="col-12 text-center">
                            <h2>Batches For Popular Projects</h2>
                            <!--                            <p class="dtr-highlight dtr-highlight-rounded fontweight-500 bg-red color-white">Rated 4.8 out of 2570 reviews</p>-->
                        </div>
                    </div>
                    <!-- section intro row ends -->

                    <!-- row starts -->
                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <ul class="custome-writing-nav nav nav-pills flex-column" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#homeop" role="tab" aria-controls="home" aria-selected="true"><img src="{{asset('assets/images/project-camp/project-icon/c++.svg')}}" width="40px" /> C++ Foundation with DS & Algo

                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><img src="{{asset('assets/images/project-camp/project-icon/java.svg')}}" width="40px" /> JAVA Foundation with DS and Algorithms

                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><img src="{{asset('assets/images/project-camp/project-icon/compititave.svg')}}" width="40px" /> Competitive Programming Course

                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="raise-ticket-tab" data-toggle="tab" href="#raise-ticket" role="tab" aria-controls="profile" aria-selected="false"><img src="{{asset('assets/images/project-camp/project-icon/python.svg')}}" width="40px" /> Python Foundation with DS & Algo

                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="final-tab" data-toggle="tab" href="#final" role="tab" aria-controls="contact" aria-selected="false"><img src="{{asset('assets/images/project-camp/project-icon/apti.svg')}}" width="40px" /> Aptitude Preparation Course

                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-md-4 -->
                        <div class="col-md-7">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="homeop" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="dtr-icon-box bg-white" style="    background: hsla(0,0%,100%,.7)">

                                        <!-- icon box icon / image -->
                                        <p class="fontweight-400 text-size-md color-dark">C++ Foundation with DS & Algo</p>




                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="dtr-icon-box bg-white" style="    background: hsla(0,0%,100%,.7)">

                                        <!-- icon box icon / image -->
                                        <p class="fontweight-400 text-size-md color-dark">C++ Foundation with DS & Algo</p>




                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="dtr-icon-box bg-white" style="    background: hsla(0,0%,100%,.7)">

                                        <!-- icon box icon / image -->
                                        <p class="fontweight-400 text-size-md color-dark">C++ Foundation with DS & Algo</p>




                                    </div>

                                </div>
                                <div class="tab-pane fade" id="raise-ticket" role="tabpanel" aria-labelledby="raise-ticket-tab">
                                    <div class="dtr-icon-box bg-white" style="    background: hsla(0,0%,100%,.7)">

                                        <!-- icon box icon / image -->
                                        <p class="fontweight-400 text-size-md color-dark">C++ Foundation with DS & Algo</p>




                                    </div>

                                </div>
                                <div class="tab-pane fade" id="final" role="tabpanel" aria-labelledby="final-tab">
                                    <div class="dtr-icon-box bg-white" style="    background: hsla(0,0%,100%,.7)">

                                        <!-- icon box icon / image -->
                                        <p class="fontweight-400 text-size-md color-dark">C++ Foundation with DS & Algo</p>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- /.col-md-8 -->
                    </div>
                    <!-- row ends -->
                </div>

            </section>
            <section class="dtr-py-60">
                <div class="container">
                    <div class="reach-us">
                        <h4 class="text-center">Are you not sure where and How to start? </h4>
                        <h5 class="text-center">Reach us for free consulting </h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="request-call dtr-p-50">
                                    <h5 class="dtr-mb-20">Request for Call Back </h5>
                                    <h5 class="dtr-mb-20 color-red">Toll Free Number </h5>
                                    <h4><span><img src="{{asset('assets/images/project-camp/phone.svg')}}" width="44px;" /></span> 1800-212-5350</h4>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="request-form">
                                    <form id="msform" class="">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Full Name</label>
                                                <input type="text" class="form-control" name="technology" placeholder="Full Name" required="">

                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Email</label>
                                                <input type="Email" class="form-control" name="email" placeholder="Enter Name" required="">

                                            </div>
                                        </div>


                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Phone No </label>
                                                <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Qualification</label>
                                                <input type="text" class="form-control" name="email" placeholder="Enter qualification" required="">

                                            </div>
                                        </div>

                                        <div class="Submit-btn" style="display: flex; justify-content: space-between">
                                            <button type="submit" class=" submit-btn dtr-btn dtr-mt-30">Request Callback</button>
                                            <!--                                                    <button class="btn  " style="background-color: #fff !important; border: 1px solid red !important; color: red; padding: 8px;">Cancel</button>-->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            

            <section class="project-board dtr-section dtr-boxed-section  dtr-py-30" id="customer" style="">
                <div class="container">

                    <!-- section intro row starts -->
                    <div class="row dtr-mb-40">
                        <div class="col-12 text-center">
                            <h2>Batches For Popular Projects</h2>
                            <!--                            <p class="dtr-highlight dtr-highlight-rounded fontweight-500 bg-red color-white">Rated 4.8 out of 2570 reviews</p>-->
                        </div>
                    </div>
                    <!-- section intro row ends -->

                    <!-- row starts -->
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <ul class="custome-writing-nav nav nav-pills d-flex" id="myTab" role="tablist" style="justify-content: center">
                                <li class="nav-item">
                                    <a class="nav-link active" id="individual-tab" data-toggle="tab" href="#individual" role="tab" aria-controls="home" aria-selected="true"><img src="{{asset('assets/images/project-camp/individual-project.svg')}}" width="44px" /> Individual Projects
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="premium-tab" data-toggle="tab" href="#premium" role="tab" aria-controls="profile" aria-selected="false"><img src="{{asset('assets/images/project-camp/premium-project.svg')}}" width="44px" /> Premium Projects
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="capstone-tab" data-toggle="tab" href="#capstone" role="tab" aria-controls="contact" aria-selected="false"><img src="{{asset('assets/images/project-camp/capstone-project.svg')}}" width="44px" /> Capstone Project
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-md-4 -->
                        <div class="col-md-12">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="individual" role="tabpanel" aria-labelledby="individual-tab">
                                    <div class="dtr-icon-box bg-white" style="    background: hsla(0,0%,100%,.7); padding: 0px !important;">

                                        <!-- icon box icon / image -->
                                        <h5>Individual Projects</h5>
                                        <p class="fontweight-400 text-size-md color-dark">Individual project on-board have designed to start your project training experience on different platforms </p>

                                        <div class="benifits d-flex dtr-my-30 text-center">
                                            <div class="benifit-info">
                                                <img src="{{asset('assets/images/project-camp/project-icon/web-development.svg')}}" width="64px">
                                                <p> Web project</p>
                                            </div>
                                            <div class="benifit-info">
                                                <img src="{{asset('assets/images/project-camp/project-icon/application-development.svg')}}" width="64px">
                                                <p>Application Developments </p>
                                            </div>
                                            <div class="benifit-info">
                                                <img src="{{asset('assets/images/project-camp/project-icon/machine-learning.svg')}}" width="64px">
                                                <p>Machine Learning </p>
                                            </div>
                                            <div class="benifit-info">
                                                <img src="{{asset('assets/images/project-camp/project-icon/data-structure.svg')}}" width="64px">
                                                <p>Data Structure </p>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="tab-pane fade" id="premium" role="tabpanel" aria-labelledby="premium-tab">
                                    <div class="dtr-icon-box bg-white" style="    background: hsla(0,0%,100%,.7); padding: 0px !important;">

                                        <!-- icon box icon / image -->
                                        <h5>Premium Projects</h5>
                                        <p class="fontweight-400 text-size-md color-dark">Premium projects helps to upskill your coding and project development skills</p>

                                        <div class="benifits d-flex dtr-my-30 text-center">
                                            <div class="benifit-info">
                                                <img src="{{asset('assets/images/project-camp/project-icon/data-science.svg')}}" width="64px">
                                                <p> Data Science Project </p>
                                            </div>
                                            <div class="benifit-info">
                                                <img src="{{asset('assets/images/project-camp/project-icon/fuulstack.svg')}}" width="64px">
                                                <p> Full Stack Web development </p>
                                            </div>
                                            <div class="benifit-info">
                                                <img src="{{asset('assets/images/project-camp/project-icon/app.svg')}}" width="64px">
                                                <p> Apps Development </p>
                                            </div>
                                            <div class="benifit-info">
                                                <img src="{{asset('assets/images/project-camp/project-icon/erp.svg')}}" width="64px">
                                                <p> ERP Projects </p>
                                            </div>
                                            <div class="benifit-info">
                                                <img src="{{asset('assets/images/project-camp/project-icon/crm.svg')}}" width="64px">
                                                <p>CRM Projects </p>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="tab-pane fade" id="capstone" role="tabpanel" aria-labelledby="capstone-tab">
                                    <div class="dtr-icon-box bg-white" style="    background: hsla(0,0%,100%,.7)">

                                        <!-- icon box icon / image -->
                                        <p class="fontweight-400 text-size-md color-dark">C++ Foundatio DS & Algo</p>




                                    </div>

                                </div>

                            </div>

                        </div>
                        <!-- /.col-md-8 -->
                    </div>
                    <!-- row ends -->

                </div>

            </section>


            <section class="dtr-section dtr-py-30">
                <div class="container">
                    <h2 class="text-center dtr-mb-30">How It Works</h2>
                    <div class="how-it-works-content">
                        <!-- row 1 starts -->
                        <div class="row d-flex align-items-center dtr-mb-50">

                            <!-- column 1 starts -->
                            <div class="col-12 col-md-5 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">

                                <!-- feature 1 starts -->
                                <div class="first dtr-number-feature" style="padding: 50px; box-shadow: rgb(0 0 0 / 2%) 0px 2.76726px 2.21381px, rgb(0 0 0 / 3%) 0px 6.6501px 5.32008px, rgb(0 0 0 / 4%) 0px 12.5216px 10.0172px, rgb(0 0 0 / 4%) 0px 22.3363px 17.869px, rgb(0 0 0 / 5%) 0px 41.7776px 33.4221px, rgb(0 0 0 / 7%) 0px 100px 80px;border-radius: 20px; background: #f5ebff">
                                    <h4>Slick Login UI</h4>
                                    <p>There are many variations of passages of lorem ipsum dolor amet aute irure in repren.</p>
                                </div>
                                <!-- feature 1 ends -->

                            </div>
                            <!-- column 1 ends -->

                            <!-- column 2 starts -->
                            <div class="col-12 col-md-7"> <img src="{{asset('assets/images/project-camp/how-it-works/choose.svg')}}" alt="image"> </div>
                            <!-- column 2 ends -->

                        </div>
                        <!-- row 1 ends -->

                        <!-- row 2 starts -->
                        <div class="row flex-row-reverse d-flex align-items-center dtr-mb-50">

                            <!-- column 1 starts -->
                            <div class="col-12 col-md-5 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">

                                <!-- feature 2 starts -->
                                <div class="second dtr-number-feature" style="padding: 50px; box-shadow: rgb(0 0 0 / 2%) 0px 2.76726px 2.21381px, rgb(0 0 0 / 3%) 0px 6.6501px 5.32008px, rgb(0 0 0 / 4%) 0px 12.5216px 10.0172px, rgb(0 0 0 / 4%) 0px 22.3363px 17.869px, rgb(0 0 0 / 5%) 0px 41.7776px 33.4221px, rgb(0 0 0 / 7%) 0px 100px 80px;border-radius: 20px; background: #f5ebff">
                                    <h4>UI Components</h4>
                                    <p>There are many variations of passages of lorem ipsum dolor amet aute irure in repren sed.</p>
                                </div>
                                <!-- feature 2 ends -->

                            </div>
                            <!-- column 1 ends -->

                            <!-- column 2 starts -->
                            <div class="col-12 col-md-7"> <img src="{{asset('assets/images/project-camp/how-it-works/date.svg')}}" alt="image"> </div>
                            <!-- column 2 ends -->

                        </div>
                        <!-- row 2 ends -->

                        <!-- row 3 starts -->
                        <div class="row d-flex align-items-center dtr-mb-50">

                            <!-- column 1 starts -->
                            <div class="col-12 col-md-5 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">

                                <!-- feature 3 starts -->
                                <div class="third dtr-number-feature" style="padding: 50px; box-shadow: rgb(0 0 0 / 2%) 0px 2.76726px 2.21381px, rgb(0 0 0 / 3%) 0px 6.6501px 5.32008px, rgb(0 0 0 / 4%) 0px 12.5216px 10.0172px, rgb(0 0 0 / 4%) 0px 22.3363px 17.869px, rgb(0 0 0 / 5%) 0px 41.7776px 33.4221px, rgb(0 0 0 / 7%) 0px 100px 80px;border-radius: 20px; background: #f5ebff">
                                    <h4>UI Components</h4>
                                    <p>There are many variations of passages of lorem ipsum dolor amet aute irure in repren sed.</p>
                                </div>
                                <!-- feature 3 ends -->

                            </div>
                            <!-- column 1 ends -->

                            <!-- column 2 starts -->
                            <div class="col-12 col-md-7"> <img src="{{asset('assets/images/project-camp/how-it-works/strat-working.svg')}}" alt="image"> </div>
                            <!-- column 2 ends -->

                        </div>
                        <!-- row 3 ends -->
                        <!-- row 4 starts -->
                        <div class="row flex-row-reverse d-flex align-items-center dtr-mb-50">

                            <!-- column 1 starts -->
                            <div class="col-12 col-md-5 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">

                                <!-- feature 2 starts -->
                                <div class="four dtr-number-feature" style="padding: 50px; box-shadow: rgb(0 0 0 / 2%) 0px 2.76726px 2.21381px, rgb(0 0 0 / 3%) 0px 6.6501px 5.32008px, rgb(0 0 0 / 4%) 0px 12.5216px 10.0172px, rgb(0 0 0 / 4%) 0px 22.3363px 17.869px, rgb(0 0 0 / 5%) 0px 41.7776px 33.4221px, rgb(0 0 0 / 7%) 0px 100px 80px;border-radius: 20px; background: #f5ebff">
                                    <h4>UI Components</h4>
                                    <p>There are many variations of passages of lorem ipsum dolor amet aute irure in repren sed.</p>
                                </div>
                                <!-- feature 2 ends -->

                            </div>
                            <!-- column 1 ends -->

                            <!-- column 2 starts -->
                            <div class="col-12 col-md-7"> <img src="{{asset('assets/images/project-camp/how-it-works/date.svg')}}" alt="image"> </div>
                            <!-- column 2 ends -->

                        </div>
                        <!-- row 4 ends -->
                    </div>
                </div>
            </section>
            <section data-brackets-id="56517" class="dtr-section overflow-hidden dtr-py-60" id="customer">
                <div data-brackets-id="56518" class="container">

                    <!-- section intro row starts -->
                    <div data-brackets-id="56519" class="row dtr-mb-40">
                        <div data-brackets-id="56520" class="col-12 text-center">
                            <h2 data-brackets-id="56521">What customers say...</h2>
                            <!--                            <p class="dtr-highlight dtr-highlight-rounded fontweight-500 bg-red color-white">Rated 4.8 out of 2570 reviews</p>-->
                        </div>
                    </div>
                    <!-- section intro row ends -->

                    <!-- row starts -->
                    <div data-brackets-id="56522" class="row">
                        <div data-brackets-id="56523" class="col-12">

                            <!--===== testimonial slider starts =====-->
                            <div data-brackets-id="56524" class="dtr-slick-slider-course dtr-slick-slider dtr-testimonial-style-center dtr-testimonial-style4 dtr-slick-has-dots slick-initialized slick-slider"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button>

                                <!--== slide 1 starts ==-->
                                <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4940px; transform: translate3d(-1140px, 0px, 0px);"><div data-brackets-id="56539" class="dtr-testimonial slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                    <div data-brackets-id="56540" class="dtr-testimonial-user"> <img data-brackets-id="56541" src="assets/images/female.jpg" alt="image"> </div>
                                    <div data-brackets-id="56542" class="dtr-client-info">
                                        <h6 data-brackets-id="56543" class="dtr-client-name">Emi</h6>
                                        <span data-brackets-id="56544" class="dtr-client-job">Student</span>
                                    </div>
                                    <div data-brackets-id="56545" class="dtr-testimonial-content">“The Professionals are amazing! I suggest this platform because it is extremely trustworthy and you get what you want as per your time perferences and with assured quality. Great team and co-operation!.” </div>
                                </div><div data-brackets-id="56546" class="dtr-testimonial slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                    <div data-brackets-id="56547" class="dtr-testimonial-user"> <img data-brackets-id="56548" src="assets/images/male.jpg" alt="image"> </div>
                                    <div data-brackets-id="56549" class="dtr-client-info">
                                        <h6 data-brackets-id="56550" class="dtr-client-name">Bob</h6>
                                        <span data-brackets-id="56551" class="dtr-client-job">Student</span>
                                    </div>
                                    <div data-brackets-id="56552" class="dtr-testimonial-content">“LearnInbox is real saver. Firstly it gives best quality work. Secondly, support team responds quickly. Last but not the least, truly affordable prices wrt students. I would highly recommend Learninbox to all students.” </div>
                                </div><div data-brackets-id="56553" class="dtr-testimonial slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                    <div data-brackets-id="56554" class="dtr-testimonial-user"> <img data-brackets-id="56555" src="assets/images/male.jpg" alt="image"> </div>
                                    <div data-brackets-id="56556" class="dtr-client-info">
                                        <h6 data-brackets-id="56557" class="dtr-client-name">David</h6>
                                        <span data-brackets-id="56558" class="dtr-client-job">Student</span>
                                    </div>
                                    <div data-brackets-id="56559" class="dtr-testimonial-content">“I placed an order for a assigment and that we agreed on a 10-day deadline. But i received it within 6 days. FLAWLESS. Bunch of thanks to learninbox! I`ll definitely recommend LearnInbox.” </div>
                                </div><div data-brackets-id="56525" class="dtr-testimonial slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 350px;">
                                    <div data-brackets-id="56526" class="dtr-testimonial-user"> <img data-brackets-id="56527" src="assets/images/female.jpg" alt="image"> </div>
                                    <div data-brackets-id="56528" class="dtr-client-info">
                                        <h6 data-brackets-id="56529" class="dtr-client-name">Kirti</h6>
                                        <span data-brackets-id="56530" class="dtr-client-job">Student</span>
                                    </div>
                                    <div data-brackets-id="56531" class="dtr-testimonial-content">“I went through numerous sites for finding the simplest research paper writing service and always ended up with different grades for my assignments.
                                        Sometimes I even failed for a piece from the location , which helped me to pass before.Finally I found learninbox.com, guys really iit made a difference for me. I have got good change for my grades.” </div>
                                </div><div data-brackets-id="56532" class="dtr-testimonial slick-slide slick-active" data-slick-index="1" aria-hidden="false" tabindex="0" style="width: 350px;">
                                    <div data-brackets-id="56533" class="dtr-testimonial-user"> <img data-brackets-id="56534" src="assets/images/male.jpg" alt="image"> </div>
                                    <div data-brackets-id="56535" class="dtr-client-info">
                                        <h6 data-brackets-id="56536" class="dtr-client-name">Ravikanth</h6>
                                        <span data-brackets-id="56537" class="dtr-client-job">Student</span>
                                    </div>
                                    <div data-brackets-id="56538" class="dtr-testimonial-content">“Thank you for the paper. I liked your work a lot. I am going place order for next 2 subsequent assignment.” </div>
                                </div><div data-brackets-id="56539" class="dtr-testimonial slick-slide slick-active" data-slick-index="2" aria-hidden="false" tabindex="0" style="width: 350px;">
                                    <div data-brackets-id="56540" class="dtr-testimonial-user"> <img data-brackets-id="56541" src="assets/images/female.jpg" alt="image"> </div>
                                    <div data-brackets-id="56542" class="dtr-client-info">
                                        <h6 data-brackets-id="56543" class="dtr-client-name">Emi</h6>
                                        <span data-brackets-id="56544" class="dtr-client-job">Student</span>
                                    </div>
                                    <div data-brackets-id="56545" class="dtr-testimonial-content">“The Professionals are amazing! I suggest this platform because it is extremely trustworthy and you get what you want as per your time perferences and with assured quality. Great team and co-operation!.” </div>
                                </div><div data-brackets-id="56546" class="dtr-testimonial slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                    <div data-brackets-id="56547" class="dtr-testimonial-user"> <img data-brackets-id="56548" src="assets/images/male.jpg" alt="image"> </div>
                                    <div data-brackets-id="56549" class="dtr-client-info">
                                        <h6 data-brackets-id="56550" class="dtr-client-name">Bob</h6>
                                        <span data-brackets-id="56551" class="dtr-client-job">Student</span>
                                    </div>
                                    <div data-brackets-id="56552" class="dtr-testimonial-content">“LearnInbox is real saver. Firstly it gives best quality work. Secondly, support team responds quickly. Last but not the least, truly affordable prices wrt students. I would highly recommend Learninbox to all students.” </div>
                                </div><div data-brackets-id="56553" class="dtr-testimonial slick-slide" data-slick-index="4" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                    <div data-brackets-id="56554" class="dtr-testimonial-user"> <img data-brackets-id="56555" src="assets/images/male.jpg" alt="image"> </div>
                                    <div data-brackets-id="56556" class="dtr-client-info">
                                        <h6 data-brackets-id="56557" class="dtr-client-name">David</h6>
                                        <span data-brackets-id="56558" class="dtr-client-job">Student</span>
                                    </div>
                                    <div data-brackets-id="56559" class="dtr-testimonial-content">“I placed an order for a assigment and that we agreed on a 10-day deadline. But i received it within 6 days. FLAWLESS. Bunch of thanks to learninbox! I`ll definitely recommend LearnInbox.” </div>
                                </div><div data-brackets-id="56525" class="dtr-testimonial slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                    <div data-brackets-id="56526" class="dtr-testimonial-user"> <img data-brackets-id="56527" src="assets/images/female.jpg" alt="image"> </div>
                                    <div data-brackets-id="56528" class="dtr-client-info">
                                        <h6 data-brackets-id="56529" class="dtr-client-name">Kirti</h6>
                                        <span data-brackets-id="56530" class="dtr-client-job">Student</span>
                                    </div>
                                    <div data-brackets-id="56531" class="dtr-testimonial-content">“I went through numerous sites for finding the simplest research paper writing service and always ended up with different grades for my assignments.
                                        Sometimes I even failed for a piece from the location , which helped me to pass before.Finally I found learninbox.com, guys really iit made a difference for me. I have got good change for my grades.” </div>
                                </div><div data-brackets-id="56532" class="dtr-testimonial slick-slide slick-cloned" data-slick-index="6" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                    <div data-brackets-id="56533" class="dtr-testimonial-user"> <img data-brackets-id="56534" src="assets/images/male.jpg" alt="image"> </div>
                                    <div data-brackets-id="56535" class="dtr-client-info">
                                        <h6 data-brackets-id="56536" class="dtr-client-name">Ravikanth</h6>
                                        <span data-brackets-id="56537" class="dtr-client-job">Student</span>
                                    </div>
                                    <div data-brackets-id="56538" class="dtr-testimonial-content">“Thank you for the paper. I liked your work a lot. I am going place order for next 2 subsequent assignment.” </div>
                                </div><div data-brackets-id="56539" class="dtr-testimonial slick-slide slick-cloned" data-slick-index="7" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                    <div data-brackets-id="56540" class="dtr-testimonial-user"> <img data-brackets-id="56541" src="assets/images/female.jpg" alt="image"> </div>
                                    <div data-brackets-id="56542" class="dtr-client-info">
                                        <h6 data-brackets-id="56543" class="dtr-client-name">Emi</h6>
                                        <span data-brackets-id="56544" class="dtr-client-job">Student</span>
                                    </div>
                                    <div data-brackets-id="56545" class="dtr-testimonial-content">“The Professionals are amazing! I suggest this platform because it is extremely trustworthy and you get what you want as per your time perferences and with assured quality. Great team and co-operation!.” </div>
                                </div><div data-brackets-id="56546" class="dtr-testimonial slick-slide slick-cloned" data-slick-index="8" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                    <div data-brackets-id="56547" class="dtr-testimonial-user"> <img data-brackets-id="56548" src="assets/images/male.jpg" alt="image"> </div>
                                    <div data-brackets-id="56549" class="dtr-client-info">
                                        <h6 data-brackets-id="56550" class="dtr-client-name">Bob</h6>
                                        <span data-brackets-id="56551" class="dtr-client-job">Student</span>
                                    </div>
                                    <div data-brackets-id="56552" class="dtr-testimonial-content">“LearnInbox is real saver. Firstly it gives best quality work. Secondly, support team responds quickly. Last but not the least, truly affordable prices wrt students. I would highly recommend Learninbox to all students.” </div>
                                </div><div data-brackets-id="56553" class="dtr-testimonial slick-slide slick-cloned" data-slick-index="9" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                    <div data-brackets-id="56554" class="dtr-testimonial-user"> <img data-brackets-id="56555" src="assets/images/male.jpg" alt="image"> </div>
                                    <div data-brackets-id="56556" class="dtr-client-info">
                                        <h6 data-brackets-id="56557" class="dtr-client-name">David</h6>
                                        <span data-brackets-id="56558" class="dtr-client-job">Student</span>
                                    </div>
                                    <div data-brackets-id="56559" class="dtr-testimonial-content">“I placed an order for a assigment and that we agreed on a 10-day deadline. But i received it within 6 days. FLAWLESS. Bunch of thanks to learninbox! I`ll definitely recommend LearnInbox.” </div>
                                </div></div></div>

                                <!--== slide 1 ends ==-->

                                <!--== slide 2 starts ==-->
                                
                                <!--== slide 2 ends ==-->

                                <!--== slide 3 starts ==-->
                                
                                <!--== slide 3 ends ==-->
                                <!--== slide 4 starts ==-->
                                
                                <!--== slide 4 ends ==-->
                                <!--== slide 5 starts ==-->
                                
                                <!--== slide 5 ends ==-->
                            <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button></div>
                            <!--===== testimonial slider ends =====-->

                        </div>
                    </div>
                    <!-- row ends -->

                </div>
            </section>
           <section class="why-us dtr-section dtr-boxed-section overflow-hidden dtr-pt-100 dtr-pb-60" style="    background: linear-gradient(0deg, rgba(255, 255, 255, 0) 0%, rgba(85, 0, 136, 0.1) 100%);border-radius: 20px">
            <div class="container"> 
                
                <!-- section intro row starts -->
                <div class="row dtr-mb-50">
                    <div class="col-12 text-center">
                        <h2>Why Chose Us</h2>
                    </div>
                </div>
                <!-- section intro row ends --> 
                
                <!-- row starts -->
                <div class="row"> 
                    
                    <!-- column 1 starts -->
                    <div class="col-12 col-sm-6 col-lg-4"> 
                        
                        <!-- feature 1 starts -->
                        <div class="dtr-feature dtr-feature-left border-right">
                            <div class="dtr-feature-img"> <img src="{{asset('assets/images/project-camp/why-us/industrial.svg')}}" alt="image"> </div>
                            <div class="dtr-feature-content">
                                <h5>Industrial Standerd Projects</h5>
                                <ul class="dtr-list">
                                    <li>Retail Shops</li>
                                    <li>Health Care Clinic</li>
                                    <li>Restaurants</li>
                                    <li>Cafes &amp; Salons</li>
                                </ul>
                            </div>
                        </div>
                        <!-- feature 1 ends --> 
                        
                    </div>
                    <!-- column 1 ends --> 
                    
                    <!-- column 2 starts -->
                    <div class="col-12 col-sm-6 col-lg-4"> 
                        
                        <!-- feature 2 starts -->
                        <div class="dtr-feature dtr-feature-left border-right">
                            <div class="dtr-feature-img"> <img src="{{asset('assets/images/project-camp/why-us/expert.svg')}}" alt="image"> </div>
                            <div class="dtr-feature-content">
                                <h5>Industrial Expertise</h5>
                                <ul class="dtr-list">
                                    <li>Club House</li>
                                    <li>Nursery &amp; Children’s Park</li>
                                    <li>Indoor Sports</li>
                                    <li>Community Hall</li>
                                </ul>
                            </div>
                        </div>
                        <!-- feature 2 ends --> 
                        
                    </div>
                    <!-- column 2 ends --> 
                    
                    <!-- column 3 starts -->
                    <div class="col-12 col-sm-6 col-lg-4"> 
                        
                        <!-- feature 3 starts -->
                        <div class="dtr-feature dtr-feature-left">
                            <div class="dtr-feature-img"> <img src="{{asset('assets/images/project-camp/why-us/learn.svg')}}" alt="image"> </div>
                            <div class="dtr-feature-content">
                                <h5>Learn</h5>
                                <ul class="dtr-list">
                                    <li>75% Open Space</li>
                                    <li>24x7 Water</li>
                                    <li>Multi - layered Security</li>
                                    <li>Community Living</li>
                                </ul>
                            </div>
                        </div>
                        <!-- feature 3 ends --> 
                        
                    </div>
                    <!-- column 3 ends --> 
                    
                    <!-- column 4 starts -->
                    <div class="col-12 col-sm-6 col-lg-4"> 
                        
                        <!-- feature 4 starts -->
                        <div class="dtr-feature dtr-feature-left border-right">
                            <div class="dtr-feature-img"> <img src="{{asset('assets/images/project-camp/why-us/opportunity.svg')}}" alt="image"> </div>
                            <div class="dtr-feature-content">
                                <h5>Opportunity</h5>
                                <ul class="dtr-list">
                                    <li>Zero Passages</li>
                                    <li>Zero odd shaped rooms</li>
                                    <li>No wastage of space</li>
                                    <li>Ample space</li>
                                </ul>
                            </div>
                        </div>
                        <!-- feature 4 ends --> 
                        
                    </div>
                    <!-- column 4 ends --> 
                    
                    <!-- column 5 starts -->
                    <div class="col-12 col-sm-6 col-lg-4"> 
                        
                        <!-- feature 5 starts -->
                        <div class="dtr-feature dtr-feature-left border-right">
                            <div class="dtr-feature-img"> <img src="{{asset('assets/images/project-camp/why-us/pay.svg')}}" alt="image"> </div>
                            <div class="dtr-feature-content">
                                <h5>Pay Per Service</h5>
                                <ul class="dtr-list">
                                    <li>Gree Balconies</li>
                                    <li>Well Ventilated</li>
                                    <li>600+ trees planted</li>
                                    <li>Well lit spaces</li>
                                </ul>
                            </div>
                        </div>
                        <!-- feature 5 ends --> 
                        
                    </div>
                    <!-- column 5 ends --> 
                    
                    <!-- column 6 starts -->
                    <div class="col-12 col-sm-6 col-lg-4"> 
                        
                        <!-- feature 6 starts -->
                        <div class="dtr-feature dtr-feature-left">
                            <div class="dtr-feature-img"> <img src="{{asset('assets/images/project-camp/why-us/real-time.svg')}}" alt="image"> </div>
                            <div class="dtr-feature-content">
                                <h5>Real Time</h5>
                                <ul class="dtr-list">
                                    <li>5 mins from Subway</li>
                                    <li>10 mins from National Highway</li>
                                    <li>12 mins from Shopping Mall</li>
                                    <li>15 mins from the Market</li>
                                </ul>
                            </div>
                        </div>
                        <!-- feature 6 ends --> 
                        
                    </div>
                    <!-- column 6 ends --> 
                    
                </div>
                <!-- row ends --> 
                
            </div>
        </section>
            <section data-brackets-id="56739" id="faq" class="dtr-section dtr-pt-30 dtr-pb-30 syllabus">
                <div data-brackets-id="56740" class="container">
                    <div data-brackets-id="56741" class="row dtr-mb-50">
                        <div data-brackets-id="56742" class="col-12">
                            <h2 data-brackets-id="56743" class="text-center">Frequently Asked Questions</h2>
                        </div>
                    </div>
                    <div data-brackets-id="56744" class="row">
                        <div data-brackets-id="56745" class="col-12 col-md-6">
                            <div data-brackets-id="56746" class="dtr-pl-20 dtr-sm-pl-0">
                                <div data-brackets-id="56747" class="dtr-accordion accordion" id="accord-index1">
                                    <!-- accordion tab 1 starts -->
                                    <div data-brackets-id="56748" class="card">
                                        <div data-brackets-id="56749" class="card-header" id="accord-index1-heading1">
                                            <h2 data-brackets-id="56750" class="dtr-mb-0">
                                                <button data-brackets-id="56751" class="dtr-btn accordion-btn-link collapsed" type="button" data-toggle="collapse" data-target="#accord-index1-collapse1" aria-expanded="false" aria-controls="accord-index1-collapse1">How do I place an order?&nbsp;</button>
                                            </h2>
                                        </div>
                                        <div data-brackets-id="56752" id="accord-index1-collapse1" class="collapse" aria-labelledby="accord-index1-heading1" data-parent="#accord-index1" style="">
                                            <div data-brackets-id="56753" class="card-body">Simple 2 steps. Top of the page youhaveaform,fillinyourrequirementsandclickontheorder button. It also gives you price estimation.</div>
                                        </div>
                                    </div>
                                    <!-- accordion tab 1 ends -->

                                    <!-- accordion tab 2 starts -->
                                    <div data-brackets-id="56754" class="card">
                                        <div data-brackets-id="56755" class="card-header" id="accord-index1-heading2">
                                            <h2 data-brackets-id="56756" class="dtr-mb-0">
                                                <button data-brackets-id="56757" class="dtr-btn accordion-btn-link collapsed" type="button" data-toggle="collapse" data-target="#accord-index1-collapse2" aria-expanded="false" aria-controls="accord-index1-collapse2"> What if I am not satisfied with the final draft I receive?&nbsp; </button>
                                            </h2>
                                        </div>
                                        <div data-brackets-id="56758" id="accord-index1-collapse2" class="collapse" aria-labelledby="accord-index1-heading2" data-parent="#accord-index1" style="">
                                            <div data-brackets-id="56759" class="card-body">No need to worry in that case, you can request for revision.&nbsp; </div>
                                        </div>
                                    </div>
                                    <!-- accordion tab 2 ends -->

                                    <!-- accordion tab 3 starts -->
                                    <div data-brackets-id="56760" class="card">
                                        <div data-brackets-id="56761" class="card-header" id="accord-index1-heading3">
                                            <h2 data-brackets-id="56762" class="dtr-mb-0">
                                                <button data-brackets-id="56763" class="dtr-btn accordion-btn-link collapsed" type="button" data-toggle="collapse" data-target="#accord-index1-collapse3" aria-expanded="false" aria-controls="accord-index1-collapse3"> How do I pay for an order?&nbsp; </button>
                                            </h2>
                                        </div>
                                        <div data-brackets-id="56764" id="accord-index1-collapse3" class="collapse" aria-labelledby="accord-index1-heading3" data-parent="#accord-index1" style="">
                                            <div data-brackets-id="56765" class="card-body">Onces order is confirmed, we would take you to the payment gateway where you can choose the method of your choice to make payment.</div>
                                        </div>
                                    </div>
                                    <!-- accordion tab 3 ends -->
                                    <!-- accordion tab 4 starts -->
                                    <div data-brackets-id="56766" class="card">
                                        <div data-brackets-id="56767" class="card-header" id="accord-index1-heading4">
                                            <h2 data-brackets-id="56768" class="dtr-mb-0">
                                                <button data-brackets-id="56769" class="dtr-btn accordion-btn-link collapsed" type="button" data-toggle="collapse" data-target="#accord-index1-collapse4" aria-expanded="false" aria-controls="accord-index1-collapse4"> How can I be sure the paper I receive is not plagiarized?&nbsp; </button>
                                            </h2>
                                        </div>
                                        <div data-brackets-id="56770" id="accord-index1-collapse4" class="collapse" aria-labelledby="accord-index1-heading4" data-parent="#accord-index1" style="">
                                            <div data-brackets-id="56771" class="card-body">We would provide a plagiarism report with paper, which would briefly describe the uquinessness of paper.&nbsp; </div>
                                        </div>
                                    </div>
                                    <!-- accordion tab 4 ends -->
                                    <!-- accordion tab 5 starts -->
                                    <div data-brackets-id="56772" class="card">
                                        <div data-brackets-id="56773" class="card-header" id="accord-index1-heading5">
                                            <h2 data-brackets-id="56774" class="dtr-mb-0">
                                                <button data-brackets-id="56775" class="dtr-btn accordion-btn-link collapsed" type="button" data-toggle="collapse" data-target="#accord-index1-collapse5" aria-expanded="false" aria-controls="accord-index1-collapse5"> What makes you better than other writing services?&nbsp; </button>
                                            </h2>
                                        </div>
                                        <div data-brackets-id="56776" id="accord-index1-collapse5" class="collapse" aria-labelledby="accord-index1-heading5" data-parent="#accord-index1" style="">
                                            <div data-brackets-id="56777" class="card-body">LIB’s Commitment towards High Quality Paper,On-TimeDelivery, Individual Approach For Each and Every Client, Free Revisions, 100% Unique Content and most importantly Reasonable Price are the main reason to choose LIB as your writing assistance.&nbsp; </div>
                                        </div>
                                    </div>
                                    <!-- accordion tab 5 ends -->
                                    <!-- accordion tab 6 starts -->
                                    <div data-brackets-id="56778" class="card">
                                        <div data-brackets-id="56779" class="card-header" id="accord-index1-heading6">
                                            <h2 data-brackets-id="56780" class="dtr-mb-0">
                                                <button data-brackets-id="56781" class="dtr-btn accordion-btn-link collapsed" type="button" data-toggle="collapse" data-target="#accord-index1-collapse6" aria-expanded="false" aria-controls="accord-index1-collapse6">Can I communicate with my writer?&nbsp; </button>
                                            </h2>
                                        </div>
                                        <div data-brackets-id="56782" id="accord-index1-collapse6" class="collapse" aria-labelledby="accord-index1-heading6" data-parent="#accord-index1" style="">
                                            <div data-brackets-id="56783" class="card-body">Yes you can communicate with your writer.</div>
                                        </div>
                                    </div>
                                    <!-- accordion tab 6 ends -->

                                </div>
                                <!-- accordion 1 ends -->
                            </div>
                        </div>
                        <div data-brackets-id="56784" class="col-12 col-md-6">
                            <div data-brackets-id="56785" class="dtr-pl-20 dtr-sm-pl-0">
                                <div data-brackets-id="56786" class="dtr-accordion accordion" id="accord-index1">

                                    <!-- accordion tab 7 starts -->
                                    <div data-brackets-id="56787" class="card">
                                        <div data-brackets-id="56788" class="card-header" id="accord-index1-heading7">
                                            <h2 data-brackets-id="56789" class="dtr-mb-0">
                                                <button data-brackets-id="56790" class="dtr-btn accordion-btn-link collapsed" type="button" data-toggle="collapse" data-target="#accord-index1-collapse7" aria-expanded="false" aria-controls="accord-index1-collapse7"> Can you cover any topic field?&nbsp; </button>
                                            </h2>
                                        </div>
                                        <div data-brackets-id="56791" id="accord-index1-collapse7" class="collapse" aria-labelledby="accord-index1-heading7" data-parent="#accord-index1" style="">
                                            <div data-brackets-id="56792" class="card-body">We do offer service for most of the topics.</div>
                                        </div>
                                    </div>
                                    <!-- accordion tab 7 ends -->
                                    <!-- accordion tab 8 starts -->
                                    <div data-brackets-id="56793" class="card">
                                        <div data-brackets-id="56794" class="card-header" id="accord-index1-heading8">
                                            <h2 data-brackets-id="56795" class="dtr-mb-0">
                                                <button data-brackets-id="56796" class="dtr-btn accordion-btn-link collapsed" type="button" data-toggle="collapse" data-target="#accord-index1-collapse8" aria-expanded="false" aria-controls="accord-index1-collapse8"> Can you meet urgent deadlines?</button>
                                            </h2>
                                        </div>
                                        <div data-brackets-id="56797" id="accord-index1-collapse8" class="collapse" aria-labelledby="accord-index1-heading8" data-parent="#accord-index1" style="">
                                            <div data-brackets-id="56798" class="card-body">Yes, we serve on urgent deadlines.</div>
                                        </div>
                                    </div>
                                    <!-- accordion tab 8 ends -->
                                    <!-- accordion tab 9 starts -->
                                    <div data-brackets-id="56799" class="card">
                                        <div data-brackets-id="56800" class="card-header" id="accord-index1-heading9">
                                            <h2 data-brackets-id="56801" class="dtr-mb-0">
                                                <button data-brackets-id="56802" class="dtr-btn accordion-btn-link collapsed" type="button" data-toggle="collapse" data-target="#accord-index1-collapse9" aria-expanded="false" aria-controls="accord-index1-collapse9"> How do I know someone is working on my order?&nbsp; </button>
                                            </h2>
                                        </div>
                                        <div data-brackets-id="56803" id="accord-index1-collapse9" class="collapse" aria-labelledby="accord-index1-heading9" data-parent="#accord-index1" style="">
                                            <div data-brackets-id="56804" class="card-body">Once you have placed an order, you get access to a dashboard where you can track your order or on the website writing services page there is option to track your order by giving your order-id.</div>
                                        </div>
                                    </div>
                                    <!-- accordion tab 9 ends -->
                                    <!-- accordion tab 10 starts -->
                                    <div data-brackets-id="56805" class="card">
                                        <div data-brackets-id="56806" class="card-header" id="accord-index1-heading10">
                                            <h2 data-brackets-id="56807" class="dtr-mb-0">
                                                <button data-brackets-id="56808" class="dtr-btn accordion-btn-link collapsed" type="button" data-toggle="collapse" data-target="#accord-index1-collapse10" aria-expanded="false" aria-controls="accord-index1-collapse10">How can I attach additional materials to my Order?&nbsp; </button>
                                            </h2>
                                        </div>
                                        <div data-brackets-id="56809" id="accord-index1-collapse10" class="collapse" aria-labelledby="accord-index1-heading10" data-parent="#accord-index1" style="">
                                            <div data-brackets-id="56810" class="card-body">While placing orders there is an option in 2nd step, which you can use to upload any document for reference.</div>
                                        </div>
                                    </div>
                                    <!-- accordion tab 10 ends -->
                                    <!-- accordion tab 11 starts -->
                                    <div data-brackets-id="56811" class="card">
                                        <div data-brackets-id="56812" class="card-header" id="accord-index1-heading11">
                                            <h2 data-brackets-id="56813" class="dtr-mb-0">
                                                <button data-brackets-id="56814" class="dtr-btn accordion-btn-link collapsed" type="button" data-toggle="collapse" data-target="#accord-index1-collapse11" aria-expanded="false" aria-controls="accord-index1-collapse11">Can I request a writer that I like?&nbsp; </button>
                                            </h2>
                                        </div>
                                        <div data-brackets-id="56815" id="accord-index1-collapse11" class="collapse" aria-labelledby="accord-index1-heading11" data-parent="#accord-index1" style="">
                                            <div data-brackets-id="56816" class="card-body">Yes you can choose a writer of your choice. </div>
                                        </div>
                                    </div>
                                    <!-- accordion tab 3 ends -->
                                </div>
                                <!-- accordion 1 ends -->
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!--Login Modal-->
            <!-- Modal -->
            <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button style="    position: absolute;
    right: 10px;top: 10px;
    z-index: 9;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i data-brackets-id="56305" class="icon-mbri-close color-blue" style="font-size: 20px;"></i></span>
                        </button>
                        <div id="user-login" class="user-card round5">

                            <div class="login-box">
                                <h5 class="text-center dtr-mb-20">Login To Continue</h5>
                                <form id="loginform"  class="login-form">
                                    <input type="text" name="username" placeholder="username" required/>
                                    <input type="password" name="password" placeholder="password" required/>
                                    <br>
                                    <button class="submit dtr-btn dtr-py-10" style=" background-image: linear-gradient(to right, #663399 , #e450a0);width:100%;">Login</button>
                                </form>

                                <div class="or"></div>

                                <a href="#" class="login-with-fb">
                                    <span class="icon fa fa-facebook"></span>
                                    Login with facebook
                                </a>
                                <a href="#" class="login-with-google">
                                    <span class="icon fa fa-google-plus"></span>
                                    Login with google
                                </a>
                                <a href="#" class="login-with-linkedin">
                                    <span class="icon fa fa-linkedin"></span>
                                    Login with linkedin
                                </a>
                                <p style="font-size: 12px;line-height: 14px;">Please Note: By continuing and signing in, you agree to
                                    learninbox's Terms & Conditions and Privacy Policy.</p>
                            </div>
                            <div class="signup-box">
                                <h5 class="text-center dtr-mb-20">Signup To Continue</h5>
                                <form id="signup" class="signup-form" name="signup" action="">
                                    <input type="email" name="email" class="email" placeholder="email" required />
                                    <input type="tel" id="phoneone" name="phone" pattern="[0-9]{10}" required>
                                    <button class="register dtr-btn dtr-mt-50" style=" background-image: linear-gradient(to right, #663399 , #e450a0);width:100%;">Signup</button>
                                    <p style="font-size: 12px;line-height: 14px; margin-top: 40px">Please Note: By continuing and signing in, you agree to
                                        learninbox's Terms & Conditions and Privacy Policy.</p>
                                </form>
                            </div>
                            
                            <div class="otp-box">
                                <h5 class="text-center dtr-mb-20">Enter OTP</h5>
                                <form id="signup" class="signup-form" name="signup" action="">
                                    <input type="text" name="email" class="email" placeholder="enter OTP" required />
                                    <a href="#">Resend OTP</a>
                                    <button class="register dtr-btn dtr-mt-50" style=" background-image: linear-gradient(to right, #663399 , #e450a0);width:100%;">Submit</button>
                                    <p style="font-size: 12px;line-height: 14px; margin-top: 40px">OTP has been sent to your email, xwq@edewd, please enter the same here to login. Valid for 10 minutes.</p>
                                </form>
                            </div>

                            <!-- Card Footer -->

                            <div class="footer">
                                <span>or </span><a class="toggle-link" href="#">Sign Up</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
            
            <!-- footer section starts
================================================== -->

     @include('layouts.includes.footer')       
            <!-- footer section ends
================================================== -->

        </div>
        <!-- == main content area ends == -->
    </div>

    <!-- #dtr-wrapper ends -->

    <!-- JS FILES -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{asset('assets/js/intlTelInput.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            defaultCountry: "in",
            preferredCountries: ["in"],
            // autoPlaceholder: "off",
            // dropdownContainer: document.body,
            //excludeCountries: ["us"],
            // formatOnDisplay: false,
            // geoIpLookup: function(callback) {
            //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : "";
            //     callback(countryCode);
            //   });
            // },
            // hiddenInput: "full_number",
            // initialCountry: "auto",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: "MOBILE",
            // preferredCountries: ['cn', 'jp'],
            separateDialCode: true,
            utilsScript: "assets/js/utils.js",
        });
        var input = document.querySelector("#phoneone");
        window.intlTelInput(input, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            defaultCountry: "in",
            preferredCountries: ["in"],
            // autoPlaceholder: "off",
            // dropdownContainer: document.body,
            //excludeCountries: ["us"],
            // formatOnDisplay: false,
            // geoIpLookup: function(callback) {
            //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : "";
            //     callback(countryCode);
            //   });
            // },
            // hiddenInput: "full_number",
            // initialCountry: "auto",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: "MOBILE",
            // preferredCountries: ['cn', 'jp'],
            separateDialCode: true,
            utilsScript: "assets/js/utils.js",
        });
    </script>
 <script>
        $(".submit").click(function() {
            $("#loginform").validate({
                rules: {
                    username: {
                        required: true,
                    },
                    password: {
                        required: true,
                    },
                },
                messages: {
                     username: {
                        required: "Please Enter Your Name",
                    },
                    password: {
                        required: "Please Enter Password",
                    },
                    
                }
            });
        })
     
     $(".register").click(function() {
            $("#signup").validate({
                rules: {
                    email: {
                        required: true,
                    },
                    phone: {
                        required: true,
                    },
                },
                messages: {
                     email: {
                        required: "Please Enter Email",
                    },
                    phone: {
                        required: "Please Enter Number",
                    },
                    
                }
            });
        })
    </script>
</body>

</html>