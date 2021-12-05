<?php

$user_name_header = "LOGIN";
if (isset($_SESSION['user'])) {
    $user = get_user_info($_SESSION['user']);
    $user_name_header = $user['Name'];
}

?>

<header class="header header-transparent" id="header-main">

    <!-- Main navbar -->
    <nav class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-dark bg-dark" id="navbar-main">
        <div class="container px-lg-0">
            <!-- Logo -->
            <a class="navbar-brand mr-lg-5" href="/PHPProject/index.php">
                <img alt="Image placeholder" src="/PHPProject/lib/hardware-shop.png" id="navbar-logo" style="height: 50px;">
            </a>
            <!-- Navbar collapse trigger -->
            <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="#navbar-main-collapse"
                    aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar nav -->
            <div class="collapse navbar-collapse" id="navbar-main-collapse">
                <ul class="navbar-nav align-items-lg-center">                    
                    <!-- Pages menu -->
                    <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                           aria-haspopup="true"
                           aria-expanded="false">Pages</a>
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
                                           role="button" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                            <div class="media d-flex align-items-center">

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
                           aria-haspopup="true" aria-expanded="false">  <?= $user_name_header ?>  </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-arrow p-0">
                            <div class="dropdown-menu-links rounded-bottom delimiter-top p-4">
                                <?php
                                if (!isset($_SESSION['user'])) {
                                    echo '<a href="/PHPProject/usercontroller/login.php" class="dropdown-item">LOGIN</a>';
                                    echo '<a href="/PHPProject/usercontroller/register.php" class="dropdown-item">REGISTER</a>';
                                    echo '<div class="dropdown-divider"></div>';
                                } elseif ($_SESSION["role"] == 'Admin') {
                                    echo '<a href="/PHPProject/admin/index.php" class="dropdown-item">Admin Panel</a>';
                                    echo '<div class="dropdown-divider"></div>';
                                }


                                ?>
                                <a href="../../docs/getting-started/installation.html" class="dropdown-item">MY Orders</a>
                                <a href="/PHPProject/usercontroller/profile.php"
                                   class="dropdown-item">My Account</a>
                                <a href="/PHPProject/usercontroller/logout.php" class="dropdown-item">Exit</a>
                            </div>
                        </div>
            </div>
            </li>

            <li class="nav-item mr-0">
                <a href="#" target="_blank"
                   class="nav-link d-lg-none">Go to your shop box</a>
                <a href="#" target="_blank"
                   class="btn btn-sm btn-white btn-icon rounded-pill d-none d-lg-inline-flex" data-toggle="tooltip"
                   data-placement="left" title="Shop box">
                    <span class="btn-inner--icon"><i class="far fa-shopping-cart"></i></span>
                    <span class="btn-inner--text">Go to your shop box</span>
                </a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
</header>
