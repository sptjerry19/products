<?php

$product = $_POST['san_pham'];
$img = $_FILES['anh'];
$code = $_POST['code'];
$price = $_POST['price'];
$manufacture_id = $_POST['manufacture_id'];

$folder = 'photos/';
$file_extension = explode('.', $img['name'])[1];
$path_file = $folder . time() . '.' . $file_extension;
move_uploaded_file($img["tmp_name"], $path_file);

include "connect.php";

$sql = "INSERT INTO `products`(`product`, `img`, `code`, `price`, `manufacture_id`) VALUES ('$product','$path_file','$code', '$price', '$manufacture_id')";
$result = mysqli_query($connect, $sql);
