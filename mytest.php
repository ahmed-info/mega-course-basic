<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <select name="" id="">
        <option value="">1</option>
        <option value="">2</option>
        <option value="" selected>3</option>
    </select>
    <?php

    $index = 1;
    while ($index < 10) {
        $index++;
        echo $index . "<br>";
    }
    ?>
</body>

</html>