<?php

//To Handle Session Variables on This Page
session_start();


//Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<title>Home</title>

<head>
    <?php

    include 'php/head.php'

    ?>


</head>

<body>

    <!-- header starts -->
    <?php

    include 'php/header.php';

    ?>
    
            
    <!-- header ends -->

    <section id="hero-animated" class="hero-animated d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
            <div class="row">
                <div class="col-md-7">
                <h2 class="font-title">Welcome to <br> <span style="font-weight:700;font-size:50px;"> KJCOEMR Placement Cell</span></h2>
            <p>We Will Support You In Your Entire Placement Journey.</p>
            <a href="login.php" class="btn-get-started scrollto text-center">Get Started</a>
            </div>
                <div class="col-md-5">
                <img src="assets/img/hero-carousel/hero-carousel-1.svg" class="img-fluid animated">
                </div>
            </div>
        </div>
    </section>

    <main id="main">


    <!-- placed students data starts -->
    <div class="container mt-5">
        <h1 class="text-center" style="font-weight:700;font-weight:60px;">Placed Students</h1>
        <div class="row  mt-5">
            
            <?php
                                        // selecting student record via option 
                                        // fetching placed students from placed table &user table

                                        $sql = "select * from users inner join apply_job_post INNER JOIN job_post where users.id_user = apply_job_post.id_user AND apply_job_post.id_jobpost = job_post.id_jobpost;;";
                                        $_SESSION['QUERY'] = $sql;
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {

                                            while ($row = $result->fetch_assoc()) {


                                        ?>
                                        <div class="col-md-4">
                                        <div class="card" style="width: 24rem;">
                                           <img class="card-img-top" src="https://img.freepik.com/free-photo/successful-business-woman_1328-2313.jpg?w=1380&t=st=1680020229~exp=1680020829~hmac=ae07667b448794ae7d7d75b4d72cfbee1cbdb558d826236f3f2c7250a2dda7bb" alt="Card image cap" width="400">
                                           <div class="card-body">
                                           <h5 class="card-title" style="font-weight:800;"><?php echo $row['firstname'] . ' ' . $row['lastname']; ?></h5>
                                           <p class="card-text mt-4"><i class='far fa-building' style='font-size:22px;'></i> &nbsp&nbsp<?php echo $row['jobtitle']; ?>  <span style="margin-left:150px;"><i class='fa fa-rupee' style='font-size:22px;'></i> &nbsp&nbsp<?php echo $row['minimumsalary']; ?> Rs</span></p>
                                           
                                           </div>
                                        </div>
                                        </div>      
                                                   


                                                


                                        <?php

                                            }
                                        }

                                        ?>
            
        </div>
    </div>
    <!-- placed students data ends -->

    <!-- TPO section starts -->
    <section id="cta" class="cta mt-5">
            <div class="container" data-aos="zoom-out">

                <div class="row g-5">

                    <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
                        <h3>TRAINING & PLACEMENT OFFICER</h3>
                        <p>

                      <b>Prof. Rajusing D. Rathod</b><br>
                      BE, ME, Ph.D (Reg.) Mechanical, MISTE <br>
                      Training and Placement Officer <br>
                      K J College of Engineering & Management Research, Pune – 411048 <br> <br>

                       <b>Contact Details</b> <br>
                       Email: tpo.kjcoemr@kjei.edu.in , rajusingrathod@gmail.com <br>
                       Mobile No- +917588846371, +917620706760
                        </p>
                       
                    </div>

                    <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
                        <div class="">
                            <img src="https://www.kjei.edu.in/kjcoemr/gallery/Gallery%20View/best%20TPO/rathod.jpeg" alt="" class="img-fluid" style="border-radius:20px;">
                        </div>
                    </div>

                </div>

            </div>
        </section> 
 
    <!-- TPO section ends -->

    <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services mt-5">
            <div class="container mt-md-4">
  <h1 class="text-center" style="font-weight:800;">Placement Process</h1>
                <div class="row gy-4 mt-5">

                    <div class="col-xl-3 col-md-6 d-flex shadow" data-aos="zoom-out">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-activity icon"></i></div>
                            <h4><a href="" class="stretched-link">Login</a></h4>
                            <p>Students can login using their credentials. </p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex shadow"  data-aos="zoom-out" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                            <h4><a href="" class="stretched-link">Register</a></h4>
                            <p>Register yourself here.</p>
                        </div>
                    </div>

        <div class="col-xl-3 col-md-6 d-flex shadow" data-aos="zoom-out" data-aos-delay="400">
            <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                <h4><a href="" class="stretched-link">Look for companies</a></h4>
                <p>You can search for companies.</p>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 d-flex shadow" data-aos="zoom-out" data-aos-delay="600">
            <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                <h4><a href="" class="stretched-link">Apply for Drives</a></h4>
                <p>Look for eligibilty criteria and apply for companies accordingly.</p>
            </div>
        </div><!-- End Service Item -->

        </div>

        </div>
        </section><!-- End Featured Services Section -->






        <!-- ======= Clients Section ======= -->
        <h1 class="text-center" style="font-weight:700;font-weight:60px;">Our Recruiters</h1>
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-out">

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/clients/client-1.svg" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
                    </div>
                </div>

            </div>
        </section><!-- End Clients Section -->



        <!-- ======= Features Section ======= -->
        <section id="objectives" class="features" name="objectives">
            <div class="container" data-aos="fade-up">



                <div class="tab-content">

                    <div class="tab-pane active show" id="tab-1">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                                <h3>Objectives</h3>
                                <p class="fst-itali">
                                    Our Placement Portal serves various objectives:
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Developing the students to meet the Industries recruitment process.
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> To motivate students to develop Technical knowledge and soft skills in
                                        terms of career planning, goal setting.
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> To produce world-class professionals who have excellent analytical skills,
                                        communication skills, team building spirit and ability to work in cross cultural
                                        environment.</li>

                                </ul>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                                <img src="assets/img/features-1.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <!-- End Tab Content -->

           <!-- testimonials video starts -->
           <div class="container">
           <h1 class="text-center mt-5" style="font-weight:800;">Testimonials</h1>
            <div class="row mt-5">
                 <div class="col-md-4">
                    <video width="390" height="280" controls>
                    <source src="video/sample1.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Your browser does not support the video tag.
