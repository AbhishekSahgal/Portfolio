<!DOCTYPE html>
<html lang="en">




<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="style2.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
        <script defer src="index.js"></script>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <title>PORTFOLIO</title>
</head>

<body>
    <header class="header ">
        <img src="images/logo.png" alt="logo" class="logo">
        <nav class="navbar">
            <ul class="navbar-lists">
                <li><a href="www.facebook.com" class="navbar-links home-link">Home</a></li>
                <li><a href="#portfolio" class="navbar-links About-link">About</a></li>
                <li><a href="#services" class="navbar-links services-link">Services</a></li>
                <li><a href="#portfolio" class="navbar-links portfolio-link">Portfolio</a></li>
                <li><a href="#contact" class="navbar-links contact-link">contact</a></li>
                <li><span class="themeswitch"><img src="images/icon/moon.png" alt="icon" id="icon"></span></li>
                <!-- <img src="images/icon/moon.png" alt="icon" id="icon"> -->
            </ul>
            
        </nav>
        <div class="mobile-navbar-btn">
            <ion-icon name="menu-outline" class="mobile-navbar-icon"></ion-icon>
            <ion-icon name="close-outline" class="mobile-navbar-icon"></ion-icon>
        </div>
    </header>

    <!-- =====================================================================
hero section
===================================================================== -->
    <main>
        <section class="section-hero  section" id="home">
            <div class="container grid grid-two-column">
                <div class="section-hero-data">
                    <p class="hero-top-data">
                        This Is Me..
                    </p>
                    <h1 class="hero-heading">Abhishek Sahgal</h1>
                    <p class="hero-para">
                        I' am Abhishek sahgal. a frontend web developer, and a gamer, and also web
                        developer.
                    </p>

                    <div>
                        <a href="mailto:ticckusahgal123@gmail.com " class="btn hireme-btn">Hire me</a>
                    </div>
                </div>
                <div class="section-hero-image">
                    <img src="images/hero.JPG" alt="hero img" class="hero-image">
                </div>
            </div>
        </section>
    </main>

    <!-- =====================================================================
biodata section
===================================================================== -->

    <section class="section-bio  section" id="portfolio">
        <div class="container grid grid-two-column">
            <div class="bio-image">
                <img src="images/bio.jpg" alt="bio image">
            </div>
            <!-- left side data  -->
            <div class="bio-data">
                <h2 class="common-heading">My Bio Data</h2>
                <p class="p1">ME Abhishek Sahgal A 2nd year student in Diploma college focused in INFORMATION
                    TECHNOLOGY. Skilled in java programing language, Web Development using various CSS & is Framework
                    And also i use bootstrap 4 and 5 version And I am intrested in game development and andriod
                    development. </p>
                <p>
                    I play guitar and I am also intrusted in photography and video editing and photo
                    editing etc. And i like visit new and historical and mountians place.
                </p>
                <div class="bio-data-stats">

                    <div class="bio-stats">
                        <h3>HTML</h3>
                        <div class="bio-progress-bar bio-progress-bar-2">
                            <span>80%</span>
                        </div>
                    </div>
                    <div class="bio-stats">
                        <h3>CSS</h3>
                        <div class="bio-progress-bar  bio-progress-bar-3">
                            <span>70%</span>
                        </div>
                    </div>
                    <div class="bio-stats">
                        <h3>JAVASCRIPT</h3>
                        <div class="bio-progress-bar  bio-progress-bar-4">
                            <span>30%</span>
                        </div>
                    </div>
                    <div class="bio-stats">
                        <h3>PYTHON</h3>
                        <div class="bio-progress-bar  bio-progress-bar-5">
                            <span>10%</span>
                        </div>
                    </div>
                    <div class="bio-stats">
                        <h3>BOOTSTRAP</h3>
                        <div class="bio-progress-bar">
                            <span>85%</span>
                        </div>
                    </div>

                </div>
                <div class="bio-data-btn">
                    <a href="https://drive.google.com/file/d/1H1r-FVTFFWB8tfwc8a9MQRrbthCrT2r2/view?usp=sharing" target="_blank" class="btn">Download CV</a>
                </div>
            </div>
        </div>
    </section>


    <!-- =====================================================================
     biodata section
