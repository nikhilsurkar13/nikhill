<?php include "dbcon.php"; ?>
<?php
    $pgquery = "SELECT * FROM `pagesmetadata` WHERE `pagename`='services.php'";
    $pgres = mysqli_query($conn,$pgquery) or die(mysqli_error($conn));
    $pgrec = mysqli_fetch_assoc($pgres);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $pgrec['meta_description']; ?>">
    <meta name="author" content="TemplateMo">
    <meta name="keywords" content="<?php echo $pgrec['meta_keywords'];?>">
    <!-- Cononical tag -->
    <link rel="canonical" href="<?php echo $pgrec['canonicalurl'];?>" />
    <!-- End of Cononical tag -->
    
    <!-- Og Tags -->
    <!-- For Facebook og meta tags -->
    <meta property="og:url" content="<?php echo $pgrec['ogurl'];?>" />
    <meta property="og:type" content="<?php echo $pgrec['ogtype'];?>" />
    <meta property="og:title" content="<?php echo $pgrec['ogtitle'];?>" />
    <meta property="og:description" content="<?php echo $pgrec['ogdescription'];?>" />
    <meta property="og:image" content="<?php echo $pgrec['ogimages'];?>" />
    <!-- End of Facebook og meta tags -->
    <!-- For twitter og meta tags -->
    <meta name="twitter:card" content="<?php echo $pgrec['ogtcard'];?>" />
    <meta name="twitter:site" content="<?php echo $pgrec['ogtsite'];?>" />
    <meta name="twitter:title" content="<?php echo $pgrec['ogttitle'];?>" />
    <meta name="twitter:description" content="<?php echo $pgrec['ogtdescription'];?>" />
    <meta name="twitter:image" content="<?php echo $pgrec['ogtimages'];?>" />
    <!-- End of twitter og meta tags -->
    <!-- End of Og Tags -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <title>Services</title>
</head>
<?php include "include/header.php" ?>

<section class="heading-page header-text" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="carosel-text"  data-aos="fade-up">OUR SERVICES</h2>
            </div>
        </div>
    </div>
</section>

<section class="meetings-page" id="meetings">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row"  data-aos="fade-up">
                    <div class="col-lg-12">
                        <div class="row grid">
                        <?php
                            //To display all Services in thumbnail.
                                $serquery = "SELECT * FROM `services` ORDER BY 'serviceid' DESC";
                                $serresult = mysqli_query($conn,$serquery) or die(mysqli_error($conn));
                                while($serrows = mysqli_fetch_assoc($serresult)){ 
                        ?>
                            <div class="col-lg-4 templatemo-item-col all soon mb-5">
                                <div class="meeting-item">
                                    <div class="thumb">
                                    <a href="services-details.php?serviceid=<?php echo $serrows['serviceid']; ?>">
                                            <img src="<?php echo "admin/".$serrows['imageurl']; ?>"
                                                alt="<?php echo "admin/".$serrows['imageurl']; ?>"style="width: 100%; height:300px;"/>
                                            </a>
                                    </div>
                                    <div class="down-content" style="width:100%; height: 120px;">
                                        <a href="services-details.php?serviceid=<?php echo $serrows['serviceid']; ?>">
                                            <h4><?php echo $serrows['serviceheading'];?></h4>
                                        </a>
                                        <!-- <p class="m-0">Client-tailored 3D Designs for ICU and Theatres.</p> -->
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            
                        </div>
                    </div>
                </div>
            </div>

</section>
</html>
<?php include "include/footer.php" ?>