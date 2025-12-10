<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Список студентов на комиссию</h1>
    <?php
    $mass = array(
        0 => array(
            "name" => "Бахтиёрджон",
            "age" => "20",
            "city" => "Душанбе",
        ),
        1 => array(
            "name" => "Азизджон",
            "age" => "19",
            "city" => "Душанбе2",
        ),
        2 => array(
            "name" => "Наполеон",
            "age" => "21",
            "city" => "Махачкала",
        ),
    );

    echo ("<ul>");
    foreach ($mass as $key => $value) {
        echo ("<li>");
        echo ("<ul>");
        foreach ($value as $k => $v) {
            echo ("<li>");
            echo ($k . ": " . $v);
            echo ("</li>");
        }
        echo ("</ul>");
        echo ("</li>");
        echo ("<br>");
    }
    echo ("</ul>");
    ?>

</body>

</html>