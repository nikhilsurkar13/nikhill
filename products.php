<?php include "dbcon.php"; ?>
<?php
$pgquery = "SELECT * FROM `pagesmetadata` WHERE `pagename`='products.php'";
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
<title>Courses</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

   

<!--TemplateMo 569 Edu Meeting
https://templatemo.com/tm-569-edu-meeting
-->
</head>
<?php include "include/header.php" ?>

<section class="heading-page header-text" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" data-aos="fade-up">
                <!-- <h6>Here are our upcoming meetings</h6> -->
                <h2 class="carosel-text">OUR COURSES</h2>
            </div>

        </div>
    </div>
</section>

<section class="meetings-page" id="meetings">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="filters"  data-aos="fade-up">
                            <ul>
                                <li data-filter="*" class="active">All Courses</li>
                                <?php 
                    $getcatquery = "SELECT * FROM `category`";
                    $catresult = mysqli_query($conn,$getcatquery) or die("Get Category list Query is not executed.");
                    foreach($catresult as $catrec){ ?>
                                <li class="mt-3" data-filter=".<?php echo $catrec['categoryid'];?>">
                                    <?php echo $catrec['categoryname'];?></li>
                                <?php }?>


                                <!-- <li data-filter=".soon">UNICARE</li>
                  <li data-filter=".imp">EQUIPMENTS</li>
                  <li data-filter=".att">CURTAINS</li>
                  <li data-filter="">FURNITURE</li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row grid"  data-aos="fade-up">
                            <?php
                //To display all products in thumbnail.
                $query = "SELECT * FROM `product` ORDER BY 'productid' DESC";
                $result = mysqli_query($conn,$query) or die(mysqli_error($conn));

               while($row = mysqli_fetch_assoc($result)){ ?>
                            <div class="col-lg-4 templatemo-item-col all <?php echo $row['categoryid'];?>">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <!-- <div class="price">
                        <span> // echo $row['price'];?></span>
                      </div> -->
                                        <a href="products-details.php?productid=<?php echo $row['productid']; ?>">
                                            <img src="<?php echo "admin/".$row['productimage']; ?>"
                                                alt="<?php echo "admin/".$row['productimage']; ?>"
                                                style="width:100%; height:250px"></a>
                                    </div>
                                    <div class="down-content" style="width: 100%;height:120px; padding-bottom:15px">
                                        <!--<div class="date">
                                             <h6>Nov <span>12</span></h6> 
                                        </div>-->
                                        <a href="products-details.php?productid=<?php echo $row['productid']; ?>">
                                            <h4><?php echo $row['productname'];?></h4>
                                        </a>
                                        <!-- <p><?php //echo substr($row['productinfo'],0,60)."...";?></p> -->
                                    </div>
                                </div>
                            </div>
                            <?php 
                  }
                  ?>

                        </div>
                    </div>
                    <!-- <div class="col-lg-12">
              <div class="pagination">
                <ul>
                  <li><a href="#">1</a></li> 
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
              </div>
            </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
</html>

<?php include "include/footer.php" ?>