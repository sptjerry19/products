<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require "connect.php";
    $sql = "SELECT * FROM manufactures";
    $result = mysqli_query($connect, $sql);
    ?>
    <form action="insertProduct.php" method="post" enctype="multipart/form-data">
        <input type="text" name="san_pham" placeholder="San pham: ............">
        </br>
        <input type="file" name="anh">
        </br>
        <input type="text" name="code" placeholder="ma code: ............">
        </br>
        <input type="number" name="price" placeholder="pice: ......">
        </br>
        <select name="manufacture_id">
            <?php foreach ($result as $manufacture) { ?>
            <option value="<?php echo $manufacture['id'] ?>"><?php echo $manufacture['name'] ?></option>
            <?php } ?>
        </select>
        </br>
        <button>submit</button>
    </form>
</body>

</html>