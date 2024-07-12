<?php
$local = "localhost";
$user = "root";
$pass = "";
$database = "mega_db";
$connection  = mysqli_connect("localhost", "root", "", "mega_db") or die('يابة ماكدرنا نتصل بعد عمك"');

if ($connection == true) {
    echo "تم الاتصال قاعدة البيانات";
} else {
    echo "يابة ماكدرنا نتصل بعد عمك";
}
