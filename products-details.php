<?php require("dbcon.php"); ?>
<?php include "include/header.php" ?>
<style>
.fit-image {
    height: 100%;
    position: relative;
    overflow: hidden;
}

.img-fluid {
    cursor: pointer;
}

/* Styles for the image popup overlay */
.popup-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    /* Adjust transparency here */
    justify-content: center;
    align-items: center;
    z-index: 999;
}

.popup-content {
    max-width: 80%;
    max-height: 80%;
    overflow: auto;
    background-color: #fff;
    /* Background color for the popup content */
    border-radius: 10px;
    padding: 20px;
    text-align: center;
}

.popup-content img {
    max-width: 100%;
    max-height: 100%;
    border-radius: 10px;
}
</style>
<section class="heading-page header-text" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="carosel-text" data-aos="fade-up">Cource details</h2>
            </div>
        </div>
    </div>
</section>
<section class="meetings-page">
    <div class="container  wow fadeInUp" data-wow-delay="0.1s">
        <div class="card pt-5 pb-3">
            <div class="row" data-aos="fade-up">
                <div class="blog-card col-lg-12">
                    <?php
                      $productid = $_REQUEST['productid'];
                      $query = "SELECT * FROM `product` WHERE `productid`=$productid";
                      $result = mysqli_query($conn, $query) or die("Product details query is not executed.");
                      $res = mysqli_fetch_assoc($result);
                      $imagePath = "admin/" . $res['productimage'];
                      ?>
                    <div class="card-body">
                        <div class="row">
                            <h4 class="text-center mb-3">
                                <?php echo $res['productname']; ?>
                            </h4>
                            <div class="col-lg-6">
                                <a href="javascript:void(0);" onclick="openImagePopup('<?php echo $imagePath; ?>')">
                                    <img class="img-fluid fit-image" src="<?php echo $imagePath; ?>"
                                        alt="<?php echo $imagePath; ?>" style="border-radius: 10px;">
                                </a>
                                <!-- Popup Overlay -->
                                <div class="popup-overlay" id="imagePopup" onclick="closeImagePopup()">
                                    <div class="popup-content">
                                        <span class="close-btn" onclick="closeImagePopup()">&times;</span>
                                        <img src="" id="popupImage" class="img-fluid">
                                    </div>
                                </div>

                                <script>
                                function openImagePopup(imageSrc) {
                                    var popup = document.getElementById('imagePopup');
                                    var popupImage = document.getElementById('popupImage');

                                    popupImage.src = imageSrc;
                                    popup.style.display = 'flex';
                                }

                                function closeImagePopup() {
                                    var popup = document.getElementById('imagePopup');
                                    popup.style.display = 'none';
                                }
                                </script>

                            </div>
                            <div class="col-lg-6">
                                <p>
                                    <?php echo $res['productinfo']; ?>
                                </p>
                            </div>
                        </div>
                        <div class="main-button-red mb-3">
                            <a href="cource_connect.php?productid=<?php echo $res['productname']; ?>">Connect with Cource </a>
                        </div>
                        <div class="main-button-red mb-3">
                            <a href="products">Back To Cource List</a>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include "include/footer.php" ?>