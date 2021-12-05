<?php

//if (!isset($_SESSION["user"]) || $_SESSION["role"] != 'Admin') {
//    header('Location: http://localhost/index.php');
//}
if (isset($_GET['id']) && isset($_GET['name']) && isset($_GET['price']) && isset($_GET['category_id'])) {
    include("D:/xampp/htdocs/PHPProject/database/db.php");
    if (update_product_info($_GET['id'], $_GET['name'], $_GET['price'], $_GET['category_id'])) {
        header('Location: http://localhost/PHPProject/admin/products.php');
    }
    die("Bir hata oluştu");
}

