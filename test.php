<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>صفحة تجريبية</h1>
    <?php
    //$names = array('ahmed', 'ali', 'abass', 'mustafa', 'bishr');
    $names = "ahmed|ali|saad";


    // for ($i = 0; $i < count($names); $i++) {
    //     echo $names[$i] . "<br>";
    // }
    $newname  = str_replace("|", " ", $names);
    echo $newname;

    // foreach ($names as $item) {
    //     echo "from foreach  " . $item . "<br>";
    // }


    ?>
</body>

</html>