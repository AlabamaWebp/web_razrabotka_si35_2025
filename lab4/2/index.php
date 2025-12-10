<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?php
        $num1 = 13;
        $num2 = 5;
        $summ = $num1 + $num2;
        $chet = ($summ % 2 === 0) ? 'чётная' : 'нечётная';
        print ("Сумма чисел " . $num1 . " и " . $num2 . " равна " . $summ . ", и она " . $chet);
        ?>
    </h1>
</body>

</html>