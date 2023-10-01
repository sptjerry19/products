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

    $sql = "SELECT * FROM products WHERE id=$id";
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_array($result);
    ?>
    <form action="updateProduct.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="text" name="san_pham" value="<?php echo $data['product'] ?>">
        <input type="text" name="anh" value="<?php echo $data['img'] ?>">
        <input type="text" name="code" value="<?php echo $data['code'] ?>">
        <button>submit</button>
    </form>
</body>

</html>