===================================================================== -->
    <section class="section section-portfolio" id="portfolio-section" >
        <div class="container">
            <h2 class="common-heading">Latest Works</h2>
            <p>Recently I make this website with using Html Css and Javascript and use Javascript library and before i
                also make two more Websites.</p>
        </div>
        <div class="p-btns">
            <div class="btn p-btn" data-btn-number="1">Websites</div>
            <div class="btn p-btn" data-btn-number="2">Youtube</div>
            <div class="btn p-btn" data-btn-number="3">Designs</div>
        </div>
        <div class="container grid grid-three-column portfolio-images">
            <div class="img-overlay p-btn--1">
                <img src="images/folio/1.jpg" alt="first">
                <div class="overlay">
                    <a href="https://abhisheksahgal.github.io/My-Portfollio/" target="_blank"
                        class="common-heading">Project 1
                        <span class="overlay-span">portfolio</span>
                     </a>
                </div>
            </div>
            <div class="img-overlay p-btn--2">
                <img src="images/folio/2.jpg" alt="first">
                <div class="overlay">
                    <a href="https://abhisheksahgal.github.io/dreampicture/" target="_blank"
                        class="common-heading">Project 2 <br>
                        <span class="overlay-span">dreampicture</span>
                    </a>
                </div>
            </div>
            <div class="img-overlay p-btn--3">
                <img src="images/folio/3.jpg" alt="first">
                <div class="overlay">
                    <a href="" class="common-heading">Project 3 </a>
                </div>
            </div>
            <div class="img-overlay p-btn--1">
                <img src="images/folio/4.jpg" alt="first">
                <div class="overlay">
                    <a href="" class="common-heading">Project 4 </a>
                </div>
            </div>
            <div class="img-overlay p-btn--2">
                <img src="images/folio/5.jpg" alt="first">
                <div class="overlay">
                    <a href="" class="common-heading">Project 5 </a>
                </div>
            </div>
            <div class="img-overlay p-btn--2">
                <img src="images/folio/6.jpg" alt="first">
                <div class="overlay">
                    <a href="" class="common-heading">Project 6 </a>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
            counter number section section
    ===================================================================== -->


    <section class="section section-work-data ">
        <div class="container grid grid-four-column  counters">
            <div>
                <h2 class="counter-numbers" data-toggle="counter-up">2000</h2>
                <p>project compleated</p>
            </div>
            <div>
                <h2 class="counter-numbers" data-toggle="counter-up">6000</h2>
                <p>Happy clients</p>
            </div>
            <div>
                <h2 class="counter-numbers" data-toggle="counter-up">5000</h2>
                <p>travellings</p>
            </div>
            <div>
                <h2 class="counter-numbers" data-toggle="counter-up">3000</h2>
                <p>works</p>
            </div>
        </div>
    </section>


    <!-- <section class="container-fluid counts bg-light" id="counts">

        <div class="container">

            <div class="row counters">


                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">1232</span>
                    <p>Leave Applications</p>
                </div>


                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">64</span>
                    <p>Approved</p>
                </div>


                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">42</span>
                    <p>Pending</p>
                </div>


                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">15</span>
                    <p>Disapproved</p>
                </div>


            </div>

        </div>
    </section> -->

    <!-- =====================================================================
