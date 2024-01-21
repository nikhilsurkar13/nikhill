<?php include "dbcon.php"; ?>
<?php include "include/header.php"; ?>
<section class="section main-banner" id="top" data-section="section1">
    <div id="bg-video">
        <img src="assets/images/backgroundshop.jpg" alt="assets/images/backgroundshop.jpg"/>
    </div>
    <div class="video-overlay header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="caption">
                        <h2 class="carosel-text">Welcome to SWADHARM YOG </h2>
                        <p class="carosel-text-2">
                            SWADHARM YOG mission is to improve healthcare outcomes and enhance patient care by
                            providing Integrative Medicine in Mental Health and lifestyle disorders.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="services mb-2" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style=" margin-top: 20px;">
                <div class="owl-service-item owl-carousel">
                    <div class="item">
                        <div class="icon">
                            <img src="assets/images/service-icon-01.png" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Best Courses</h4>
                            <p>We provides Integrative Medicine in Mental Health  and lifestyle disorders BEST Courses. </p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon">
                            <img src="assets/images/service-icon-02.png" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Best Services</h4>
                            <p>Experience unparalleled satisfaction with our best-in-class services, tailored to meet
                                your every need and exceed expectations.</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon">
                            <img src="assets/images/service-icon-03.png" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Best Doctors</h4>
                            <p>Our medical team comprises highly skilled professionals, dedicated to providing
                                exceptional care and expertise."</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon">
                            <img src="assets/images/service-icon-02.png" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Best Team</h4>
                            <p>Our success is fueled by the energy of a talented team, working collaboratively to
                                achieve excellence in every endeavor.</p>
                        </div>
                    </div>

                    <!-- <div class="item">
                        <div class="icon">

                            <img src="assets/images/service-icon-03.png" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Best Networking</h4>
                            <p>Our success is fueled by the energy of a dedicated and talented team, working to achieve
                                excellence in every endeavor</p>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </div>
</section>
<section class="our-facts mob">
    <div class="container">
        <div class="row dept align-items-center mt-5 " data-aos="fade-up">
            <div style="padding-top:25px;" class="col-md-6 pl-md-5 order-md-last mb-5 mt-3">
                <h1 style="color: white; " class="mb-2 mt-3" data-aos="fade-up"><b>About Us</b></h1>
                <p style="color: white;" data-aos="fade-up">Established in 2023, SWADHARM YOG is a global
                    healthcare leader, evolving from a trusted Doctors of
                    medical  in Vidarbha. With over 1 years of experience , the company specializes in diverse
                    healthcare courses, adhering to ISO certifications and emphasizing
                    innovation through a dedicated R&D team.
                </p>
                <div class="main-button-red mt-3"><a href="about">Read More</a></div>
            </div>
            <div class="col-md-6 img">
                <a href="" target="_blank"><img src="assets/images/Swadharm.jpg" class="about-img mt-3" alt=""></a>
            </div>
        </div>
    </div>
