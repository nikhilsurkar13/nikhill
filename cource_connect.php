<?php include "dbcon.php"; ?>
<?php include "include/header.php" ?>
    <section class="heading-page header-text" id="top" >
        <div class="container" style="margin-bottom: 0px;">
            <div class="row">
                <div class="col-lg-12">
                    <h2 style= "text-align: centre" class="carosel-text"  data-aos="fade-up">Contact Us</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-us" id="contact">
        <div class="container" style="margin-top: 0px;">
            <div class="row">
                <div class="col-lg-9 align-self-center">
                    <div class="row"  data-aos="fade-up">
                        <div class="col-lg-12">
                            <?php    $productid = $_REQUEST['productid'];
                    //   $query = "SELECT * FROM `product` WHERE `productname`=$productid";
                    //   $result = mysqli_query($conn, $query) or die("Product details query is not executed.");
                    //   $res = mysqli_fetch_assoc($result);
                      ?>
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
                                            <input name="cource" type="text" id="subject" placeholder="Cource...*"
                                                required=""value="<?php echo $productid; ?>">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <input name="subject" type="text" id="subject" placeholder="SUBJECT...*"
                                                required="">
                                        </fieldset>
                                    </div>

                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="Your_Message" type="text" class="form-control" id="message"
                                                placeholder="YOUR MESSAGE..." required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <input hidden name="servises" type="text" id="subject" >
                                    <div class="col-lg-12" style=" align-items: center; text-align: center; justify-content: center;">
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
                <div class="col-lg-3"  data-aos="fade-up">
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
                                <span style="word-break: break-all;">https://swadharmyog.com/</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="map-container" style="display: block; text-align: center; margin-top: 40px; margin-bottom: 40px;">
                <div class="card" style="border-radius:20px">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.36166477377!2d79.09260607430934!3d21.138000684019342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c1ac548831e3%3A0x2b7842bcf4b0e4d0!2sBharti%20Meditech!5e0!3m2!1sen!2sin!4v1703160057091!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
            </div>
        </div>
        <?php include "include/footer.php" ?>
