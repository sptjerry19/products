<?php

$id = $_GET['id'];
include "connect.php";

$sql = "DELETE FROM products WHERE id=$id";
$result = mysqli_query($connect, $sql);
