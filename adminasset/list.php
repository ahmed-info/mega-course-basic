<?php
require('../configration.php');
include('layout/header.php');
include('layout/navbar.php');
include('layout/sidebar.php');
if ($connection == true) {
    $myQuery = "SELECT * FROM product_view";

    $results = mysqli_query($connection, $myQuery);
}

if (isset($_GET['sort'])) {
    $min = $_GET['min'];
    $max = $_GET['max'];
    try {
        $querybetween = "SELECT * FROM `products` WHERE price BETWEEN $min AND  $max;";
        $results = mysqli_query($connection, $querybetween);
    } catch (\Exception $exx) {
        echo "<script>
        alert('يوجد خطأ');
        </script>";
        die;
    }
}




?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                    <h1 class="m-0 text-dark">قائمة المنتجات</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <section class="content">
        <div class="container-fluid">
            <?php
            if (isset($_SESSION['status'])) {
            ?>
                <div class="alert alert-success">
                    <?php
                    echo $_SESSION['status'];
                    unset($_SESSION['status']);
                    ?>
                </div>
            <?php

            }
            ?>

            <!-- Small boxes (Stat box) -->
            <div class="card">
                <form action="list.php" method="GET">
                    <input type="number" placeholder="اقل سعر" name="min">
                    <input type="number" placeholder="اعلى سعر" name="max">
                    <input type="submit" class="btn btn-danger" name="sort" value="فلترة">

                </form>
                <div class="card-header">
                    <h3 class="card-title">Bordered Table</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>القسم</th>
                                <th>الوصف</th>
                                <th>اسم المنتج</th>
                                <th>السعر</th>
                                <th>السعر بعد التخفيض</th>
                                <th>الصورة</th>
                                <th>تعديل</th>
                                <th>حذف</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php if ($results && mysqli_num_rows($results) > 0) {
                                foreach ($results as $index => $row) {
                                    //$myarray =   mysqli_fetch_array($results);
                            ?>
                                    <tr>
                                        <td><?php echo $index + 1; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['description']; ?></td>
                                        <td><?php echo $row['title']; ?></td>
                                        <td><?php echo $row['price']; ?></td>
                                        <td><?php echo $row['dicscount']; ?></td>
                                        <td>
                                            <img width="100" src="../images/products/<?php echo $row['image']; ?>" alt="">
                                        </td>
                                        <td>
                                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">تعديل</a>
                                        </td>

                                        <td>
                                            <form action="delete.php" method="post">
                                                <input type="text" name="myid" value="<?php echo $row['id']; ?>">
                                                <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
                                                <input type="submit" class="btn btn-danger" name="mydelete" value="حذف">
                                            </form>






                                        </td>

                                    </tr>
                            <?php
                                }
                            } else {
                                echo "لاتوجد بيانات";
                            }
                            ?>


                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class=" card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.row -->
            <!-- Main row -->

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php
include('layout/footer.php');
