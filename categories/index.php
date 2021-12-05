<?php include("D:/xampp/htdocs/PHPProject/sharedfiles/startingpage.php"); ?>

<?php

if (!isset($_GET['id'])) header('Location: http://localhost/PHPProject/index.php');
$cat_id = $_GET['id'];
$sql = "SELECT * FROM Categories WHERE tabbleId= '$cat_id'";
$query = mysqli_query($con, $sql);
while ($category = mysqli_fetch_array($query)) {
    $cat_name = $category['Name'];
}

?>
<?= getHead('Hardware Shop') ?>
<?php include("D:/xampp/htdocs/PHPProject/sharedfiles/category_header.php"); ?>


<div class="main-content">
    <!-- Spotlight -->
    <section class="slice slice-lg bg-primary overflow-hidden">

        <!-- Container -->
        <div class="container d-flex align-items-center">
            <div class="col">
                <div class="container pt-6">
                    <div class="row row-grid justify-content-center">
                        <div class="col-lg-5 text-center">
                            <h1 class="display-3 text-white"><?= $cat_name ?> Products</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="slice slice-lg">
        <div class="container">
            <div class="row">
                <?php
                $sql = "SELECT * FROM products WHERE CategoryId = '$cat_id'";
                $query = mysqli_query($con, $sql);
                while ($product = mysqli_fetch_array($query)) {
                    $id = $product['Id'];
                    $name = $product['Name'];
                    $price = $product['Price'];
                    $img = ($product['Img'] == "") ? "default.png" : $product['Img'];
                    ?>

                    <div class="col-lg-4">
                        <div class="card overflow-hidden" data-animate-hover="2">
                            <div class="overflow-hidden">
                                <div class="animate-this">
                                    <a href="/PHPProject/products/index.php?id=<?= $id ?>">
                                        <img alt="Image placeholder" src="/PHPProject/lib/product_images/<?= $img ?>"
                                             class="card-img-top">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title mb-2"><?= $name ?></h5>
                                <p class="text-muted mb-0"><?= $price ?> TL</p>

                            </div>
                        </div>
                    </div>

                <?php } ?>

            </div>
        </div>
    </section>

</div>



<!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
<script src="/PHPProject/lib/js/purpose.core.js"></script>
<!-- Page JS -->
<!-- Purpose JS -->
<script src="/PHPProject/lib/js/purpose.js"></script>


</body>

</html>