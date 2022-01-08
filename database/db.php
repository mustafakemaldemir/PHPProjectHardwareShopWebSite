<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "phphardwareshop";

$con = mysqli_connect($host, $user, $password, $db);
mysqli_set_charset($con, "utf8");
if (mysqli_connect_errno()) {
    die("Database connection error: " . mysqli_connect_error());
}


function check_user_login($user_email, $user_password)
{
    global $con;
    $sql = " SELECT * FROM users WHERE Email = '$user_email' AND Password = '$user_password' ";
    $query = mysqli_query($con, $sql);
    $user = mysqli_fetch_array($query);
    return (isset($user) && !empty($user));
}

function register_user($user_email, $user_password)
{
    global $con;
    $sql = "INSERT INTO users (Email, Password, RoleId) VALUES ('$user_email', '$user_password', 2)";
    return mysqli_query($con, $sql);
}

function update_user_info($user_name, $user_surname, $user_address, $user_email)
{
    global $con;
    $sql = "UPDATE users SET Name='$user_name', Surname='$user_surname', Address='$user_address' WHERE Email='$user_email'";
    return mysqli_query($con, $sql);
}

function get_user_info($user_email)
{
    global $con;
    $sql = "SELECT Name, Surname, Address FROM users WHERE Email = '$user_email'";
    $query = mysqli_query($con, $sql);
    $user_info = mysqli_fetch_array($query);
    if (isset($user_info) && !empty($user_info))
        return $user_info;
    return null;
}

function update_password($user_email, $old_password, $new_password)
{
    global $con;
    $sql = "SELECT * FROM users WHERE Email = '$user_email' AND Password = '$old_password'";
    $query = mysqli_query($con, $sql);
    $user = mysqli_fetch_array($query);
    if (isset($user) && !empty($user)) {
        $sql = "UPDATE users SET Password='$new_password' WHERE Email='$user_email'";
        return mysqli_query($con, $sql);
    }

}

function get_user_role($user_email)
{
    global $con;
    $sql = "SELECT RoleId FROM users WHERE Email = '$user_email'";
    $query = mysqli_query($con, $sql);
    $user_role = mysqli_fetch_array($query);
    if (isset($user_role) && !empty($user_role))
        return $user_role['RoleId'];
    return null;
}

function update_product_info($product_id, $product_name, $product_price, $product_category)
{
    global $con;
    $sql = "UPDATE products SET Name='$product_name', Price='$product_price', CategoryId='$product_category' WHERE Id='$product_id'";
    return mysqli_query($con, $sql);
}

function add_product($product_name, $product_price, $product_description, $product_category, $product_img = "")
{
    global $con;
    $sql = "INSERT INTO products (Name, Price, Description, CategoryId, Img) VALUES ('$product_name', '$product_price', '$product_description', '$product_category', '$product_img')";
    return mysqli_query($con, $sql);
}

function add_category($category_name, $main_category_id = 0)
{
    global $con;
    $sql = "INSERT INTO categories (Name, MainCategoryId) VALUES ('$category_name', '$main_category_id')";
    return mysqli_query($con, $sql);
}