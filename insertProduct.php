<?php

$product = $_POST['san_pham'];
$img = $_POST['anh'];
$code = $_POST['code'];

include "connect.php";

$sql = "INSERT INTO `products`(`product`, `img`, `code`) VALUES ('$product','$img','$code')";
$result = mysqli_query($connect, $sql);
