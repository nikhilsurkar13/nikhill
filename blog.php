<?php include "dbcon.php"; ?>
<?php
$pgquery = "SELECT * FROM `pagesmetadata` WHERE `pagename`='blog.php'";
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
    <title>blog</title>

</head>
<?php include "include/header.php" ?>

<style>
.card {
    margin-bottom: 20px;
    border-radius: 20px;
}

.card-text {
    width: auto;
    height: 100px;
    overflow: hidden;
    text-overflow: ellipsis;
}
.card-text h2{
    overflow: hidden;
    text-overflow: ellipsis;
}
</style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<section class="heading-page header-text" id="top">
    <div class="container">
        <div class="row">
         
            <div class="col-lg-12">
                <!-- <h6>Here are our upcoming meetings</h6> -->
                <h2 class="carosel-text" data-aos="fade-up">All BLOGS</h2>
            </div>
        </div>
    </div>
</section>
<!-- container starts -->
<section class="meetings-page" id="meetings">
    <div class="container container-flex">
        <div class="row"  data-aos="fade-up">
            <?php 
                    $query = "SELECT * FROM `posts` ORDER BY id desc";
                    $result = mysqli_query($conn,$query) or die("Query is not executed.");
                    while($row = mysqli_fetch_assoc($result)){
                ?>
            <div class="col-md-4">

                <div class="card">
                    <a href="blog-details.php?id=<?php echo $row['id'];?>"><img src="<?php echo "admin/".$row['image_url'];?>" alt="<?php echo "admin/".$row['image_url'];?>" class="card-img-top" style="width: auto; height:200px;border-radius: 20px;" /></a>
                    <div class="card-body">
                        <div class="card-text">
                            <p class="text-dark" style=" font-family: 'Poppins', sans-serif;">
                                 <b><?php echo $row['title'];?></b></p>
                            <p class="text-dark mt-2"><?php echo $row['date_created']; ?> </p>
                            
                        </div>

                        <div class="main-button-red">
                            <a href="blog-details.php?id=<?php echo $row['id'];?>">Continue Reading</a>
                        </div>

                    </div>
                </div>
            </div>
            <?php } ?>


        </div>
    </div>
    <!-- container ends -->
    </html>

    <?php include "include/footer.php" ?>