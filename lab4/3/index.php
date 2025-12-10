<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function printNumbers($start, $end)
    {
        for ($i = $start; $i <= $end; $i++) {
            echo "<p>";
            echo ($i);
            echo "</p>";
        }
    }
    printNumbers(1, 10)
        ?>

</body>

</html>