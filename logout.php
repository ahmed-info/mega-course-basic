<?php
session_start();
session_destroy();


// if ($_COOKIE['email']) {
//     setcookie("email", null, time() - 60);
// }
header('Location: login.php');
