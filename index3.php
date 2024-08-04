<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'index.php';
$folder = "";
$files[] = glob($folder . "*.php");
//print_r($files);
if (in_array($page . ".php", $files)) {
    require($page . ".php");
} else {
    echo "not found";
}