services section section
===================================================================== -->

    <section class="section section-services" id="services">
        <div class="container ">
            <h2 class="common-heading">Services offers</h2>
            <p>I provide specific services like Web Projects App Development related and provide Photography services.
            </p>
        </div>

        <!-- service card start -->

        <div class="container grid grid-three-column">
            <div class="service-box">
                <ion-icon name="desktop-outline" class="service-icon"></ion-icon>
                <h3>Web Design</h3>
                <p>“I am a web Designer to design a website templates and web app inerfaces. basically I use trends layouts”</p>
            </div>
            <div class="service-box">
                <ion-icon name="albums-outline" class="service-icon"></ion-icon>
                <h3>Web Development</h3>
                <p>“I have a study about html css javascript and java programing and i become a web developer And develop a websites.”</p>
            </div>
            <div class="service-box">
                <ion-icon name="camera-outline" class="service-icon"></ion-icon>
                <h3>Photography</h3>
                <p>“ I have also a photographer and clicks some unique pic's like nature picture and cars and make some editin. video and photos.”</p>
            </div>
            <div class="service-box">
                <ion-icon name="apps-outline" class="service-icon"></ion-icon>
                <h3>Mobile apps</h3>
                <p>“I develop a mobile apps using a java programing and phyton like application apps medical apps.”</p>
            </div>
            <div class="service-box">
                <ion-icon name="laptop" class="service-icon"></ion-icon>
                <h3>app interface</h3>
                <p>“I use java and phyton programing to develop app interfaces and designs their iterfaces .”</p>
            </div>
            <div class="service-box">
                <ion-icon name="cash" class="service-icon"></ion-icon>
                <h3>Graphic design</h3>
                <p>“i am also a Graphic designer and design some graphic. Animate videos and animation in websites.”</p>
            </div>
        </div>
    </section>


    <!--testimonal section start -->

    <section class="section section-testimonial">
        <div class="container">
            <h2 class="common-heading">
                happy clients works
            </h2>
        </div>

        <!-- Swiper -->
        <div class="swiper mySwiper container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-client-msg">
                        <p>Always available to answer any questions. very knowlwdeable about the services they provide.
                            Would recommend to anyone!</p>
                    </div>
                    <div class="swiper-client-data grid grid-two-column">
                        <figure>
                            <img src="images/client/1.jpg" alt="client">
                        </figure>
                        <div class="clients-data-details">
                            <p>Adya </p>
                            <p>Web Developer</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-client-msg">
                        <p>Great results. Enjoyable to work with, and most importantly,enabled us to have a presence on
                            the web we beeded to conduct business in today's market.</p>
                    </div>
                    <div class="swiper-client-data grid grid-two-column">
                        <figure>
                            <img src="images/client/2.jpg" alt="client">
                        </figure>
                        <div class="clients-data-details">
                            <p>Rahul Sharma</p>
                            <p>backend Developer</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-client-msg">
                        <p> &nbsp; Amazing team and effective solutions that resulted in higly rated search optimization
                            results and catchy branding. </p>
                    </div>
                    <div class="swiper-client-data grid grid-two-column">
                        <figure>
                            <img src="images/client/3.jpg" alt="client">
                        </figure>
                        <div class="clients-data-details">
                            <p>Pyush Rai</p>
                            <p>Programmer</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-client-msg">
                        <p> &nbsp; It's always a pleasure to work with will and his team. They are personable,
                            responsive, and results oriented!</p>
                    </div>
                    <div class="swiper-client-data grid grid-two-column">
                        <figure>
                            <img src="images/client/4.jpg" alt="client">
                        </figure>
                        <div class="clients-data-details">
                            <p>vansh Shukala</p>
                            <p>Game Developer</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-client-msg">
                        <p>Always available to answer any questions. very knowlwdeable about the services they provide.
                            Would recommend to anyone!</p>
                    </div>
                    <div class="swiper-client-data grid grid-two-column">
                        <figure>
                            <img src="images/client/5.jpg" alt="client">
                        </figure>
                        <div class="clients-data-details">
                            <p>Priya Sahgal</p>
                            <p>Software Developer</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-client-msg">
                        <p>Great results. Enjoyable to work with, and most importantly,enabled us to have a presence on
                            the web we beeded to conduct business in today's market.</p>
                    </div>
                    <div class="swiper-client-data grid grid-two-column">
                        <figure>
                            <img src="images/client/6.jpg" alt="client">
                        </figure>
                        <div class="clients-data-details">
                            <p>Isha Rai</p>
                            <p>Web Developer</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </section>

    <!-- =====================================================================
our free lancing section start
===================================================================== -->

    <section class="section-freelancing">
        <div class="overlay"></div>
        <div class="container">
            <h2>I Am <span> available </span> for freelancing</h2>
            <p>I' am Abhishek sahgal. a frontend web developer, and a youtuber, and also full stack web developer</p>
            <a href="contact.html" class="btn">HIRE ME</a>
        </div>
    </section>

    <!-- =====================================================================
our contact us section start
===================================================================== -->

    <section class="section section-contact" id="contact">
        <div class="container">
            <h2 class="common-heading">Contact us</h2>
        </div>
        <div class="section-contact-main contact-container">
            <form action="https://formspree.io/f/xdojkqpd" method="POST">
                <div class="grid grid-two-column">
                    <div>
                        <label for="username"></label>
                        <input type="text" name="username" placeholder="username" id="username" required
                            autocomplete="off">
                    </div>

                    <div>
                        <label for="email"></label>
                        <input type="email" name="email" placeholder="demo@gmail.com " id="email" required
                            autocomplete="off">
                    </div>
                </div>
                <div>
                    <label for="subject"></label>
                    <input type="text" name="subject" id="subject" placeholder="subject" required autocomplete="off">
                </div>
                <div>
                    <label for="textarea"></label>
                    <textarea name="textarea" id="textarea" cols="30" rows="10" autocomplete="off"
                        minlength="5"></textarea>
                </div>
                <div>
                    <!-- <input type="submit" name="submit" id="submit" class="btn" value="send massage"> -->
                    <!-- <a href="#" type="submit" class="btn">send massage</a> -->
                    <button type="submit" class="btn" style="border: none;">Send massage</button>
                </div>
            </form>
        </div>
    </section>


    <!-- =====================================================================
