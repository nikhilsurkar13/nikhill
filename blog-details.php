<?php require "dbcon.php"; ?>
<?php include "include/header.php" ?>

<style>
.center-text-blog {
    text-align: center;
}

#resblog {
    width: 100%;
    transition: transform .2s;
}

#resblog:hover {
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    -ms-transform: scale(1.07);
    /* IE 9 */
    -webkit-transform: scale(1.07);
    /* Safari 3-8 */
    transform: scale(1.07);
}

#resblogimg {
    width: 100%;
    height: 100px;
    object-fit: cover;
}
    .card {
    margin-bottom: 20px;
    border-radius: 20px;
}

#blogsidethumbnail {
    transition: transform .2s;
}

#blogsidethumbnail:hover {
    -ms-transform: scale(1.08);
    /* IE 9 */
    -webkit-transform: scale(1.08);
    /* Safari 3-8 */
    transform: scale(1.08);
}
.bg-maroon{
    Background-color:#a42c2c;
}
@media only screen and (max-width: 600px) {
    .blog-card {
        width: 100%;
        padding: 0;
    }
}
</style>
<?php
    $id = $_REQUEST['id'];
    $blogquery = "SELECT * FROM `posts` WHERE `id`=$id";
    $blogres = mysqli_query($conn,$blogquery) or die(mysqli_error($conn));
    $blogrec = mysqli_fetch_assoc($blogres);
?>
<section class="heading-page header-text" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="carosel-text" data-aos="fade-up">BLOGS DETAIL</h2>
            </div>
        </div>
    </div>
</section>
<section class="meetings-page"> 
    <div class="container  wow fadeInUp" data-wow-delay="0.1s">
        <div class="card pt-5 pb-3">
            <div class="row" data-aos="fade-up">
                <div class="blog-card col-lg-8">
                    <div class="m-5">
                    <h1 class="mb-4 text-dark center-text-blog"><b><?php echo $blogrec['title']; ?></b></h1>
                        <img class="img-fluid w-100 rounded mb-5" src="<?php echo "admin/".$blogrec['image_url']; ?>"
                            alt="<?php echo "./admin/".$blogrec['image_url']; ?>" style="border-radius:10px;">
                        <p class="text-dark " style="text-align: justify;">
                            <?php echo $blogrec['content'];?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4" style="padding-right: 25px;">
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0 text-center text-dark center-text-blog"><b>Recent Post</b></h3>
                        </div>
                        <?php
                            $resblogquery = "SELECT * FROM posts ORDER BY date_created DESC LIMIT 5";
                            $resblogres = mysqli_query($conn,$resblogquery) or die("Recent blog query is not executed.");
                            while($resblogrec = mysqli_fetch_assoc($resblogres)){
                        ?>
                        <div id="resblog" class="d-flex rounded overflow-hidden mb-3">
                            <img id="resblogimg" class="img-fluid"
                                src="<?php echo "admin/".$resblogrec['image_url']; ?>"
                                alt="<?php echo "admin/".$resblogrec['image_url']; ?>" />
                            <a href="blog-details.php?id=<?php echo $resblogrec['id']; ?>"
                                class="h5 fw-semi-bold d-flex align-items-center bg-maroon text-light px-3 mb-0 w-100">
                                <?php echo substr($resblogrec['title'],0,30); ?>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="main-button-red mb-3">
                    <a href="blog">Back To Blog List</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "include/footer.php" ?>