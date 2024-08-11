<?php
require('../configration.php');
if (isset($_POST['mydelete'])) {
    $id = $_POST['myid'];
    $image = $_POST['image'];
    //sql command
    $myQuery = "DELETE FROM products where id= $id";
    $result = mysqli_query($connection, $myQuery);


    //delete file
    unlink('../images/products/' . $image);
    $_SESSION['status'] = "تم حذف المنتج بنجاح";
    echo "<script>
    window.location.href ='list.php';
    </script>";
}
