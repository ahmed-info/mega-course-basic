<?php
session_start();
if (!isset($_SESSION['login'])) {

    echo "<script>
    alert('سجل الدخول اولا');
    window.location.href = 'login.php';
    </script>";
    header('Location: login.php');
}
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
    <h1>صفحة لوحة التحكم</h1>
    <a href="index2.php">تسجيل الخروج</a>
    <div class="container">
        <div class="row">
            <div class="alert alert-success">

                <a href="insert.php" class="btn btn-primary">اضافة منتج</a>
            </div>

        </div>
    </div>
</body>

</html>