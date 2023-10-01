<?php
// Xử lý bất kỳ logic nào bạn muốn ở đây
include "connect.php";
$sql = "SELECT * FROM products";
$result = mysqli_query($connect, $sql);
?>

<table border="1" width="100%">
    <tr>
        <th>Ma</th>
        <th>San pham</th>
        <th>anh</th>
        <th>code</th>
        <th>edit</th>
        <th>delete</th>
    </tr>
    <?php foreach ($result as $san_pham) { ?>
        <tr>
            <td><?php echo $san_pham['id'] ?></td>
            <td> <a href="show.php?id=<?php echo $san_pham['id'] ?>"><?php echo $san_pham['product'] ?></a></td>
            <td><?php echo $san_pham['img'] ?></td>
            <td><?php echo $san_pham['code'] ?></td>
            <td><a href="updateForm.php?id=<?php echo $san_pham['id'] ?>">edit</a></td>
            <td><a href="delete.php?id=<?php echo $san_pham['id'] ?>">delete</a></td>
        </tr>
    <?php } ?>
</table>