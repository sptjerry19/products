<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $id = $_GET['id'];
    include "connect.php";

    $sql = "SELECT `product`, `img` FROM products WHERE id=$id";

    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_array($result);
    ?>

    <h1><?php echo $data['product'] ?></h1>
    <img src="<?php echo $data['img'] ?>" alt="">
</body>

</html>