</video>
                 </div>
                 <div class="col-md-4">
                 <video width="390" height="280" controls>
                    <source src="video/sample2.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                 </div>
                 <div class="col-md-4">
                 <video width="390" height="280" controls>
                    <source src="video/sample3.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                 </div>

            </div>
           </div>
           <!-- testimonials video ends -->



                    <section id="statistics" class="content-header mt-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center latest-job margin-bottom-20">
                                    <h1>Our Statistics</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-aqua">
                                        <div class="inner">
                                            <?php
                                            $sql = "SELECT * FROM job_post";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                $totalno = $result->num_rows;
                                            } else {
                                                $totalno = 0;
                                            }
                                            ?>
                                            <h3>
                                                <?php echo $totalno; ?>
                                            </h3>

                                            <p>Total Drives</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-ios-paper"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-green">
                                        <div class="inner">
                                            <?php
                                            $sql = "SELECT * FROM company WHERE active='1'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                $totalno = $result->num_rows;
                                            } else {
                                                $totalno = 0;
                                            }
                                            ?>
                                            <h3>
                                                <?php echo $totalno; ?>
                                            </h3>

                                            <p>Job Offers</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-briefcase"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-yellow">
                                        <div class="inner">
                                            <?php
                                            $sql = "SELECT * FROM users WHERE resume!=''";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                $totalno = $result->num_rows;
                                            } else {
                                                $totalno = 0;
                                            }
                                            ?>
                                            <h3>
                                                <?php echo $totalno; ?>
                                            </h3>

                                            <p>CV'S/Resume</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-ios-list"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-red">
                                        <div class="inner">
                                            <?php
                                            $sql = "SELECT * FROM users WHERE active='1'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                $totalno = $result->num_rows;
                                            } else {
                                                $totalno = 0;
                                            }
                                            ?>
                                            <h3>
                                                <?php echo $totalno; ?>
                                            </h3>

                                            <p>Daily Users</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-person-stalker"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./col -->
                            </div>
                        </div>
                    </section>
                    <!-- ======= F.A.Q Section ======= -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->

    <?php

    include 'php/footer.php';
    ?>

    <!-- End Footer -->

    <!-- TPO bot -->

    <a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>

    <button class="open-button is-size-5" onclick="openForm()" style="color:#6900FF !important;"><strong><i class="fas fa-comment-alt"></i> Chat</strong></button>

    <div class="chat-popup" id="myForm">
        <form class="form-container">
            <iframe style="border: none;border-radius: 5px;" width="280" height="390" allow="microphone;" src="https://console.dialogflow.com/api-client/demo/embedded/7dec0910-2f92-4902-849c-5c6f90718781">
            </iframe>

            <button type="button" class="button cancel is-fullwidth" style="background-color: rgba(105, 0, 255, 0.11);color:#6900FF;" onclick="closeForm()"><strong>Close</strong></button>
        </form>
    </div>

    </div>

    <!-- JS FILES -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="{% static 'js/tabs.js' %}"></script>
    <style>

    </style>
    <script>
        // ===== Scroll to Top ==== 
        $(window).scroll(function() {
            if ($(this).scrollTop() >= 50) { // If page is scrolled more than 50px
                $('#return-to-top').fadeIn(200); // Fade in the arrow
            } else {
                $('#return-to-top').fadeOut(200); // Else fade out the arrow
            }
        });
        $('#return-to-top').click(function() { // When arrow is clicked
            $('body,html').animate({
                scrollTop: 0 // Scroll to top of body
            }, 500);
        });

        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
        $("#button").click(function() {
            $('html, body').animate({
                scrollTop: $("#about").offset().top
            }, 1000);
        });
        $("#button1").click(function() {
            $('html, body').animate({
                scrollTop: $("#events").offset().top
            }, 1000);
        });
    </script>
    <script src="assets/js/main1.js"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <script src="assets/js/counter.js"></script>



    <!-- tpo bot ends -->



</body>

</html>