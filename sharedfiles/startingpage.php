<?php
if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}
include("D:/xampp/htdocs/PHPProject/database/db.php");

function getHead($title)
{

return '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Webpixels">
    <title>' . $title . ' | Hardware-Shop</title>

    <!-- Favicon -->
    <link rel="icon" href="/PHPProject/lib/favicon.png" type="image/png">

    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="/PHPProject/lib/font-awesome/css/font-awesome.css"><!-- Page CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Shadows+Into+Light">
    <link rel="stylesheet" href="/PHPProject/lib/css/animate.css">    
    <link rel="stylesheet" href="/PHPProject/lib/css/swiper.css">
    <link rel="stylesheet" href="/PHPProject/lib/css/fancybox.css">

    <!-- Purpose CSS -->
    <link rel="stylesheet" href="/PHPProject/lib/css/purpose.css" id="stylesheet">
    <link rel="stylesheet" href="/PHPProject/lib/css/nav.css">
    
</head>

<body class="bg-dark bg-noise">';
}


?>