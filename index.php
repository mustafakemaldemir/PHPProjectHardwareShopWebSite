<?php include("D:/xampp/htdocs/PHPProject/sharedfiles/startingpage.php"); ?>

<?= getHead('Hardware Shop') ?>

<?php include("D:/xampp/htdocs/PHPProject/sharedfiles/header.php"); ?>

<div class="main-content">
    <!-- Header (v3) -->
    <section class="slice slice-lg bg-gradient-primary" data-offset-top="#header-main">
        <div class="container py-6 py-lg-0 d-flex align-items-center position-relative zindex-100">
            <div class="col">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 align-self-center">
                        <div class="text-center text-lg-left pb-5">
                            <h1 class="h1 text-white mb-4">
                                Hardware store has these

                                <span class="text-info typed" id="type-example-1"

                                    data-type-this="main-boards, display cards, processors, solid state disks, 
                                                    hard disk drives, voice cards, cooler systems, power supplies,
                                                    compter accossories, mouse, headsets, monitors, network products">                                                    
                                </span>
                                <br>
                            </h1>

                        </div>
                    </div>

                    <div class="col-lg-6 ml-lg-auto align-self-end">

                        <div class="position-relative" style="z-index: 10;">
                            <img alt="Image placeholder" src="/PHPProject/lib/pc.png" class="img-fluid img-center">
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="shape-container" data-shape-position="bottom">

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1600 220" preserveAspectRatio="none"
                 class="ie-shape-wave-3">
                <path d="M918.34,99.41C388.23,343.6,47.11,117.12,0,87.54V220H1600V87.54C1378.72-76.71,1077.32,27.41,918.34,99.41Z"></path>
            </svg>

        </div>
        
    </section>

    <!-- Call to action (v2) -->
    <section class="slice slice-lg" style="min-height: 100vh">
        <div class="container">
            <div class="text-center">

                <h1 class="pb-7">Son eklenen ürünleri kaçirmayin</h1>

                <div class="row">
                    <?php

                        $sql = "SELECT * FROM products ORDER BY Id DESC";
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
        </div>
    </section>
    <!-- Features (v13) -->
    <section class="slice slice-lg bg-gradient-primary" style="min-height: 100vh">
        <?php
        $sql = "SELECT tabbleId, Name FROM categories WHERE MainCategoryId <> 0 ORDER BY RAND() LIMIT 1";
        $query = mysqli_query($con, $sql);
        while ($cat = mysqli_fetch_array($query)) 
        {
            $cat_id = $cat['tabbleId'];
            $cat_name = $cat['Name'];
        }
        ?>
        <div class="container">

            <div class="mb-5 text-center">
                <h3 class="text-white mt-4"><?= $cat_name ?> Kategorisine Göz Atin</h3>

            </div>

            <div class="row">
                <?php

                    $sql2 = "SELECT * FROM products WHERE CategoryId = '$cat_id'";
                    $query2 = mysqli_query($con, $sql2);
                    while ($product = mysqli_fetch_array($query2)) {
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
<?php include("D:/xampp/htdocs/PHPProject/sharedfiles/footer.php"); ?>
<!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
<script src="/PHPProject/lib/js/purpose.core.js"></script>
<!-- Page JS -->
<script src="/PHPProject/lib/js/swiper.js"></script>
<script src="/PHPProject/lib/js/fancybox.js"></script>
<script src="/PHPProject/lib/js/typed.js"></script>
<!-- Purpose JS -->
<script src="/PHPProject/lib/js/purpose.js"></script>

</body>

</html>