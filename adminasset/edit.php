<?php
require('../configration.php');
include('layout/header.php');
include('layout/navbar.php');
include('layout/sidebar.php');

if (isset($_POST['myupdate'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $image = $_FILES['myimage']['name'];
    $before = $_POST['before'];



    if ($image == '') {
        $filename = $before;
    } else {
        $filename = $image;
    }


    $myQuery = "UPDATE products SET title='$title', description = '$description', price=$price ,dicscount= $discount,image= '$filename' WHERE id =$id";

    $result =  mysqli_query($connection, $myQuery);
    if ($result) {
        move_uploaded_file($_FILES['myimage']['tmp_name'], '../images/products/' . $filename);
        unlink('../images/products/' . $before);
        $_SESSION['status'] = "تم تعديل البيانات بنجاح";
        echo "<script>
        window.location.href = 'list.php';
        </script>";
    }
}

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">تعديل منتج</h1>
                </div><!-- /.col -->
                <?php if (isset($_GET['id'])) {
                    $id =  $_GET['id'];
                    $myQuery =  "SELECT * FROM products WHERE id = $id";
                    $results =   mysqli_query($connection, $myQuery);
                    if ($results) {
                        $row =   mysqli_fetch_array($results);
                ?>
                        <form action="edit.php" method="POST" enctype="multipart/form-data">
                            <div class="container">
                                <div class="row">
                                    <input type="hidden" class="form-control" name="id" id="title" value="<?php echo $row['id']; ?>">

                                    <div class="col-md-6">
                                        <label for="title">اسم المنتج</label>
                                        <input type="text" class="form-control" name="title" id="title" value="<?php echo $row['title']; ?>">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="description">تفاصيل المنتج</label>

                                        <input type="text" class="form-control" name="description" id="description" value="<?php echo $row['description']; ?>">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="price">السعر</label>

                                        <input type="number" class="form-control" name="price" id="price" value="<?php echo $row['price']; ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="discount">سعر التخفيض</label>

                                        <input type="number" class="form-control" name="discount" id="discount" value="<?php echo $row['dicscount']; ?>">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="discount">صورة المنتج</label>
                                        <input type="text" name="before" value="<?php echo $row['image']; ?>">
                                        <img width="150" src="../images/products/<?php echo $row['image']; ?>" alt="">
                                        <input type="text" class="form-control" name="before" value="<?php echo $row['image']; ?>">
                                        <input type="file" class="form-control" name="myimage" id="discount">
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-success mt-3" name="myupdate">تعديل منتج</button>
                            </div>
                        </form>
                <?php
                    }
                } ?>

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