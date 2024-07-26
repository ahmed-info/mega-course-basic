<?php
require('../configration.php');
if (isset($_POST['myinsert'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $image = $_FILES['myimage']['name'];  //cake.jpg

    $extension =  pathinfo($image, PATHINFO_EXTENSION);

    $accept = array('jpg', 'gif', 'jpeg', 'mp4', 'png');

    if (!in_array($extension, $accept)) {
        echo "<script>
        alert('اختر الملف من نوع صورة');
        window.location.href = '../index.php';
        </script>";
        header('Location: ../index.php');
    } else {
        //echo "هذا الامتداد غير مسموح به";
        //              insert into اسم الجدول (column1,column2,column3,column4,) value('value1,...')
        $insertQuery = "INSERT INTO products(title,description,price,dicscount,image) VALUES('$title','$description',$price,$discount,'$image')";

        $insertFORDatabase = mysqli_query($connection, $insertQuery);
        if ($insertFORDatabase) {
            //رفع الصورة على السيرفر
            move_uploaded_file($_FILES['myimage']['tmp_name'], '../images/products/' . $image);
            //echo "تم حفظ البيانات";
            echo "<script>
        alert('تم حفظ البيانات بنجاح');
        window.location.href = 'dashboard.php';
        </script>";

            //header("Location: dashboard.php");
        }
    }
    die;
};

include('layout/header.php');
include('layout/navbar.php');

?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php include('layout/sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">اضافة منتج</h1>
                </div><!-- /.col -->
                <form action="insert.php" method="POST" enctype="multipart/form-data">
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

                            <div class="col-md-6">
                                <label for="discount">صورة المنتج</label>

                                <input type="file" class="form-control" name="myimage" id="discount">
                            </div>

                        </div>
                        <button type="submit" class="btn btn-success mt-3" name="myinsert">اضافة منتج</button>
                    </div>
                </form>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->

            <!-- /.row -->
            <!-- Main row -->

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include('layout/footer.php'); ?>