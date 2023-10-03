<?php

$id = $_POST['id'];
$product = $_POST['san_pham'];
$img = $_POST['anh'];
$code = $_POST['code'];

include "connect.php";

$sql = "UPDATE `products` SET `product`='$product',`img`='$img',`code`='$code' WHERE id=$id";
$result = mysqli_query($connect, $sql);
