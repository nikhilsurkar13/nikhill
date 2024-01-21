<?php require("dbcon.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <meta name="keywords"
        content="medical equipment, hospital equipment, medical supplies, hospital supplies, healthcare equipment, healthcare supplies, medical devices, hospital devices, surgical instruments, patient monitors">
    <!-- Cononical tag -->
    <link rel="canonical" href="https://www.example.com/preferred-page" />
    <!-- End of Cononical tag -->

    <!-- Og Tags -->
    <!-- For Facebook og meta tags -->
    <meta property="og:url"
        content="http://www.nytimes.com/2015/02/19/arts/international/when-great-minds-dont-think-alike.html" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="When Great Minds Don’t Think Alike" />
    <meta property="og:description" content="How much does culture influence creative thinking?" />
    <meta property="og:image"
        content="http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg" />
    <!-- End of Facebook og meta tags -->
    <!-- For twitter og meta tags -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@flickr" />
    <meta name="twitter:title" content="Small Island Developing States Photo Submission" />
    <meta name="twitter:description" content="View the album on Flickr." />
    <meta name="twitter:image" content="https://farm6.staticflickr.com/5510/14338202952_93595258ff_z.jpg" />
    <!-- End of twitter og meta tags -->
    <!-- End of Og Tags -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <title>Service Details</title>
    <style>
    .fa {
        margin: 2px;
    }
    </style>

</head>
<?php include "include/header.php";
?>


<section class="heading-page header-text" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- <h6>Get all details</h6> -->
                <h2 class="carosel-text" data-aos="fade-up">Service Details</h2>
            </div>
        </div>
    </div>
</section>

<section class="meetings-page" id="meetings">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row" data-aos="fade-up">
                    <?php 
            $serviceid = $_REQUEST['serviceid'];
            $fsquery = "SELECT * FROM `services` WHERE `serviceid`=$serviceid";
            $fsres = mysqli_query($conn,$fsquery) or die(mysqli_error($conn));
            $fsrec = mysqli_fetch_assoc($fsres);
          ?>
                    <div class="col-lg-12">
                        <div class="meeting-single-item">
                            <div class="thumb">
                                <!-- <div class="price">
                    
                  </div>
                  <div class="date">
                    
                  </div> -->
                                <a href="services-details.php?serviceid=<?php echo $serviceid ?>">
                                    <img src="<?php echo "admin/".$fsrec['imageurl']; ?>"
                                        alt="<?php echo "admin/".$fsrec['imageurl']; ?>"
                                        style="width:100%; height:500px;" />
                                </a>
                            </div>
                            <div class="down-content">
                                <a href="services-details.php?serviceid=<?php echo $serviceid ?>">
                                    <h4 data-aos="fade-up"><?php echo $fsrec['serviceheading']; ?></h4>
                                </a>
                                <p data-aos="fade-up"><?php echo $fsrec['serviceinfo']; ?></p>
                                <div data-aos="fade-up" class="col-lg-12">
                                    <div class="col-lg-12">
                                        <div class="main-button-red">
                                            <a href="services_connect.php?productid=<?php echo $fsrec['serviceheading']; ?>">Connect with Service </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="main-button-red">
                                            <a href="services.php">Back To Service ist</a>
                                        </div>
                                    </div>
                                    <div class="share">
                                        <h5>Share:</h5>
                                        <a class="fa fa-facebook" href="#"></a>
                                        <a class="fa fa-twitter" href="#"></a>
                                        <a class="fa fa-linkedin" href="#"></a>
                                        <a class="fa fa-behance" href="#"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>


</section>

</html>
<?php include "include/footer.php" ?>