</section>
<section class="upcoming-meetings pt-5" id="meetings">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading" data-aos="fade-up">
                    <h2>Our Courses</h2>
                </div>
            </div>
            <div class="row" data-aos="fade-up" style=" margin-right: 0px;  margin-left: 0px;">
                <!-- product query -->
                <?php
                $selproducts = "SELECT * FROM `product`  Order by `productid` DESC limit 6";
                $productresult = mysqli_query($conn, $selproducts) or die("Get product list query is not executed.");
                while ($getproductrec = mysqli_fetch_assoc($productresult)) {
                    ?>
                    <div class="col-md-4">
                        <div class="meeting-item">
                            <div class="thumb">
                                <a href="products-details.php?productid=<?php echo $getproductrec['productid']; ?>">
                                    <img src="<?php echo "admin/" . $getproductrec['productimage']; ?>"
                                        alt="<?php echo "admin/" . $getproductrec['productimage']; ?>"
                                        style="width:100%; height:300px;" /></a>
                            </div>
                            <div class="down-content" style="width:100%; height:150px; padding-bottom: 15px;  align-items: center; text-align: center; justify-content: center;">
                                <a href="products-details.php?productid=<?php echo $getproductrec['productid']; ?>">
                                    <h4>
                                        <?php echo $getproductrec['productname']; ?>
                                    </h4>
                                </a>
                                <p class="m-0">
                                    <?php //echo substr($getproductrec['productinfo'], 0, 75) . "..."; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>
</section>
    <section class="our-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <!---<h2>A Few Facts About Our University</h2>-->
                        </div>
                        <div class="col-lg-6">
                            <div class="row" data-aos="fade-up">
                                <div class="col-12">
                                    <div class="count-area-content">
                                        <div class="count-digit">95</div>
                                        <div class="count-title">Recover Patient </div>
                                    </div>
                                </div>
                                <!--<div class="col-12">-->
                                <!--    <div class="count-area-content">-->
                                <!--        <div class="count-digit">300</div>-->
                                <!--        <div class="count-title">Happy Client</div>-->
                                <!--    </div>-->
                                <!--</div>-->
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row" data-aos="fade-up">
                                <div class="col-12">
                                    <div class="count-area-content new-students">
                                        <div class="count-digit">12</div>
                                        <div class="count-title">Professional Doctor Team</div>
                                    </div>
                                </div>
                                <!--<div class="col-12">-->
                                <!--    <div class="count-area-content">-->
                                <!--        <div class="count-digit">110</div>-->
                                <!--        <div class="count-title">Awards Winning</div>-->
                                <!--    </div>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center" data-aos="fade-up">
                    <div class="card about-video">
                        <div class="card about-video">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/vVKtsVUYMx0?si=A6w8xqdTx_fqNl-J&autoplay=0&showinfo=0"  class="about-video" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                   </div>
                </div>
             </div>
          </div>
        </div>
    </section>
<section class="upcoming-meetings pt-5" id="meetings">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading" data-aos="fade-up">
                    <h2>Our Services</h2>
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <!-- Services query -->
                <?php 
                $getsersql = "SELECT * FROM services  Order by serviceid DESC limit 6";
                $getserres = mysqli_query($conn,$getsersql) or die(mysqli_error($conn));
                while($serrec = mysqli_fetch_assoc($getserres)){
                ?>
                <div class="col-md-4">
                    <div class="meeting-item">
                        <div class="thumb">
                            <a href="services-details.php?serviceid=<?php echo $serrec['serviceid']; ?>">
                                <img src="<?php echo "admin/".$serrec['imageurl']; ?>"
                                    alt="<?php echo "admin/".$serrec['imageurl']; ?>"
                                    style="width:100%; height:300px;" /></a>
                        </div>
                        <div class="down-content" style="width:100%; height:120px; padding-bottom: 15px;">
                            <a href="services-details.php?serviceid=<?php echo $serrec['serviceid']; ?>">
                                <h4><?php echo $serrec['serviceheading'] ;?></h4>
                            </a>

                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- End of Services Query -->
            </div>
        </div>
    </div>
</section>
<section class="our-courses" id="courses">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" data-aos="fade-up">
                <div class="section-heading mt-2 text-center">
                    <h2>Our Blogs</h2>
                </div>
            </div>
            <div class="col-lg-12" data-aos="fade-up">
                <div class="owl-courses-item owl-carousel">
                    <!-- Displaying blog content -->
                    <?php
                    $blogselquery = "SELECT * FROM `posts` Order by id DESC";
                    $bloddispresult = mysqli_query($conn, $blogselquery) or die("display blog thumbnail query is not executed");
                    while ($blogrec = mysqli_fetch_assoc($bloddispresult)) {
                        ?>
                        <div class="item">
                            <div class="card blog-item" style="border-radius: 20px;">
                                <a href="blog-details.php?id=<?php echo $blogrec['id']; ?>">
                                    <img src="<?php echo "admin/" . $blogrec['image_url']; ?>"
                                        alt="<?php echo "admin/" . $blogrec['image_url']; ?>"
                                        style="width: 100%; height:300px; border-radius: 20px 20px 0px 0px ;" /></a>
                                <div class="down-content" style="width:100%; height:100px; border-radius: 20px;">
                                    <a href="blog-details.php?id=<?php echo $blogrec['id']; ?>">
                                        <h4>
                                            <?php echo substr($blogrec['title'], 0, 150) . "..."; ?>
                                        </h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="contact-us" id="contact">
    <div class="container" style="margin-bottom:40px;">
        <div class="row" data-aos="fade-up">
            <div class="col-lg-9 align-self-center">
                <div class="row">
                    <div class="col-lg-12">
                        <form id="contact" action="contact_us_action.php" method="post">
                            <div class="row">
                                <div class="col-lg-12" style=" align-items: center; text-align: center; justify-content: center;">
                                    <h2>Let's get in touch</h2>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <input name="First_Name" type="text" id="name" placeholder="First Name...*"
                                            required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <input name="Last_Name" type="text" id="name" placeholder="Last Name...*"
                                            required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <input name="mono" type="text" id="name" placeholder="Mo. No. ...*"
                                            required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <input name="Email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                            placeholder="YOUR EMAIL...*" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <input name="subject" type="text" id="subject" placeholder="SUBJECT...*"
                                            required="">
                                    </fieldset>
                                </div>
                                <input hidden name="servises" type="text" id="subject" >
                                    <input hidden name="cource" type="text" id="subject" >
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="Your_Message" type="text" class="form-control" id="message"
                                            placeholder="YOUR MESSAGE..." required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12" style="align-items: center; text-align: center; justify-content: center;">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="button">SEND MESSAGE
                                            NOW</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="right-info">
                    <ul style="list-style-type: none; padding: 0; max-width: 200px;">
                        <li style="margin-bottom: 15px;">
                            <h6 style="margin-bottom: 5px;">Phone Number</h6>
                            <span>(+91) 9689247252</span>
                        </li>
                        <li style="margin-bottom: 15px;">
                            <h6 style="margin-bottom: 5px;">Email Address</h6>
                            <span style="word-break: break-all;">swadharmyog@gmail.com</span>
                        </li>
                        <li style="margin-bottom: 15px;">
                            <h6 style="margin-bottom: 5px;">Street Address</h6>
                            <span>Wardha, Maharashtra, 440034.</span>
                        </li>
                        <li>
                            <h6 style="margin-bottom: 5px;">Website URL</h6>
                            <span style="word-break: break-all;"><a href="https://swadharmyog.com">https://swadharmyog.com</a></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</html>
<?php include "include/footer.php" ?>