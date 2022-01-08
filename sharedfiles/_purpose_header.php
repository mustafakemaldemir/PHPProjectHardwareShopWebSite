<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$user_name_header = "LOGIN";
if (isset($_SESSION['user'])) {
    include("D:/xampp/htdocs/PHPProject/database/db.php");
    $user = get_user_info($_SESSION['user']);
    $user_name_header = $user['Name'];
}

function getHead($title)
{

    return ' 
     <!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Webpixels">
        <title>' . $title . ' | Hardware Shop</title>
        <!-- Favicon -->
        <link rel="icon" href="/PHPProject/lib/favicon.png" type="image/png">
        <!-- Font Awesome 5 -->
        <link rel="stylesheet" href="/PHPProject/lib/font-awesome/css/font-awesome.css">
        <!--    <link type="text/css" href="/PHPProject/lib/css/select2.css" rel="stylesheet">-->
        <!--    <link type="text/css" href="/PHPProject/lib/css/flatpickr.css" rel="stylesheet">-->
        <!-- Purpose CSS -->
        <link rel="stylesheet" href="/PHPProject/lib/css/purpose.css" id="stylesheet">
        <link rel="stylesheet" href="/PHPProject/lib/css/nav.css">
        </head>
        ';
}

function getHeader()
{
    global $user_name_header;
    return '
<body>
<header class="header header-transparent" id="header-main">
    <!-- Main navbar -->
    <nav class="navbar navbar-main navbar-expand-lg navbar-dark bg-dark" id="navbar-main">
        <div class="container px-lg-0">
            <!-- Logo -->
            <a class="navbar-brand mr-lg-5" href="/PHPProject/index.php">
                <img alt="hardware-shop" src="/PHPProject/lib/hardware-shop.png" id="navbar-logo" style="height: 70px;">
            </a>
            <!-- Navbar collapse trigger -->
            <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="#navbar-main-collapse"
                    aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar nav -->
            <div class="collapse navbar-collapse" id="navbar-main-collapse">
                
                <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                    <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">' . $user_name_header . '</a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-arrow p-0">
                            <div class="dropdown-menu-links rounded-bottom delimiter-top p-4">

                                <a href="" class="dropdown-item">My Orders</a>
                                <a href="/PHPProject/usercontroller/profile.php"
                                   class="dropdown-item">My Account</a>
                                <a href="logout.php" class="dropdown-item">Exit</a>
                            </div>
                        </div>
            </div>

            </li>

            <li class="nav-item mr-0">
                <a href="#" target="_blank"
                   class="nav-link d-lg-none">Shopping Basket</a>
                <a href="#" target="_blank"
                   class="btn btn-sm btn-white btn-icon rounded-pill d-none d-lg-inline-flex" data-toggle="tooltip"
                   data-placement="left" title="Sepetinize Gidin">
                    <span class="btn-inner--icon"><i class="far fa-shopping-cart"></i></span>
                    <span class="btn-inner--text">Go to Shopping Basket</span>
                </a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
</header>';
}

?>


