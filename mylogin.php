<?php
require("configration.php");
$email = "";
$password = "";
$emailError = "";
$passwordError = "";
if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // validation 
    if (empty($email)) {
        $emailError = "حقل الايميل مطلوب";
    }

    if (empty($email)) {
        $passwordError = "حقل الباسورد مطلوب";
    }
    if (strlen($password) < 6) {
        $passwordError = "الباسورد اكثر من 6 احرف";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = "اكتب الايميل بشكل صحيح";
    }
    if ($passwordError == "" && $emailError == "") {
        $query = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($connection, $query);

        if ($result == true) {
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

            $checkpass = password_verify($password, $row['password']);
            if ($checkpass) {
                $_SESSION['login'] = 'login';
                //setcookie("email", $email, time() + 60 * 1);
                //echo "<script>alert('الباسورد صح');</script>";
                header("Location: dashboard.php");
            } else {
                echo "<script>alert('الباسورد غلط');</script>";
            }
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
    <link rel="stylesheet" href="mylogin.css">
</head>

<body>
    <div class="login">
        <img src="profile_pic.png" alt="">
        <h1>Login Page</h1>
        <form action="mylogin.php" method="post">
            <label for="email">Email</label>
            <input type="email" id="email" value="<?php echo $email ?>" name="email" placeholder="Enter your email" class="emm">
            <div style="color:red">
                <?php echo  $emailError;  ?>
            </div>

            <label for="password">Password</label>
            <input type="password" value="<?php echo $password; ?>" name="password" id="password" placeholder="Enter your password" class="pass">

            <div style="color:red">
                <?php echo  $passwordError;  ?>
            </div>
            <input type="submit" name="login" value="Login">
            <br>
            <a href="#" target="_blank" class="FP">forget password</a>
            <a href="myregister.php" target="_blank" class="CNA">Create a new account</a>

        </form>
    </div>
</body>

</html>