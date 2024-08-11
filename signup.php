<?php
include('configration.php');

//INSERT INTO tablename(column1,column2,column3) Values (val1,val2,val3);
//insert INTO  users(username, email,password) VALUES('bishr','bishr@gmail.com','147258');


if (isset($_POST['save'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $passEncryption =  password_hash($password, PASSWORD_DEFAULT);

    $query = "SELECT * FROM users  WHERE email= '$email'";

    $myresult = mysqli_query($connection, $query);
    //$rows =   mysqli_num_rows($myresult);
    $myarry =  mysqli_fetch_array($myresult);
    if (count($myarry) > 0) {
        echo "<script>alert('الحساب موجود بالفعل');</script>";
        //header('Location: signup.php');
    } else {
        $insertQuery = "INSERT INTO users(usename,email,password) VALUES('$username','$email','$passEncryption')";

        $result = mysqli_query($connection, $insertQuery);
        if ($result == true) {
            //echo "تم حفظ البيانات";
            echo "<script>alert('تم حفظ البيانات بنجاح');</script>";

            header("Location: dashboard.php");
        }
    }
}
