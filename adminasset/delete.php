<?php
require('../configration.php');
if (isset($_POST['mydelete'])) {
    $id = $_POST['myid'];
    $image = $_POST['image'];
    $myQuery = "DELETE FROM products where id= $id";
    $result = mysqli_query($connection, $myQuery);
    unlink('../images/products/' . $image);
    $_SESSION['status'] = "تم حذف المنتج بنجاح";
    echo "<script>
    window.location.href ='list.php';</script>";
}