our footer section start
===================================================================== -->

    <footer class="section-footer section">
        <div class="container grid grid-four-column">
            <div class="f-about">
                <h3>About</h3>
                <p>
                    ME Abhishek Sahgal A 2nd year student in Diploma college focused in INFORMATION TECHNOLOGY.
                    
                </p>
                &nbsp;
                <p>If you want to know more about me, Send me a massage or reach out to me at.</p>
            </div>
            <!-- end -->
            <div class="f-links">
                <h3>links</h3>
                <ul>
                    <li>
                        <span>
                            <ion-icon name="arrow-forward"></ion-icon>
                        </span><a href="#home">Home</a>
                    </li>
                    <li>
                        <span>
                            <ion-icon name="arrow-forward"></ion-icon>
                        </span><a href="about.html">About</a>
                    </li>
                    <li>
                        <span>
                            <ion-icon name="arrow-forward"></ion-icon>
                        </span><a href="service.html">Services</a>
                    </li>
                    <li>
                        <span>
                            <ion-icon name="arrow-forward"></ion-icon>
                        </span><a href="#portfolio">portfolio</a>
                    </li>
                    <li>
                        <span>
                            <ion-icon name="arrow-forward"></ion-icon>
                        </span><a href="contact.html">contact</a>
                    </li>
                </ul>
            </div>
            <!-- end -->

            <div class="f-services">
                <h3>Services</h3>
                <ul>
                    <li>
                        <span>
                            <ion-icon name="arrow-forward"></ion-icon>
                        </span><a href="">Web design</a>
                    </li>
                    <li>
                        <span>
                            <ion-icon name="arrow-forward"></ion-icon>
                        </span><a href="">web development</a>
                    </li>
                    <li>
                        <span>
                            <ion-icon name="arrow-forward"></ion-icon>
                        </span><a href="">Web projects</a>
                    </li>
                    <li>
                        <span>
                            <ion-icon name="arrow-forward"></ion-icon>
                        </span><a href="">online contact</a>
                    </li>
                    <li>
                        <span>
                            <ion-icon name="arrow-forward"></ion-icon>
                        </span><a href="">youtube </a>
                    </li>
                </ul>
            </div>
            <!-- end -->

            <div class="f-address">
                <h3>have a question</h3>
                <address>
                    <div>
                        <p>
                            <span>
                                <ion-icon name="location-outline"></ion-icon>
                            </span>
                            Lucknow utter pradesh
                        </p>
                    </div>
                    <div>
                        <p>
                            <span>
                                <ion-icon name="location-outline"></ion-icon>
                            </span>
                            <a href="tel:+919161903649">+91 9161903649</a>
                        </p>
                    </div>
                    <div>
                        <p>
                            <span>
                                <ion-icon name="mail-unread-outline"></ion-icon>
                            </span>
                            <a href="mailto:ticckusahgal123@gmail.com">ticckusahgal123@gmail.com</a>
                        </p>
                    </div>
                </address>
                <div class="f-icons">
                    <a href="https://www.instagram.com/abhishek_sahgal_19/" target="_blank"><i
                            class="fa-brands fa-instagram icons"></i></a>
                    <a href="https://www.youtube.com/c/DraughtCodes" target="_blank"><i
                            class="fa-brands fa-youtube icons"></i></a>
                    <a href="https://github.com/AbhishekSahgal " target="_blank"><i
                            class="fa-brands fa-github icons"></i></a>
                </div>
            </div>

        </div>
        <div class="">

            <div class="f-credits">
                <p> Copyright ©2022 All rights reserved | This is made with ❤ by Abhishek Sahgal </p>
            </div>
        </div>
    </footer>


    <script>
        $(document).ready(function () {
            $('[data-toggle="counter-up"]').counterUp(
                {
                    delay: 10,  
                    time: 1000
                });
        })
    </script>
    <script lang="ja" src="js/counterup.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</body>

</html>