<?php
include('configration.php');

if (!isset($_SESSION['login'])) {

    echo "<script>
    
    alert('سجل الدخول اولا');
    window.location.href = 'login.php';
    </script>";
    header('Location: login.php');
}
if (isset($_POST['insert'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $insertQuery = "INSERT INTO products(title,description,price,dicscount) VALUES('$title','$description',$price,$discount)";

    $result = mysqli_query($connection, $insertQuery);
    if ($result) {
        //echo "تم حفظ البيانات";
        echo "<script>
        alert('تم حفظ البيانات بنجاح');
        window.location.href = 'dashboard.php';
        </script>";

        //header("Location: dashboard.php");
    }
};

?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset=" UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">

    <title>Document</title>
</head>

<body>
    <h1>اضافة منتج</h1>
    <a href="index2.php">تسجيل الخروج</a>
    <form action="insert.php" method="POST">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <label for="title">اسم المنتج</label>
                    <input type="text" class="form-control" name="title" id="title">
                </div>

                <div class="col-md-6">
                    <label for="description">تفاصيل المنتج</label>

                    <input type="text" class="form-control" name="description" id="description">
                </div>

                <div class="col-md-6">
                    <label for="price">السعر</label>

                    <input type="number" class="form-control" name="price" id="price">
                </div>
                <div class="col-md-6">
                    <label for="discount">سعر التخفيض</label>

                    <input type="number" class="form-control" name="discount" id="discount">
                </div>

            </div>
            <button type="submit" class="btn btn-success mt-3" name="insert">اضافة منتج</button>
        </div>
    </form>
</body>

</html>