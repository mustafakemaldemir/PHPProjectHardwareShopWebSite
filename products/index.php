<?php include("D:/xampp/htdocs/PHPProject/sharedfiles/startingpage.php"); ?>

<?php

if (!isset($_GET['id'])) header('Location: http://localhost/PHPProject/index.php');

$user_name_header = "LOGIN";

if (isset($_SESSION['user'])) {
    $user = get_user_info($_SESSION['user']);
    $user_name_header = $user['Name'];
}

$pro_id = $_GET['id'];
$sql = "SELECT * FROM Products WHERE Id= '$pro_id'";
$query = mysqli_query($con, $sql);
while ($product = mysqli_fetch_array($query)) {
    $pro_name = $product['Name'];
    $pro_price = $product['Price'];
    $pro_desc = $product['Description'];
    $pro_img = $product['Img'];
    $pro_cat = $product['CategoryId'];
}

?>

<?= getHead('Technology & Hardwares') ?>


<header class="header" id="header-main">

    <!-- Main navbar -->
    <nav class="navbar navbar-main navbar-expand-lg navbar-light bg-white border-bottom py-2" id="navbar-main">
        <div class="container px-lg-0">
            <!-- Logo -->
            <a class="navbar-brand mr-lg-5" href="/PHPProject/index.php">
                <img alt="Image placeholder" src="/PHPProject/lib/pc.png" id="navbar-logo" style="height: 50px;">
            </a>
            <!-- Navbar collapse trigger -->
            <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="#navbar-main-collapse"
                    aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar nav -->
            <div class="collapse navbar-collapse" id="navbar-main-collapse">
                <ul class="navbar-nav align-items-lg-center">
                    <!-- Home - Overview  -->

                    <!-- Pages menu -->
                    <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Categories</a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-arrow p-0">
                            <ul class="list-group list-group-flush">

                                <?php
                                $sql = "SELECT * FROM categories WHERE MainCategoryId = 0";
                                $query = mysqli_query($con, $sql);
                                while ($category = mysqli_fetch_array($query)) {
                                    $id = $category['tabbleId'];
                                    $name = $category['Name'];
                                    ?>
                                    <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                                        <a href="#" class="list-group-item list-group-item-action dropdown-toggle"
                                           role="button" data-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            <div class="media d-flex align-items-center">

                                                <!-- Media body -->
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-1"><?= $name ?></h6>
                                                </div>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <?php
                                            $sql2 = "SELECT * FROM categories WHERE MainCategoryId = '$id'";
                                            $query2 = mysqli_query($con, $sql2);
                                            while ($category2 = mysqli_fetch_array($query2)) {
                                                $id2 = $category2['tabbleId'];
                                                $name2 = $category2['Name'];
                                                ?>

                                                <li>
                                                    <a class="dropdown-item"
                                                       href="/PHPProject/categories/index.php?id=<?= $id2 ?>">
                                                        <?= $name2 ?>
                                                    </a>
                                                </li>

                                            <?php } ?>
                                        </ul>
                                    </li>

                                <?php } ?>

                            </ul>
                        </div>
                    </li>

                </ul>
                <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                    <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"><?= $user_name_header ?></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-arrow p-0">
                            <div class="dropdown-menu-links rounded-bottom delimiter-top p-4">

                                <a href="" class="dropdown-item">My Orders</a>
                                <a href="/PHPProject/usercontroller/profile.php"
                                   class="dropdown-item">My Account</a>
                                <a href="logout.php" class="dropdown-item">Exit</a>
                            </div>
                        </div>

                    </li>                    
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="main-content">

    <section class="slice" style="min-height: 100vh">
        <div class="container">
            <div class="row row-grid">
                <div class="col-lg-6">
                    <div data-toggle="sticky" data-sticky-offset="30">
                        <a href="/PHPProject/lib/product_images/<?= $pro_img ?>" data-fancybox>
                            <img alt="Image placeholder" src="/PHPProject/lib/product_images/<?= $pro_img ?>" class="img-fluid">
                        </a>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pl-lg-5">
                        <!-- Product title -->
                        <h5 class="h4"><?= $pro_name ?></h5>

                        <!-- Description -->
                        <div class="py-4 my-4 border-top border-bottom">
                            <h6 class="text-sm">Product Information:</h6>
                            <p class="text-sm mb-0">
                                <?= $pro_desc ?>
                            </p>
                        </div>


                        <div class="row align-items-center">
                            <div class="col-sm-6 mb-4 mb-sm-0">
                                <span class="d-block h3 mb-0"><?= $pro_price ?> TL</span>
                            </div>
                            <div class="col-sm-6 text-sm-right">
                                <!-- Add to cart -->
                                <button type="button" class="btn btn-primary btn-icon">
                                    <span class="btn-inner--icon"><i class="far fa-shopping-bag"></i></span>
                                    <span class="btn-inner--text">Add to basket</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>

<section class="slice slice-lg delimiter-top" id="sct-suggested-products">
    <div class="container">
        <div class="mb-5 text-center">
            <h3 class="h6">Recommend Products<i class="far fa-angle-down text-xs ml-3"></i></h3>
        </div>
        <div class="row">
            <?php
            $sql = "SELECT * FROM products WHERE CategoryId = '$pro_cat' AND Id <> '$pro_id'";
            $query = mysqli_query($con, $sql);
            while ($product = mysqli_fetch_array($query)) {
                $id = $product['Id'];
                $name = $product['Name'];
                $price = $product['Price'];
                $img = ($product['Img'] == "") ? "default.png" : $product['Img'];
                ?>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="card card-product">
                        <div class="card-image">
                            <a href="/PHPProject/products/index.php?id=<?= $id ?>">
                                <img alt="Image placeholder" src="/PHPProject/lib/product_images/<?= $img ?>"
                                     class="img-center img-fluid">
                            </a>
                        </div>
                        <div class="card-body text-center pt-0">
                            <h6><a href="/PHPProject/products/index.php?id=<?= $id ?>"><?= $name ?></a></h6>

                            <span class="card-price"><?= $price ?> TL</span>

                        </div>

                    </div>
                </div>

            <?php } ?>
        </div>
    </div>
</section>

</div>

</footer>
<!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
<script src="/PHPProject/lib/js/purpose.core.js"></script>
<!-- Page JS -->
<script src="/PHPProject/lib/js/fancybox.js"></script>
<script src="/PHPProject/lib/js/swiper.js"></script>
<!-- Purpose JS -->
<script src="/PHPProject/lib/js/purpose.js"></script>

</body>

</html>