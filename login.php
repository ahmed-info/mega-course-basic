<?php
require('configration.php');
if (isset($_POST['login'])) {

    $email = $_POST['email'];

    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($connection, $query);
    if ($result == true) {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $checkpass = password_verify($password, $row['password']);
        if ($checkpass) {
            $_SESSION['login'] = 'login';
            header("Location: dashboard.php");
        } else {
            echo "<script>alert('الباسورد غلط');</script>";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body dir="rtl">

    <form action="login.php" method="POST">
        <label for=" email">email</label>
        <input type="email" id="email" name="email">
        <br>
        <label for="password">password</label>
        <input type="password" id="password" name="password">
        <input type="submit" name="login" value="دخول">
    </form>
</body>

</html>